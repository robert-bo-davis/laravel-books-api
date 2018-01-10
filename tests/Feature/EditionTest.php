<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Author;
use App\Book;
use App\Edition;

class EditionTest extends TestCase
{

    /**
     * Setup our reusable variables
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();

        // We need a book to create editions, and we need an author
        // to create books. So we set both of those up here for reuse.
        $this->author = Author::create($this->fakeAuthorArray());
        $this->book   = Book::create($this->fakeBookArray($this->author));
    }

    /**
     * Test that editions are created correctly
     *
     * @return void
     */
    public function testEditionCreation()
    {
        $payload = $this->fakeEditionArray($this->book);

        $response = $this->json('POST', '/api/editions', $payload)
            ->assertStatus(201)
            ->assertJson([
                'type'   => 'edition',
                'number' => $payload['number'],
                'title'  => $payload['title'],
                'isbn'   => $payload['isbn'],
                'book'   => $this->getBookArray(),
            ]);

        Edition::find($response->getData()->id)->delete();
    }
    /**
     * Test that edition creation requests fail if they are missing required fields
     *
     * @return void
     */
    public function testEditionCreationValidateRequired()
    {
        $this->json('POST', '/api/editions', [])
            ->assertStatus(422)
            ->assertJson([
                "message" => "The given data was invalid.",
                "errors"  => [
                    "title"   => ["The title field is required."],
                    "book_id" => ["The book id field is required."],
                ],
            ]);
    }

    /**
     * Test that edition requests fail if they are improperly formatted
     *
     * @return void
     */
    public function testEditionCreationValidateFormat()
    {
        $payload = [
            'number'  => $this->faker->word,
            'title'   => $this->faker->sentence(256),
            'isbn'    => $this->faker->word,
            'book_id' => $this->faker->word,
        ];

        $this->json('POST', '/api/editions', $payload)
            ->assertStatus(422)
            ->assertJson([
                "message" => "The given data was invalid.",
                "errors"  => [
                    "number"  => ["The number must be an integer."],
                    "title"   => ["The title may not be greater than 150 characters."],
                    "isbn"    => ["The isbn format is invalid."],
                    "book_id" => ["The book id must be an integer."],
                ],
            ]);
    }

    /**
     * Test that edition requests fail if isbn is an improper length
     *
     * @return void
     */
    public function testEditionCreationValidateIsdnLength()
    {
        $payload = $this->fakeEditionArray($this->book);

        $payload['isbn'] = '00123456' . $this->faker->randomNumber(4, true);

        $this->json('POST', '/api/editions', $payload)
            ->assertStatus(422)
            ->assertJson([
                "message" => "The given data was invalid.",
                "errors"  => [
                    "isbn" => ["The isbn format is invalid."],
                ],
            ]);
    }

    /**
     * Test that editions are updated correctly
     *
     * @return void
     */
    public function testEditionUpdate()
    {
        $edition = Edition::create($this->fakeEditionArray($this->book));

        $payload = $this->fakeEditionArray($this->book);

        $this->json(
            'PUT',
            '/api/editions/' . $edition->id,
            $payload
        )
            ->assertStatus(200)
            ->assertJson([
                'type'   => 'edition',
                'number' => $payload['number'],
                'title'  => $payload['title'],
                'isbn'   => $payload['isbn'],
                'book'   => $this->getBookArray(),
            ]);

        $edition->delete();
    }

    /**
     * Test that edition update requests fail if they are missing required fields
     *
     * @return void
     */
    public function testEditionUpdateValidateRequired()
    {
        $edition = Edition::create($this->fakeEditionArray($this->book));

        $this->json(
            'PUT',
            '/api/editions/' . $edition->id,
            []
        )
            ->assertStatus(422)
            ->assertJson([
                "message" => "The given data was invalid.",
                "errors"  => [
                    "title"     => ["The title field is required."],
                    "book_id" => ["The book id field is required."],
                ]
            ]);
    }

    /**
     * Test that edition update requests fail if they are improperly formatted
     *
     * @return void
     */
    public function testEditionUpdateValidateFormat()
    {
        $edition = Edition::create($this->fakeEditionArray($this->book));

        $payload = [
            'number'  => $this->faker->word,
            'title'   => $this->faker->sentence(256),
            'isbn'    => $this->faker->word,
            'book_id' => $this->faker->word,
        ];

        $this->json(
            'PUT',
            '/api/editions/' . $edition->id,
            $payload
        )
            ->assertStatus(422)
            ->assertJson([
                "message" => "The given data was invalid.",
                "errors"  => [
                    "number" => ["The number must be an integer."],
                    "title"     => ["The title may not be greater than 150 characters."],
                    "isbn" => ["The isbn format is invalid."],
                    "book_id" => ["The book id must be an integer."],
                ],
            ]);
    }

    /**
     * Test that editions are deleted correctly
     *
     * @return void
     */
    public function testEditionDelete()
    {
        $edition = Edition::create($this->fakeEditionArray($this->book));

        $this->json('DELETE', '/api/editions/' . $edition->id)
            ->assertStatus(204);
    }

    /**
     * Test that editions are listed correctly
     *
     * @return void
     */
    public function testEditionList()
    {
        $editions = [];

        for ($i = 0; $i < 2; $i++) {
            $editions []= Edition::create($this->fakeEditionArray($this->book));
        }

        /**
         * TODO: Improve edition list test
         * assertJsonFragment() doesn't work as expected.
         * The method sorts the arrays alphabetically.
         * since the $edition_list array is missing some
         * keys like "created_at" and "id" the order of
         * the fragments don't match exactly and the test
         * fails. There is an open issue related to this at:
         * https://github.com/laravel/framework/issues/22215
         *
         * assertJson() won't work because nested ordered arrays
         * must match exactly.
         */

        $request = $this->json('GET', '/api/editions')
            ->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    '*' => array_merge(
                        $this->edition_structure,
                        [
                            'book' => array_merge(
                                $this->book_structure,
                                ['author' => $this->author_structure]
                            ),
                        ]
                    )
                ],
            ]);

        foreach ($editions as $edition) {
            $edition->delete();
        }
    }

    /**
     * Test that editions are shown correctly
     *
     * @return void
     */
    public function testEditionShow()
    {
        $edition = Edition::create($this->fakeEditionArray($this->book));

        $this->json('GET', '/api/editions/' . $edition->id)
            ->assertStatus(200)
            ->assertJsonStructure(array_merge(
                $this->edition_structure,
                [
                    'book' => array_merge(
                        $this->book_structure,
                        ['author' => $this->author_structure]
                    ),
                ]
            ))
            ->assertJson([
                'type'   => 'edition',
                'id'     => $edition->id,
                'number' => $edition->number,
                'title'  => $edition->title,
                'isbn'   => $edition->isbn,
                'book'   => $this->getBookArray(),
            ]);

        $edition->delete();
    }
}

<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Author;
use App\Book;

class BookTest extends TestCase
{

    /**
     * Our reusable book object
     *
     * @var App\Author
     */
    protected $author;

    /**
     * Setup our reusable variables
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();

        // We need an author to create books,
        // so we create a reusable author here.
        $this->author = Author::create($this->fakeAuthorArray());
    }

    /**
     * Test that books are created correctly
     *
     * @return void
     */
    public function testBookCreation()
    {
        $payload = $this->fakeBookArray($this->author);

        $response = $this->json('POST', '/api/books', $payload)
            ->assertStatus(201)
            ->assertJson([
                'type'     => 'book',
                'title'    => $payload['title'],
                'subtitle' => $payload['subtitle'],
                'author'   => $this->getAuthorArray(),
            ]);

        Book::find($response->getData()->id)->delete();
    }

    /**
     * Test that book creation requests fail
     * if they are missing required fields
     *
     * @return void
     */
    public function testBookCreationValidateRequired()
    {
        $this->json('POST', '/api/books', [])
            ->assertStatus(422)
            ->assertJson([
                "message" => "The given data was invalid.",
                "errors"  => [
                    "title"     => ["The title field is required."],
                    "author_id" => ["The author id field is required."],
                ],
            ]);
    }

    /**
     * Test that book requests fail if they
     * are improperly formatted
     *
     * @return void
     */
    public function testBookCreationValidateFormat()
    {
        $payload = [
            'title'     => $this->faker->sentence(301),
            'subtitle'  => $this->faker->sentence(501),
            'author_id' => $this->faker->word,
        ];

        $response = $this->json('POST', '/api/books', $payload)
            ->assertStatus(422)
            ->assertJson([
                "message" => "The given data was invalid.",
                "errors"  => [
                    "title"     => [
                        "The title may not be greater than 300 characters."
                    ],
                    "subtitle"  => [
                        "The subtitle may not be greater than 500 characters."
                    ],
                    "author_id" => [
                        "The author id must be an integer."
                    ],
                ],
            ]);
    }

    /**
     * Test that books are updated correctly
     *
     * @return void
     */
    public function testBookUpdate()
    {
        $book = Book::create($this->fakeBookArray($this->author));

        $payload = $this->fakeBookArray($this->author);

        $this->json(
            'PUT',
            '/api/books/' . $book->id,
            $payload
        )
            ->assertStatus(200)
            ->assertJson([
                'type'     => 'book',
                'title'    => $payload['title'],
                'subtitle' => $payload['subtitle'],
                'author'   => $this->getAuthorArray(),
            ]);

        $book->delete();
    }

    /**
     * Test that book update requests fail if they
     * are missing required fields
     *
     * @return void
     */
    public function testBookUpdateValidateRequired()
    {
        $book = Book::create($this->fakeBookArray($this->author));

        $this->json(
            'PUT',
            '/api/books/' . $book->id,
            []
        )
            ->assertStatus(422)
            ->assertJson([
                "message" => "The given data was invalid.",
                "errors"  => [
                    "title"     => ["The title field is required."],
                    "author_id" => ["The author id field is required."],
                ],
            ]);

        $book->delete();
    }

    /**
     * Test that book update requests fail if they are
     * improperly formatted
     *
     * @return void
     */
    public function testBookUpdateValidateFormat()
    {
        $book = Book::create($this->fakeBookArray($this->author));

        $payload = [
            'title'     => $this->faker->sentence(301),
            'subtitle'  => $this->faker->sentence(501),
            'author_id' => $this->faker->word,
        ];

        $this->json(
            'PUT',
            '/api/books/' . $book->id,
            $payload
        )
            ->assertStatus(422)
            ->assertJson([
                "message" => "The given data was invalid.",
                "errors"  => [
                    "title"     => [
                        "The title may not be greater than 300 characters."
                    ],
                    "subtitle"  => [
                        "The subtitle may not be greater than 500 characters."
                    ],
                    "author_id" => [
                        "The author id must be an integer."
                    ],
                ],
            ]);

        $book->delete();
    }

    /**
     * Test that books are deleted correctly
     *
     * @return void
     */
    public function testBookDelete()
    {
        $book = Book::create($this->fakeBookArray($this->author));

        $this->json('DELETE', '/api/books/' . $book->id)
            ->assertStatus(204);
    }

    /**
     * Test that books are listed correctly
     *
     * @return void
     */
    public function testBookList()
    {
        $books = [];

        for ($i = 0; $i < 2; $i++) {
            $books []= Book::create($this->fakeBookArray($this->author));
        }

        /**
         * TODO: Improve book list test
         * assertJsonFragment() doesn't work as expected.
         * The method sorts the arrays alphabetically.
         * Since the $book_structure array is missing some
         * keys like "created_at" and "id" the order of
         * the fragments don't match exactly and the test
         * fails. There is an open issue related to this at:
         * https://github.com/laravel/framework/issues/22215
         *
         * assertJson() won't work because nested ordered arrays
         * must match exactly.
         */

        $request = $this->json('GET', '/api/books')
            ->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    '*' => array_merge(
                        $this->book_structure,
                        ['author' => $this->author_structure]
                    ),
                ],
            ]);

        foreach ($books as $book) {
            $book->delete();
        }
    }

    /**
     * Test that books are shown correctly
     *
     * @return void
     */
    public function testBookShow()
    {
        $book = Book::create($this->fakeBookArray($this->author));

        $this->json('GET', '/api/books/' . $book->id)
            ->assertStatus(200)
            ->assertJsonStructure(array_merge(
                $this->book_structure,
                ['author' => $this->author_structure]
            ))
            ->assertJson([
                'type'     => 'book',
                'id'       => $book->id,
                'title'    => $book->title,
                'subtitle' => $book->subtitle,
                'author'   => $this->getAuthorArray(),
            ]);

        $book->delete();
    }
}

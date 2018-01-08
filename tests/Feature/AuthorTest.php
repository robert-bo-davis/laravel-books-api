<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Author;

class AuthorTest extends TestCase
{

    /**
     * Test that authors are created correctly
     *
     * @return void
     */
    public function testAuthorCreation()
    {
        $payload = $this->fakeAuthorArray();

        $response = $this->json('POST', '/api/authors', $payload)
            ->assertStatus(201)
            ->assertJson($payload);

        Author::find($response->getData()->id)->delete();
    }

    /**
     * Test that author creation requests fail if they don't contain an author_id
     *
     * @return void
     */
    public function testAuthorCreationValidateRequired()
    {
        $this->json('POST', '/api/authors', [])
            ->assertStatus(422)
            ->assertJson([
                "message" => "The given data was invalid.",
                "errors"  => [
                    "first_name" => ["The first name field is required."],
                    "last_name"  => ["The last name field is required."],
                ]
            ]);
    }

    /**
     * Test that author requests fail if author is not an int
     *
     * @return void
     */
    public function testAuthorCreationValidateFormat()
    {
        $payload = [
            'first_name'  => $this->faker->sentence(51),
            'middle_name' => $this->faker->sentence(51),
            'last_name'   => $this->faker->sentence(51),
            'birth_year'  => $this->faker->word,
            'death_year'  => $this->faker->word,
        ];

        $response = $this->json('POST', '/api/authors', $payload)
            ->assertStatus(422)
            ->assertJson([
                "message" => "The given data was invalid.",
                "errors"  => [
                    "first_name"  => [
                        "The first name may not be greater than 50 characters."
                    ],
                    "middle_name" => [
                        "The middle name may not be greater than 50 characters."
                    ],
                    "last_name"   => [
                        "The last name may not be greater than 50 characters."
                    ],
                    "birth_year"  => [
                        "The birth year does not match the format Y."
                    ],
                    "death_year"  => [
                        "The death year does not match the format Y."
                    ],
                ],
            ]);
    }

    /**
     * Test that authors are updated correctly
     *
     * @return void
     */
    public function testAuthorUpdate()
    {
        $author = Author::create($this->fakeAuthorArray());

        $payload = $this->fakeAuthorArray();

        $response = $this->json('PUT', '/api/authors/' . $author->id, $payload)
            ->assertStatus(200)
            ->assertJson($payload);

        $author->delete();
    }

    /**
     * Test that author update requests fail if they are missing required fields
     *
     * @return void
     */
    public function testAuthorUpdateValidateRequired()
    {
        $author = Author::create($this->fakeAuthorArray());

        $this->json(
            'PUT',
            '/api/authors/' . $author->id,
            []
        )
            ->assertStatus(422)
            ->assertJson([
                "message" => "The given data was invalid.",
                "errors"  => [
                    "first_name" => [
                        "The first name field is required."
                    ],
                    "last_name"  => [
                        "The last name field is required."
                    ],
                ],
            ]);

        $author->delete();
    }

    /**
     * Test that author update requests fail if they are improperly formatted
     *
     * @return void
     */
    public function testAuthorUpdateValidateFormat()
    {
        $author = Author::create($this->fakeAuthorArray());

        $payload = [
            'first_name'  => $this->faker->sentence(51),
            'middle_name' => $this->faker->sentence(51),
            'last_name'   => $this->faker->sentence(51),
            'birth_year'  => $this->faker->word,
            'death_year'  => $this->faker->word,
        ];

        $this->json(
            'PUT',
            '/api/authors/' . $author->id,
            $payload
        )
            ->assertStatus(422)
            ->assertJson([
                "message" => "The given data was invalid.",
                "errors"  => [
                    "first_name"  => [
                        "The first name may not be greater than 50 characters."
                    ],
                    "middle_name" => [
                        "The middle name may not be greater than 50 characters."
                    ],
                    "last_name"   => [
                        "The last name may not be greater than 50 characters."
                    ],
                    "birth_year" => [
                        "The birth year does not match the format Y."
                    ],
                    "death_year" => [
                        "The death year does not match the format Y."
                    ],
                ],
            ]);

        $author->delete();
    }

    /**
     * Test that authors are deleted correctly
     *
     * @return void
     */
    public function testAuthorDelete()
    {
        $author = Author::create($this->fakeAuthorArray());

        $this->json('DELETE', '/api/authors/' . $author->id)
            ->assertStatus(204);
    }

    /**
     * Test that authors are listed correctly
     *
     * @return void
     */
    public function testAuthorList()
    {
        $authors = [];

        for ($i = 0; $i < 2; $i++) {
            $authors []= Author::create($this->fakeAuthorArray());
        }

        /**
          * TODO: Improve author list test
          * assertJsonFragment() doesn't work as expected.
          * The method sorts the arrays alphabetically.
          * since the $author_structure array is missing some
          * keys like "created_at" and "id" the order of
          * the fragments don't match exactly and the test
          * fails. There is an open issue related to this at:
          * https://github.com/laravel/framework/issues/22215
          *
          * assertJson() won't work because nested ordered arrays
          * must match exactly.
          */

        $this->json('GET', '/api/authors')
            ->assertStatus(200)
            ->assertJsonStructure([
                '*' => $this->author_structure,
            ]);

        foreach ($authors as $author) {
            $author->delete();
        }
    }

    /**
     * Test that authors are shown correctly
     *
     * @return void
     */
    public function testAuthorShow()
    {
        $author = Author::create($this->fakeAuthorArray());

        $this->json('GET', '/api/authors/' . $author->id)
            ->assertStatus(200)
            ->assertJsonStructure($this->author_structure)
            ->assertJson($author->toArray());

        $author->delete();
    }
}

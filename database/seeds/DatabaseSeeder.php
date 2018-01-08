<?php

use Illuminate\Database\Seeder;

use App\Author;
use App\Book;
use App\Edition;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        // Create 2 authors
        for ($ia = 0; $ia < 2; $ia++) {
            $author = new Author();

            $author->first_name  = $faker->firstName;
            $author->middle_name = $faker->firstName;
            $author->last_name   = $faker->lastName;
            $author->birth_year  = $faker->year;
            $author->death_year  = $faker->year;
            $author->save();

            // For each author create 3 books
            for ($ib = 0; $ib < 3; $ib++) {
                $book = new Book();

                $book->title = $faker->sentence;
                $book->subtitle = $faker->sentence;
                $book->author()->associate($author);
                $book->save();

                // For each book create 1 editions
                for ($ie = 0; $ie < 1; $ie++) {
                    $edition = new edition();

                    $edition->number = $faker->numberBetween(1, 25);
                    $edition->title  = $faker->word;
                    $edition->isbn   = '00123456' . $faker->randomNumber(5, true);
                    $edition->book()->associate($book);
                    $edition->save();
                }
            }
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use Faker\Factory as Faker;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $books = Book::all();

        foreach ($books as $book) {
            $numReviews = $faker->numberBetween(1, 5);

            for ($i = 0; $i < $numReviews; $i++) {
                $book->reviews()->create([
                    'title' => $faker->sentence,
                    'description' => $faker->paragraph,
                ]);
            }
        }
    }
}

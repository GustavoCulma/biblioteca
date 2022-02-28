<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors =Author::factory(10)->create();
        foreach ($authors as $author) {
            $author->first();
            $books=Book::factory(20)->create();
            foreach ($books as $book) {
                $book->authors()->attach($author->id);
            }
        }
    }
}

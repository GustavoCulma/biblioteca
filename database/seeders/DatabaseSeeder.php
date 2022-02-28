<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('books');
        Storage::deleteDirectory('authors');
        Storage::deleteDirectory('editorials');
        Storage::makeDirectory('books');
        Storage::makeDirectory('authors');
        Storage::makeDirectory('editorials');
        $this->call(EditorialSeeder::class);
        $this->call(BookSeeder::class);
    }
}

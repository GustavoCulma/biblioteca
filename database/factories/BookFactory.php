<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\Editorial;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence(1);
        $editorial = Editorial::all()->random();
        
        return [
            'title'=> $title,
            'synopsis' => $this->faker->text(),
            'n_pages' => $this->faker->randomElement([100,200,300]),
            'editorial_id' => $editorial->id,
            'slug'=> Str::slug($title),
            'image'=> 'books/'.$this->faker->image('public/storage/books', 640, 480, null, false)
        ];
    }
}

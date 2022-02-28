<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->sentence(1);
        return [
            'name' => $name,
            'surnames' =>$this->faker->sentence(2),
            'slug' =>Str::slug($name),
            'image'=> 'authors/'.$this->faker->image('public/storage/authors', 640, 480, null, false)
        ];
    }
}

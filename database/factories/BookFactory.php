<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->sentence(mt_rand(2,8)),
            'slug' =>$this->faker->slug(),
            'sinopsis' =>$this->faker->paragraph(),
            'body' =>collect($this->faker->paragraph(mt_rand(5,10)))
                        ->implode(''),
            'user_id' => mt_rand(1,5),
            'category_id' => mt_rand(1,5)
        ];
    }
}

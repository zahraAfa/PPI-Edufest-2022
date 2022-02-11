<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'writer' => $this->faker->name(),
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'description' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'writer_school' => $this->faker->randomElement(['UTM', 'UUM', 'UM', 'UKM']),
            'writer_ppi' => $this->faker->randomElement(['Malaysia', 'Singapura', 'China', 'Thialand']),
            'file' => \Illuminate\Http\UploadedFile::fake()->create('test.pdf')->store('pdfs')
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Speaker;
use Illuminate\Database\Eloquent\Factories\Factory;

class SpeakerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Speaker::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'ppi' => "Indoensia",
            'email' => $this->faker->unique()->safeEmail(),
            'major' => "Arts",
            'school' => "Engineering",
            'detail' => "Some Detail",
            'picture' => "",
            'event_id' => $this->faker->randomElement([4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16]),
        ];
    }
}

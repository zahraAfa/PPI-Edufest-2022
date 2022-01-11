<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'picture' => $this->faker->unique()->safeEmail(),
            'form_link' => 'https://docs.google.com/forms/d/e/1FAIpQLSc6GW7yr-tcOtBEvVCYD_DTsn0AEbs8fUw_KtdSGx86VBLtKg/viewform?usp=sf_link',
            'date' => $this->faker->dateTimeThisMonth(),
            'detail' => "some description",
            'region' => $this->faker->randomElement(['all_region', 'timtengka', 'amerop', 'asia_oseania']),
        ];
    }
}

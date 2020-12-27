<?php

namespace Database\Factories;

use App\Models\student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'class' => "C0920K1",
            'address' => $this->faker->address,
            'phone' => $this->faker->unique()->randomNumber(8),
            'birthday' => $this->faker->dateTimeBetween('1990-01-01', '2012-12-31')->format('Y/m/d'),
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Condo;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'condo_id' => Condo::factory(),
            'address' => $this->faker->address,
            'address2' => $this->faker->randomNumber(5),
            'district' => $this->faker->city,
            'city_id' => $this->faker->numberBetween(1,25),
            'postal_code' => $this->faker->randomNumber(8),
        ];
    }
}

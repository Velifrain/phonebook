<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\PhoneNumber;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneNumberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PhoneNumber::class;
    /**
     * @return array
     */
    public function definition(): array
    {
        return [
            'phone_number' => $this->faker->phoneNumber,
        ];
    }
}

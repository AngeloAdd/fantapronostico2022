<?php

namespace Database\Factories\Database\v1;

use App\Models\Database\v1\Player;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class PlayerFactory.
 */
final class PlayerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Player::class;

    /**
     * Define the model's default state.
     *
     * @throws Exception
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName('male'),
            'surname' => $this->faker->lastName(),
        ];
    }
}

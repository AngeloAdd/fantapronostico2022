<?php

namespace Database\Factories\Database\v1;

use App\Models\Database\v1\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class TeamFactory.
 */
class TeamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Team::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->country(),
            'short_name' => $this->faker->countryISOAlpha3(),
            'flag' => $this->faker->imageUrl(200, 100, word: 'flag'),
        ];
    }
}

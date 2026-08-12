<?php

namespace Database\Factories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Game::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'external_id'                 => (string) $this->faker->unique()->numberBetween(10, 9999999),
            'name'                        => ucwords($this->faker->words(rand(1, 4), true)),
            'playtime_2weeks'             => $this->faker->numberBetween(0, 1200),
            'playtime_forever'            => $this->faker->numberBetween(0, 120000),
            'img_icon_url'                => $this->faker->sha1(),
            'has_community_visible_stats' => $this->faker->boolean(70),
        ];
    }
}

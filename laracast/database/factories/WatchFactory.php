<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Watch>
 */
class WatchFactory extends Factory
{
    protected $model = \App\Models\Watch::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'episode_id'=>$this->faker->numberBetween(0,27),
            'user_id'=>$this->faker->numberBetween(0,2),
            'percent'=>$this->faker->numberBetween(0,100)
        ];
    }
}

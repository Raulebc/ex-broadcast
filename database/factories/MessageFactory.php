<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Message;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Message::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'message' => $this->faker->sentence,
            'conversation_id' => rand(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

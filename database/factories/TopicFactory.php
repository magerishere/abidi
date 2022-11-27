<?php

namespace Database\Factories;

use App\Enums\TopicStatusEnums;
use App\Models\Topic;
use App\Models\TopicReply;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Topic>
 */
class TopicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
//            'user_id',
            'status' => $this->faker->randomElement(TopicStatusEnums::asArray()),
            'view' => $this->faker->numberBetween(1, 100),
            'like' => $this->faker->numberBetween(1, 100),
            'title' => $this->faker->title,
            'content' => $this->faker->text,
        ];
    }

}

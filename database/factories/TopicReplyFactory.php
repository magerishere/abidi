<?php

namespace Database\Factories;

use App\Enums\TopicStatusEnums;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TopicReply>
 */
class TopicReplyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
//            'user_id'
//            'topic_id',
            'status' => $this->faker->randomElement(TopicStatusEnums::asArray()),
            'title' => $this->faker->title,
            'content' => $this->faker->text,
        ];
    }
}

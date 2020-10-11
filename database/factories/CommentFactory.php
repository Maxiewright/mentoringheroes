<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\CommentStatus;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'body' => $this->faker->text(100),
            'comment_status_id' => rand(1,3),
            'approved_at' => $this->faker->date(),
        ];
    }
}
<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{

    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ts_title' => $this->faker->sentence(2,true),
            'ts_title_seo' => $this->faker->sentence(2,true),
            'ts_subtitle' => $this->faker->sentence(2,true),
            'ts_desc' => $this->faker->paragraphs(3,true),
        ];
    }
}

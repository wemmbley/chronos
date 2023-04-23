<?php

namespace Database\Factories;

use App\Models\Language;
use App\Models\Post;
use App\Models\User;
use Faker\Provider\en_US\Address;
use Faker\Provider\en_US\Company;
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
    public function definition(): array
    {
        return [
            'language_id' => Language::query()->select('id')->get('id')->random(1)->value('id'),
            'author_id' => User::query()->select('id')->get('id')->random(1)->value('id'),
            'title' => fake()->text(60),
            'description' => fake()->text(),
            'text' => fake()->text(),
            'preview_image' => fake()->imageUrl(),
            'slug' => fake()->slug()
        ];
    }
}

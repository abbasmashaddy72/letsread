<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Awcodes\Curator\Models\Media;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pag>
 */
class PageFactory extends Factory
{
    /**
     * Indicate that the page is in review status.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function inReview()
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => 'Review',
            ];
        });
    }

    /**
     * Indicate that the page is in published status.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function published()
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => 'Published',
            ];
        });
    }

    public function hasImageHero()
    {
        return $this->state(function (array $attributes) {
            return [
                'hero' => [
                    'type' => 'image',
                    'image' => Media::inRandomOrder()->limit(1)->first()->id,
                    'oembed' => null,
                    'cta' => Str::ucfirst($this->faker->words(rand(3, 8), true)),
                ],
            ];
        });
    }

    public function hasVideoHero()
    {
        return $this->state(function (array $attributes) {
            return [
                'hero' => [
                    'type' => 'oembed',
                    'image' => null,
                    'oembed' => [
                        'responsive' => true,
                        'autoplay' => false,
                        'loop' => false,
                        'show_title' => false,
                        'byline' => false,
                        'portrait' => false,
                        'embed_url' => 'https://www.youtube.com/embed/oPVte6aMprI',
                        'embed_type' => 'youtube',
                        'url' => 'https://www.youtube.com/watch?v=oPVte6aMprI',
                        'width' => '16',
                        'height' => '9',
                    ],
                    'cta' => $this->faker->words(rand(3, 8), true),
                ],
            ];
        });
    }

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Generate English title for slug
        $title = $this->faker->sentence(rand(1, 8));

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'status' => 'Draft',
            'hero' => null,
            'content' => [
                [
                    'image_type' => '',
                    'combine' => false,
                    'blocks' => [
                        [
                            'type' => 'rich-text',
                            'data' => [
                                'content' => '<h1>' . Str::title($this->faker->words(rand(3, 8), true)) . '</h1><p>' . collect($this->faker->paragraphs(rand(1, 6)))->implode('</p><p>') . '</p><h2>' . Str::title($this->faker->words(rand(3, 8), true)) . '</h2><p>' . collect($this->faker->paragraphs(rand(1, 6)))->implode('</p><p>') . '</p>',
                            ],
                        ],
                    ],
                ]
            ],
        ];
    }
}

<?php

namespace Database\Seeders;

use App\Models\Meta;
use App\Models\Page;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::factory(1)->published()->hasImageHero()->create([
            'title' => 'Home Page',
            'slug' => 'home-page',
            'front_page' => true,
            'content' => [],
        ])->each(function ($page) {
            return $page->meta()->create(Meta::factory()->make([
                'metaable_id' => $page->id,
                'metaable_type' => 'App\Models\Page',
            ])->toArray());
        });

        Page::factory(1)->published()->hasImageHero()->create([
            'title' => 'Gallery',
            'slug' => 'gallery',
        ])->each(function ($page) {
            return $page->meta()->create(Meta::factory()->make([
                'metaable_id' => $page->id,
                'metaable_type' => 'App\Models\Page',
            ])->toArray());
        });

        Page::factory(1)->published()->hasImageHero()->create([
            'title' => 'Programs',
            'slug' => 'programs',
        ])->each(function ($page) {
            return $page->meta()->create(Meta::factory()->make([
                'metaable_id' => $page->id,
                'metaable_type' => 'App\Models\Page',
            ])->toArray());
        });

        Page::factory(1)->published()->hasImageHero()->create([
            'title' => 'About Us',
            'slug' => 'about-us',
        ])->each(function ($page) {
            return $page->meta()->create(Meta::factory()->make([
                'metaable_id' => $page->id,
                'metaable_type' => 'App\Models\Page',
            ])->toArray());
        });

        Page::factory(1)->published()->hasImageHero()->create([
            'title' => 'Contact Us',
            'slug' => 'contact-us',
        ])->each(function ($page) {
            return $page->meta()->create(Meta::factory()->make([
                'metaable_id' => $page->id,
                'metaable_type' => 'App\Models\Page',
            ])->toArray());
        });

        Page::factory(1)->published()->hasImageHero()->create([
            'title' => 'Contact Us',
            'slug' => 'contact-us',
        ])->each(function ($page) {
            return $page->meta()->create(Meta::factory()->make([
                'metaable_id' => $page->id,
                'metaable_type' => 'App\Models\Page',
            ])->toArray());
        });

        Page::factory(3)->create()->each(function ($page) {
            return $page->meta()->create(Meta::factory()->make([
                'metaable_id' => $page->id,
                'metaable_type' => 'App\Models\Page',
            ])->toArray());
        });

        Page::factory(5)->inReview()->hasImageHero()->create()->each(function ($page) {
            return $page->meta()->create(Meta::factory()->make([
                'metaable_id' => $page->id,
                'metaable_type' => 'App\Models\Page',
            ])->toArray());
        });

        Page::factory(15)->published()->hasImageHero()->create()->each(function ($page) {
            return $page->meta()->create(Meta::factory()->make([
                'metaable_id' => $page->id,
                'metaable_type' => 'App\Models\Page',
            ])->toArray());
        });

        Page::factory(2)->published()->hasVideoHero()->create()->each(function ($page) {
            return $page->meta()->create(Meta::factory()->make([
                'metaable_id' => $page->id,
                'metaable_type' => 'App\Models\Page',
            ])->toArray());
        });
    }
}

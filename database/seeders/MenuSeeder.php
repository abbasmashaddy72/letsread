<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Header Menu
        Menu::create([
            'location' => 'header',
            'items' => [
                [
                    'title' => 'Home',
                    'url' => '/',
                    'blank' => false,
                ],
                [
                    'title' => 'Gallery',
                    'url' => '/gallery',
                    'blank' => false,
                ],
                [
                    'title' => 'Programs',
                    'url' => '/programs',
                    'blank' => false,
                ],
                [
                    'title' => 'About Us',
                    'url' => '/about-us',
                    'blank' => false,
                ],
                [
                    'title' => 'Contact Us',
                    'url' => '/contact-us',
                    'blank' => false,
                ],
            ],
            'activated' => true,
        ]);

        // Footer1 Menu
        Menu::create([
            'location' => 'footer1',
            'items' => [
                [
                    'title' => 'Contact',
                    'url' => '/contact',
                    'blank' => false,
                ]
            ],
            'activated' => true,
        ]);

        // Footer2 Menu
        Menu::create([
            'location' => 'footer2',
            'items' => [
                [
                    'title' => 'Privacy Policy',
                    'url' => '/privacy-policy',
                    'blank' => false,
                ]
            ],
            'activated' => true,
        ]);

        // Header Button Menu
        Menu::create([
            'location' => 'headerButtons',
            'items' => [
                [
                    'title' => 'Login',
                    'url' => '/login',
                    'blank' => false,
                ]
            ],
            'activated' => true,
        ]);
    }
}

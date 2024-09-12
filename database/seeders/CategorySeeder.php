<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert(
            [
                [
                    'name' => 'Khmer Soup',
                    'slug' => 'Khmer Soup',
                    'status' => 1,
                    'show_at_home' => 1
                ],
                [
                    'name' => 'Noodle',
                    'slug' => 'Noodle',
                    'status' => 1,
                    'show_at_home' => 1
                ],
                [
                    'name' => 'Salad',
                    'slug' => 'Salad',
                    'status' => 1,
                    'show_at_home' => 1
                ],
            ]
        );
    }
}

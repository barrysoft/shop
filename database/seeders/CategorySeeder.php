<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        require 'data/categories.php';

        foreach ($categories as $category) {
            Category::query()->create([
                'id' => $category['id'],
                'name' => ucfirst(strtolower($category['name'])),
                'slug' => Str::slug($category['name'])
            ]);
        }
    }
}

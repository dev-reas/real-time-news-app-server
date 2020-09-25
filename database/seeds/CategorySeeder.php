<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Health',
            'Political',
            'Work and Education',
            'Technology and Entertainment',
            'Others',
        ];

        foreach ($categories as $category) {
            Category::create([
                'categories' => $category
            ]);
        }
    }
}

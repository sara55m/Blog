<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $news=Category::create([
            'name'=>'News',
            'slug'=>'Nw',
        ]);

        $travel=Category::create([
            'name'=>'Travel',
            'slug'=>'Tr',
        ]);

        $sports=Category::create([
            'name'=>'Sports',
            'slug'=>'Sp',
        ]);

        $food=Category::create([
            'name'=>'Food',
            'slug'=>'Fo',
        ]);
    }
}

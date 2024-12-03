<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tag1=Tag::create([
            'name'=>'Technology',
        ]);

        $tag2=Tag::create([
            'name'=>'Politics',
        ]);

        $tag3=Tag::create([
            'name'=>'Health',
        ]);

        $tag4=Tag::create([
            'name'=>'Entertainment',
        ]);
    }
}

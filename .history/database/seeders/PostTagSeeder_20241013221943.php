<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PostTag;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PostTag::create([
            'post_id'=>'1',
            'tag_id'=>'1'
        ]);

        PostTag::create([
            'post_id'=>'1',
            'tag_id'=>'4'
        ]);

        PostTag::create([
            'post_id'=>'3',
            'tag_id'=>'4'
        ]);

        PostTag::create([
            'post_id'=>'3',
            'tag_id'=>'3'
        ]);

        PostTag::create([
            'post_id'=>'4',
            'tag_id'=>'3'
        ]);
    }
}

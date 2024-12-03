<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Tag;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1;$i<=10;$i++){
            DB::table('post_tag')->create([
                'post_id'=>App\Models\Post,
                'tag_id'=>App\Models\Tag,

            ]

            )
        }
    }
}

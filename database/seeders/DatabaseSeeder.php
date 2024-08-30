<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::truncate();
        //Category::truncate();
        //Post::truncate();

//creating a fake post along with its corresponding user and category
        //Post::factory(5)->create();

        //\App\Models\User::factory(10)->create();
        //$user=User::factory(10)->create();
        

        /*\App\Models\User::factory()->create([

            'username' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        //creating my own users,categories and posts
        /*$user=User::create([
            'username'=>'sara',
            'email'=>'aa4960@gmail.com',
            'password'=>'123',
            'is_admin'=>1,
        ]);

        $user=User::create([
            'username'=>'hana',
            'email'=>'akmkjnj@gmail.com',
            'password'=>'456',
            'is_admin'=>0,
        ]);

        $user=User::create([
            'username'=>'nour',
            'email'=>'kdskcmd@gmail.com',
            'password'=>'789',
            'is_admin'=>0,
        ]);

        $user=User::create([
            'username'=>'amira',
            'email'=>'ijjij@gmail.com',
            'password'=>'147',
            'is_admin'=>0,
        ]);

        $user=User::create([
            'username'=>'mohamed',
            'email'=>'adegvg@gmail.com',
            'password'=>'258',
            'is_admin'=>0,
        ]);

        $user=User::create([
            'username'=>'abdullah',
            'email'=>'aknhg@gmail.com',
            'password'=>'369',
            'is_admin'=>0,
        ]);


        $personal=Category::create([
            'name'=>'Personal',
            'slug'=>'personal',
        ]);

        $family=Category::create([
            'name'=>'Family',
            'slug'=>'family',
        ]);

        $work=Category::create([
            'name'=>'Work',
            'slug'=>'work',
        ]);

        Post::create([
            'user_id'=>$user->id,
            'category_id'=>$family->id,
            'title'=>'My-First-Post',
            'excerpt'=>'This is my first post',
            'body'=>'this is my first post this is my first post this is my first post
            this is my first post this is my first post this is my first post ',


        ]);

        Post::create([
            'user_id'=>$user->id,
            'category_id'=>$work->id,
            'title'=>'My-Second-Post',
            'excerpt'=>'This is my second post',
            'body'=>'this is my second post this is my second post this is my second post
            this is my second post this is my second post this is my second post ',


        ]);

        Post::create([
            'user_id'=>$user->id,
            'category_id'=>$personal->id,
            'title'=>'My-Third-Post',
            'excerpt'=>'This is my third post',
            'body'=>'this is my third post this is my third post this is my third post
            this is my third post this is my third post this is my third post ',


        ]);*/
    }
}

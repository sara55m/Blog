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
        $user1=User::create([
            'image'=>'/thumbnails/admin.jpeg',
            'username'=>'Sara_Mohamed',
            'email'=>'sara@admin.com',
            'email_verified_at' => now(),
            'password'=>'123456789',
        ]);


        $users=User::factory(19)->create();
        //$categories=Category::factory(5)->create();
        //$posts=Post::factory(50)->create();
        $this->call([CategorySeeder::class]);

        $this->call([PostSeeder::class]);

        $this->call([TagSeeder::class]);



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


        $news=Category::create([
            'name'=>'News',
            'slug'=>'Nw',
        ]);

        $travel=Category::create([
            'name'=>'Travel',
            'slug'=>'Tr',
        ]);

        $work=Category::create([
            'name'=>'Work',
            'slug'=>'Wr',
        ]);

        $food=Category::create([
            'name'=>'Food',
            'slug'=>'Fo',
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

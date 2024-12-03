<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Follower;

//use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Gate;


class PostController extends Controller
{

    public function index(){
        $followers=Follower::all();
        //check if the current user is the admin:
        //ddd(Gate::allows('admin'));

        //dd(request(['search']));
        //return Post::latest()->filter(request(['search','category','author']))->paginate();
        return view("posts.index",[
            //by default the order of the posts is that the older is at the top to make the latest at the top=latest()
            "posts"=>Post::latest()->filter(request(['search','category','author']))->simplePaginate(6)->WithQueryString(),
            "categories"=>Category::all(),
            "tags"=>Tag::all(),

        ],compact('followers'));
    }
    public function show(Post $post){
        return view("posts.show",[
            "post"=>$post
        ]);
    }
}

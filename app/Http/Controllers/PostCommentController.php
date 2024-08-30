<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostCommentController extends Controller
{
    public function store(Post $post){
//validation
        request()->validate([
            'body'=>'required|min:5'
        ]);

        //add a comment to aspecific post:
        $post->comments()->create([
            'user_id'=>request()->user()->id,
            'body'=>request('body')
            ]);
            //redirection to the post page
            return back();


    }
}

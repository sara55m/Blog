<?php

namespace App\Http\Controllers;
use App\Models\User;
//use App\Models\Follower;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class FollowController extends Controller
{

    public function toggleFollow($author)
{
    $user = Auth::user();
    $author = User::findOrFail($author);

    if ($user->followers()->where('author_id', $authorId)->exists()) {
        // If already following, unfollow
        $user->following()->detach($authorId);
    } else {
        // Follow the author
        $user->following()->attach($authorId);
    }

    return redirect()->back();
}
    public function store(Request $request){
        //dd($request);
        $follower=Follower::create([
            'follower_id'=>$request->follower,
            'blogger_id'=>$request->blogger,
        ]);

        return redirect("/posts")->with('success','you Started Following');




    }
}

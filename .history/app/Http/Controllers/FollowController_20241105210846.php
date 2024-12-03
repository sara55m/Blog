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

    if ($user->bloggers()->where('blogger_id', $author)->exists()) {
        // If already following, unfollow
        $user->followers()->detach($author);
    } else {
        // Follow the author
        $user->followers()->attach($author);
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

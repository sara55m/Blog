<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Follower;

use Illuminate\Http\Request;

class FollowController extends Controller
{
    public function store(Request $request){
        //dd($request);
        $follower=Follower::create([
            'follower_id'=>$request->follower,
            'blogger_id'=>$request->blogger,
        ]);

        return redirect("/posts")->with('success','you Started Following'.$request->blogger);




    }
}

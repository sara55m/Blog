<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }
    public function store(){
        //1-validate the request:
        //return request()->all();
        $attributes=$this->validatePost(new User());
            //storing user image
            $attributes['image']=request()->file('image')->store('thumbnails');
            //2-authenticate and log the user in:
            $author=User::create($attributes);
            //to log the user in:
            auth()->login($author);
            //3- redirect the user to the home page and to show a flash message fonce the registration successes:
            //session()->flash('success','your account has been created');
            return redirect("/posts")->with('success','your account has been created');

    }

    public function show($author){
        $author=auth()->user();
        return view("sessions.profile",compact('author'));
    }

    public function edit($author){
        $author=auth()->user();
        return view("sessions.edit",compact('author'));
    }

    public function update(User $author){
        //var_dump(request());
        $attributes=$this->validatePost($author);
            if(isset($attributes['image'])){
                $attributes['image']=request()->file('image')->store('thumbnails');
            }
            $author->update($attributes);
            return redirect("/user/{author}")->with('success','Updated Successfully');
    }

    public function destroy(User $author)
    {
        //unlink("/storage/$author->image");
        $author->delete();
        return redirect("/posts")->with('success','Deleted Successfully');
    }

    protected function validatePost(?User $author=null) :array
    {
        //set the default to a new post of i am creating one :
        $author??=new User();
        return request()->validate([

            'image'=>$author->exists ? ['image'] : ['required','image'],
            //'username'=>'required|max:255|min:3|unique:users,username',
            'username'=>$author->exists ? 'min:3|max:255' :'required|max:255|min:3|unique:users,username',
            'email'=>$author->exists ? 'email|max:255|min:3' :'required|email|max:255|min:3',
            'password'=>'required|min:7',

        ]);
    }

}

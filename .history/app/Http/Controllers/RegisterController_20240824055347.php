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
        $user=request()->validate([

            'username'=>'required|max:255|min:3|unique:users,username',
            //'username'=>['required','min:3','max:255',Rule::unique('users','username')],
            'email'=>'required|email|max:255|min:3|unique:users,email',
            'password'=>'required|min:7',
            ]);
            //hashing the password:
            //$user['password']=bcrypt($user['password']);
            //2-authenticate and log the user in:
            $user=User::create($user);
            //to log the user in:
            auth()->login($user);
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
        $attributes=request()->validate([

            'username'=>'max:255|min:3',
            //'username'=>['required','min:3','max:255',Rule::unique('users','username')],
            'email'=>'email|max:255|min:3',
            'password'=>'required|min:7',
            ]);
            $author->update($attributes);
            return redirect("/user/{author}")->with('success','Updated Successfully');
    }

    public function destroy(User $author)
    {
        //$author=auth()->user();
        $author->delete();
        return redirect("/posts")->with('success','Deleted Successfully');
    }
}

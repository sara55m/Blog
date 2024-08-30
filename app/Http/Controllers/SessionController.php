<?php

namespace App\Http\Controllers;

//use Dotenv\Exception\ValidationException;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use App\Models\User;


class SessionController extends Controller
{
    public function create(){
        return view('sessions.create');
    }
    public function store(){

        //1-validate the request:
        //chech if the user has registered before each if the data already exists in the database):
        $user=request()->validate([
            'email'=>'required|email',
            'password'=>'required',
            ]);

            //2-attempt to log the user in according to the given credentials:
            if(auth()->attempt($user)){
                //session fixation --->generating a new session id :
                session()->regenerate();
                return redirect("/posts")->with('success','Welcome Back!');
            }
            //if the authentication fails:
                throw ValidationException::withMessages([
                    'email'=>'Your provided credentials could not be verified','password'=>'wrong password']);
            // return back()
            // ->withInput()
            // ->withErrors(['email'=>'Your provided credentials could not be verified','password'=>'wrong password']);

    }
    /*public function show($author){
        $author=auth()->user();
        return view("sessions.profile",compact('author'));


    }*/

    /*public function edit($author){
        $author=auth()->user();
        return view("sessions.edit",compact('author'));
    }*/
    /*public function update(User $user){
        //var_dump(request());
        $attributes=request()->validate([

            'username'=>'max:255|min:3',
            //'username'=>['required','min:3','max:255',Rule::unique('users','username')],
            'email'=>'email|max:255|min:3',
            'password'=>'required|min:7',
            ]);
            $user->update($attributes);
            return redirect("/user/{author}")->with('success','Updated Successfully');
    }*/
    public function destroy(){
        auth()->logout();
        //destroy the registration session and show a flash message on the posts page
        return redirect('/posts')->with('success','Goodbye');
    }


}

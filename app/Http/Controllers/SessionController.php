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

    public function destroy(Request $request){
        //logging the user out his will remove the authentication information from the user's session
        auth()->logout();
        //delete session data and regenerate session id
        $request->session()->invalidate();
        //regenerate csrf token
        $request->session()->regenerateToken();
        //destroy the registration session and show a flash message on the posts page
        return redirect('/posts')->with('success','Goodbye');
    }


}

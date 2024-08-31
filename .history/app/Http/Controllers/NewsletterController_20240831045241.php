<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Illuminate\Validation\ValidationException;
use App\Services\Newsletter;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {

        request()->validate([
            'email'=>'required|email'
        ]);
        try{
            $newsletter=new Newsletter();
            $newsletter->subscribe(request('email'));
            }
            catch(Exception $e){
                throw ValidationException::withMessages([
                    'email'=>'your email could not be added to our newsletter list'
                ]);
            }

            return redirect("/posts")->with('success','you are now subscribed');

    }

}

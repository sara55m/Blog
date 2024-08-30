<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){
        //restrict access to this page to only admins->in the middleware:
        return view('admin.categories.create');
    }

    public function store(){
        $input=request()->validate([
            'name'=>'required|min:4|unique:categories,name',
            'slug'=>'required|min:3|unique:categories,name'
        ])
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::all();
        return view('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //restrict access to this page to only admins->in the middleware:
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes=request()->validate([
            'name'=>'required|min:4|unique:categories,name',
            'slug'=>'required|min:3|unique:categories,name',
        ]);
        $category=Category::create($attributes);
        return redirect("/posts");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Category $category)
    {
        $attributes=request()->validate([
            'name'=>'min:4',
            'slug'=>'min:3',
        ]);
        $category->update($attributes);
        return redirect("/admin/categories");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

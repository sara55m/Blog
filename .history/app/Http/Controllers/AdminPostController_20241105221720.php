<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.posts.index',[
            'posts'=>Post::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //restrict access to this page to only admins->in the middleware:
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation:
        $attributes=$this->validatePost(new Post());
        // //creating a new post:
        $attributes['user_id']=auth()->id();
        //define image path :
        $attributes['thumbnail']=request()->file('thumbnail')->store('thumbnails');
        Post::create($attributes);
        return redirect('/posts');
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
    public function edit(Post $post)
    {
        return view('admin.posts.edit',['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Post $post)
    {
        $attributes=$this->validatePost($post);

        if(isset($attributes['thumbnail'])){
            $attributes['thumbnail']=request()->file('thumbnail')->store('thumbnails');
        }

        $post->update($attributes);
        return redirect("/admin/posts")->with('success','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //get the path of the image
        $file_path = public_path().'/storage/'.$post->thumbnail;
        unlink($file_path);
        $post->delete();
        return back()->with('success','Post deleted');
    }

    //a method to avoid the duplication of validation rules:
    protected function validatePost(?Post $post=null) :array
    {
        //set the default to a new post of i am creating one :
        $post??=new Post();
        return request()->validate([
            'title'=>'required',
            // if the post already exists the image is not required else it will be:
            'thumbnail'=>$post->exists ? ['file'] : ['required','file','mimes:jpg,png,jpeg'],
            'excerpt'=>'required',
            'body'=>'required',
            //make sure the category exists in the categories table(valid category id):
            'category_id'=>['required',Rule::exists('categories','id')]
        ]);

    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public function index(){
        return view('admin.posts.index',[
            'posts'=>Post::paginate(50)
        ]);

    }
    public function create(){
        //restrict access to this page to only admins->in the middleware:
        return view('admin.posts.create');
    }
    public function store(){
        //$path=request()->file('thumbnail')->store('thumbnails');
        //return 'Done : '.$path;
        //validation:
        $attributes=$this->validatePost(new Post());
        // //creating a new post:
        $attributes['user_id']=auth()->id();
        //define image path :
        $attributes['thumbnail']=request()->file('thumbnail')->store('thumbnails');
        Post::create($attributes);
        return redirect('/posts');
    }
    public function edit(Post $post){
        return view('admin\posts\edit.blade.php',['post'=>$post]);

    }
    public function update(Post $post){
        $attributes=$this->validatePost($post);

        if(isset($attributes['thumbnail'])){
            $attributes['thumbnail']=request()->file('thumbnail')->store('thumbnails');
        }

        $post->update($attributes);
        return back()->with('success','Post Updated');
    }
    public function destroy(Post $post){
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
            'thumbnail'=>$post->exists ? ['image'] : ['required','image'],
            'excerpt'=>'required',
            'body'=>'required',
            //make sure the category exists in the categories table(valid catedory id):
            'category_id'=>['required',Rule::exists('categories','id')]
        ]);

    }

}

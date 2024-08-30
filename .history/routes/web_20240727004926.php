<?php

use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Symfony\Component\Yaml\Yaml;
use Illuminate\Support\Facades\File;
use Monolog\Registry;

use App\Services\Newsletter;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//subscribtion form(api):
Route::post('newsletter',NewsletterController::class);

//Route class :: route method(get(url,function(){}),post,patch,delete,put)-->each one responds to a type of http requests
Route::get('/', function () {
    return view('welcome');
});

//the home page of posts:
Route::get("/posts",[PostController::class,'index'])->name('home');
    /*$files=File::files(resource_path("posts"));
    $posts=[];
    foreach($files as $file){


        $document=YamlFrontMatter::parseFile($file);
        $posts[]=new Post(
            $document->title,
            $document->excerpt,
            $document->body()
        );
    }
    
    ddd($posts);*/


//to create anew post only for admins:
//grouping the routes using same middleware:
Route::middleware('can:admin')->group(function(){
//preparing the routes o the main 7 action:
Route::resource('/admin/posts',AdminPostController::class)->except('show');
//showing the create form
//Route::get('/admin/posts/create',[AdminPostController::class,'create']); 
//storing the data in the database after validation
//Route::post('/admin/posts',[AdminPostController::class,'store']); 
//showing a dashboard only for admins:
//Route::get("/admin/posts",[AdminPostController::class,'index']);
//editing a specific post:
//showing the edit form    
//Route::get("/admin/posts/{post:id}/edit",[AdminPostController::class,'edit']);
//storing the data in the database after validation
//Route::patch('/admin/posts/{post:id}',[AdminPostController::class,'update']); 
//deleting a specific post:
//Route::delete('/admin/posts/{post:id}',[AdminPostController::class,'destroy']);



//showing the create form
Route::get('/admin/categories/create',[CategoryController::class,'create']); 
//storing the data in the database after validation
Route::post('/admin/categories/store',[CategoryController::class,'store']); 

});
    

//registration process:
//showing the register form    
Route::get("register",[RegisterController::class,'create'])->middleware('guest');
//storing the register data after validation
Route::post("register",[RegisterController::class,'store'])->middleware('guest');
//showing the login form  
Route::get("login",[SessionController::class,'create'])->middleware('guest');
//storing the login data after validation
Route::post("login",[SessionController::class,'store'])->middleware('guest');
//logout 
Route::post("logout",[SessionController::class,'destroy']);
//showing a specific post thorough clicking on its title:
Route::get("/posts/{post}",[PostController::class,'show']);

//writing a comment on a specific post and storing it:
Route::post("/posts/{post:title}/comments",[PostCommentController::class,'store']);























    //find a post by its name and pass it to the view named post:
    //$post=Post::find($id);

    
// Route::get("/categories/{category:slug}",function(Category $category){
//     //find a post by its name and pass it to the view named post:
//     //$post=Post::find($id);

//     return view("posts",[
//         "posts"=>$category->posts,
//         "currentCategory"=>$category,
//         "categories"=>Category::all()
//     ]);
// })->name('category');


// Route::get("/authors/{author:username}",function(User $author){

  
//     return view("posts.index",[
//         "posts"=>$author->posts,
//         "categories"=>Category::all()
//     ]);
// });



    /*$path=__DIR__."/../resources/posts/{$name}.html";
    //ddd($path);
    
    if(!file_exists($path)){
        return redirect("/posts");

    }
    //caching the file fetching operation for 5 seconds:
    $post=cache()->remember("posts/{$name}",1200,function() use ($path){
        var_dump('file_get_contents');
        
        return file_get_contents($path);


    });

    //$post=file_get_contents($path);
    return view("post",[
        "post"=>$post
    ]);
})->where('post','[A-z_\-]+');*/

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //uses the hasFactory trait to determine the proper factory for the model the trait is assigned to
    use HasFactory;
    //determine tha fields that can be mass filled:
    protected $fillable=['title','excerpt','body','user_id','category_id'];
    //solve the N+1 problem by returning the associated category and author with each post:
    //protected $with=['category','author'];
    //using normal function:
    public function scopeFilter($query,array $filters){
        $query->when($filters['search'] ?? false,function($query,$search){
            $query
            ->where('title','like','%'.$search.'%')
            ->orWhere('body','like','%'.$search.'%');
    });

//using arrow function
//searching according to the category:
    $query->when($filters['category'] ?? false,fn($query,$category)=>
        $query
        ->whereExists(fn($query)=>
            $query->from('categories')
            ->WhereColumn('categories.id','posts.category_id')
            ->where('categories.slug',$category))
        );

        //using arrow function
        //searching according to the tags:
    $query->when($filters['tag'] ?? false,fn($query,$tag)=>
    $query
    ->whereExists(fn($query)=>
        $query->from('tags')
        ->WhereColumn('tags.id','posts.tag_id')));


        //using arrow function
//searching according to the author:
    $query->when($filters['author'] ?? false,fn($query,$author)=>
    $query
    ->whereHas('author',fn($query)=>
        $query->where('users.username',$author)
    )
    );
}
    /*public function getRouteKeyName()
    {
        return 'title';
    }*/
    //defining the relation between posts and categories as one-to-many:
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(user::class,'user_id');
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
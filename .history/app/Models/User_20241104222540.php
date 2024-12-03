<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Http\Controllers\RegisterController;



class User extends Authenticatable
{
    //use Notifiable;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        //'is_admin',
    ];
    //protected $guarded=[];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    //hashing the password:no need as laravel automatically hashes passwords
    // public function setPasswordAttribute($password){

    //     $this->user['password']=bcrypt($password);
    // }
//one-to-many relationship between users and posts
    public function posts(){
        return $this->hasMany(Post::class);
    }
//one-to-many relationship between users and comments
    public function comments(){
            return $this->hasMany(Comment::class);
        }
//many-to-many relationship between followers and bloggers
        public function followers(){
            return $this->belongsToMany(User::class);
        }
//many-to-many relationship between followers and bloggers
        public function bloggers(){
            return $this->belongsToMany(User::class);
        }
}

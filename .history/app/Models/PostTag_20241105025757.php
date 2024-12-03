<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    use HasFactory;
    protected $table='post_tag';
    protected $fillable=['post_id','tag_id'];

    /*public function scopeFilter($query,array $filters){

    $query->when($filters['tag'] ?? false,fn($query,$tag)=>
    $query
    ->whereExists(fn($query)=>
        $query->from('tags')
        ->WhereColumn('tags.id','post_tag.tag_id')));
    }*/

}

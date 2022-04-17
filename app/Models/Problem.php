<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];


    // Category Relationship
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }


    // Many to Many Relationsip
    public function tags()
    {
        return $this->belongsToMany(Tag::class,'problems_tags','problem_id','tag_id');
    }


    // Change Default route key name
    public function getRouteKeyName()
    {
        return 'slug';
    }

}

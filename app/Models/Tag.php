<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];

    // Many to Many Relationsip
    public function problems()
    {
        return $this->belongsToMany(Problem::class,'problems_tags');
    }
}

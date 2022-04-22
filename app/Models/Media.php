<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];


    // Accessor
    public function getNameAttribute($name)
    {
       if(str_starts_with($name,'http')){
        return $name;
       }else{
           return [
               'name'=>$name,
               'url'=>asset('storage/uploads/'.$name)
           ];
       }
    }

}

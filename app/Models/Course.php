<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['title','unique_id','token','image','description'];



    public function lesson()
    {
    	return $this->hasMany('App\Models\Lesson');
    }


    
    public function quiz()
    {
    	return $this->hasMany('App\Models\Quiz');
    }
}

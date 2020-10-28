<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = ['title','video','texte','course_id'];



    public function course()
    {
    	return $this->belongsTo('App\Models\Course');
    }



    public function quiz()
    {
    	return $this->hasMany('App\Models\Quiz');
    }
}

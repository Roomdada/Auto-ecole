<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = ['response','question','response_1','response_2','response_3','response_4','image','lesson_id','course_id'];




    public function course()
    {
    	return $this->belongsTo('App\Models\Course');
    }


    public function lesson()
    {
    	return $this->belongsTo('App\Models\Lesson');
    }
}

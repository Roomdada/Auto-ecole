<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverLicense extends Model
{
    use HasFactory;
    protected $fillable = ['name','money'];



    public function student()
    {
        return $this->hasMany('App\Models\Student');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
    	'firstname',
    	'lastname',
    	'birthday',
    	'photo',
    	'contact',
    	'type_piece',
    	'number_piece',
        'categorie_id',
    	'driver_license_id',
    	'number_of_session',
    	'city',
    	'money',
    	'advanced',
    	'rest',
        'token',
    	'password',
    	'unique_id',
    ];


    public function categorie()
    {
        return $this->belongsTo('App\Models\Categorie');
    }



    public function driver_license()
    {
        return $this->belongsTo('App\Models\DriverLicense');
    }


}

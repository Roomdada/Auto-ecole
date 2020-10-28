<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Categorie;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Quiz;

use App\Models\DriverLicense;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        //Categorie::create(['name' => 'Permis de conduire']);
        //Categorie::create(['name' => 'Recyclage']);
        //\App\Models\Student::factory(20)->create();





       for ($i=1; $i <= 6; $i++) { 
       	  Course::create(['title'=> 'Cours_'.$i,'unique_id' => uniqid(),'token' => Str::random(60),'image' => 'image'.rand(1,6).'.jpg', 'description' => '  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' ]);
       }


      /* for ($i=1; $i <= 100 ; $i++) { 
       	   Lesson::create(['title' => 'lesson de cours de permis de conduire','video' => 'lesson'.$i.'.mp4','texte' => ' consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','course_id' => Course::all()->random()->id]);
       }*/


     /*for ($i=1; $i <= 100 ; $i++) { 
       	   Quiz::create(['response' => 'response'.$i,'response_1' => 'r1','response_2' => 'r2','response_3' => 'r3','response_4' => 'r4','image'=>'image'.$i,'lesson_id'=>Lesson::all()->random()->id,'course_id'=>Course::all()->random()->id,'question'=>'je suis une question']);
       }*/ 



     




    }
}

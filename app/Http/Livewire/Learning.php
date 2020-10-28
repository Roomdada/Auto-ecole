<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Student;
use App\Models\Quiz;

class Learning extends Component
{
    public function render()
    {

    	$students = Student::count();
    	$courses = Course::count();
    	$lessons = Lesson::count();
    	$quizzes = Lesson::count();
        return view('livewire.learning',['students' => $students,'courses' => $courses,'lessons' => $lessons,'quizzes' => $quizzes]);
    }
}

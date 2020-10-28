<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;
use Livewire\WithPagination;

class CourseListe extends Component
{
    public function render()
    {
    	$courses = Course::withCount('lesson')->paginate(3);
        return view('livewire.course-liste',['courses' => $courses]);
    }
}

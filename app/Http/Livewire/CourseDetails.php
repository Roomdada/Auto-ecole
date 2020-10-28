<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;
use App\Models\Lesson;
class CourseDetails extends Component
{

    private $token;

	public function mount(string $token)
	{
		$this->token = $token;
	}

    public function render()
    {
        $courses_id = Course::where('token',$this->token)->select('id')->first();
        $courses = Lesson::where('course_id',$courses_id->id)->paginate(6);
        return view('livewire.course-details',['courses' => $courses]);
    }
}

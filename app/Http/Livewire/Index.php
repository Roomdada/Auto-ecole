<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Student;
class Index extends Component
{
    public function render()
    {
        return view('livewire.index');
    }
}

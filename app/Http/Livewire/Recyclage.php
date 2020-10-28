<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use Livewire\WithPagination;
class Recyclage extends Component
{
    public function render()
    {
        $students = Student::with('driver_license')->where('categorie_id',1)->paginate(9);
        return view('livewire.recyclage',['students' => $students]);
    }
}

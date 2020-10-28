<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use Livewire\WithPagination;
class Students extends Component
{


    protected $paginationTheme = 'bootstrap';


    

    public function render()
    {

        $students = Student::with('driver_license')->where('categorie_id',1)->paginate(9);
        return view('livewire.student',['students' => $students]);
    }
}

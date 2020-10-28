<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Quiz;
class QuizListe extends Component
{
    public function render()
    {

    	$quizzes = Quiz::paginate(6);
        return view('livewire.quiz-liste',['quizzes' => $quizzes]);
    }
}

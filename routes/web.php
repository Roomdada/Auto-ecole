<?php



use Illuminate\Support\Facades\Route;

Route::get('/' , App\Http\Livewire\Index::class);
Route::get('/student' , App\Http\Livewire\Students::class)->name('home.path');
Route::get('/recyclage' , App\Http\Livewire\Recyclage::class)->name('recyclage.path');
Route::get('/conduite' , App\Http\Livewire\Conduite::class)->name('conduite.path');
Route::get('/comptabilité' , App\Http\Livewire\Finance::class)->name('finance.path');
Route::get('/e-learning' , App\Http\Livewire\Learning::class)->name('learning.path');
Route::get('/cours' , App\Http\Livewire\CourseListe::class)->name('course.path');
Route::get('/cours/{token}' , App\Http\Livewire\CourseDetails::class)->name('course.details.path');
Route::get('/examen/' , App\Http\Livewire\QuizListe::class)->name('quiz.path');
Route::get('/depense' , App\Http\Livewire\Depense::class)->name('depense.path');

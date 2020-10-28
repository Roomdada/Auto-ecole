<div>
@extends('layouts.app')

@section('content')

 <div class="container-fluid">


                    <!-- Page Heading -->
                    <div class="mb-4 text-center">
                      <h1 class="h3 mb-0 text-gray-800">Administration  E-learning</h1>
                    </div>
           
                    <!-- Content Row -->
                    <div class="row">

                      <!-- Earnings (Monthly) Card Example -->
                      <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                          <div class="card-body">
                            <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Candidats Inscrit</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$students}}</div>
                              </div>
                              <div class="col-auto">
                                <i class="fas fa-user fa-2x text-gray-300"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Earnings (Monthly) Card Example -->
                      <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                          <div class="card-body">
                            <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Nombre de Cours</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$courses}}</div>
                              </div>
                              <div class="col-auto">
                                <i class="fas fa-desktop fa-2x text-gray-300"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Earnings (Monthly) Card Example -->
                      <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                          <div class="card-body">
                            <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Nombre de Leçons</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$lessons}}</div>
                              </div>
                              <div class="col-auto">
                                <i class="fas fa-book fa-2x text-gray-300"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Earnings (Monthly) Card Example -->
                      <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                          <div class="card-body">
                            <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Nombre d'examens</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$quizzes}}</div>
                              </div>
                              <div class="col-auto">
                                <i class="fas fa-pencil-alt fa-2x text-gray-300"></i>
                              </div>
                            </div> 
                          </div>
                        </div>
                      </div>
                 </div>
                 <!-- End of Row -->
                 
                    <div class="card shadow mb-4">
                      <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"> Profil Administreur 
                          <a href="Tableau2bord.html" class=" btn btn-sm btn-primary shadow-sm">Retour</a>
                        </h6>
                      </div>
                      <div class="card-body">
                        <div class="table-responssive">
                          <table class="table table-bordered" width="100%" cellpadding="0">
                            <div class="row text-center">
                                  <div class="col-lg-6 mb-4">
                                    <div class="card bg-gradient-primary text-white shadow">
                                      <div class="card-body">
                                      <div class="col-auto">
                                       <i class="fas fa-book fa-2x text-gray-300"></i>
                                      </div>
                                        <a href="{{ route('course.path') }}" class="text-white">Liste des Cours</a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-6 mb-4">
                                    <div class="card bg-gradient-primary text-white shadow">
                                      <div class="card-body">
                                      <div class="col-auto">
                                         <i class="fas fa-pencil-alt fa-2x text-gray-300"></i>
                                      </div>
                                      <a href="{{ route('quiz.path') }}" class="text-white">Liste des Examens</a>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                          </table>
                      </div>
                    </div>
        </div>

      </div>

@stop
</div>

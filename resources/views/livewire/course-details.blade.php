<div>
   @extends('layouts.app')

@section('content')

 <div class="container-fluid">
 

                    <!-- Page Heading -->
                    <div class="mb-4 text-center">
                      <h1 class="h3 mb-0 text-gray-800">Administration  E-learning</h1>
                    </div>
                 
                    <div class="card shadow mb-4">
                      <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"> Profil Administreur 
                          <a href="cours.html" class=" btn btn-sm btn-primary shadow-sm">Retour</a>
                        </h6>
                      </div>
                      <div class="card-body">

                        <div class="row justify-content-center">
                          <!-- course item -->

                          @foreach ($courses as $item)
                          <div class="col-lg-4  mb-5">
                            <div class="card p-0 border-gray rounded-0 hover-shadow">
                              <img class="card-img-top rounded-0" src="{{ asset('image1.jpg') }}" width="200" height="200">
                              <div class="card-body">
                                <a href="course-single.html">
                                  <h4 class="card-title">{{$item->title}}</h4>
                                </a>
                                <p class="card-text mb-4">{{$item->description}}</p>
                                <a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#Modiflesson">Modifier</a>
                                <a href="#" class="btn btn-danger btn-sm">Supprimer</a>
                              </div>
                            </div>
                          </div>
                          @endforeach


                          <div class=" container mt-2">
                          	{{$courses->links()}}
                          </div>

                          <!-- course item -->
                       
                          <!-- course item -->
                       
                        </div>
                      </div>
        <!-- /.container-fluid -->

      </div>

@stop
</div>

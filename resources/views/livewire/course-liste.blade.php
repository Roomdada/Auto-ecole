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
                          <a href="elearning.html" class=" btn btn-sm btn-primary shadow-sm">Retour</a>
                          <a class="btn btn-success btn-sm shadow-sm"  href="ajoutercours.html">Ajouter un Cours</a>
                        </h6>
                      </div>
                      <div class="card-body">

                        <div class="row justify-content-center">
                          <!-- course item -->
                          @foreach ($courses as $item)
                          	{{-- expr --}}
                          <div class="col-lg-4 col-sm-6 mb-5">
                            <div class="card p-0 border-gray rounded-0 hover-shadow">
                              <img class="card-img-top rounded-0" src="{{ asset("$item->image") }}" alt="course thumb" width="250" height="250">
                              <div class="card-body">
                                <a href="course-single.html">
                                  <h4 class="card-title">{{$item->title}}</h4>
                                </a>
                                <ul class="list-inline mb-2">
                                  <li class="list-inline-item"><a class="text-color" href="#">{{$item->lesson_count}} Leçons</a></li>
                                </ul>
                                <p class="card-text mb-4">{{$item->description}}</p>
                                <a href="{{ route('course.details.path',$item->token) }}" class="btn btn-primary btn-sm">Voir le cours</a>
                              </div>
                            </div>
                          </div>

                          @endforeach

                     
                        </div>
                          <div class="container mt-4">
                            {{$courses->links()}}
                          </div>
                    </div>
                 <!-- End-->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
@stop
</div>

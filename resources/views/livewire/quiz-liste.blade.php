<div>
   @extends('layouts.app')
   @section('content')
 <div class="container-fluid">
                    <div class="mb-4 text-center">
                      <h1 class="h3 mb-0 text-gray-800">Administration  E-learning</h1>
                    </div>
                    <div class="card shadow mb-4">
                      <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"> Profil Administreur 
                          <a href="elearning.html" class=" btn btn-sm btn-primary shadow-sm">Retour</a>
                          <a class="btn btn-success btn-sm shadow-sm"  href="ajouterexamen.html">Ajouter un Examen</a>
                        </h6> 
                      </div>
                      <div class="card-body">
                            <div class="row">
                              <div class="col-12">
                                <ul class="list-unstyled">
                                  <!-- notice item -->
                                  @foreach ($quizzes as $item)
                                  	{{-- expr --}}
                                  <li class="d-md-table mb-4 w-100 border-bottom hover-shadow">
                                    <div class="d-md-table-cell text-center p-4 bg-gradient-info text-white mb-4 mb-md-0">TEST<span class="h2 d-block">N°{{$item->id}}</span></div>
                                    <div class="d-md-table-cell px-4 vertical-align-middle mb-4 mb-md-0">
                                      <a href="#" class="h4 mb-2 text-gray-800">ENPC 6 (Evaluation de depart)</a>
                                      <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt perferendis saepe omnis officia! Doloribus quae maiores laboriosam praesentium enim fugiat ipsam laudantium assumenda!</p>
                                    </div>
                                    <div class="d-md-table-cell text-right pr-0 pr-md-4"><a href="#" class="btn btn-primary btn-sm">Modifier</a>
                                      <a href="#" class="btn btn-danger btn-sm">Supprimer</a></div>
                                  </li>
                                  @endforeach
                                </ul>
                              </div>
                            </div>

                      </div>
                 <!-- End-->


        </div>
        <!-- /.container-fluid -->

      </div>

@stop
</div>

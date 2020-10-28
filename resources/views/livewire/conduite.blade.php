<div>
   @extends('layouts.app')

@section('content')
<div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="mb-4 text-center">
                      <h1 class="h3 mb-0 text-gray-800">Cours de Conduite</h1>
                    </div>
                 
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
                                  <div class="col-lg-4 mb-4">
                                    <div class="card bg-gradient-primary text-white shadow">
                                      <div class="card-body">
                                      <div class="col-auto">
                                       
                                      </div>
                                        <a href="#" class="text-white" data-toggle="modal" data-target="#ImpriModal">Imprimer Fiche de conduite</a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-4 mb-4">
                                    <div class="card bg-gradient-primary text-white shadow">
                                      <div class="card-body">
                                      <div class="col-auto">
                                        
                                      </div>

                                      <a href="program2conduite.html" class="text-white">Programme de conduite</a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-4 mb-4">
                                    <div class="card bg-gradient-primary text-white shadow">
                                      <div class="card-body">
                                      <div class="col-auto">
                                       
                                      </div>
                                        <a href="parcauto.html" class="text-white">Parc Automobile</a>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                          </table>
                      </div>
                      
                    </div>
                 <!-- End-->
        </div>
        <!-- /.container-fluid -->
      </div>


@stop
</div>

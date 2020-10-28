<div>
@extends('layouts.app')

@section('content')

 <div class="container-fluid">


   <!-- Begin Page Content -->
        <div class="container-fluid">


                    <!-- Page Heading -->
                    <div class="mb-4 text-center">
                      <h1 class="h3 mb-0 text-gray-800">Administration  Auto-Ecole</h1>
                    </div>
           
                    <!-- Content Row -->
                    <div class="row">

                      <!-- Earnings (Monthly) Card Example -->
                      <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                          <div class="card-body">
                            <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Somme Total</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">215,000 Fcfa</div>
                              </div>
                              <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
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
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Somme Versé</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">200,000 Fcfa</div>
                              </div>
                              <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
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
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Reste a Versé</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">15.000 Fcfa</div>
                              </div>
                              <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
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
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Depenses Total</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">60.000f</div>
                              </div>
                              <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
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
                                  <div class="col-lg-4 mb-4">
                                    <div class="card bg-gradient-primary text-white shadow">
                                      <div class="card-body">
                                      <div class="col-auto">
                                       
                                      </div>
                                        <a href="#" class="text-white" data-toggle="modal" data-target="#AjoutDepense">Ajouter une dépense</a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-4 mb-4">
                                    <div class="card bg-gradient-primary text-white shadow">
                                      <div class="card-body">
                                      <div class="col-auto">
                                        
                                      </div>

                                      <a href="{{ route('depense.path') }}" class="text-white">Consulter liste des dépenses</a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-4 mb-4">
                                    <div class="card bg-gradient-primary text-white shadow">
                                      <div class="card-body">
                                      <div class="col-auto">
                                        
                                      </div>

                                      <a href="#" class="text-white" data-toggle="modal" data-target="#Caisse">Versements</a>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                          </table>
                      </div>
                      
                    </div>
                
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


@stop
</div>

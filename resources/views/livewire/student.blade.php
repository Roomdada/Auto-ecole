<div>
@extends('layouts.app')
@section('content')
  <div class="container-fluid">


                    <!-- Page Heading -->
                    <div class="mb-4 text-center">
                      <h1 class="h3 mb-0 text-gray-800">Mon Auto-Ecole</h1>
                    </div>
                 
                    <div class="card shadow mb-4">
                      <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"> Profil Administreur
                        	<a href="myautoecole.html" class=" btn btn-sm btn-primary shadow-sm">Retour</a>
                        </h6>
                      </div>
                      <div class="card-body">
                        <div class="table-responssive">
                          <table class="table table-bordered" width="100%" cellpadding="0">
                							    <div class="row">
                							      <div class="col-12">
                							        <h3>Nouveau Permis</h3>
                							      </div>
                							      <!-- speakers -->



                							      @foreach ($students as $item)
                							      	{{-- expr --}}
                							      <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0 mt-4 shadow p-1">
                							        <div class="media">
                							          <a href="profiluser.html"><img class="mr-3 img-fluid" src="img/1.jpg" alt="speaker" width="120" height="120"></a>
                							          <div class="media-body">
                							           <h5 class="mt-0"><b>{{$item->firstname}}</b></h5>
                							            Permis :<span class="btn-danger text-white p-1 rounded">{{$item->driver_license->name}}</span> <br>
                							            Inscrit :  {{$item->created_at->diffForHumans()}} <br>
                							            Tel: {{$item->contact}} <br>
                							            <span class="text-primary"><b><i>Attente visite médicale</i></b></span>
                							          </div>
                							        </div>
                							      </div>
                							      @endforeach

                							      	<div class="container mt-4">
                							      		{{ $students->links() }}
                							      	</div>

                							      <!-- speakers -->
                							      
                							      <!-- speakers -->
                							    

                							      <!-- speakers -->
                							      
                							      <!-- speakers -->
                							      
                							      <!-- border -->
                							      <div class="col-12 mt-4 order-4">
                							        <div class="border-bottom border-primary"></div>
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

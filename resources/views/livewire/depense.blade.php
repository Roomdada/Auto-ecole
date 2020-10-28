<div>
@extends('layouts.app')

@section('content')

      <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="mb-4 text-center">
                      <h1 class="h3 mb-0 text-gray-800">Mon Auto-Ecole</h1>
                      <a href="#" class=" d-sm-inline-block btn btn-sm btn-success shadow-sm mt-2"><i class="fas fa-download fa-sm text-white-50"></i> Imprimer</a>
                    </div>

                 
                    <div class="card shadow mb-4">
                      <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"> Profil Administreur 
                          <a href="comptabilite.html.html" class=" btn btn-sm btn-primary shadow-sm">Retour</a>
                           <a href="#" class=" btn btn-sm btn-info shadow-sm" data-toggle="modal" data-target="#Option">Option de recherche</a>
                        </h6>
                    </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>N°</th>
                      <th>Type</th>
                      <th>Libellé</th>
                      <th>Montant Fcfa</th>
                      <th>Numéros de factures </th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Loyer</td>
                      <td>Magazin</td>
                      <th>250.000</th>
                      <td>RIV002345</td>
                      <td>05/10/2020</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Salaire</td>
                      <td>Sécretaire</td>
                      <td>60.000</td>
                      <td>Neant</td>
                      <td>07/10/2020</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Carburant</td>
                      <td>Véhicul 1</td>
                      <td>15.000</td>
                      <td>Neant</td>
                      <td>04/09/2020</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- End--> 
        </div>
        <!-- /.container-fluid -->

      </div>

@stop
</div>

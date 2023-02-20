@extends('layout.app')
    @section('content')
    <div class="container">
        <div class="row" style="margin:20px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center bg-dark text-white">
                        <h2>Liste Des Candidats par sexe  </h2>
                    </div>
                    <div  class="card-body text-center bg-dark text-white">
                        <div class="table-responsive">
                        <div class="card-header text-center bg-primary"><h2>Listes des Homme </h2></div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>email</th>
                                        <th>Ages</th>
                                        <th>Niveau D'Etude </th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($homme as $candida)
                                    <tr>
                                        <td>{{ $candida->id}}</td>
                                        <td>{{ $candida->nom}}</td>
                                        <td>{{ $candida->prenom}}</td>
                                        <td>{{ $candida->email}}</td>
                                        <td>{{ $candida->age}}</td>
                                        <td>{{ $candida->niveauEtude}}</td>
                                      
                                    </tr>
                                   @endforeach 
                                </tbody>
                            </table>
                        </div>
                            <hr>
                            <div class="table-responsive">
                            <div class="card-header text-center bg-primary"><h2>Listes des Femme </h2></div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>email</th>
                                        <th>Ages</th>
                                        <th>Niveau D'Etude </th>
                            
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($Femme as $candid)
                                    <tr>
                                        <td>{{ $candid->id}}</td>
                                        <td>{{ $candid->nom}}</td>
                                        <td>{{ $candid->prenom}}</td>
                                        <td>{{ $candid->email}}</td>
                                        <td>{{ $candid->age}}</td>
                                        <td>{{ $candid->niveauEtude}}</td>
                                
                                    </tr>
                                   @endforeach 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

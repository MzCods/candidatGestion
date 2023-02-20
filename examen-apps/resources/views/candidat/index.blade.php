@extends('layout.app')
    @section('content')
    <div class="container">
        <div class="row" style="margin:20px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center bg-primary">
                        <h2>Listes des Candidats</h2>
                    </div>
                    <div  class="card-body text-center bg-dark text-white">
                        <div class="table-responsive ">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NON</th>
                                        <th>PRENOM</th>
                                        <th>EMAIL</th>
                                        <th>AGES</th>
                                        <th>NIVEAU_ETUDE </th>
                                        <th>SEXE</th>
                                        <th>FORMATION</th>
                                        <th>SUPPRIMER</th>
                                        <th>MODIFIER</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($candidat as $candida)
                                    <tr>
                                        <td>{{ $candida->id}}</td>
                                        <td>{{ $candida->nom}}</td>
                                        <td>{{ $candida->prenom}}</td>
                                        <td>{{ $candida->email}}</td>
                                        <td>{{ $candida->age}}</td>
                                        <td>{{ $candida->niveauEtude}}</td>
                                        <td>{{ $candida->Sexe}}</td>
                                        <td>
                                        @foreach($candida->formations as $candi)
                                            {{$candi->nom}} <br>
                                        @endforeach   
                                        </td>  

                                        <td>
                                            <a href="{{ route('delect',['id'=>$candida->id]) }}" class="btn btn-primary">Supprimer le candidat </a>
                                        </td>

                                        <td>
                                            <a href="{{ route('updatepage',['id'=>$candida]) }}" class="btn btn-primary">Modifier le candidat </a>
                                        </td>
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

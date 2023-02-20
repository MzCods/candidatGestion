@extends('layout.app')
    @section('content')
    <div class="container">
        <div class="row" style="margin:20px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <h2>LISTES DES FORMATIONS</h2>
                    </div>
                    <div class="card-body text-center bg-dark text-white">
                       
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NOM</th>
                                        <th>DUREE</th>
                                        <th>REFERENTIEL</th>
                                        <th>TYPES</th>
                                        <th>NOMBRE_CANDIDATS</th>
                                        <th>DEBUTER</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($formation as $formations)
                                    <tr>
                                        <td>{{ $formations->id}}</td>
                                        <td>{{ $formations->nom}}</td>
                                        <td>{{ $formations->duree}} heure </td>

                                        <td>
                                        @foreach($formations->referentiel as $form)
                                                {{$form->libeller }} <br>
                                        @endforeach 
                                        </td>
                                        <td>
                                        @foreach($formations->referentiel as $form)
                                                {{$form->type->libeller}} <br>
                                        @endforeach 
                                        </td>

                                        <td>{{ $formations->candidats->count()}} candidats  </td>  


                                        <td>
                                            <a href="{{ route('homepage',['id'=>$formations->id]) }}" class="btn btn-primary">Participer</a>
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
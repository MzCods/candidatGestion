@extends('layout.app')

    @section('content')
    <div class="container">
        <div class="row" style="margin:20px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <h2> LISTES DES REFERENTIELS </h2>
                    </div>
                    <div class="card-body text-center bg-dark text-white">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>libeller</th>
                                        <th>valideted</th>
                                        <th>horaire</th>
                                        <th>Nombre de Formation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($referent as $refer)
                                    <tr>
                                        <td>{{ $refer->id}}</td>
                                        <td>{{ $refer->libeller}}</td>
                                        <td>{{ $refer->valideted}}</td>
                                        <td>{{ $refer->horaire}}</td>
                                       
                                        <td>
                                        {{$refer->formations->count()}} formations
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

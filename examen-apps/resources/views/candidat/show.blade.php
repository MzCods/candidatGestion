@extends('layout.app')
    @section('content')
    <div class="container mt-5">
           
            <div class="card mt-5 col-12 offset-md-0">
                <div class="h4 text-center bg-primary p-2 text-white">Formulaire d'ajout du Candidats </div>
                <div class="card-body text-center card-body text-center bg-dark text-white">
                <form action="/update" class="align-middle" method="post">
                        @csrf
                        <div class="row col-md-12 mt-3">
                            <label for="" class="col-md-4 h5 text-left pt-1">Nom</label>
                            <input name="nom" type="text" class="form-control col-md-8">
                        </div>

                        <div class="row col-md-12 mt-3">
                            <label for="" class="col-md-4 h5 text-left pt-1">Prenom</label>
                            <input name="prenom" type="text" class="form-control col-md-8">
                        </div>

                        <div class="row col-md-12 mt-3">
                            <label for="" class="col-md-4 h5 text-left pt-1">Email</label>
                            <input name="email" type="text" class="form-control col-md-8">
                        </div>

                        <div class="row col-md-12 mt-3">
                            <label for="" class="col-md-4 h5 text-left pt-1">Age</label>
                            <input name="age" type="number" class="form-control col-md-8">
                        </div>

                        <div class="row col-md-12 mt-3">
                            <label for="" class="col-md-4 h5 text-left pt-1">Niveau D'Etude </label>
                            <input name="niveauEtude" type="text" class="form-control col-md-8">
                        </div>

                        <div class="row col-md-12 mt-3">
                            <label for="" class="col-md-4 h5 text-left pt-1">Sexe</label>
                            <select name="sexe" class="form-control col-md-8">
                                <option value="Homme">Homme</option>
                                <option value="Femme">Femme</option>
                            </select>
                        
                        </div>
                        
                        <br>
                       <div class="row col-md-12 mt-3">
                       <input name="id" type="hidden" value="{{$id}}">
                       <button type="submit" class="btn btn-success btn-lg">Enregistrer</button>

                       </div>
                        
                    </form>

                </div>
            </div>
        </div>
@endsection
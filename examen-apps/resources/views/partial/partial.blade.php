
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card bg-dark my-5">
        <div class="card-body">
          <h2 class="card-title text-center text-white py-3">GESTION DES CANDIDATS</h2>
          <ul class="text-center list-inline py-3">
            <li class="list-inline-item">
                <a class="nav-link active h4" aria-current="page" href="{{ route ('formation') }}">Nos_Formations</a>
                </li>
            <li class="list-inline-item">
            <a class="nav-link active h4" aria-current="page" href=" {{ route ('referentiel') }}">Nos_Referentiel</a>
                </li>

            <li class="list-inline-item">
            <a class="nav-link active h4" aria-current="page" href=" {{ route ('liste/sexe') }}">Candidats_Inscrit/sexe </a>
                </li>

            <li class="list-inline-item">
            <a class="nav-link active h4" aria-current="page" href=" {{ route ('liste') }}">Candidats inscrit </a>
                </li>

            <li class="list-inline-item">
            <a class="nav-link active h4" aria-current="page" href=" {{ route ('TrancheChart') }}">Graphique des tranche d'ages </a>
                </li>
          </ul>
        </div>
      </div>
      <router-outlet></router-outlet> 
    </div>
  </div>
</div>

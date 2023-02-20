@extends('layout.app')
@section('content')
<div class="container">
        <div class="row mt-5">
            <div class="col-6">
                <h3>Graphe representant les tranches d'age</h3>
                <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom"></div>
                <div class="col">

                    <canvas id="ageGraph"></canvas>

                </div>
            </div>
        </div>
</div>


        




    <script src="{{asset('js/chart.js')}}"></script>
<!-- Script pour initialiser le graphe -->
<script>
    var tranches_age = <?php echo json_encode($tranches_age); ?>;
    var nb_candidats = <?php echo json_encode($nb_candidats); ?>;

    // Créer un nouveau graphe
    var ctx = document.getElementById('ageGraph').getContext('2d');
    var ageGraph = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: tranches_age,
            datasets: [{
                label: 'Nombre de candidats',
                data: nb_candidats,
                backgroundColor: '#2196F3'
            }]
        },
        options: {
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

</script>

@endsection












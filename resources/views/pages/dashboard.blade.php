@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Patients</p>
                                    <h5 class="font-weight-bolder">
                                        {{ $patients }}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-info shadow-primary text-center rounded-circle">
                                    <i class="fa-solid fa-hospital-user text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Scheduled Patients</p>
                                    <h5 class="font-weight-bolder">
                                        {{ $schedule }}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-info shadow-success text-center rounded-circle">
                                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3 mb-3">
            <div class="col-xl-12 col-md-12 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <h6 class="font-weight-bolder text-uppercase">Inventory</h6>
                        </div>

                        <div class="row mt-3 mb-3">
                            <div class="col-xl-4 col-sm-4 mb-xl-0 mb-4">
                                <div class="card">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="numbers">
                                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Cardiac Drugs</p>
                                                    <h5 class="font-weight-bolder">
                                                        {{ $inventory['cardiac-drugs'] }}
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-4 text-end">
                                                <div class="icon icon-shape bg-gradient-info shadow-primary text-center rounded-circle">
                                                    <i class="fa-solid fa-pills text-lg opacity-10" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-xl-4 col-sm-4 mb-xl-0 mb-4">
                                <div class="card">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="numbers">
                                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Antibiotics</p>
                                                    <h5 class="font-weight-bolder">
                                                        {{ $inventory['antibiotics'] }}
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-4 text-end">
                                                <div class="icon icon-shape bg-gradient-info shadow-primary text-center rounded-circle">
                                                    <i class="fa-solid fa-capsules text-lg opacity-10" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-4 mb-xl-0 mb-4">
                                <div class="card">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="numbers">
                                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Ear Meds</p>
                                                    <h5 class="font-weight-bolder">
                                                        {{ $inventory['ear-meds'] }}
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-4 text-end">
                                                <div class="icon icon-shape bg-gradient-info shadow-primary text-center rounded-circle">
                                                    <i class="fa-solid fa-tablets text-lg opacity-10" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
                                <div class="card">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="numbers">
                                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Topicals</p>
                                                    <h5 class="font-weight-bolder">
                                                        {{ $inventory['topicals'] }}
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-4 text-end">
                                                <div class="icon icon-shape bg-gradient-info shadow-primary text-center rounded-circle">
                                                    <i class="fa-solid fa-prescription text-lg opacity-10" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
                                <div class="card">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="numbers">
                                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Anti-Inflammatory</p>
                                                    <h5 class="font-weight-bolder">
                                                        {{ $inventory['anti-inflammatory'] }}
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-4 text-end">
                                                <div class="icon icon-shape bg-gradient-info shadow-primary text-center rounded-circle">
                                                    <i class="fa-solid fa-prescription-bottle text-lg opacity-10" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div id="columnchart_material" style="width: 730px; height: 500px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div id="piechart" style="width: 770px; height: 500px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.load("current", {packages:["corechart"]});

        google.charts.setOnLoadCallback(drawChartBar);
        google.charts.setOnLoadCallback(drawChartPie);

        function drawChartBar() {
            var dataBar = google.visualization.arrayToDataTable([
                ['Year', 'Illness 1', 'Illness 2', 'Illness 3', 'Illness 4', 'Illness 5'],
                ['2022', 1000, 400, 200, 300, 500]
            ]);

            var optionsBar = {
                chart: {
                title: 'Patient with Illness Forecast',
                subtitle: 'Low, Medium and Severe Cases: 2022',
            }
        };

            var chartBar = new google.charts.Bar(document.getElementById('columnchart_material'));

            chartBar.draw(dataBar, google.charts.Bar.convertOptions(optionsBar));
        }

        function drawChartPie() {
            var dataPie = google.visualization.arrayToDataTable([
                ['Medicines', 'Quantity'],
                ['Brand 1',     20],
                ['Brand 2',      19],
                ['Brand 3',  15]
            ]);

            var optionsPie = {
                title: 'Top 3 Most Used Medicines',
                is3D: true,
            };

            var chartPie = new google.visualization.PieChart(document.getElementById('piechart'));
            chartPie.draw(dataPie, optionsPie);
      }
    </script>
@endpush

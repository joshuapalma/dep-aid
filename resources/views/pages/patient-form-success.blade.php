<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png">
        <link rel="icon" type="image/png" href="/img/logos/DEP-AID.png">
        <title>
            DEP-AID
        </title>

        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Nucleo Icons -->
        <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- CSS Files -->
        <link id="pagestyle" href="assets/css/argon-dashboard.css" rel="stylesheet" />
        <link href="./assets/css/custom.css" rel="stylesheet" />
    </head>
    <body style="background-image: url('img/medical.svg'); background-size: 70vw; display: absolute; background-attachment: fixed; background-repeat:no-repeat; background-position: center;"> 
        <div class="container-fluid">
            <div class="row mt-5 mb-5">
                <div class="col-lg-3 col-md-4 col-4 text-center">
                    <img src="{{ asset('img/logos/dep-ed.png') }}" height="100">
                </div>
                <div class="col-lg-6 col-md-4 col-4 text-center">
                    <img src="{{ asset('img/logos/DEP-AID.png') }}" height="100">
                </div>
                <div class="col-lg-3 col-md-4 col-4 text-center">
                    <img src="{{ asset('img/logos/deped-malaybalay.jpg') }}" height="100">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card card-frame mt-5 mb-5 w-50 mx-auto" style="background-color: #11ceefb3 !important;">
                        <div class="card-body">
                            <div class="row mb-5">
                                <div class="col-md-12">
                                    <h5 class="fw-bold text-center">Thanks for filling out our form!</h5>
                                    <h6 class="fw-bold text-center">We will look over your submitted form and get back to you as soon as possible. Thank you</h6>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <a href={{ route('patient-form') }} class="btn btn-success w-100">Back to Home</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

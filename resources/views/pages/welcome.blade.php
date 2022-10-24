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
    <body>
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-3 col-md-2 text-center">
                    <img src="{{ asset('img/logos/dep-ed.png') }}" height="100">
                </div>
                <div class="col-lg-6 col-md-6 text-center">
                    <img src="{{ asset('img/logos/DEP-AID.png') }}" height="100">
                </div>
                <div class="col-lg-3 col-md-2 text-center">
                    <img src="{{ asset('img/logos/deped-malaybalay.jpg') }}" height="100">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card card-frame mt-5 mb-5 w-50 mx-auto" style="background-color: #00ff50b0;">
                        <div class="card-header" style="background-color: #4fff86;">
                            <h6 class="text-center text-black">Please provide the following informations</h6>
                        </div>
                        <form>
                            <div class="card-body">
                                <div class="row">
                                  @component('components.inputs.input')
                                    @slot('label', 'Name')
                                    @slot('attributes', [
                                        'class' => 'form-control text-black',
                                        'type' => 'text',
                                        'name' => 'name',
                                        'id' => 'name',
                                        'placeholder' => 'Name'
                                    ])          
                                  @endcomponent
                                </div>
                                <div class="row">
                                  @component('components.inputs.input')
                                    @slot('label', 'Age')
                                    @slot('attributes', [
                                        'class' => 'form-control text-black',
                                        'type' => 'number',
                                        'name' => 'age',
                                        'id' => 'age',
                                        'placeholder' => 'Age'
                                    ])          
                                  @endcomponent
                                </div>
                                <div class="row">
                                  @component('components.inputs.select')
                                    @slot('label', 'Gender')
                                    @slot('options', [0 => 'Male', 1 => 'Female'])
                                    @slot('attributes', [
                                        'class' => 'form-control',
                                        'name' => 'gender',
                                        'id' => 'gender',
                                        'value' => '',
                                        'placeholder' => 'Select'
                                    ])          
                                  @endcomponent
                                </div>
                                <div class="row">
                                  @component('components.inputs.input')
                                    @slot('label', 'Address')
                                    @slot('attributes', [
                                        'class' => 'form-control text-black',
                                        'type' => 'text',
                                        'name' => 'address',
                                        'id' => 'address',
                                        'placeholder' => 'Address'
                                    ])          
                                  @endcomponent
                                </div>
                                <div class="row mt-3 mb-3">
                                  <h6 class="text-center text-black">Only if available</h6>
                                </div>
                                <div class="row">
                                  <div class="col-lg-6 col-md-12">
                                    @component('components.inputs.input')
                                      @slot('label', 'Vital Signs')
                                      @slot('attributes', [
                                          'class' => 'form-control text-black',
                                          'type' => 'text',
                                          'name' => 'vital_signs',
                                          'id' => 'vital_signs',
                                          'placeholder' => 'Vital Signs'
                                      ])          
                                    @endcomponent
                                  </div>
                                  <div class="col-lg-6 col-md-12">
                                    @component('components.inputs.input')
                                      @slot('label', 'Heart Rate')
                                      @slot('attributes', [
                                          'class' => 'form-control text-black',
                                          'type' => 'text',
                                          'name' => 'heart_rate',
                                          'id' => 'heart_rate',
                                          'placeholder' => 'Heart Rate'
                                      ])          
                                    @endcomponent
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-lg-6 col-md-12">
                                    @component('components.inputs.input')
                                      @slot('label', 'Blood Pressure')
                                      @slot('attributes', [
                                          'class' => 'form-control text-black',
                                          'type' => 'text',
                                          'name' => 'blood_pressure',
                                          'id' => 'blood_pressure',
                                          'placeholder' => 'Blood Pressure'
                                      ])          
                                    @endcomponent
                                  </div>
                                  <div class="col-lg-6 col-md-12">
                                    @component('components.inputs.input')
                                      @slot('label', 'Temperature')
                                      @slot('attributes', [
                                          'class' => 'form-control text-black',
                                          'type' => 'text',
                                          'name' => 'temperature',
                                          'id' => 'temperature',
                                          'placeholder' => 'Temperature'
                                      ])          
                                    @endcomponent
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-lg-6 col-md-12">
                                    @component('components.inputs.input')
                                      @slot('label', 'Oxygen Saturation')
                                      @slot('attributes', [
                                          'class' => 'form-control text-black',
                                          'type' => 'text',
                                          'name' => 'oxygen_saturation',
                                          'id' => 'oxygen_saturation',
                                          'placeholder' => 'Oxygen Saturation'
                                      ])          
                                    @endcomponent
                                  </div>
                                  <div class="col-lg-6 col-md-12">
                                    @component('components.inputs.input')
                                      @slot('label', 'Reason for Consultation')
                                      @slot('attributes', [
                                          'class' => 'form-control text-black',
                                          'type' => 'text',
                                          'name' => 'reason_for_consultation',
                                          'id' => 'reason_for_consultation',
                                          'placeholder' => 'Reason for Consultation'
                                      ])          
                                    @endcomponent
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-lg-6 col-md-12">
                                    @component('components.inputs.input')
                                      @slot('label', 'Allergies')
                                      @slot('attributes', [
                                          'class' => 'form-control text-black',
                                          'type' => 'text',
                                          'name' => 'allergies',
                                          'id' => 'allergies',
                                          'placeholder' => 'Allergies'
                                      ])          
                                    @endcomponent
                                  </div>
                                  <div class="col-lg-6 col-md-12">
                                    @component('components.inputs.input')
                                      @slot('label', 'Maintenance Medications')
                                      @slot('attributes', [
                                          'class' => 'form-control text-black',
                                          'type' => 'text',
                                          'name' => 'maintenance_medications',
                                          'id' => 'maintenance_medications',
                                          'placeholder' => 'Maintenance Medications'
                                      ])          
                                    @endcomponent
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-lg-6 col-md-12">
                                    @component('components.inputs.input')
                                      @slot('label', 'Current Medications')
                                      @slot('attributes', [
                                          'class' => 'form-control text-black',
                                          'type' => 'text',
                                          'name' => 'current_medications',
                                          'id' => 'current_medications',
                                          'placeholder' => 'Current Medications'
                                      ])          
                                    @endcomponent
                                  </div>
                                </div>
                                <div class="row">
                                  <button type="submit" class="btn bg-gradient-info">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

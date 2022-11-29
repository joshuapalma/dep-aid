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
    {{-- <body style="background-image: url('img/medical.svg'); background-size: 70vw; display: absolute; background-attachment: fixed; background-repeat:no-repeat; background-position: center;"> 
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-3 col-md-4 col-4 text-center">
                    <img src="{{ asset('img/logos/dep-ed.png') }}" height="100">
                </div>
                <div class="col-lg-6 col-md-4 col-4 text-center">
                    <img src="{{ asset('img/logos/DEP-AID.png') }}" height="100">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card card-frame mt-5 mb-5 w-50 mx-auto" style="background-color: #11ceefb3 !important;">
                        <div class="card-header" style="background-color: #11ceefb3  !important;">
                            <h6 class="text-center text-black">Please provide the following informations</h6>
                        </div>
                        <form action="{{ route('patient-form.store') }}" method="POST" id="add-patient-form" enctype="multipart/form-data">
                          @csrf
                            <div class="card-body">
                              <div class="tab">
                                <div class="row">
                                  @component('components.inputs.input')
                                    @slot('label', 'Name')
                                    @slot('attributes', [
                                        'class' => 'form-control text-black',
                                        'type' => 'text',
                                        'name' => 'name',
                                        'id' => 'name',
                                        'placeholder' => 'Name',
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
                                    @slot('label', 'Birthdate')
                                    @slot('attributes', [
                                        'class' => 'form-control text-black',
                                        'type' => 'date',
                                        'name' => 'birthdate',
                                        'id' => 'birthdate',
                                        'placeholder' => 'Birthdate'
                                    ])          
                                  @endcomponent
                                </div>
                                <div class="row">
                                  @component('components.inputs.input')
                                    @slot('label', 'Height')
                                    @slot('attributes', [
                                        'class' => 'form-control text-black',
                                        'type' => 'text',
                                        'name' => 'height',
                                        'id' => 'height',
                                        'placeholder' => 'Height'
                                    ])          
                                  @endcomponent
                                </div>
                                <div class="row">
                                  @component('components.inputs.input')
                                    @slot('label', 'Weight')
                                    @slot('attributes', [
                                        'class' => 'form-control text-black',
                                        'type' => 'text',
                                        'name' => 'weight',
                                        'id' => 'weight',
                                        'placeholder' => 'Weight'
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
                                <div class="row">
                                  @component('components.inputs.input')
                                    @slot('label', 'Contact Number')
                                    @slot('attributes', [
                                        'class' => 'form-control text-black',
                                        'type' => 'number',
                                        'name' => 'contact-number',
                                        'id' => 'contact-number',
                                        'placeholder' => 'Contact Number'
                                    ])          
                                  @endcomponent
                                </div>
                              </div>
                              
                              <div class="tab">
                                <div class="row mt-3 mb-3">
                                  <h6 class="text-center text-black">Vital Signs (If Available)</h6>
                                </div>
                                <div class="row">
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
                                </div>
                                <div class="row">
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
                                </div>
                                <div class="row">
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
                                </div>
                                <div class="row">
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
                              </div>

                              <div class="tab">
                                <div class="row mt-3 mb-3">
                                  <h6 class="text-center text-black">Date for Consultation</h6>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label for="example-date-input" class="form-control-label">Date</label>
                                      <input class="form-control" type="date" value="" id="date-for-consultation">
                                    </div>
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <div class="col-md-12">
                                    <div class="card">
                                      <div class="table-responsive">
                                        <table class="table align-items-center mb-0">
                                          <thead>
                                            <tr>
                                              <th class="text-secondary opacity-7"></th>
                                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Position</th>
                                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Availability</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td>
                                                <div class="d-flex px-2 py-1">
                                                  <div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                    </div>
                                                  </div>
                                                  <div>
                                                    <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                                  </div>
                                                  <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-xs">John Michael</h6>
                                                    <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                                  </div>
                                                </div>
                                              </td>
                                              <td>
                                                <p class="text-xs font-weight-bold mb-0">Manager</p>
                                                <p class="text-xs text-secondary mb-0">Organization</p>
                                              </td>
                                              <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm badge-success">Online</span>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                              <div style="overflow:auto;">
                                <div style="float:right;">
                                  <button type="button" class="btn btn-success me-3" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                  <button type="button" class="btn btn-success" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                </div>
                              </div>
                              
                              <!-- Circles which indicates the steps of the form: -->
                              <div style="text-align:center;margin-top:40px;">
                                <span class="step"></span>
                                <span class="step"></span>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body> --}}
    <main class="main-content  mt-0">
      <section>
          <div class="page-header min-vh-100">
              <div class="container">
                  <div class="row">
                      <div class="col-xl-6 col-lg-6 col-md-12 d-flex flex-column mx-lg-0 mx-auto">
                          <div class="card card-plain">
                              <div class="card-header pb-0 text-center">
                                <div class="row mt-5">
                                  <div class="col-lg-6 col-md-6 col-6 text-center">
                                      <img src="{{ asset('img/logos/dep-ed.png') }}" height="100">
                                  </div>
                                  <div class="col-lg-6 col-md-6 col-6 text-center">
                                      <img src="{{ asset('img/logos/DEP-AID.png') }}" height="100">
                                  </div>
                                </div>
                              </div>
                              <div class="card-body">
                                  <h6 class="text-center text-black">Please provide the following informations</h6>
                                  <form role="form" method="POST" action="{{ route('patient-form.store') }}" id="add-patient-form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="tab">
                                      <div class="row">
                                        <div class="col-md-12 col-lg-6">
                                          @component('components.inputs.input')
                                            @slot('label', 'Name')
                                            @slot('attributes', [
                                                'class' => 'form-control text-black',
                                                'type' => 'text',
                                                'name' => 'name',
                                                'id' => 'name',
                                                'placeholder' => 'Name',
                                            ])          
                                          @endcomponent
                                        </div>
                                        <div class="col-md-12 col-lg-6">
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
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12 col-lg-6">
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
                                        <div class="col-md-12 col-lg-6">
                                          @component('components.inputs.input')
                                            @slot('label', 'Birthdate')
                                            @slot('attributes', [
                                                'class' => 'form-control text-black',
                                                'type' => 'date',
                                                'name' => 'birthdate',
                                                'id' => 'birthdate',
                                                'placeholder' => 'Birthdate'
                                            ])          
                                          @endcomponent
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12 col-lg-6">
                                          @component('components.inputs.input')
                                            @slot('label', 'Height')
                                            @slot('attributes', [
                                                'class' => 'form-control text-black',
                                                'type' => 'text',
                                                'name' => 'height',
                                                'id' => 'height',
                                                'placeholder' => 'Height'
                                            ])          
                                          @endcomponent
                                        </div>
                                        <div class="col-md-12 col-lg-6">
                                          @component('components.inputs.input')
                                            @slot('label', 'Weight')
                                            @slot('attributes', [
                                                'class' => 'form-control text-black',
                                                'type' => 'text',
                                                'name' => 'weight',
                                                'id' => 'weight',
                                                'placeholder' => 'Weight'
                                            ])          
                                          @endcomponent
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12 col-lg-6">
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
                                        <div class="col-md-12 col-lg-6">
                                          @component('components.inputs.input')
                                            @slot('label', 'Contact Number')
                                            @slot('attributes', [
                                                'class' => 'form-control text-black',
                                                'type' => 'number',
                                                'name' => 'contact-number',
                                                'id' => 'contact-number',
                                                'placeholder' => 'Contact Number'
                                            ])          
                                          @endcomponent
                                        </div>
                                      </div>
                                    </div>
                                    
                                    <div class="tab">
                                      <div class="row mt-3 mb-3">
                                        <h6 class="text-center text-black">Vital Signs (If Available)</h6>
                                      </div>
                                      <div class="row">
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
                                      </div>
                                      <div class="row">
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
                                      </div>
                                      <div class="row">
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
                                      </div>
                                      <div class="row">
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
                                    </div>

                                    <div class="tab">
                                      <div class="row mt-3 mb-3">
                                        <h6 class="text-center text-black">Date for Consultation</h6>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <label for="example-date-input" class="form-control-label">Date</label>
                                            <input class="form-control" type="date" value="" id="date-for-consultation">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row mb-3">
                                        <div class="col-md-12">
                                          <div class="card">
                                            <div class="table-responsive">
                                              <table class="table align-items-center mb-0">
                                                <thead>
                                                  <tr>
                                                    <th class="text-secondary opacity-7"></th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Position</th>
                                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Availability</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td>
                                                      <div class="d-flex px-2 py-1">
                                                        <div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                          </div>
                                                        </div>
                                                        <div>
                                                          <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                          <h6 class="mb-0 text-xs">John Michael</h6>
                                                          <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                                        </div>
                                                      </div>
                                                    </td>
                                                    <td>
                                                      <p class="text-xs font-weight-bold mb-0">Manager</p>
                                                      <p class="text-xs text-secondary mb-0">Organization</p>
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                      <span class="badge badge-sm badge-success">Online</span>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div style="overflow:auto;">
                                      <div style="float:right;">
                                        <button type="button" class="btn btn-success me-3" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                        <button type="button" class="btn btn-success" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                      </div>
                                    </div>
                                    
                                    <!-- Circles which indicates the steps of the form: -->
                                    <div style="text-align:center;margin-top:40px;">
                                      <span class="step"></span>
                                      <span class="step"></span>
                                    </div>
                                    
                                  </form>
                              </div>
                          </div>
                      </div>
                      <div
                          class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                          <div class="position-relative h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                              style="background-image: url('img/medical.svg');
            background-size: cover;">
                              <span class="mask opacity-6"></span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      var currentTab = 0; // Current tab is set to be the first tab (0)
      showTab(currentTab); // Display the current tab

      function showTab(n) {
        // This function will display the specified tab of the form ...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        // ... and fix the Previous/Next buttons:
        if (n == 0) {
          document.getElementById("prevBtn").style.display = "none";
        } else {
          document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
          document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
          document.getElementById("nextBtn").innerHTML = "Next";
        }
        // ... and run a function that displays the correct step indicator:
        fixStepIndicator(n)
      }

      function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        // if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form... :
        if (currentTab >= x.length) {
          //...the form gets submitted:
          document.getElementById("add-patient-form").submit();
          return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
      }

      function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
          // If a field is empty...
          if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false:
            valid = false;
          }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
          document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
      }

      function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
          x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class to the current step:
        x[n].className += " active";
      }

      $(document).ready(function(){
        $('#date-for-consultation').on('change', function(e){
          e.preventDefault();

          var selectDate = new Date(this.value).getDay();

          $.ajax({
            url: "{{ route('getSchedules') }}",
            method: "GET",
            data: {
              day: selectDate
            },
            success: function(response){
              console.log(response)
            },
            error: function(response){
              
            }
          })
        })
      })
    </script>
</html>
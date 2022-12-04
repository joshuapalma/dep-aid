@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Patients'])
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100" style="background-color: transparent; border: none; box-shadow: none;">
                    <div class="col-lg-12 col-md-12 d-flex justify-content-end">
                        <button class="btn bg-gradient-info z-index-2 me-2" data-bs-toggle="modal" data-bs-target="#filterPatient">Filter</button>
                        <form action="{{ route('patients.generatePdf') }}" method="POST" id="generate-report">
                            @csrf
                            <button type="submit" class="btn bg-gradient-info z-index-2 me-2">Generate Report</button>
                        </form>
                        {{-- <button type="button" class="btn bg-gradient-success z-index-2" data-bs-toggle="modal" data-bs-target="#addPatient">Add Patient</button> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <form action="{{route('patients.index')}}" method="GET">
                    <div class="form-group">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Search.." name="search" value="{{ $requestData['search'] }}">
                            <button class="search-btn" type="submit" style="border: none; border-top-right-radius: 10px; border-bottom-right-radius: 10px; backgropund-color: #ededed;"><i class="ni ni-zoom-split-in" style="padding-left: 5px; padding-right: 5px"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-body p-3">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                              <thead>
                                <tr>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 table-text">ID</th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 table-text ps-2">Patient Name</th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 table-text">Scheduled Date</th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 table-text">Reason/s for Consultation</th>
                                  {{-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 table-text">Remarks</th> --}}
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 table-text">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                @forelse ($patient as $index => $row)
                                    <tr class="text-center">
                                        <td>
                                            <p class="text-xs font-weight-bold table-text mb-0">{{ $row->id }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold table-text mb-0">{{ ucfirst($row->name) }}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold table-text">{{ date('M d, Y', strtotime($row->available_from)) }}</span>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold table-text mb-0">{{ $row->reason_for_consultation }}</p>
                                        </td>
                                        {{-- <td>
                                            <p class="text-xs font-weight-bold table-text mb-0">{{ $row->remarks }}</p>
                                        </td> --}}
                                        <td class="align-middle">
                                            <input type="hidden" id="patient-details-{{$row->id}}" data-detail="{{ $row }}">
                                            <button 
                                                type="button" 
                                                class="btn bg-gradient-info z-index-2" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#viewPatient" 
                                                onclick = "viewPatient('{{$row->id}}')">
                                                View
                                            </button>
                                            <button 
                                                type="button" 
                                                class="btn bg-gradient-warning z-index-2" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#editPatient" 
                                                onclick = "editPatient('{{$row->id}}')">
                                                Edit
                                            </button>
                                            <button 
                                                type="button" 
                                                class="btn bg-gradient-danger z-index-2 drop" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#deleteModal"
                                                data-url="{{ route('patients.destroy', $row->id) }}"
                                                onclick = "deletePatient(this)">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="font-weight-bold text-center table-text">No Data Available</td>
                                    </tr>
                                @endforelse
                              </tbody>
                            </table>
                        </div>
                        <div class="table-pagination p-5">
                            <div class="row">
                                <div class="row col-sm-12 col-md-12 col-lg-12 font-weight-600"">
                                    {{$patient->appends(['search' => isset($requestData->search) ? $requestData->search : null])->links('components.pagination')}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('modals.patient.view')
    @include('modals.patient.edit')
    @include('modals.patient.filter')
    @include('modals.delete')
@endsection

@push('js')
    <script>
        $('.close-modal').on('click', function(){
            $('.sidenav').css('opacity', '100%');
        })

        $('#viewPatient').modal({
            backdrop: 'static',
            keyboard: false
        })

        function formatDate(date) {
            var d = new Date(date),
                month = '' + (d.getMonth() + 1),
                day = '' + d.getDate(),
                year = d.getFullYear();

            if (month.length < 2) 
                month = '0' + month;
            if (day.length < 2) 
                day = '0' + day;

            return [year, month, day].join('-');
        }

        function viewPatient(id) {
            const detail = $(`#patient-details-${id}`).data().detail;     
            newscheduledAppointment = formatDate(detail.scheduled_appointment);
            console.log(detail);
            $('.sidenav').css('opacity', '50%');
            
            $('show-name').val(details.name);
            $('show-age').val(details.age);
            $('show-address').val(details.address);
            $('show-gender').val(details.gender);
            $('show-contact-number').val(details.contact_number);
            $('show-birthdate').val(details.birthdate);
            $('show-birthdate').val(details.birthdate);
            $('show-height').val(details.height);
            $('show-weight').val(details.weight);
            $('show-heart-rate').val(details.heart_rate);
            $('show-blood-pressure').val(details.blood_pressure);
            $('show-oxygen-saturation').val(details.oxygen_saturation);
            $('show-temperature').val(details.temperature);
            $('show-allergies').val(details.allergies);
            $('show-reason-for-consulting').val(details.reason_for_consulting);
            $('show-current-medication').val(details.current_medication);
            $('show-maintenance-medication').val(details.maintenance_medication);
            $('show-doctor-consulting').val(details.doctor_consulting);
            $('show-day').val(details.day);
            $('show-available-from').val(details.available_from);
            $('show-available-to').val(details.available_to);
        }

        function editPatient(id) {
            const detail = $(`#patient-details-${id}`).data().detail;     
            newscheduledAppointment = formatDate(detail.scheduled_appointment);

            $('#edit_patient_name').val(detail.patient_name);            
            $('#edit_reasons_for_consultation').val(detail.reasons_for_consultation);            
            $('#edit_remarks').val(detail.remarks);            
            $('#edit_scheduled_appointment').val(newscheduledAppointment);
            $('#edit-patient-form').attr('action', `/patients/update/${detail.id}`)
        }

        function deletePatient(btn) {
            var data = $(btn).data();
            var url = data.url;
            $('#delete-form').attr('action', url);
        }

    </script>
@endpush

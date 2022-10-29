@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Inventory / Topicals'])
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100" style="background-color: transparent; border: none; box-shadow: none;">
                    <div class="col-lg-12 col-md-12 d-flex justify-content-end">
                        <button class="btn bg-gradient-info z-index-2 me-2" data-bs-toggle="modal" data-bs-target="#filterLeaveModal">Filter</button>
                        <button class="btn bg-gradient-info z-index-2 me-2" data-bs-toggle="modal" data-bs-target="#exportLeaveModal">Generate Report</button>
                        <button type="button" class="btn bg-gradient-success z-index-2" data-bs-toggle="modal" data-bs-target="#addLeaveModal">Add Topicals</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <form action="{{route('topicals.index')}}" method="GET">
                    <div class="form-group">
                        <div class="input-group">
                            {{-- <input class="form-control" type="text" placeholder="Search.." name="search" value="{{ $requestData['search'] }}"> --}}
                            <input class="form-control" type="text" placeholder="Search.." name="search" value="">
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
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 table-text ps-2">Medicine Name</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 table-text ps-2">Brand</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 table-text">Manufacturer Date</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 table-text">Expiration Date</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 table-text">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                {{-- @forelse ($leave as $index => $row)
                                    <tr class="text-center">
                                        <td>
                                            <p class="text-xs font-weight-bold table-text mb-0">{{ $index + 1 }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold table-text mb-0">{{ ucfirst($row->name) }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-secondary text-xs font-weight-bold table-text">{{ ucfirst($row->designation) }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold table-text">{{ date('m/d/Y', strtotime($row->date_of_leave)) }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold table-text">{{ getNatureOfLeave()[$row->nature_of_leave] }} {{ $row->specify_others ? '/ '.($row->specify_others) : "" }}</span>
                                        </td>
                                        <td class="align-middle">
                                            <input type="hidden" id="leave-details-{{$row->id}}" data-detail="{{ $row }}">
                                            <button 
                                                type="button" 
                                                class="btn bg-gradient-warning z-index-2" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#editLeaveModal" 
                                                onclick = "editLeave('{{$row->id}}')">
                                                Edit
                                            </button>
                                            <button 
                                                type="button" 
                                                class="btn bg-gradient-danger z-index-2 drop" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#deleteModal"
                                                data-url="{{ route('leave.destroy', $row->id) }}"
                                                onclick = "deleteLeave(this)">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                @empty --}}
                                    <tr>
                                        <td colspan="6" class="font-weight-bold text-center table-text">No Data Available</td>
                                    </tr>
                                {{-- @endforelse --}}
                              </tbody>
                            </table>
                        </div>
                        {{-- <div class="table-pagination p-5">
                            <div class="row">
                                <div class="row col-sm-12 col-md-12 col-lg-12 font-weight-600"">
                                    {{$leave->appends(['search' => isset($requestData->search) ? $requestData->search : null])->links('components.pagination')}}
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    
@endpush

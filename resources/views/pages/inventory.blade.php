@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Inventory'])
    <div class="container-fluid py-4">
        <div class="row">
            INVENTORY    
        </div>
    </div>
@endsection

@push('js')
    
@endpush

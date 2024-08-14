@extends('layouts.master')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}

    {{-- @role('Admin')
        @include('dashboard.admin_dashboard')
    @endrole --}}

    @role('Client')
        @include('dashboard.clients_dashboard')
    @endrole

    {{-- @role('Restaurant')
        @include('dashboard.restaurant_dashboard')
    @endrole --}}

    @role('Artisan')
        @include('dashboard.artisan_dashboard')
    @endrole
@endsection
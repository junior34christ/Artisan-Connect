@extends('layouts.master')
@section('title', 'State List')
@section('content')

    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>State List</h4>
                    <h6>Manage your State</h6>
                </div>
                <div class="page-btn">
                    <a href="{{ route('states.createstate') }}" class="btn btn-added">
                        <img src="assets/img/icons/plus.svg" alt="img" class="me-2">Add State
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="search-path">
                                <a class="btn btn-filter" id="filter_search">
                                    <img src="assets/img/icons/filter.svg" alt="img">
                                    <span><img src="assets/img/icons/closes.svg" alt="img"></span>
                                </a>
                            </div>
                            <div class="search-input">
                                <a class="btn btn-searchset">
                                    <img src="assets/img/icons/search-white.svg" alt="img">
                                </a>
                            </div>
                        </div>
                        <div class="wordset">
                            <ul>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf">
                                        <img src="assets/img/icons/pdf.svg" alt="img">
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel">
                                        <img src="assets/img/icons/excel.svg" alt="img">
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="print">
                                        <img src="assets/img/icons/printer.svg" alt="img">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table datanew">
                            <thead>
                                <tr>
                                    <th>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </th>
                                    <th>State Name</th>
                                    <th>Country Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($states as $state)
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td>{{ $state->name }}</td>
                                        <td>{{ $state->country->name }}</td>
                                        <!-- Assuming you have a relationship defined -->
                                        <td>
                                            <div class="status-toggle d-flex justify-content-between align-items-center">
                                                <input type="checkbox" id="state{{ $state->id }}" class="check"
                                                    {{ $state->status ? 'checked' : '' }}>
                                                <label for="state{{ $state->id }}" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="me-3" href="{{ route('states.editstate', $state->id) }}">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <form action="{{ route('states.destroy', $state->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                    <img src="assets/img/icons/delete.svg" alt="img">
                                                </a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

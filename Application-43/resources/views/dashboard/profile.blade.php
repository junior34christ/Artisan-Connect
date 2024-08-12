@extends('layouts.master')
@section('title', 'Profile User')
@section('content')

    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Profile</h4>
                    <h6>User Profile</h6>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('dashboard.profile') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="profile-set">
                            <div class="profile-head"></div>
                            <div class="profile-top">
                                <div class="profile-content">
                                    <div class="profile-contentimg">
                                        <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="img" id="blah">
                                        <div class="profileupload">
                                            <input type="file" id="imgInp" name="avatar">
                                            <a href="javascript:void(0);">
                                                <img src="{{ asset('assets/img/icons/edit-set.svg') }}" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="profile-contentname">
                                        <h2>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h2>
                                        <h4>Update Your Photo and Personal Details.</h4>
                                    </div>
                                </div>
                                <div class="ms-auto">
                                    <button type="submit" class="btn btn-submit me-2">Save</button>
                                    <a href="{{ route('dashboard.profile') }}" class="btn btn-cancel">Cancel</a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" name="first_name" placeholder="William"
                                        value="{{ Auth::user()->first_name }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" placeholder="Castillo"
                                        value="{{ Auth::user()->last_name }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" placeholder="william@example.com"
                                        value="{{ Auth::user()->email }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" placeholder="+1452 876 5432"
                                        value="{{ Auth::user()->phone }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <div class="pass-group">
                                        <input type="password" name="password" class="pass-input">
                                        <span class="fas toggle-password fa-eye-slash"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-submit me-2">Submit</button>
                                <a href="{{ route('dashboard.profile') }}" class="btn btn-cancel">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
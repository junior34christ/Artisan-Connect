@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Categories</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('category.indexcategory') }}">Categories</a></li>
                            <li class="breadcrumb-item active">All Categories</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table comman-shadow">
                    <div class="card-body pb-0">
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Categories</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <a href="{{ route('category.indexcategory') }}" class="btn btn-outline-gray me-2"><i class="fa fa-list"></i></a>
                                    <a href="{{ route('category.gridcategory') }}" class="btn btn-outline-gray me-2 active"><i class="fa fa-th"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="category-pro-list">
                            <div class="row">
                                @forelse ($categories as $key => $category)
                                <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="category-box flex-fill">
                                                <div class="category-img">
                                                    <a href="{{ route('category.show', $category->id) }}">
                                                        <img class="img-fluid" alt="Category Info" src="{{ Storage::url($category->image) }}" width="20%" height="20%">
                                                    </a>
                                                </div>
                                                <div class="category-content pb-0">
                                                    <h5><a href="{{ route('category.show', $category->id) }}">{{ $category->name }}</a></h5>
                                                    <p>{{ $category->description }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="category-box flex-fill">
                                                <a href="{{ route('category.createcategory') }}">
                                                    <h4>Veuillez ajouter du contenu</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
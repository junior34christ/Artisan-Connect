@extends('layouts.master')
@section('title', 'Modifier la catégorie')
@section('content')

    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Product Edit Category</h4>
                    <h6>Edit a product Category</h6>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Category Name</label>
                                    <input type="text" name="name" class="form-control"
                                        value="{{ old('name', $category->name) }}">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Category Code</label>
                                    <input type="text" name="code" class="form-control"
                                        value="{{ old('code', $category->code) }}">
                                    @error('code')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control">{{ old('description', $category->description) }}</textarea>
                                    @error('description')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label> Product Image</label>
                                    <div class="image-upload">
                                        <input type="file" name="image" class="form-control">
                                        <div class="image-uploads">
                                            <img src="{{ asset('assets/img/icons/upload.svg') }}" alt="img">
                                            <h4>Drag and drop a file to upload</h4>
                                        </div>
                                        @error('image')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="product-list">
                                    <ul class="row">
                                        @if ($category->image && Storage::disk('public')->exists($category->image))
                                            <li class="ps-0">
                                                <div class="productviews">
                                                    <div class="productviewsimg">
                                                        <img src="{{ asset('storage/' . $category->image) }}"
                                                            alt="img" class="img-thumbnail"
                                                            style="width: 100px; height: auto;">
                                                    </div>
                                                    <div class="productviewscontent">
                                                        {{-- <div class="productviewsname">
                                                            <h2>{{ basename($category->image) }}</h2>
                                                            <h3>{{ Storage::disk('public')->size($category->image) }} bytes
                                                            </h3>
                                                        </div> --}}
                                                        <a href="javascript:void(0);" class="hideset">x</a>
                                                    </div>
                                                </div>
                                            </li>
                                        @else
                                            <li class="ps-0">
                                                <div class="productviews">
                                                    <div class="productviewsimg">
                                                        <img src="assets/img/icons/upload.svg" alt="img">
                                                    </div>
                                                    <div class="productviewscontent">
                                                        <div class="productviewsname">
                                                            <h2>No Image Available</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-submit me-2">Submit</button>
                                <a href="{{ route('category.indexcategory') }}" class="btn btn-cancel">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection

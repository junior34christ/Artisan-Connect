@extends('layouts.master')
@section('title', 'List des Produits')
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>List des Produits</h4>
                    <h6>Gérez vos produits</h6>
                </div>
                <div class="page-btn">
                    <a href="{{ route('products.createproduct') }}" class="btn btn-added"><img src="assets/img/icons/plus.svg"
                            alt="img" class="me-1">Ajouter un nouveau produit</a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="search-path">
                                <a class="btn btn-filter" id="filter_search">
                                    <img src="{{ asset('assets/img/icons/filter.svg') }}" alt="img">
                                    <span><img src="{{ asset('assets/img/icons/closes.svg') }}" alt="img"></span>
                                </a>
                            </div>
                            <div class="search-input">
                                <a class="btn btn-searchset"><img src="{{ asset('assets/img/icons/search-white.svg') }}"
                                        alt="img"></a>
                            </div>
                        </div>
                        <div class="wordset">
                            <ul>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                            src="{{ asset('assets/img/icons/pdf.svg') }}" alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                            src="{{ asset('assets/img/icons/excel.svg') }}" alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                            src="{{ asset('assets/img/icons/printer.svg') }}" alt="img"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-0" id="filter_inputs">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg col-sm-6 col-12">
                                            <div class="form-group">
                                                <select class="select" name="product_id">
                                                    <option value="">Choisir un produit</option>
                                                    @foreach ($products as $product)
                                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg col-sm-6 col-12">
                                            <div class="form-group">
                                                <select class="select" name="category_id">
                                                    <option value="">Choisir une catégorie</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg col-sm-6 col-12">
                                            <div class="form-group">
                                                <select class="select" name="price">
                                                    <option value="">Prix</option>
                                                    @foreach ($prices as $price)
                                                        <option value="{{ $price }}">{{ number_format($price, 2) }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-sm-6 col-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-filters ms-auto">
                                                    <img src="{{ url('assets/img/icons/search-whites.svg') }}"
                                                        alt="img">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table datanew">
                            <thead>
                                <tr>
                                    <th>
                                        <label class="checkboxs">
                                            <input type="checkbox" id="select-all">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </th>
                                    <th>Product Name</th>
                                    <th>Rélérence</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Unit</th>
                                    <th>Qty</th>
                                    <th>Created By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="{{ Storage::url($product->image) }}" alt="img">
                                            </a>
                                            <a href="javascript:void(0);">{{ $product->name }}</a>
                                        </td>
                                        <td>{{ $product->sku }}</td>
                                        <td>{{ $product->category?->name }}</td>
                                        <!-- Utilisation de l'opérateur de navigation sécurisée -->
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->unit }}</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>{{ $product->created_by }}</td>
                                        <td>
                                            <a class="me-3" href="{{ route('products.showproduct', $product->id) }}">
                                                <img src="assets/img/icons/eye.svg" alt="img">
                                            </a>
                                            <a class="me-3" href="{{ route('products.editproduct', $product->id) }}">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <a class="confirm-text" href="javascript:void(0);">
                                                    <img src="assets/img/icons/delete.svg" alt="Delete">
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

    {{-- <script>
        function confirmDelete(url) {
            if (confirm('Are you sure you want to delete this product?')) {
                fetch(url, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                }).then(response => {
                    if (response.ok) {
                        window.location.reload(); // Optional: Refresh page or update UI
                    } else {
                        throw new Error('Something went wrong');
                    }
                }).catch(error => {
                    console.error('Error:', error);
                });
            }
        }
    </script> --}}

@endsection

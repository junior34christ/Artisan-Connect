@extends('layouts.master')
@section('title', $product->name)
@section('content')

    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Détails du produit</h4>
                    <h6>Tous les détails d’un produit</h6>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="bar-code-view">
                                <img src="{{ asset('assets/img/barcode1.png') }}" alt="barcode">
                                <a class="printimg">
                                    <img src="{{ asset('assets/img/icons/printer.svg') }}" alt="print">
                                </a>
                            </div>
                            <div class="productdetails">
                                <ul class="product-bar">
                                    <li>
                                        <h4>Product</h4>
                                        <h6>{{ $product->name }}</h6>
                                    </li>
                                    <li>
                                        <h4>Category</h4>
                                        <h6>{{ $product->category->name ?? 'None' }}</h6>
                                    </li>
                                    <li>
                                        <h4>SKU</h4>
                                        <h6>{{ $product->sku }}</h6>
                                    </li>
                                    <li>
                                    <li>
                                        <h4>Quantity</h4>
                                        <h6>{{ $product->quantity }}</h6>
                                    </li>
                                    <li>
                                        <h4>Price</h4>
                                        <h6>{{ number_format($product->price, 2) }}</h6>
                                    </li>
                                    <li>
                                        <h4>Status</h4>
                                        <h6>{{ $product->status }}</h6>
                                    </li>
                                    <li>
                                        <h4>Description</h4>
                                        <h6>{{ $product->description }}</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="slider-product-details">
                                <div class="owl-carousel owl-theme product-slide">
                                    @foreach ($product->images as $image)
                                        <div class="slider-product">
                                            <img src="{{ asset('assets/img/product/' . $image->filename) }}"
                                                alt="img">
                                            <h4>{{ $image->filename }}</h4>
                                            <h6>{{ number_format($image->size / 1024, 2) }}kb</h6>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>

        </div>
    </div>

@endsection

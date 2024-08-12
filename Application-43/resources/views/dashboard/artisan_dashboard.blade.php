@extends('layouts.master')
@section('title', 'Tableau de bord Artisan')
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content">

            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Bienvenu {{ Auth::user()->first_name }}!</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.artisan_dashboard') }}">Tableau de
                                        bord</a></li>
                                <li class="breadcrumb-item active">Artisan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="dash-widget">
                        <div class="dash-widgetimg">
                            <span><img src="{{ asset('assets/img/icons/dash1.svg') }}" alt="img"></span>
                        </div>
                        <div class="dash-widgetcontent">
                            <h5>$<span class="counters" data-count="00.00">00,00</span></h5>
                            <h6>Total des Achats Dûs</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="dash-widget dash1">
                        <div class="dash-widgetimg">
                            <span><img src="{{ asset('assets/img/icons/dash2.svg') }}" alt="img"></span>
                        </div>
                        <div class="dash-widgetcontent">
                            <h5>$<span class="counters" data-count="00.00">00,00</span></h5>
                            <h6>Total des Ventes Dûes</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="dash-widget dash2">
                        <div class="dash-widgetimg">
                            <span><img src="{{ asset('assets/img/icons/dash3.svg') }}" alt="img"></span>
                        </div>
                        <div class="dash-widgetcontent">
                            <h5>$<span class="counters" data-count="00.00">00,00</span></h5>
                            <h6>Montant Total des Ventes</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="dash-widget dash3">
                        <div class="dash-widgetimg">
                            <span><img src="{{ asset('assets/img/icons/dash4.svg') }}" alt="img"></span>
                        </div>
                        <div class="dash-widgetcontent">
                            <h5>$<span class="counters" data-count="00.00">00,00</span></h5>
                            <h6>Montant Total des Ventes</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count">
                        <div class="dash-counts">
                            <h4>100</h4>
                            <h5>Clients</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="user"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count das1">
                        <div class="dash-counts">
                            <h4>100</h4>
                            <h5>Fournisseurs</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="user-check"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count das2">
                        <div class="dash-counts">
                            <h4>100</h4>
                            <h5>Factures d'Achat</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="file-text"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count das3">
                        <div class="dash-counts">
                            <h4>105</h4>
                            <h5>Factures de Vente</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="file"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-7 col-sm-12 col-12 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Achats & Ventes</h5>
                            <div class="graph-sets">
                                <ul>
                                    <li>
                                        <span>Ventes</span>
                                    </li>
                                    <li>
                                        <span>Achats</span>
                                    </li>
                                </ul>
                                <div class="dropdown">
                                    <button class="btn btn-white btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        2022 <img src="{{ asset('assets/img/icons/dropdown.svg') }}" alt="img"
                                            class="ms-2">
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">2022</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">2021</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">2020</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="sales_charts"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12 col-12 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">Articles récemment ajoutés</h4>
                            <div class="dropdown">
                                <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
                                    class="dropset">
                                    <i class="fa fa-ellipsis-v"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <a href="{{ route('products.indexproduct') }}" class="dropdown-item">Liste des
                                            Articles</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('products.createproduct') }}" class="dropdown-item">Ajouter un
                                            Article</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive dataview">
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>N°</th>
                                            <th>Article</th>
                                            <th>Prix</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td class="productimgname">
                                                    <a href="{{ route('products.showproduct', $product->id) }}"
                                                        class="product-img">
                                                        <img src="{{ Storage::url($product->image) }}" alt="product">
                                                    </a>
                                                    <a
                                                        href="{{ route('products.showproduct', $product->id) }}">{{ $product->name }}</a>
                                                </td>
                                                <td>${{ $product->price }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @php
                use Carbon\Carbon;
                $today = Carbon::today();
            @endphp

            <div class="card mb-0">
                <div class="card-body">
                    <h4 class="card-title">Produits Expirés</h4>
                    <div class="table-responsive dataview">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Code Produit</th>
                                    <th>Nom du Produit</th>
                                    <th>Nom de la Marque</th>
                                    <th>Nom de la Catégorie</th>
                                    <th>Date d'Expiration</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $index => $product)
                                    @if (Carbon::parse($product->expiration_date)->lt($today))
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td><a href="javascript:void(0);">{{ $product->code }}</a></td>
                                            <td class="productimgname">
                                                <a class="product-img"
                                                    href="{{ route('productlist', ['id' => $product->id]) }}">
                                                    <img src="{{ url('storage/' . $product->image) }}"
                                                        alt="{{ $product->name }}">
                                                </a>
                                                <a
                                                    href="{{ route('productlist', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                            </td>
                                            <td>{{ $product->brand_name ?? 'N/D' }}</td>
                                            <td>{{ $product->category_name }}</td>
                                            <td>{{ \Carbon\Carbon::parse($product->expiration_date)->format('d-m-Y') }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

@section('script')

    {{-- delete js --}}
    <script>
        $(document).on('click', '.product_delete', function() {
            var _this = $(this).parents('tr');
            $('.e_id').val(_this.find('.id').text());
            $('.e_avatar').val(_this.find('.avatar').text());
        });
    </script>
@endsection

@endsection

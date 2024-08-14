@extends('layouts.app')
@section('title', 'Tableau de bord Restaurant')
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}

    <div class="page-wrapper">

        <div class="content">
            <div class="row">
                <div class="col-lg-8 col-sm-12 tabs_wrapper">
                    <div class="page-header ">
                        <div class="page-title">
                            <h4>Catégories</h4>
                            <h6>Gérez vos achats</h6>
                        </div>
                    </div>
                    <ul class="tabs owl-carousel owl-theme owl-product border-0">
                        <li class="active" id="fruits">
                            <div class="product-details">
                                <img src="{{ url('assets/img/product/product62.png') }}" alt="img">
                                <h6>Fruits</h6>
                            </div>
                        </li>
                        <li id="headphone">
                            <div class="product-details">
                                <img src="{{ url('assets/img/product/product63.png') }}" alt="img">
                                <h6>Casques</h6>
                            </div>
                        </li>
                        <li id="Accessories">
                            <div class="product-details">
                                <img src="{{ url('assets/img/product/product64.png') }}" alt="img">
                                <h6>Accessoires</h6>
                            </div>
                        </li>
                        <li id="Shoes">
                            <a class="product-details">
                                <img src="{{ url('assets/img/product/product65.png') }}" alt="img">
                                <h6>Chaussures</h6>
                            </a>
                        </li>
                        <li id="computer">
                            <a class="product-details">
                                <img src="{{ url('assets/img/product/product66.png') }}" alt="img">
                                <h6>Ordinateurs</h6>
                            </a>
                        </li>
                        <li id="Snacks">
                            <a class="product-details">
                                <img src="{{ url('assets/img/product/product67.png') }}" alt="img">
                                <h6>Encas</h6>
                            </a>
                        </li>
                        <li id="watch">
                            <a class="product-details">
                                <img src="{{ url('assets/img/product/product68.png') }}" alt="img">
                                <h6>Montres</h6>
                            </a>
                        </li>
                        <li id="cycle">
                            <a class="product-details">
                                <img src="{{ url('assets/img/product/product61.png') }}" alt="img">
                                <h6>Bicycles</h6>
                            </a>
                        </li>
                        <li id="fruits1">
                            <div class="product-details">
                                <img src="{{ url('assets/img/product/product62.png') }}" alt="img">
                                <h6>Fruits</h6>
                            </div>
                        </li>
                        <li id="headphone1">
                            <div class="product-details">
                                <img src="{{ url('assets/img/product/product63.png') }}" alt="img">
                                <h6>Casques</h6>
                            </div>
                        </li>
                    </ul>
                    <div class="tabs_container">
                        <div class="tab_content active" data-tab="fruits">
                            <div class="row ">
                                <div class="col-lg-3 col-sm-6 d-flex ">
                                    <div class="productset flex-fill active">
                                        <div class="productsetimg">
                                            <img src="{{ url('assets/img/product/product29.jpg') }}" alt="img">
                                            <h6>Qté : 5.00</h6>
                                            <div class="check-product">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="productsetcontent">
                                            <h5>Fruits</h5>
                                            <h4>Orange</h4>
                                            <h6>150.00</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 d-flex ">
                                    <div class="productset flex-fill">
                                        <div class="productsetimg">
                                            <img src="{{ url('assets/img/product/product31.jpg') }}" alt="img">
                                            <h6>Qté : 1.00</h6>
                                            <div class="check-product">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="productsetcontent">
                                            <h5>Fruits</h5>
                                            <h4>Fraise</h4>
                                            <h6>15.00</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 d-flex ">
                                    <div class="productset flex-fill">
                                        <div class="productsetimg">
                                            <img src="{{ url('assets/img/product/product35.jpg') }}" alt="img">
                                            <h6>Qté : 5.00</h6>
                                            <div class="check-product">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="productsetcontent">
                                            <h5>Fruits</h5>
                                            <h4>Banane</h4>
                                            <h6>150.00</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 d-flex ">
                                    <div class="productset flex-fill">
                                        <div class="productsetimg">
                                            <img src="{{ url('assets/img/product/product37.jpg') }}" alt="img">
                                            <h6>Qté : 5.00</h6>
                                            <div class="check-product">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="productsetcontent">
                                            <h5>Fruits</h5>
                                            <h4>Citron</h4>
                                            <h6>1500.00</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 d-flex ">
                                    <div class="productset flex-fill">
                                        <div class="productsetimg">
                                            <img src="{{ url('assets/img/product/product54.jpg') }}" alt="img">
                                            <h6>Qté : 5.00</h6>
                                            <div class="check-product">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="productsetcontent">
                                            <h5>Fruits</h5>
                                            <h4>Pomme</h4>
                                            <h6>1500.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab_content" data-tab="headphone">
                            <div class="row ">
                                <div class="col-lg-3 col-sm-6 d-flex ">
                                    <div class="productset flex-fill">
                                        <div class="productsetimg">
                                            <img src="{{ url('assets/img/product/product44.jpg') }}" alt="img">
                                            <h6>Qté : 5.00</h6>
                                            <div class="check-product">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="productsetcontent">
                                            <h5>Casques</h5>
                                            <h4>Écouteurs</h4>
                                            <h6>150.00</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 d-flex ">
                                    <div class="productset flex-fill">
                                        <div class="productsetimg">
                                            <img src="{{ url('assets/img/product/product45.jpg') }}" alt="img">
                                            <h6>Qté : 5.00</h6>
                                            <div class="check-product">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="productsetcontent">
                                            <h5>Casques</h5>
                                            <h4>Écouteurs</h4>
                                            <h6>150.00</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 d-flex ">
                                    <div class="productset flex-fill">
                                        <div class="productsetimg">
                                            <img src="{{ url('assets/img/product/product36.jpg') }}" alt="img">
                                            <h6>Qté : 5.00</h6>
                                            <div class="check-product">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="productsetcontent">
                                            <h5>Casques</h5>
                                            <h4>Écouteurs</h4>
                                            <h6>150.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab_content" data-tab="Accessories">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 d-flex ">
                                    <div class="productset flex-fill">
                                        <div class="productsetimg">
                                            <img src="{{ url('assets/img/product/product32.jpg') }}" alt="img">
                                            <h6>Qté : 1.00</h6>
                                            <div class="check-product">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="productsetcontent">
                                            <h5>Accessoires</h5>
                                            <h4>Lunettes de soleil</h4>
                                            <h6>15.00</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 d-flex ">
                                    <div class="productset flex-fill">
                                        <div class="productsetimg">
                                            <img src="{{ url('assets/img/product/product46.jpg') }}" alt="img">
                                            <h6>Qté : 1.00</h6>
                                            <div class="check-product">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="productsetcontent">
                                            <h5>Accessoires</h5>
                                            <h4>Pendrive</h4>
                                            <h6>150.00</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 d-flex ">
                                    <div class="productset flex-fill">
                                        <div class="productsetimg">
                                            <img src="{{ url('assets/img/product/product55.jpg') }}" alt="img">
                                            <h6>Qté : 1.00</h6>
                                            <div class="check-product">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="productsetcontent">
                                            <h5>Accessoires</h5>
                                            <h4>Souris</h4>
                                            <h6>150.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab_content" data-tab="Shoes">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 d-flex ">
                                    <div class="productset flex-fill">
                                        <div class="productsetimg">
                                            <img src="{{ url('assets/img/product/product60.jpg') }}" alt="img">
                                            <h6>Qté : 1.00</h6>
                                            <div class="check-product">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="productsetcontent">
                                            <h5>Chaussures</h5>
                                            <h4>Nike rouge</h4>
                                            <h6>1500.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab_content" data-tab="computer">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 d-flex ">
                                    <div class="productset flex-fill">
                                        <div class="productsetimg">
                                            <img src="{{ url('assets/img/product/product56.jpg') }}" alt="img">
                                            <h6>Qté : 1.00</h6>
                                            <div class="check-product">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="productsetcontent">
                                            <h5>Ordinateurs</h5>
                                            <h4>Ordinateur de bureau</h4>
                                            <h6>1500.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab_content" data-tab="Snacks">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 d-flex ">
                                    <div class="productset flex-fill">
                                        <div class="productsetimg">
                                            <img src="{{ url('assets/img/product/product47.jpg') }}" alt="img">
                                            <h6>Qté : 1.00</h6>
                                            <div class="check-product">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="productsetcontent">
                                            <h5>Snacks</h5>
                                            <h4>Salade de canard</h4>
                                            <h6>1500.00</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 d-flex ">
                                    <div class="productset flex-fill">
                                        <div class="productsetimg">
                                            <img src="{{ url('assets/img/product/product48.png') }}" alt="img">
                                            <h6>Qté : 1.00</h6>
                                            <div class="check-product">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="productsetcontent">
                                            <h5>Snacks</h5>
                                            <h4>Planche de petit-déjeuner</h4>
                                            <h6>1500.00</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 d-flex ">
                                    <div class="productset flex-fill">
                                        <div class="productsetimg">
                                            <img src="{{ url('assets/img/product/product57.jpg') }}" alt="img">
                                            <h6>Qté : 1.00</h6>
                                            <div class="check-product">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="productsetcontent">
                                            <h5>Snacks</h5>
                                            <h4>California roll</h4>
                                            <h6>1500.00</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 d-flex ">
                                    <div class="productset flex-fill">
                                        <div class="productsetimg">
                                            <img src="{{ url('assets/img/product/product58.jpg') }}" alt="img">
                                            <h6>Qté : 1.00</h6>
                                            <div class="check-product">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="productsetcontent">
                                            <h5>Snacks</h5>
                                            <h4>Sashimi</h4>
                                            <h6>1500.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab_content" data-tab="watch">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 d-flex ">
                                    <div class="productset flex-fill">
                                        <div class="productsetimg">
                                            <img src="{{ url('assets/img/product/product49.jpg') }}" alt="img">
                                            <h6>Qté : 1.00</h6>
                                            <div class="check-product">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="productsetcontent">
                                            <h4>Montres</h4>
                                            <h5>Montre</h5>
                                            <h6>1500.00</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 d-flex ">
                                    <div class="productset flex-fill">
                                        <div class="productsetimg">
                                            <img src="{{ url('assets/img/product/product51.jpg') }}" alt="img">
                                            <h6>Qté : 1.00</h6>
                                        </div>
                                        <div class="productsetcontent">
                                            <h4>Montres</h4>
                                            <h5>Montre</h5>
                                            <h6>1500.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab_content" data-tab="cycle">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 d-flex ">
                                    <div class="productset flex-fill">
                                        <div class="productsetimg">
                                            <img src="{{ url('assets/img/product/product52.jpg') }}" alt="img">
                                            <h6>Qté : 1.00</h6>
                                            <div class="check-product">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="productsetcontent">
                                            <h4>Vélos</h4>
                                            <h5>Vélo</h5>
                                            <h6>1500.00</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 d-flex ">
                                    <div class="productset flex-fill">
                                        <div class="productsetimg">
                                            <img src="{{ url('assets/img/product/product53.jpg') }}" alt="img">
                                            <h6>Qté : 1.00</h6>
                                            <div class="check-product">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="productsetcontent">
                                            <h4>Vélos</h4>
                                            <h5>Vélo</h5>
                                            <h6>1500.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab_content" data-tab="fruits1">
                            <div class="row ">
                                <div class="col-lg-3 col-sm-6 d-flex ">
                                    <div class="productset flex-fill">
                                        <div class="productsetimg">
                                            <img src="{{ url('assets/img/product/product29.jpg') }}" alt="img">
                                            <h6>Qté : 5.00</h6>
                                            <div class="check-product">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="productsetcontent">
                                            <h5>Fruits</h5>
                                            <h4>Orange</h4>
                                            <h6>150.00</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 d-flex ">
                                    <div class="productset flex-fill">
                                        <div class="productsetimg">
                                            <img src="{{ url('assets/img/product/product31.jpg') }}" alt="img">
                                            <h6>Qté : 1.00</h6>
                                            <div class="check-product">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="productsetcontent">
                                            <h5>Fruits</h5>
                                            <h4>Fraise</h4>
                                            <h6>15.00</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 d-flex ">
                                    <div class="productset flex-fill">
                                        <div class="productsetimg">
                                            <img src="{{ url('assets/img/product/product35.jpg') }}" alt="img">
                                            <h6>Qté : 5.00</h6>
                                            <div class="check-product">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="productsetcontent">
                                            <h5>Fruits</h5>
                                            <h4>Banane</h4>
                                            <h6>150.00</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 d-flex ">
                                    <div class="productset flex-fill">
                                        <div class="productsetimg">
                                            <img src="{{ url('assets/img/product/product37.jpg') }}" alt="img">
                                            <h6>Qté : 5.00</h6>
                                            <div class="check-product">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="productsetcontent">
                                            <h5>Fruits</h5>
                                            <h4>Citron</h4>
                                            <h6>1500.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab_content" data-tab="headphone1">
                            <div class="row ">
                                <div class="col-lg-3 col-sm-6 d-flex ">
                                    <div class="productset flex-fill">
                                        <div class="productsetimg">
                                            <img src="{{ url('assets/img/product/product44.jpg') }}" alt="img">
                                            <h6>Qté : 5.00</h6>
                                            <div class="check-product">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="productsetcontent">
                                            <h5>Casques</h5>
                                            <h4>Écouteurs</h4>
                                            <h6>150.00</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 d-flex ">
                                    <div class="productset flex-fill">
                                        <div class="productsetimg">
                                            <img src="{{ url('assets/img/product/product45.jpg') }}" alt="img">
                                            <h6>Qté : 5.00</h6>
                                            <div class="check-product">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="productsetcontent">
                                            <h5>Casques</h5>
                                            <h4>Écouteurs</h4>
                                            <h6>150.00</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 d-flex ">
                                    <div class="productset flex-fill">
                                        <div class="productsetimg">
                                            <img src="{{ url('assets/img/product/product36.jpg') }}" alt="img">
                                            <h6>Qté : 5.00</h6>
                                            <div class="check-product">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="productsetcontent">
                                            <h5>Casques</h5>
                                            <h4>Écouteurs</h4>
                                            <h6>150.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 ">
                    <div class="order-list">
                        <div class="orderid">
                            <h4>Liste des commandes</h4>
                            <h5>ID de la transaction : #65565</h5>
                        </div>
                        <div class="actionproducts">
                            <ul>
                                <li>
                                    <a href="javascript:void(0);" class="deletebg confirm-text">
                                        <img src="{{ url('assets/img/icons/delete-2.svg') }}" alt="img">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
                                        class="dropset">
                                        <img src="{{ url('assets/img/icons/ellipise1.svg') }}" alt="img">
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton"
                                        data-popper-placement="bottom-end">
                                        <li>
                                            <a href="#" class="dropdown-item">Action</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown-item">Une autre action</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown-item">Autre chose</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card card-order">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <a href="javascript:void(0);" class="btn btn-adds" data-bs-toggle="modal"
                                        data-bs-target="#create">
                                        <i class="fa fa-plus me-2"></i>Ajouter un client
                                    </a>
                                </div>
                                <div class="col-lg-12">
                                    <div class="select-split ">
                                        <div class="select-group w-100">
                                            <select class="select">
                                                <option>Client de passage</option>
                                                <option>Chris Moris</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="select-split">
                                        <div class="select-group w-100">
                                            <select class="select">
                                                <option>Produit</option>
                                                <option>Code-barres</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="text-end">
                                        <a class="btn btn-scanner-set">
                                            <img src="{{ url('assets/img/icons/scanner1.svg') }}" alt="img"
                                                class="me-2">Scanner le code-barres
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="split-card"></div>
                        <div class="card-body pt-0">
                            <div class="totalitem">
                                <h4>Total des articles : 4</h4>
                                <a href="javascript:void(0);">Tout effacer</a>
                            </div>
                            <div class="product-table">
                                <ul class="product-lists">
                                    <li>
                                        <div class="productimg">
                                            <div class="productimgs">
                                                <img src="{{ url('assets/img/product/product30.jpg') }}" alt="img">
                                            </div>
                                            <div class="productcontet">
                                                <h4>Ananas
                                                    <a href="javascript:void(0);" class="ms-2" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <img src="{{ url('assets/img/icons/edit-5.svg') }}"
                                                            alt="img">
                                                    </a>
                                                </h4>
                                                <div class="productlinkset">
                                                    <h5>PT001</h5>
                                                </div>
                                                <div class="increment-decrement">
                                                    <div class="input-groups">
                                                        <input type="button" value="-"
                                                            class="button-minus dec button">
                                                        <input type="text" name="child" value="0"
                                                            class="quantity-field">
                                                        <input type="button" value="+"
                                                            class="button-plus inc button ">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>3000.00 </li>
                                    <li><a class="confirm-text" href="javascript:void(0);"><img
                                                src="{{ url('assets/img/icons/delete-2.svg') }}" alt="img"></a></li>
                                </ul>
                                <ul class="product-lists">
                                    <li>
                                        <div class="productimg">
                                            <div class="productimgs">
                                                <img src="{{ url('assets/img/product/product34.jpg') }}" alt="img">
                                            </div>
                                            <div class="productcontet">
                                                <h4>Green Nike
                                                    <a href="javascript:void(0);" class="ms-2" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <img src="{{ url('assets/img/icons/edit-5.svg') }}"
                                                            alt="img">
                                                    </a>
                                                </h4>
                                                <div class="productlinkset">
                                                    <h5>PT001</h5>
                                                </div>
                                                <div class="increment-decrement">
                                                    <div class="input-groups">
                                                        <input type="button" value="-"
                                                            class="button-minus dec button">
                                                        <input type="text" name="child" value="0"
                                                            class="quantity-field">
                                                        <input type="button" value="+"
                                                            class="button-plus inc button ">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>3000.00 </li>
                                    <li><a class="confirm-text" href="javascript:void(0);"><img
                                                src="{{ url('assets/img/icons/delete-2.svg') }}" alt="img"></a></li>
                                </ul>
                                <ul class="product-lists">
                                    <li>
                                        <div class="productimg">
                                            <div class="productimgs">
                                                <img src="{{ url('assets/img/product/product35.jpg') }}" alt="img">
                                            </div>
                                            <div class="productcontet">
                                                <h4>Banane
                                                    <a href="javascript:void(0);" class="ms-2" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <img src="{{ url('assets/img/icons/edit-5.svg') }}"
                                                            alt="img">
                                                    </a>
                                                </h4>
                                                <div class="productlinkset">
                                                    <h5>PT001</h5>
                                                </div>
                                                <div class="increment-decrement">
                                                    <div class="input-groups">
                                                        <input type="button" value="-"
                                                            class="button-minus dec button">
                                                        <input type="text" name="child" value="0"
                                                            class="quantity-field">
                                                        <input type="button" value="+"
                                                            class="button-plus inc button ">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>3000.00 </li>
                                    <li><a class="confirm-text" href="javascript:void(0);"><img
                                                src="{{ url('assets/img/icons/delete-2.svg') }}" alt="img"></a></li>
                                </ul>
                                <ul class="product-lists">
                                    <li>
                                        <div class="productimg">
                                            <div class="productimgs">
                                                <img src="{{ url('assets/img/product/product31.jpg') }}" alt="img">
                                            </div>
                                            <div class="productcontet">
                                                <h4>Fraise
                                                    <a href="javascript:void(0);" class="ms-2" data-bs-toggle="modal"
                                                        data-bs-target="#edit">
                                                        <img src="{{ url('assets/img/icons/edit-5.svg') }}"
                                                            alt="img">
                                                    </a>
                                                </h4>
                                                <div class="productlinkset">
                                                    <h5>PT001</h5>
                                                </div>
                                                <div class="increment-decrement">
                                                    <div class="input-groups">
                                                        <input type="button" value="-"
                                                            class="button-minus dec button">
                                                        <input type="text" name="child" value="0"
                                                            class="quantity-field">
                                                        <input type="button" value="+"
                                                            class="button-plus inc button ">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>3000.00 </li>
                                    <li><a class="confirm-text" href="javascript:void(0);"><img
                                                src="{{ url('assets/img/icons/delete-2.svg') }}" alt="img"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="split-card"></div>
                        <div class="card-body pt-0 pb-2">
                            <div class="setvalue">
                                <ul>
                                    <li>
                                        <h5>Sous-total</h5>
                                        <h6>55.00$</h6>
                                    </li>
                                    <li>
                                        <h5>Taxe</h5>
                                        <h6>5.00$</h6>
                                    </li>
                                    <li class="total-value">
                                        <h5>Total</h5>
                                        <h6>60.00$</h6>
                                    </li>
                                </ul>
                            </div>
                            <div class="setvaluecash">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);" class="paymentmethod">
                                            <img src="{{ url('assets/img/icons/cash.svg') }}" alt="img"
                                                class="me-2">Espèces
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="paymentmethod">
                                            <img src="{{ url('assets/img/icons/debitcard.svg') }}" alt="img"
                                                class="me-2">Carte bancaire
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="paymentmethod">
                                            <img src="{{ url('assets/img/icons/scan.svg') }}" alt="img"
                                                class="me-2">Scanner
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-totallabel">
                                <h5>Checkout</h5>
                                <h6>60.00$</h6>
                            </div>
                            <div class="btn-pos">
                                <ul>
                                    <li>
                                        <a class="btn"><img src="{{ url('assets/img/icons/pause1.svg') }}"
                                                alt="img" class="me-1">Mettre en attente</a>
                                    </li>
                                    <li>
                                        <a class="btn"><img src="{{ url('assets/img/icons/edit-6.svg') }}"
                                                alt="img" class="me-1">Devis</a>
                                    </li>
                                    <li>
                                        <a class="btn"><img src="{{ url('assets/img/icons/trash12.svg') }}"
                                                alt="img" class="me-1">Annuler</a>
                                    </li>
                                    <li>
                                        <a class="btn"><img src="{{ url('assets/img/icons/wallet1.svg') }}"
                                                alt="img" class="me-1">Paiement</a>
                                    </li>
                                    <li>
                                        <a class="btn" data-bs-toggle="modal" data-bs-target="#recents"><img
                                                src="{{ url('assets/img/icons/transcation.svg') }}" alt="img"
                                                class="me-1">Transaction</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

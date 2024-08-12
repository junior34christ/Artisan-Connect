@extends('layouts.master')
@section('title', 'Add Sale')
@section('content')

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Add Sale</h4>
                <h6>Add your new sale</h6>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('ventes.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Customer</label>
                                <div class="row">
                                    <div class="col-lg-10 col-sm-10 col-10">
                                        <select name="customer_id" class="select">
                                            <option value="">Choose</option>
                                            @foreach($customers as $customer)
                                                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-2 col-sm-2 col-2 ps-0">
                                        <div class="add-icon">
                                            <span><img src="assets/img/icons/plus1.svg" alt="img"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Date</label>
                                <div class="input-groupicon">
                                    <input type="text" name="date" placeholder="Choose Date" class="datetimepicker">
                                    <a class="addonset">
                                        <img src="assets/img/icons/calendars.svg" alt="img">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Supplier</label>
                                <select name="supplier_id" class="select">
                                    <option value="">Choose</option>
                                    @foreach($suppliers as $supplier)
                                        <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Product Name</label>
                                <div class="input-groupicon">
                                    <input type="text" id="product-search" placeholder="Please type product code and select..." onkeyup="searchProduct()">
                                    <div class="addonset">
                                        <img src="assets/img/icons/scanners.svg" alt="img">
                                    </div>
                                </div>
                                <div id="product-results" class="dropdown-menu show" style="width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="table-responsive mb-3">
                            <table class="table" id="selected-products">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Product Name</th>
                                        <th>QTY</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                        <th>Tax</th>
                                        <th>Subtotal</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Les produits sélectionnés seront ajoutés ici -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Order Tax</label>
                                <input type="text" name="order_tax">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Discount</label>
                                <input type="text" name="discount">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Shipping</label>
                                <input type="text" name="shipping">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="select">
                                    <option value="">Choose Status</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Inprogress">Inprogress</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 ">
                                <div class="total-order w-100 max-widthauto m-auto mb-4">
                                    <ul>
                                        <li>
                                            <h4>Order Tax</h4>
                                            <h5>$ 0.00 (0.00%)</h5>
                                        </li>
                                        <li>
                                            <h4>Discount </h4>
                                            <h5>$ 0.00</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="total-order w-100 max-widthauto m-auto mb-4">
                                    <ul>
                                        <li>
                                            <h4>Shipping</h4>
                                            <h5>$ 0.00</h5>
                                        </li>
                                        <li class="total">
                                            <h4>Grand Total</h4>
                                            <h5>$ 0.00</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-submit me-2">Submit</button>
                            <a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function searchProduct() {
        let query = document.getElementById('product-search').value;
        if (query.length > 2) {
            fetch(`/search-products?query=${query}`)
                .then(response => response.json())
                .then(data => {
                    let results = document.getElementById('product-results');
                    results.innerHTML = '';
                    if (data.length > 0) {
                        data.forEach(product => {
                            results.innerHTML += `<div class="dropdown-item" onclick="addProduct(${product.id}, '${product.name}', ${product.price}, '${product.image}')">${product.name}</div>`;
                        });
                    } else {
                        results.innerHTML = '<div class="dropdown-item">Ce article n\'existe pas</div>';
                    }
                });
        }
    }

    function addProduct(id, name, price, image) {
        let tableBody = document.querySelector('#selected-products tbody');
        let rowCount = tableBody.rows.length + 1;
        let row = `
            <tr>
                <td>${rowCount}</td>
                <td class="productimgname">
                    <a class="product-img">
                        <img src="assets/img/product/${image}" alt="product">
                    </a>
                    <a href="javascript:void(0);">${name}</a>
                </td>
                <td>1.00</td>
                <td>${price}</td>
                <td>0.00</td>
                <td>0.00</td>
                <td>${price}</td>
                <td>
                    <a href="javascript:void(0);" class="delete-set"><img src="assets/img/icons/delete.svg" alt="svg"></a>
                </td>
            </tr>
        `;
        tableBody.innerHTML += row;
    }
</script>

@endsection

@extends('layouts.master')
@section('title', '')
@section('content')

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Gestion des fournisseurs</h4>
                <h6>Ajouter un fournisseur</h6>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="{{ isset($supplier) ? route('suppliers.update', $supplier->id) : route('suppliers.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($supplier))
                        @method('PUT')
                    @endif
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Nom du fournisseur</label>
                                <input type="text" name="name" value="{{ isset($supplier) ? $supplier->name : old('name') }}" required>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Messagerie électronique</label>
                                <input type="email" name="email" value="{{ isset($supplier) ? $supplier->email : old('email') }}" required>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Téléphone</label>
                                <input type="text" name="phone" value="{{ isset($supplier) ? $supplier->phone : old('phone') }}" required>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Choisissez le pays</label>
                                <select class="select" name="country_id" required>
                                    <option>Choisissez le pays</option>
                                    @foreach($countries as $country)
                                        <option value="{{ $country->id }}" {{ (isset($supplier) && $supplier->country_id == $country->id) ? 'selected' : '' }}>{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Choisissez la Ville</label>
                                <select class="select" name="state_id" required>
                                    <option>Choisissez la ville</option>
                                    @foreach($states as $state)
                                        <option value="{{ $state->id }}" {{ (isset($supplier) && $supplier->state_id == $state->id) ? 'selected' : '' }}>{{ $state->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-9 col-12">
                            <div class="form-group">
                                <label>Addresse</label>
                                <input type="text" name="address" value="{{ isset($supplier) ? $supplier->address : old('address') }}" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description">{{ isset($supplier) ? $supplier->description : old('description') }}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Avatar</label>
                                <div class="image-upload">
                                    <input type="file" name="avatar">
                                    <div class="image-uploads">
                                        <img src="{{ asset('assets/img/icons/upload.svg') }}" alt="img">
                                        <h4>Glisser-déposer un fichier à télécharger</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-submit me-2">Envoyer</button>
                            <a href="{{ route('suppliers.indexsupplier') }}" class="btn btn-cancel">Annuler</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection

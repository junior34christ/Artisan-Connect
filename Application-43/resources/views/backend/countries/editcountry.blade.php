@extends('layouts.master')
@section('title', '')
@section('content')

    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Gestion des lieux</h4>
                    <h6>mettre à jour des lieux</h6>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Nom du pays</label>
                                <input type="text" placeholder="United Arab Emirates">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Région</label>
                                <input type="text" placeholder="Middle east	">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <a href="javascript:void(0);" class="btn btn-submit me-2">Envoyer</a>
                            <a href="countrieslist.html" class="btn btn-cancel">Annuler</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

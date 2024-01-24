@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Créer un Employé</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Créer un Employé</h6>
            </div>
            <div class="card-body">

                <a href="{{ route('employees.index') }}"
                    class="btn btn-primary btn-back">Retour aux employés</a>

                @include('includes.form-errors')

                <div class="row">
                    <div class="col-md-12">

                        <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Prénom</strong>
                                        <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control" placeholder="Prénom" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Nom</strong>
                                        <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control" placeholder="Nom" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Rôle</strong>
                                        <input type="text" name="role" class="form-control" placeholder="Ex: Developpeur Web" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ clean(trans('niva-backend.email'), ['Attr.EnableID' => true]) }}</strong>
                                        <input type="email" name="email" class="form-control"
                                        placeholder="{{ clean(trans('niva-backend.email'), ['Attr.EnableID' => true]) }}"
                                        required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Téléphone</strong>
                                        <input type="text" name="phone" class="form-control" placeholder="Téléphone" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ clean(trans('niva-backend.address'), ['Attr.EnableID' => true]) }}</strong>
                                        <input type="address" name="address" class="form-control" placeholder="{{ clean(trans('address'), ['Attr.EnableID' => true]) }}" required>
                                    </div>
                                </div>
                                <!-- Add more fields as needed -->

                                <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                    <button type="submit"
                                        class="btn btn-primary">{{ clean(trans('Créer un Employé'), ['Attr.EnableID' => true]) }}</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection

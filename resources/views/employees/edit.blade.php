@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Modifier un Employé</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Modifier un Employé</h6>
            </div>
            <div class="card-body">

                <a href="{{ route('employees.index') }}"
                    class="btn btn-primary btn-back">Retour aux employés</a>

                @include('includes.form-errors')

                <div class="row">
                    <div class="col-md-12">

                        <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label
                                            for="first_name">Prénom</label>
                                        <input type="text" name="first_name" class="form-control"
                                            value="{{ $employee->first_name }}" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label
                                            for="last_name">Nom</label>
                                        <input type="text" name="last_name" class="form-control"
                                            value="{{ $employee->last_name }}" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label
                                            for="role">Rôle</label>
                                        <input type="text" name="role" class="form-control"
                                            value="{{ $employee->role }}" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label
                                            for="phone">Téléphone</label>
                                        <input type="text" name="phone" class="form-control"
                                            value="{{ $employee->phone }}" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label
                                            for="email">Email</label>
                                        <input type="email" name="email" class="form-control"
                                            value="{{ $employee->email }}" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label
                                            for="address">Adresse</label>
                                        <input type="address" name="address" class="form-control"
                                            value="{{ $employee->address }}" required>
                                    </div>
                                </div>
                                <!-- Add more fields as needed -->

                                <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                    <button type="submit"
                                        class="btn btn-primary">{{ clean( trans('niva-backend.edit_employee') , array('Attr.EnableID' => true)) }}</button>
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

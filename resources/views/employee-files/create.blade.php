@extends('layouts.admin')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Ajouter un Dossier d'employé</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">

                @include('includes.form-errors')

                <form action="{{ route('employee-files.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="employee_id">{{ clean(trans('niva-backend.employee'), ['Attr.EnableID' => true]) }}</label>
                        <select name="employee_id" class="form-control">
                            @foreach ($employees as $employee)
                                <option value="{{ $employee->id }}">{{ $employee->first_name }} {{ $employee->last_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="file_type">File Type:</label>
                        <input type="text" name="file_type" class="form-control" value="{{ old('file_type') }}" placeholder="File Type" required>
                    </div>

                    <div class="form-group">
                        <label for="file">File:</label>
                        <input type="file" class="form-control" name="file" required>
                    </div>

                    <!-- Add more fields as needed -->

                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@stop

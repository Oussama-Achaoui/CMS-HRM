@extends('layouts.admin')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">{{ clean(trans('niva-backend.employee_file_details'), ['Attr.EnableID' => true]) }}</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">

                <h2>{{ clean(trans('niva-backend.employee_file_information'), ['Attr.EnableID' => true]) }}</h2>

                <table class="table">
                    <tr>
                        <th>{{ clean(trans('niva-backend.employee'), ['Attr.EnableID' => true]) }}</th>
                        <td>{{ $employeeFile->employee->first_name }} {{ $employeeFile->employee->last_name }}</td>
                    </tr>
                    <tr>
                        <th>File Type:</th>
                        <td>{{ $employeeFile->file_type }}</td>
                    </tr>
                    <tr>
                        <th>File :</th>
                        <td><iframe src="{{ url('storage/' . $employeeFile->file_path) }}" width="100%" height="600px"
                                style="border: none;"></iframe></td>
                    </tr>
                    <!-- Add more fields as needed -->
                </table>

                @if ($employeeFile->file_path)
                    <a href="{{ route('employee-files.download', $employeeFile->id) }}" class="btn btn-info"
                        target="_blank">Download File</a>
                @endif
                <a href="{{ route('employee-files.edit', $employeeFile->id) }}" class="btn btn-primary">Edit</a>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@stop

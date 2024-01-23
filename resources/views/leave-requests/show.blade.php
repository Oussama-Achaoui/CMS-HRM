@extends('layouts.admin')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Leave Request Details</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">

                <h2>Leave Request Information</h2>

                <table class="table">
                    <tr>
                        <th>{{ clean(trans('Employee ID'), ['Attr.EnableID' => true]) }}:</th>
                        <td>{{ $leaveRequest->employee_id }}</td>
                    </tr>
                    <tr>
                        <th>{{ clean(trans('niva-backend.leave_type'), ['Attr.EnableID' => true]) }}:</th>
                        <td>{{ $leaveRequest->type }}</td>
                    </tr>
                    <tr>
                        <th>{{ clean(trans('niva-backend.start_date'), ['Attr.EnableID' => true]) }}:</th>
                        <td>{{ $leaveRequest->start_date }}</td>
                    </tr>
                    <tr>
                        <th>{{ clean(trans('niva-backend.end_date'), ['Attr.EnableID' => true]) }}:</th>
                        <td>{{ $leaveRequest->end_date }}</td>
                    </tr>
                    <tr>
                        <th>{{ clean(trans('Reason'), ['Attr.EnableID' => true]) }}:</th>
                        <td>{{ $leaveRequest->reason }}</td>
                    </tr>
                    <!-- Add more fields as needed -->
                </table>

                <a href="{{ route('leave-requests.index') }}"
                    class="btn btn-primary">{{ clean(trans('niva-backend.back_to_leave_requests'), ['Attr.EnableID' => true]) }}</a>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@stop

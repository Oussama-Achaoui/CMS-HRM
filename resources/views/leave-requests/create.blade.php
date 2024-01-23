@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">{{ clean(trans('Create Leave Request'), ['Attr.EnableID' => true]) }}</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">{!! trans('Create Leave Request') !!}</h6>
            </div>
            <div class="card-body">

                <a href="{{ route('leave-requests.index') }}"
                    class="btn btn-primary btn-back">{{ clean(trans('Back to Leave Requests'), ['Attr.EnableID' => true]) }}</a>

                @include('includes.form-errors')

                <div class="row">
                    <div class="col-md-12">

                        <form action="{{ route('leave-requests.store') }}" method="POST">
                            @csrf

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="employee_id">Employee:</label>
                                    <select name="employee_id" class="form-control">
                                        @foreach ($employees as $employee)
                                            <option value="{{ $employee->id }}">{{ $employee->first_name }} {{ $employee->last_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ clean(trans('Leave Type'), ['Attr.EnableID' => true]) }}</strong>
                                        <input type="text" name="type" class="form-control"
                                            placeholder="{{ clean(trans('Leave Type'), ['Attr.EnableID' => true]) }}" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ clean(trans('Start Date'), ['Attr.EnableID' => true]) }}</strong>
                                        <input type="date" name="start_date" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ clean(trans('End Date'), ['Attr.EnableID' => true]) }}</strong>
                                        <input type="date" name="end_date" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ clean(trans('Reason'), ['Attr.EnableID' => true]) }}</strong>
                                        <textarea name="reason" class="form-control"
                                            placeholder="{{ clean(trans('Reason'), ['Attr.EnableID' => true]) }}"
                                            required></textarea>
                                    </div>
                                </div>
                                <!-- Add more fields as needed -->

                                <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                    <button type="submit"
                                        class="btn btn-primary">{{ clean(trans('Create Leave Request'), ['Attr.EnableID' => true]) }}</button>
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

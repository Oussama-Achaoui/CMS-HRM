@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">{{ clean(__('niva-backend.create_income'), ['Attr.EnableID' => true]) }}</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ clean(__('niva-backend.create_income'), ['Attr.EnableID' => true]) }}</h6>
            </div>
            <div class="card-body">

                <a href="{{ route('incomes.index') }}" class="btn btn-primary btn-back">Back to Incomes</a>

                @include('includes.form-errors')

                <div class="row">
                    <div class="col-md-12">

                        <form action="{{ route('incomes.store') }}" method="POST">
                            @csrf

                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <strong>Name:</strong>
                                        <input type="text" name="name" class="form-control" placeholder="Enter name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <strong>{{ clean(__('niva-backend.description'), ['Attr.EnableID' => true]) }}:</strong>
                                        <input type="text" name="description" class="form-control"
                                            placeholder="Enter description" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <strong>{{ clean(__('niva-backend.amount'), ['Attr.EnableID' => true]) }}:</strong>
                                        <input type="number" name="amount" class="form-control" placeholder="Enter amount"
                                            required min="0">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <strong>{{ clean(__('niva-backend.transaction_date'), ['Attr.EnableID' => true]) }}:</strong>
                                        <input type="date" name="transaction_date" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <strong>{{ clean(__('niva-backend.payment_method'), ['Attr.EnableID' => true]) }}:</strong>
                                        <input type="text" name="payment_method" class="form-control"
                                            placeholder="Enter payment method" required>
                                    </div>
                                </div>
                                <!-- Add more fields as needed -->

                                <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                    <button type="submit"
                                        class="btn btn-primary">{{ clean(__('niva-backend.create_income'), ['Attr.EnableID' => true]) }}</button>
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

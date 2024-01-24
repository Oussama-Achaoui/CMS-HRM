@extends('layouts.admin')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit Expense</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Expense</h6>
            </div>
            <div class="card-body">

                <a href="{{ route('expenses.index') }}" class="btn btn-primary btn-back">Back to Expenses</a>

                @include('includes.form-errors')

                <div class="row">
                    <div class="col-md-12">

                        <form action="{{ route('expenses.update', $expense->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <strong>Name:</strong>
                                        <input type="text" name="name" class="form-control" value="{{ $expense->name }}" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <strong>Description:</strong>
                                        <input type="text" name="description" class="form-control" value="{{ $expense->description }}" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <strong>Amount:</strong>
                                        <input type="number" name="amount" class="form-control" value="{{ $expense->amount }}" required min="0">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <strong>Transaction Date:</strong>
                                        <input type="date" name="transaction_date" class="form-control" value="{{ $expense->transaction_date }}" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <strong>Payment Method:</strong>
                                        <input type="text" name="payment_method" class="form-control" value="{{ $expense->payment_method }}" required>
                                    </div>
                                </div>
                                <!-- Add more fields as needed -->

                                <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                    <button type="submit" class="btn btn-primary">Update Expense</button>
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

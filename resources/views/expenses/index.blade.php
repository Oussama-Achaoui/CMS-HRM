@extends('layouts.admin')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Expenses</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Expenses</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Amount</th>
                                <th>Transaction Date</th>
                                <th>Payment Method</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($expenses as $expense)
                                <tr>
                                    <td>{{ $expense->name }}</td>
                                    <td>{{ $expense->description }}</td>
                                    <td>{{ $expense->amount }}</td>
                                    <td>{{ $expense->transaction_date }}</td>
                                    <td>{{ $expense->payment_method }}</td>
                                    <td>
                                        <a href="{{ route('expenses.edit', $expense->id) }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <form action="{{ route('expenses.destroy', $expense->id) }}" method="post" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette demande de congé ?')"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@stop

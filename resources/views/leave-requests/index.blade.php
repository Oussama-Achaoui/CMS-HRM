@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">{{ clean(trans('niva-backend.leave_requests'), ['Attr.EnableID' => true]) }}</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ clean(trans('niva-backend.all_leave_requests'), ['Attr.EnableID' => true]) }}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <a href="{{route('employee-files.create')}}" class="btn btn-primary btn-back">{{clean( trans('niva-backend.create_leave_equest') , array('Attr.EnableID' => true))}}</a>

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Employee</th>
                                <th>Type</th>
                                <th>niva-backend.start_date</th>
                                <th>niva-backend.end_date</th>
                                <th>Reason</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($leaveRequests as $request)
                                <tr>
                                    <td>{{ $request->employee->first_name }} {{ $request->employee->last_name }}</td>
                                    <td>{{ $request->type }}</td>
                                    <td>{{ $request->start_date }}</td>
                                    <td>{{ $request->end_date }}</td>
                                    <td>{{ $request->reason }}</td>
                                    <td>
                                        <a href="{{ route('leave-requests.show', $request->id) }}"
                                            class="btn btn-warning btn-sm"><i class="fa-solid fa-eye"></i></a>
                                        <a href="{{ route('leave-requests.edit', $request->id) }}"
                                            class="btn btn-info btn-sm"><i class="fa-solid fa-file-pen"></i></a>
                                        <form method="POST" action="{{ route('leave-requests.destroy', $request->id) }}"
                                            style="display: inline;">
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
@endsection

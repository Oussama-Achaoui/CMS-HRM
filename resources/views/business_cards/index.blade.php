@extends('layouts.admin')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Cartes de visite</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Toutes les cartes de visite</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nom </th>
                                <th>Rôle</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($businessCards as $businessCard)
                                <tr>
                                    <td>{{ ucfirst($businessCard->name) }}</td>
                                    <td>{{ $businessCard->role }}</td>
                                    <td>
                                        <a href="{{ route('business-cards.show', $businessCard->id) }}">View</a>
                                        <a href="{{ route('business-cards.edit', $businessCard->id) }}">Edit</a>
                                        <a href="{{ route('business-cards.export-single', $businessCard->id) }}">Export</a>
                                        <form action="{{ route('business-cards.destroy', $businessCard->id) }}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Supprimer</button>
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
@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">{{ clean(trans('Create Business Card'), ['Attr.EnableID' => true]) }}</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">{!! trans('Create Business Card') !!}</h6>
            </div>
            <div class="card-body">

                <a href="{{ route('business-cards.index') }}"
                    class="btn btn-primary btn-back">{{ clean(trans('Back to Cartes de visite'), ['Attr.EnableID' => true]) }}</a>

                @include('includes.form-errors')

                <div class="row">
                    <div class="col-md-12">

                        <form action="{{ route('business-cards.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ clean(trans('niva-backend.name'), ['Attr.EnableID' => true]) }}</strong>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="{{ clean(trans('niva-backend.name'), ['Attr.EnableID' => true]) }}"
                                            required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ clean(trans('Role'), ['Attr.EnableID' => true]) }}</strong>
                                        <input type="text" name="role" class="form-control" placeholder="Role"
                                            required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ clean(trans('niva-backend.phone'), ['Attr.EnableID' => true]) }}</strong>
                                        <input type="text" name="phone" class="form-control"
                                            placeholder="{{ clean(trans('niva-backend.phone'), ['Attr.EnableID' => true]) }}"
                                            required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ clean(trans('niva-backend.email'), ['Attr.EnableID' => true]) }}</strong>
                                        <input type="email" name="email" class="form-control"
                                            placeholder="{{ clean(trans('niva-backend.email'), ['Attr.EnableID' => true]) }}"
                                            required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ clean(trans('niva-backend.address'), ['Attr.EnableID' => true]) }}</strong>
                                        <input type="address" name="address" class="form-control"
                                            placeholder="{{ clean(trans('address'), ['Attr.EnableID' => true]) }}"
                                            required>
                                    </div>
                                </div>
                                <!-- Add more fields as needed -->

                                <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                    <button type="submit"
                                        class="btn btn-primary">{{ clean(trans('Create Business Card'), ['Attr.EnableID' => true]) }}</button>
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

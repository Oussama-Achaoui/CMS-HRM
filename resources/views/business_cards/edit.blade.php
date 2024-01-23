@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">{{ clean(trans('Edit Business Card'), ['Attr.EnableID' => true]) }}</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">{!! trans('Edit Business Card') !!}</h6>
            </div>
            <div class="card-body">

                <a href="{{ route('business-cards.index') }}"
                    class="btn btn-primary btn-back">{{ clean(trans('Back to Cartes de visite'), ['Attr.EnableID' => true]) }}</a>

                @include('includes.form-errors')

                <div class="row">
                    <div class="col-md-12">

                        <form action="{{ route('business-cards.update', $businessCard->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label
                                            for="name">{{ clean(trans('niva-backend.name'), ['Attr.EnableID' => true]) }}</label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ $businessCard->name }}" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label
                                            for="role">{{ clean(trans('Role'), ['Attr.EnableID' => true]) }}</label>
                                        <input type="text" name="role" class="form-control"
                                            value="{{ $businessCard->role }}" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label
                                            for="phone">{{ clean(trans('niva-backend.phone'), ['Attr.EnableID' => true]) }}</label>
                                        <input type="text" name="phone" class="form-control"
                                            value="{{ $businessCard->phone }}" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label
                                            for="email">{{ clean(trans('niva-backend.email'), ['Attr.EnableID' => true]) }}</label>
                                        <input type="email" name="email" class="form-control"
                                            value="{{ $businessCard->email }}" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label
                                            for="address">{{ clean(trans('niva-backend.address'), ['Attr.EnableID' => true]) }}</label>
                                        <input type="address" name="address" class="form-control"
                                            value="{{ $businessCard->address }}" required>
                                    </div>
                                </div>
                                <!-- Add more fields as needed -->

                                <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                    <button type="submit"
                                        class="btn btn-primary">{{ clean(trans('Update Business Card'), ['Attr.EnableID' => true]) }}</button>
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

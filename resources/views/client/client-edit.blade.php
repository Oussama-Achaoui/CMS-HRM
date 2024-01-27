@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">{{ clean(trans('niva-backend.edit_client'), ['Attr.EnableID' => true]) }}
        </h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ clean(trans('niva-backend.edit_client'), ['Attr.EnableID' => true]) }}</h6>
            </div>
            <div class="card-body">

                <a href="{{ route('client.index') }}"
                    class="btn btn-primary btn-back">{{ clean(trans('niva-backend.back_clients_page'), ['Attr.EnableID' => true]) }}</a>


                @if ($message = Session::get('client_success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert"><i class="fas fa-times"></i></button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif


                @include('includes.form-errors')

                <div class="row">

                    <div class="col-md-12">

                        <form action="{{ route('client.update', $client->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-12">


                                    <div class="form-group">
                                        <strong>{{ clean(trans('niva-backend.CodeUp_name'), ['Attr.EnableID' => true]) }}</strong>
                                        <input type="text" name="CodeUp_name" class="form-control"
                                            value="{{ $client->CodeUp_name }}">
                                    </div>
                                    <div class="form-group">
                                        <strong>{{ clean(trans('niva-backend.CodeUp_link'), ['Attr.EnableID' => true]) }}</strong>
                                        <input type="text" name="CodeUp_link" class="form-control"
                                            value="{{ $client->CodeUp_link }}">
                                    </div>

                                    <div class="form-group">
                                        <img class="img-fluid pb-4" width="100" height="100"
                                            src="{{ $client->photo ? '/images/media/' . $client->photo->file : '/public/img/200x200.png' }}">
                                        <p><strong>{{ clean(trans('niva-backend.photo'), ['Attr.EnableID' => true]) }}</strong>
                                        </p>
                                        <input type="file" name="photo_id" class="form-control-file" id="photo_id">
                                    </div>


                                </div>




                                <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                    <button type="submit"
                                        class="btn btn-primary">{{ clean(trans('niva-backend.update'), ['Attr.EnableID' => true]) }}</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->


    <style>
        .hide {
            display: none;
        }
    </style>
@endsection

@section('footer')
    <script>
        (function($) {
            'use strict';
            $(document).ready(function() {

                $("input[type='radio']").click(function() {
                    var radioValue = $(this).val();
                    if (radioValue == 1) {
                        $(".submeniu-code").removeClass("hide");
                    }
                    if (radioValue == 0) {
                        $(".submeniu-code").addClass("hide");
                    }
                });


            })
        }(jQuery))
    </script>
@endsection

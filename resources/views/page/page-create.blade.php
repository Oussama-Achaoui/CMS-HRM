@extends('layouts.admin')

@section('content')

    @include('includes.tinyeditor')

    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">{{ clean(trans('niva-backend.create_page'), ['Attr.EnableID' => true]) }}
        </h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ clean(trans('niva-backend.create_page'), ['Attr.EnableID' => true]) }}</h6>
            </div>
            <div class="card-body">


                <div class="row">
                    <div class="col-lg-6">
                        <a href="{{ route('page.index') . '?language=' . request()->input('language') }}"
                            class="btn btn-primary btn-back">{{ clean(trans('niva-backend.back_pages'), ['Attr.EnableID' => true]) }}</a>
                    </div>

                    <div class="col-lg-6 text-right">
                        @if (!empty($langs))
                            <select name="language" class="form-control language-control"
                                onchange="window.location='{{ url()->current() . '?language=' }}'+this.value">
                                <option value="" selected disabled>
                                    {{ clean(trans('niva-backend.select_language'), ['Attr.EnableID' => true]) }}
                                </option>
                                @foreach ($langs as $lang)
                                    <option value="{{ $lang->code }}"
                                        {{ $lang->code == request()->input('language') ? 'selected' : '' }}>
                                        {{ $lang->name }}</option>
                                @endforeach
                            </select>
                        @endif
                    </div>
                </div>



                @if ($message = Session::get('page_success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert"><i class="fas fa-times"></i></button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif


                @include('includes.form-errors')

                <div class="row">
                    <div class="col-md-12">

                        <form action="{{ route('page.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="language_id" value="{{ $lang_id }}">

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{ clean(trans('niva-backend.title'), ['Attr.EnableID' => true]) }}</strong>
                                                <input type="text" name="title" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{ clean(trans('niva-backend.link'), ['Attr.EnableID' => true]) }}</strong>
                                                <div class="slug-container"><span>{{ URL::to('/') }}/</span><input
                                                        type="text" name="slug" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="form-group">
                                        <strong>{{ clean(trans('niva-backend.photo'), ['Attr.EnableID' => true]) }}</strong>
                                        <input type="file" name="photo_id" class="form-control-file" id="photo_id">
                                    </div>


                                    <div class="form-group">
                                        <strong>{{ clean(trans('niva-backend.body'), ['Attr.EnableID' => true]) }}</strong>
                                        <input type="text" name="body" id="hidden-body-field"
                                            value="" hidden>
                                        <div id="body-editor">
                                        </div>
                                    </div>




                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{ clean(trans('niva-backend.meta_title'), ['Attr.EnableID' => true]) }}</strong>
                                                <input type="text" name="meta_title" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{ clean(trans('niva-backend.meta_description'), ['Attr.EnableID' => true]) }}</strong>
                                                <input type="text" name="meta_description" class="form-control"
                                                    placeholder="">
                                            </div>
                                        </div>
                                    </div>




                                </div>


                                <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                    <button type="submit"
                                        class="btn btn-primary">{{ clean(trans('niva-backend.create'), ['Attr.EnableID' => true]) }}</button>
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

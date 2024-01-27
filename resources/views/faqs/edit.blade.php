@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">{{ clean(__('niva-backend.edit_faq'), ['Attr.EnableID' => true]) }}</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ clean(__('niva-backend.edit_faq'), ['Attr.EnableID' => true]) }}
                </h6>
            </div>
            <div class="card-body">

                <a href="{{ route('faqs.index') }}" class="btn btn-primary btn-back">{{ clean(__('niva-backend.back_faqs_page'), ['Attr.EnableID' => true]) }}</a>

                @include('includes.form-errors')

                <div class="row">
                    <div class="col-md-12">

                        <form action="{{ route('faqs.update', $faq->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="question">{{ clean(__('niva-backend.question'), ['Attr.EnableID' => true]) }}</label>
                                <textarea name="question" class="form-control" rows="4" required>{{ $faq->question }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="answer">{{ clean(__('niva-backend.answer'), ['Attr.EnableID' => true]) }}</label>
                                <textarea name="answer" class="form-control" rows="6" required>{{ $faq->answer }}</textarea>
                            </div>

                            <!-- Add more fields as needed -->

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">{{ clean(__('niva-backend.update_faq'), ['Attr.EnableID' => true]) }}</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection

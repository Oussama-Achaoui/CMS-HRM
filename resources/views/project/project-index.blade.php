@extends('layouts.admin')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">
            {{ clean(trans('niva-backend.section_projects'), ['Attr.EnableID' => true]) }}</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ clean(trans('niva-backend.section_projects'), ['Attr.EnableID' => true]) }}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    <div class="row">
                        <div class="col-lg-6">
                            <a href="{{ route('home-setting.edit') . '?language=' . request()->input('language') }}"
                                class="btn btn-primary btn-back">{{ clean(trans('niva-backend.back_homepage'), ['Attr.EnableID' => true]) }}</a>
                            <a href="{{ route('portfolio-setting.edit') . '?language=' . request()->input('language') }}"
                                class="btn btn-primary btn-back">{{ clean(trans('niva-backend.back_projectpage'), ['Attr.EnableID' => true]) }}</a>
                            <a href="{{ route('project.create') . '?language=' . request()->input('language') }}"
                                class="btn btn-primary btn-back">{{ clean(trans('niva-backend.create'), ['Attr.EnableID' => true]) }}</a>
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

                    @if ($message = Session::get('project_success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert"><i class="fas fa-times"></i></button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif


                    <form action="{{ route('delete.project') }}" method="POST" class="form-inline">
                        @csrf
                        @method('DELETE')
                        <div class="form-group">
                            <input type="submit" name="delete_all" class="btn btn-danger"
                                value="{{ clean(trans('niva-backend.delete'), ['Attr.EnableID' => true]) }}">
                        </div>



                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" id="options"></th>
                                    <th scope="col">
                                        {{ clean(trans('niva-backend.photo'), ['Attr.EnableID' => true]) }}</th>
                                    <th scope="col">
                                        {{ clean(trans('niva-backend.owner'), ['Attr.EnableID' => true]) }}</th>
                                    <th scope="col">
                                        {{ clean(trans('niva-backend.title'), ['Attr.EnableID' => true]) }}</th>
                                    <th scope="col">
                                        {{ clean(trans('niva-backend.category'), ['Attr.EnableID' => true]) }}</th>
                                    <th scope="col">
                                        {{ clean(trans('niva-backend.body'), ['Attr.EnableID' => true]) }}</th>
                                    <th scope="col">{{ clean(trans('Action'), ['Attr.EnableID' => true]) }}</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if ($projects)
                                    @foreach ($projects as $project)
                                        <tr>
                                            <td><input class="checkboxes" type="checkbox" name="checkbox_array[]"
                                                    value="{{ $project->id }}"></td>
                                            <td data-label="Photo"><img height="50"
                                                    src="{{ $project->photo ? '/images/media/' . $project->photo->file : '/public/img/200x200.png' }}"
                                                    alt="">
                                                <p class="mb-0 mt-2"></p>
                                            </td>
                                            <td data-label="OWNER">{{ $project->user->name }}</td>
                                            <td data-label="TITLE">{{ $project->title }}</td>
                                            <td data-label="Category">
                                                {{ $project->project_category ? $project->project_category->name : 'Uncategorized' }}
                                            </td>
                                            <td class="body-project">{!! $project->body !!}</td>
                                            <td class="body-project"><a
                                                    href="{{ route('project.edit', $project->id) . '?language=' . request()->input('language') }}"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001" />
                                                    </svg></a></td>
                                        </tr>
                                    @endforeach
                                @endif

                            </tbody>
                        </table>
                        <span>{{ $projects->links() }}</span>

                    </form>

                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@stop

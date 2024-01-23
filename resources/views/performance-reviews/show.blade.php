@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{clean( trans('View Business Card') , array('Attr.EnableID' => true))}}</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{!! trans('View Business Card') !!}</h6>
        </div>
        <div class="card-body">

            <h1>{{ ucfirst($businessCard->name) }} - {{ ucfirst($businessCard->role) }}</h1>

            <p><strong>{{clean( trans('niva-backend.phone') , array('Attr.EnableID' => true))}}:</strong> {{ $businessCard->phone }}</p>
            <p><strong>{{clean( trans('niva-backend.email') , array('Attr.EnableID' => true))}}:</strong> {{ $businessCard->email }}</p>
            <p><strong>{{clean( trans('Address ') , array('Attr.EnableID' => true))}}:</strong> {{ $businessCard->address  }}</p>
            <!-- Display more details as needed -->

            <a href="{{ route('business-cards.edit', $businessCard->id) }}" class="btn btn-primary">{{clean( trans('niva-backend.edit') , array('Attr.EnableID' => true))}}</a>
            <form action="{{ route('business-cards.destroy', $businessCard->id) }}" method="post" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">{{clean( trans('niva-backend.delete') , array('Attr.EnableID' => true))}}</button>
            </form>
            <a href="{{ route('business-cards.export-single', $businessCard->id) }}" class="btn btn-success">{{clean( trans('Download') , array('Attr.EnableID' => true))}}</a>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection

@extends('layouts.admin')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">{{ clean(trans('niva-backend.dashboard'), ['Attr.EnableID' => true]) }}</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4 dashboard-page">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ clean(trans('niva-backend.dashboard'), ['Attr.EnableID' => true]) }}</h6>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            {{ clean(trans('niva-backend.blog'), ['Attr.EnableID' => true]) }}</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $post_number }}
                                            {{ clean(trans('niva-backend.posts'), ['Attr.EnableID' => true]) }}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-blog fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            {{ clean(trans('niva-backend.projects'), ['Attr.EnableID' => true]) }}
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $project_number }}
                                            {{ clean(trans('niva-backend.projects'), ['Attr.EnableID' => true]) }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-solid fa-bars-progress fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            {{ clean(trans('niva-backend.what_we_do'), ['Attr.EnableID' => true]) }}
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $service_number }}
                                            {{ clean(trans('niva-backend.services'), ['Attr.EnableID' => true]) }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-brands fa-servicestack fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            {{ clean(trans('niva-backend.feedback'), ['Attr.EnableID' => true]) }}
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $testimonial_number }}
                                            {{ clean(trans('niva-backend.testimonials'), ['Attr.EnableID' => true]) }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            {{ clean(trans('niva-backend.our_team'), ['Attr.EnableID' => true]) }}
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $member_number }}
                                            {{ clean(trans('niva-backend.members'), ['Attr.EnableID' => true]) }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-solid fa-people-group fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            {{ clean(trans('niva-backend.our_clients'), ['Attr.EnableID' => true]) }}
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $client_number }}
                                            {{ clean(trans('niva-backend.clients'), ['Attr.EnableID' => true]) }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-brands fa-intercom fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Graphique
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <canvas id="dataChart" height="150"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>



    {{-- script for chart  --}}
@section('chart-script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var ctx = document.getElementById('dataChart').getContext('2d');
            var dataChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Blog', 'Projects', 'Services', 'Feedback', 'Members', 'Clients'],
                    datasets: [{
                        label: 'Number of Items',
                        data: [{{ $post_number }}, {{ $project_number }}, {{ $service_number }},
                            {{ $testimonial_number }}, {{ $member_number }},
                            {{ $client_number }}
                        ],
                        backgroundColor: '#2f22ea',
                        borderColor: '#2f22ea',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    onClick: function(event, elements) {
                        if (elements.length > 0) {
                            var clickedIndex = elements[0].index;
                            switch (clickedIndex) {
                                case 0:
                                    window.location.href = '/admin/post?language=' +
                                        '{{ app()->getLocale() }}';
                                    break;
                                case 1:
                                    window.location.href = '/admin/project?language=' +
                                        '{{ app()->getLocale() }}';
                                    break;
                            }
                        }
                    }
                }
            });
        });
    </script>
@endsection
<!-- /.container-fluid -->

@stop

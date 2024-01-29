@extends('layouts.front')


@section('title')
    Portfeuille
@endsection

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Portfolio</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Portfolio</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            @foreach ($projects_categories as $category)
                                <li data-filter=".filter-{{ $category->id }}">{{ $category->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up">

                    @foreach ($projects as $project)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-{!! $project->project_category_id !!}">
                            <img src="{{ asset('/images/media/' . $project->photo->file) }}" class="img-fluid"
                                alt="image de {!! $project->title !!}">
                            <div class="portfolio-info">
                                <h4>{!! $project->title !!}</h4>
                                <p>{!! $project->slug !!}</p>
                                <a href="{{ asset('/images/media/' . $project->photo->file) }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                    title="{!! $project->title !!}"><i class="bx bx-plus"></i></a>
                                {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i
                    class="bx bx-link"></i></a> --}}
                            </div>
                        </div>
                    @endforeach



                </div>

            </div>
        </section>
        <!-- End Portfolio Section -->

    </main>
    <!-- End #main -->
@endsection

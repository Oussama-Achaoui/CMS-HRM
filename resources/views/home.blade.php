@extends('layouts.front')

@section('content')
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner" role="listbox">

                @foreach ($sliders as $key => $slider)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}"
                        style="background-image: url({{ 'images/media/' . $slider->photo->file }});">
                        <div class="carousel-container">
                            <div class="carousel-content animate__animated animate__fadeInUp">
                                <h2>{!! $slider->heading1 !!}</h2>
                                <p>{!! $slider->heading2 !!}</p>
                                <div class="text-center"><a href="{!!$slider->button_link!!}" class="btn-get-started">{!!$slider->button_text!!}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        </div>
    </section>

    <!-- End Hero -->


    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about-us" class="about-us">
            <div class="container" data-aos="fade-up">

                <div class="row content">
                    <div class="col-lg-6" data-aos="fade-right">
                        <h2>{!! $homesetting->about_title !!}</h2>
                        <h3>{!! $homesetting->about_subtitle !!}</h3>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                        <p>{!! $homesetting->about_description !!}</p>
                        <div class="exp-about d-flex">
                            <h3 class="nmb-font-about text-primary"> {!! $homesetting->about_yearstitle !!} &nbsp;</h3>
                            <h3 class="service_summary-about"> {!! $homesetting->about_yearstext !!}</h3>
                        </div>
                        <a href="{{ $homesetting->about_buttonlink }}" type="button" class="btn btn-outline-primary"
                            data-mdb-ripple-init data-mdb-ripple-color="dark">{!! $homesetting->about_buttontext !!}</a>
                    </div>
                </div>
        </section>
        <!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    @php
                    $colors = ['blue', 'orange', 'pink', 'yellow', 'red', 'teal'];
                @endphp
                    @foreach ($services as $index => $service)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box iconbox-{{ $colors[$index % count($colors)] }}">
                                <div class="icon">
                                    <svg width="100" height="100" viewBox="0 0 600 600"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                            d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                        </path>
                                    </svg>
                                    {!! $service->icon !!}
                                </div>
                                <h4><a href="">{!! $service->title !!}</a></h4>
                                <p>{!! $service->description !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Tout</li>
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

        <!-- ======= Our Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Clients</h2>
                </div>

                <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="{{ asset('img/clients/client-1.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="{{ asset('img/clients/client-2.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="{{ asset('img/clients/client-3.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="{{ asset('img/clients/client-4.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="{{ asset('img/clients/client-5.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="{{ asset('img/clients/client-6.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="{{ asset('img/clients/client-7.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="{{ asset('img/clients/client-8.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Our Clients Section -->

    </main>
    <!-- End #main -->
@endsection

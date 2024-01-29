@extends('layouts.front')

@section('title')
    Blogs
@endsection


@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex gap-3 align-items-center">
                    <h2 class="m-0">Blog | </h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Blog</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">
                        @foreach ($posts as $post)
                            <article class="entry">

                                <div class="entry-img">
                                    <img src="{{ '/images/media/' . $post->photo->file }}" alt="{{$post->title}}" class="img-fluid">
                                </div>

                                <h2 class="entry-title">
                                    <a title="{{ $post->title }}"
                                        href="{{ URL::to('/') }}/post/{{ $post->slug }}">{{ $post->title }}</a>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        {{-- <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li> --}}
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                href="{{ URL::to('/') }}/post/{{ $post->slug }}"><time
                                                    datetime="{{ date('d.M.Y', strtotime($post->created_at)) }}">{{ date('d.M.Y', strtotime($post->created_at)) }}</time></a>
                                        </li>
                                        {{-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li> --}}
                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <p>
                                        {{ $post->meta_description }}
                                    </p>
                                    <div class="read-more">
                                        <a href="{{ URL::to('/') }}/post/{{ $post->slug }}">Lire plus</a>
                                    </div>
                                </div>

                            </article>
                            <!-- End blog entry -->
                        @endforeach

                        <div class="blog-pagination">
                          <ul class="justify-content-center">
                              @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
                                  <li class="{{ $page == $posts->currentPage() ? 'active' : '' }}">
                                      <a href="{{ $url }}">{{ $page }}</a>
                                  </li>
                              @endforeach
                          </ul>
                      </div>
                      
                      
                    </div>
                    <!-- End blog entries list -->
                    {{-- Début de la section de la barre latérale (sidebar) --}}
                    @include('includes.blog-sidebar')
                    {{-- Fin de la section de la barre latérale (sidebar) --}}

                </div>

            </div>
        </section><!-- End Blog Section -->

    </main>
    <!-- End #main -->
@endsection

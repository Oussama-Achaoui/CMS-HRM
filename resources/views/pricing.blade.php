@extends('layouts.front')


@section('title') Pricing @endsection

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Pricing</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Pricing</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="row">

          @foreach ($pricings as $pricing)
            <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
              <div class="box">
              <span class="@if($pricing->pricing_switch == 1) advanced @endif ">{{ $pricing->popular_text }}</span>
                <h3>{{ $pricing->title }}</h3>
                <h4><sup>$</sup>{{ $pricing->price }}<span> / month</span></h4>
                <div class="plan-features">
					        {!!$pricing->description!!}
					      </div>
                <div class="btn-wrap">
                  <a href="{{$pricing->button_link}}" target="_self" class="btn-buy">{{$pricing->button_text}}</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <div class="faq-list">
          <ul>
            @foreach ($faqs as $faq)
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">{{ $faq->question }}<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>{{ $faq->answer }}</p>
              </div>
            </li>
            @endforeach

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

  </main>
  <!-- End #main -->

@endsection
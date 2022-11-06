@extends('layouts.frontend.app')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs text-right">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center"> 
            <h2>{{ $project->title }}</h2>
            <ol>
              <li><a href="/">الرئيسية</a></li>
              <li>أخبار</li>
            </ol>
          </div>
  
        </div>
      </section><!-- End Breadcrumbs -->
  
      <section id="portfolio-details" class="portfolio-details">
        <div class="container">
  
          <div class="row gy-4">
  
            <div class="col-lg-8">
              <div class="portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">
  
                  <div class="swiper-slide">
                    <img src="{{ $project->image}}" alt="">
                  </div>
                  
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <p>
              {!! $project->body !!}
            </p>
            </div>
  
            <div class="col-lg-4">
              <div class="portfolio-info">
                <h3>مشروعات ذات صلة</h3>
                @foreach($latestProject as $latest)
                <a href="{{ route('project.details', $latest->slug) }}" >
                  <p>{{ $latest->title }}</p> <hr />
                </a>
                @endforeach
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Portfolio Details Section -->
  



@endsection
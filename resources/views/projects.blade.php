@extends('layouts.frontend.app')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2></h2>
            <ol>
              <li><a href="/">الرئيسية</a></li>
              <li>مشروعات</li>
            </ol>
          </div>
  
        </div>
      </section><!-- End Breadcrumbs -->
  
      <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="row">
{{--                 <div class="col-md-6 col-lg-4 d-flex align-self-stretch mt-5 mb-lg-0" style="height: 150px !important;">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <p  class="title"><a href="{{ route('service.specific', $project->slug) }}">{{ $project->title }}  </a></p>
                    </div>
                </div> --}}
                    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">
  
          <div class="row justify-content-md-center">
            @foreach($projects as $project)
            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
              <div class="count-box">
                <i class="bi bi-people"></i>
                <a href="{{ route('project.details', $project->slug)}}">{{ $project->title }}</a>
              </div>
            </div>
            @endforeach
  
          </div>
  
        </div>
      </section><!-- End Counts Section -->
            </div>
            </div>
        </div>

        </section>



@endsection
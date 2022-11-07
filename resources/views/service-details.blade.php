@extends('layouts.frontend.app')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2></h2>
            <ol>
              <li><a href="/">الرئيسية</a></li>
              <li>{{ $type == 1 ? 'خدمات السودانيين' : 'خدمات الأجانب' }}</li>
            </ol>
          </div>
  
        </div>
      </section><!-- End Breadcrumbs -->
  
      <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="row">
            @foreach($services as $service)
            <div class="col-sm-6 col-lg-4 mb-4">
              <div class="card">
                {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg> --}}
        
                <div class="card-body">
                  <h5 class="card-title">{{ $service->title }}</h5>
                  {{-- <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p> --}}
                  <p class="card-text"><small class="text-muted">
                    <a href="{{ route('service.specific', $service->slug) }}">تفاصيل </a>
                  </small></p>
                </div>
              </div>
            </div>
{{--                 <div class="col-md-6 col-lg-4 d-flex align-self-stretch mt-5 mb-lg-0" style="height: 150px !important;">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <p  class="title"><a href="{{ route('service.specific', $service->slug) }}">تفاصيل </a></p>
                    </div>
                </div> --}}
            @endforeach
            </div>
            </div>
        </div>
        </section>



@endsection
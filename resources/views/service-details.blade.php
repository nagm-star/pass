@extends('layouts.frontend.app')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2></h2>
            <ol>
              <li><a href="/">الرئيسية</a></li>
              <li>أخبار</li>
            </ol>
          </div>
  
        </div>
      </section><!-- End Breadcrumbs -->
  
      <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="row">
            @foreach($services as $service)
                <div class="col-md-6 col-lg-4 d-flex align-self-stretch mt-5 mb-lg-0" style="height: 150px !important;">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <p  class="title"><a href="{{ route('service.specific', $service->slug) }}">{{ $service->title }}  </a></p>
                    </div>
                </div>
            @endforeach
            </div>
            </div>
        </div>
{{--             <div class="col-lg-4 col-md-6 portfolio-details d-flex align-items-between">
               <div class="portfolio-info2 text-center ">
                 <h6>  {{ $service->title }}  </h6>
                 <a class="btn btn-primary btn-sm"> تفاصيل </a>
               </div>
       </div>
          </div> --}}
        </section>



@endsection
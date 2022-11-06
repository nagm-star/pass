@extends('layouts.frontend.app')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>
                       {{ $service->title}}
            </h2>
            <ol>
              <li><a href="/">الرئيسية</a></li>
              <li>مجمعات الخدمات</li>
            </ol>
          </div>
  
        </div>
      </section><!-- End Breadcrumbs -->
  
      <section class="inner-page">
      <div class="container">
          <div class="row">
          <div class="col-lg-8">


        <p>
            {!! $service->body !!}
        </p>
        </div>

         <div class="col-lg-4 portfolio-details" style="margin-top: -15px !important;">
            <div class="portfolio-info">
                <h3>  خدمات ذات صلة </h3>
                @foreach($relatedServices as $related)
                <a href="{{ route('service.specific', $related->slug) }}" >
                  <p> {{ $related->title }}  </p> <hr/>
                </a>
                @endforeach

            </div>
    </div>
          </div>
        </section>



@endsection
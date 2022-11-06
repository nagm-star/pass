@extends('layouts.frontend.app')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>{{ $post->title }}</h2>
            <ol>
              <li><a href="/">الرئيسية</a></li>
              <li>أخبار</li>
            </ol>
          </div>
  
        </div>
      </section><!-- End Breadcrumbs -->
  
      <section class="inner-page mt-2 ">
      <div class="container">
          <div class="row">
          <div class="col-lg-8">

            <img src="{{ $post->image }}" alt="{{ $post->title }}" />
            <h5 class="mt-1">{{ $post->title }}</h2>

          <p>
            {!! $post->body !!}
          </p>
        </div>

         <div class="col-lg-4 portfolio-details">
            <div class="portfolio-info">
              <h3>أخبار ذات صلة</h3>
              @foreach($latest as $late)
              <a href="{{ route('post.show', $late->slug) }}" >
                <p>{{ $late->title }}</p>
              </a>
              @endforeach
            </div>
    </div>
          </div>
        </section>



@endsection
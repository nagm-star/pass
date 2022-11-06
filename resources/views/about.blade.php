@extends('layouts.frontend.app')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>
                      إتصل بنا  </h2>
            <ol>
              <li><a href="/">الرئيسية</a></li>
              <li>   إتصل بنا </li>
            </ol>
          </div>
  
        </div>
      </section><!-- End Breadcrumbs -->
  
     <!-- ======= Contact Section ======= -->
     <section id="contact" class="contact">

        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <img src="{{ asset('frontend/img/hero-bg2.jpg') }}" class="mb-5" alt="" srcset="">
                <p>تعتبر الإدارة العامة للجوازات والهجره من الإدارات الهامه وقد إكتسبت هذه الأهميه من واقع ما أسند إليها من مهام وواجبات وضحها الوصف الوظيفي ووضح إختصاصاتها ، وهي أحد ركائز تحقيق المقاصد الكليه للدوله في التخطيط الإستراتيجي ، ومن أجهزة إنفاذ الدستور والقوانين ، وهي بذلك تحقق ركناً من أركان السيادة على أراضيها وحدودها بتنظيم الدخول والخروج لأراضي الدوله .</p>
            </div>
        </div>

      </section><!-- End Contact Section -->
  



@endsection

@section('scripts')
<script src="https://www.google.com/recaptcha/api.js"></script>

@stop
@extends('layouts.frontend.app')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>
                مجمع الخرطوم للخدمات المتكاملة</h2>
            <ol>
              <li><a href="/">الرئيسية</a></li>
              <li>مجمعات الخدمات</li>
            </ol>
          </div>
  
        </div>
      </section><!-- End Breadcrumbs -->
  
      <section class="inner-page ">
      <div class="container">
          <div class="row">
          <div class="col-lg-8 mt-5 mb-5">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2678.572059449073!2d32.52724370469552!3d15.582474101039109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x168e8e3b4b3c275f%3A0x550d4d377dc5cf1b!2z2YXYsdmD2LIg2K7Yr9mF2KfYqiDYp9mE2KzZhdmH2YjYsSDYp9mE2YXYqtmD2KfZhdmE2Iwg2YjYstin2LHYqSDYp9mE2K_Yp9iu2YTZitip2Iwg2KfZhNiu2LHYt9mI2YU!5e0!3m2!1sar!2s!4v1667654723123!5m2!1sar!2s" width="730" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           <p>
            <b class="mt-5"> الخدمات :</b>

            استخراج جوازات +استيفاء خروج +خدمات المغتربين +القوات النظامية VIP
        
            <b>دوام العمل :</b>
            <br> كل ايام الاسبوع عدا الجمعة.
            <br>
            <b>زمن تقديم الخدمة :</b>
            <br> ربع ساعه الاستيفاء خروج نصف ساعه لإجراءات الجواز والتسليم خلال 48 ساعه
            <br>
            <b>خدمات المغتربين :</b>
            <br> توجد بمكاتب المغتربين خدمات متكاملة للمغتربين.


        </p>
        </div>

         <div class="col-lg-4 portfolio-details">
            <div class="portfolio-info">
              <h3> مجمعات خدمات أخري</h3>
              <a href="{{ route('bahri') }}" >
                <p>مجمع خدمات الجمهور - بحري   </p>
              </a>
              <a href="{{ route('omdurman') }}" >
                <p>مجمع خدمات الجمهور - أم درمان   </p>
              </a>
            </div>
    </div>
          </div>
        </section>



@endsection
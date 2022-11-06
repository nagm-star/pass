@extends('layouts.frontend.app')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>
                مجمع أم درمان للخدمات المتكاملة</h2>
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
            <div class="col-lg-8 mt-5 mb-5">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3842.264126834695!2d32.47713418535467!3d15.63091728915298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x168e8c3c7eb6aa1f%3A0x7907c0aac64fd573!2z2YXYrNmF2Lkg2K7Yr9mF2KfYqiDYp9mE2KzZhdmH2YjYsSAtINij2YUg2K_YsdmF2KfZhg!5e0!3m2!1sar!2s!4v1667654845750!5m2!1sar!2s" width="740" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
              <a href="{{ route('khartoum') }}" >
                <p>مجمع خدمات الجمهور - الخرطوم   </p>
              </a>
              <a href="{{ route('bahri') }}" >
                <p>مجمع خدمات الجمهور - بحري    </p>
              </a>
            </div>
    </div>
          </div>
        </section>



@endsection
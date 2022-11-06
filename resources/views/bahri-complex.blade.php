@extends('layouts.frontend.app')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>
                مجمع بحري للخدمات المتكاملة</h2>
            <ol>
              <li><a href="/">الرئيسية</a></li>
              <li>مجمعات الخدمات</li>
            </ol>
          </div>
  
        </div>
      </section><!-- End Breadcrumbs -->
  
      <section class="inner-page mt-2 ">
      <div class="container">
          <div class="row">
            <div class="col-lg-8 mt-5 mb-5">
            <iframe class="mb-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3842.145706237644!2d32.54030298535468!3d15.637227589149024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x168e8df5c496588d%3A0xe481292f9c60c1f1!2z2YXYrNmF2Lkg2K7Yr9mF2KfYqiDYp9mE2KzZhdmH2YjYsSAtINio2K3YsdmK!5e0!3m2!1sar!2s!4v1667653551114!5m2!1sar!2s" width="740" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

           <p>
            <b class="mt-5"> الخدمات :</b>
            <br />
            استخراج جوازات +استيفاء خروج +خدمات المغتربين +القوات النظامية VIP
            <br />
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
              <a href="{{ route('omdurman') }}" >
                <p>مجمع خدمات الجمهور - أم درمان   </p>
              </a>
            </div>
    </div>
          </div>
        </section>



@endsection
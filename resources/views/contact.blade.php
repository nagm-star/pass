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
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2> إتصل بنا </h2>
            <h3><span> إتصل بنا </span></h3>
            <p>تواصل معنا عبر قنوات الاتصال التالية</p>
          </div>
  
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6">
              <div class="info-box mb-4">
                <i class="bx bx-map"></i>
                <h3>العنوان </h3>
                <p>{{ $settings->address }}</p>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6">
              <div class="info-box  mb-4">
                <i class="bx bx-envelope"></i>
                <h3>بريد الكتروني</h3>
                <p>{{ $settings->email }}</p>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6">
              <div class="info-box  mb-4">
                <i class="bx bx-phone-call"></i>
                <h3>إتصل بنا</h3>
                <p>{{ $settings->contact_number }}</p>
              </div>
            </div>
  
          </div>
  
          <div class="row" data-aos="fade-up" data-aos-delay="100">
  
            <div class="col-lg-6 ">
              <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2678.572059449073!2d32.52724370469552!3d15.582474101039109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x168e8e3b4b3c275f%3A0x550d4d377dc5cf1b!2z2YXYsdmD2LIg2K7Yr9mF2KfYqiDYp9mE2KzZhdmH2YjYsSDYp9mE2YXYqtmD2KfZhdmE2Iwg2YjYstin2LHYqSDYp9mE2K_Yp9iu2YTZitip2Iwg2KfZhNiu2LHYt9mI2YU!5e0!3m2!1sar!2s!4v1667654723123!5m2!1sar!2s" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>
  
            <div class="col-lg-6">
                <form action="{{ route('send.email') }}" method="post" role="form" class="php-email-form2">
                    {{ csrf_field() }}
                      
                    @error('g-recaptcha-response')
                   <div class="alert alert-danger">
                      <ul>
                               <li>{{ $errors->first('g-recaptcha-response') }}</li>
                           
                      </ul>
                  </div><br />
                   @enderror
          
          @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
            {{session('success')}}
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
   </div>
    @endif
                <div class="row">
                  <div class="col form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="الإسم" required>
                  </div>
                  <div class="col form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder=" البريد الالكتروني" required>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="الموضوع" required>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" placeholder="الرسالة" required></textarea>
                </div>
                <div class="form-group">
                    <div  class="g-recaptcha" data-sitekey="6LdRAx0cAAAAAHrYeUBVtxRq-X3d1Azge-axWAJC"> </div>
    
                 </div>
                <div class="text-center"><button type="submit">إرسال الرسالة </button></div>
              </form>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Contact Section -->
  



@endsection

@section('scripts')
<script src="https://www.google.com/recaptcha/api.js"></script>

@stop
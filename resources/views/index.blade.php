@extends('layouts.frontend.app')

@section('content')

<div class="home-slider owl-carousel js-fullheight" dir="ltr">
  @if($slides->count() > 0)
  @foreach($slides as $slide)
  <div class="slider-item js-fullheight" style="background-image:url({{ $slide->image }});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
            <div class="col-md-12 ftco-animate">
                <div class="text w-100 text-center">
                    <p> {{ $slide->title }}  </p>
                    <h1 class="mb-3">  {{ $slide->body}}  </h1>
                </div>
            </div>
        </div>
    </div>
</div>
  @endforeach
  @else
  <div class="slider-item js-fullheight" style="background-image:url(frontend/carousel/images/slider-1.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
            <div class="col-md-12 ftco-animate">
                <div class="text w-100 text-center">
                    <p>الادارة العامة للجوازات والهجرة</p>
                    <h1 class="mb-3">الخدمات الإلكترونية للشرطة السودانية</h1>
                </div>
            </div>
        </div>
    </div>
</div>
  @endif
</div>




  <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bx-group"></i></div>
                        <h4 class="title"><a href="{{ route('bahri') }}">مجمع بحري للخدمات المتكاملة  </a></h4>
                        <p class="description">استخراج جوازات +استيفاء خروج +خدمات المغتربين +القوات النظامية VIP</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bx bx-group"></i></div>
                        <h4 class="title"><a href="{{ route('khartoum') }}"> مجمع الخرطوم للخدمات المتكاملة   </a></h4>
                        <p class="description">استخراج جوازات +استيفاء خروج +خدمات المغتربين +القوات النظامية VIP</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bx bx-group"></i></div>
                        <h4 class="title"><a href="{{ route('omdurman') }}"> مجمع أم درمان للخدمات المتكاملة </a></h4>
                        <p class="description">استخراج جوازات +استيفاء خروج +خدمات المغتربين +القوات النظامية VIP</p>
                    </div>
                </div>

            </div>

        </div>
    </section> 
<!-- End Featured Services Section -->
<!-- ======= About Section ======= -->
<section id="about" class="about section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>كلمة المدير العام</h2>
            <!-- <h3>Find Out More <span>About Us</span></h3> -->
            <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
        </div>

        <div class="row">


            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <img src="{{ asset('frontend/img/about.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <blockquote>
                    يطيب لنا أن نتقدم لكم بخالص التحايا والاحترام ، ويسرنا أن نضع بين ايديكم موقع الادارة العامة للجوازات والهجرة في وقت تجاوزت فيه أنشطة وبرامج العمل الهجري آفاق أرحب وأوسع وشهدت ازدهارا" منقطع النظير في أهم مشروعات العمل الهجري لاسيما مجال تطوير وترتيب
                    أعمال الجواز الالكتروني وانتشار خدماته ،نتمني ان يكون الموقع مساحة للتعرف عن قرب للادارة العامة للجوازات والهجرة وإن تجدو منا كل الدعم الفني والاستفسارات المطلوبة والرد علي تسآؤلاتكم
                    <span> لواء شرطة حقوقي/ معاوية جعفر محمد عثمان <br> مدير الادارة العامة للجوازات و الهجرة
                    </span>

                </blockquote>

            </div>
        </div>

    </div>
</section>
<!-- End About Section -->


<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>خدمات السودانيين </h2>
            <h3> ضوابط استخراج الجوازات المختلفة <span> </span></h3>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-world"></i></div>
                    <h4><a href="">الجواز الالكتروني </a></h4>
                    <p class="txt">- حضور مقدم الطلب شخصيا <br /> - صورة من البطاقة القومية او شهادة القيد المدني
                        <br /> - مراجعة قائمة المنع<br />- في حالة التجديد او التلف احضار الجواز السابق<br />- في حالة الفقدان احضار شهادة الفقدان + تحري الجنائيات لحظر الجواز المفقود
                        <br />- دفع الرسوم المقررة
                    </p><br />
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-world"></i></div>
                    <h4><a href="">الجواز التجاري </a></h4>
                    <p class="txt">- حضور مقدم الطلب شخصيا <br /> - صورة من البطاقة القومية او شهادة القيد المدني
                        <br /> - رخصة تجارية<br /> - مستندات الشلركة (عقد تأسيس, شهادة تسجيل, شهادة تجديد القيد سارية المفعول او اكمال الملف)<br /> - اي مستندات اخري تحددها السلطة المختصة
                        <br /> - خلو الطرف الضريبي<br />- مراجعة قائمة المنع<br /> - في حالة التجديد او التلف او الفقدان يتم تطبيق ضوابط استخراج الجواز العادي<br />- دفع الرسوم المقررة وثم التصديق
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-world"></i></div>
                    <h4><a href="">جواز الاطفال</a></h4>
                    <p class="txt">
                        - ألا يكون مدرجا بقائمة المنع <br /> - حضور احد الوالدين (الوالد/الوالده) امام السلطة المصدقة مع استكتابه اقرار بتوقيعه و بصمته<br /> - في حالة عدم مثول ولي الامر امام السلطة المصدقة يجب ابراز موافقة احد والديه بموجب مستند
                        معتمد - وموثق من الجهة المختصة (الخارجية و ادارة التوثيقات بالسلطة القضائية بحسب الحال)<br /> - ابراز اشهاد شرعي صادر من محكمة مختصة و موثق من ادارة التوثيقات بالسلطة القضائية, يؤكد موافقة وليه الشرعي في حالة فقدان الوالدين
                        او وفاتهما او ما يؤكد وصايته علي القاصر<br /> - لا يسمح بأستخراج جواز سفر للقاصر السوداني بواسطة والده الاجنبي الا بموافقة والدته السودانية او بموافقة والده السوداني ان كانت والدته اجنبية وفي حالة عدم مثول (والده او والدته)
                        السودانيين يتم تطبيق الضوابط الواردة بالفقرات (3_4) من ضوابط استخراج جواز سفر الأطفال القصر أعلاه<br />
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- End Services Section -->



<!-- ======= Team Section ======= -->
<section id="news" class="services section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>أخبار </h2>
            <h3>أهم الأخبار والأحداث</h3>
        </div>

        <div class="row">
            @foreach($posts as $post)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                    <div class="member-img">
                        <img src="{{ $post->image }}" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4> {{ $post->title }} </h4>
                        <span>
                            {!!  substr(strip_tags($post->body), 0, 250) !!} 
                            .. <a href="{{ route('post.show', $post->slug) }}"><b>قراءة المزيد</b></a>
                        </span>
                    </div>
                </div>
            </div>
            @endforeach



        </div>

    </div>
</section>
<!-- End Team Section -->


<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq section-bg1">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>أسئلة متكررة</h2>
            <h3> <span>بعض الأسئلة المتكررة</span></h3>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-10">
                <ul class="faq-list">

                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">
                            أين توجد مواقع مكاتب الجوازات العاملة بولاية الخرطوم؟
                            <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">اسم المكتب</th>
                                            <th scope="col">الموقع</th>
                                            <th scope="col">الخدمات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>مجمع الخرطوم </td>
                                            <td>الخرطوم</td>
                                            <td>استخراج جوازات +استيفاء خروج +خدمات المغتربين +القوات النظامية VIP </td>
                                        </tr>
                                        <tr>
                                            <td>مجمع أم درمان</td>
                                            <td>أم درمان</td>
                                            <td>استخراج جوازات +استيفاء خروج +خدمات المغتربين +القوات النظامية VIP +
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>مجمع بحري</td>
                                            <td>بحري</td>
                                            <td>استخراج جوازات +استيفاء خروج +خدمات المغتربين +القوات النظامية VIP +
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>العلاقات البينية </td>
                                            <td>الخرطوم</td>
                                            <td>استخراج جوازات +استيفاء خروج</td>
                                        </tr>
                                        <tr>
                                            <td>جوازات المطار</td>
                                            <td>المطار</td>
                                            <td>استيفاء خروج +منفذ جوي</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </p>
                            <p>
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
                    </li>


                    <li>
                        <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">
                            كيف يمكنني الإستعلام عن جاهزية الجواز؟
                            <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                يمكنك الاستعلام من <a href="https://eservice.passport.gov.sd/passport/" target="_blank">هنا</a>
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">
                            ماهي أيام العمل ؟
                            <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                            <p>كل ايام الاسبوع عدا الجمعة. </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">
                            أين يمكنني إجراء خدمات المغتربين؟
                            <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                            <p>توجد بمكاتب المغتربين خدمات متكاملة للمغتربين. </p>
                        </div>
                    </li>


                </ul>
            </div>
        </div>

    </div>
</section>
<!-- End Frequently Asked Questions Section -->



</main>
<!-- End #main -->


@endsection
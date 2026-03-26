@extends('layouts.app')

@section('title')
Home
@endsection

@section('content')
  <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_area_inner slider_bg_1 d-flex align-items-center ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-xl-7">
                        <div class="single_slider">
                            <div class="slider_text">
                                <h3>مؤسسة الثقة </h3>
                                <br>
                                   <p> للمحاماة والاستشارات القانونية والمحاسبية<br>
                                خبرة قانونية شاملة داخل جمهورية مصر العربية</p>
                                <br>
                                <br>
                                <a href="{{route('من نحن')}}" class="boxed-btn4">اعرف المزيد</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

  <!-- about_area _start  -->
    <div class="about_area">
        <div class="opacity_icon d-none d-lg-block">
            <i class="flaticon-balance"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <div class="single_about_info text-center">
                        <div class="about_thumb">
                            <img class="person1" src="img/banner/person1.JPG" alt="">
                        </div>
                        <h3>المستشار محمد عمار <br>
                            محامٍ بالاستئناف العالي ومجلس الدولة </h3>
                        <p>مجالات التخصص والخدمات

    خدمات تأسيس الشركات والاستثمار
        •	تأسيس الشركات بكافة أنواعها داخل مصر.
        •	تأسيس وتعديل الشركات للمستثمرين الأجانب في مصر.
        •	استخراج إقامات المستثمرين (إقامات الاستثمار) للأجانب داخل مصر.
        •	تقديم الاستشارات القانونية لرواد الأعمال والمستثمرين.

    خدمات الملكية الفكرية
        •	تسجيل العلامات التجارية وحماية حقوق الملكية الفكرية داخل مصر.

    خدمات التراخيص والنشاط التجاري
        •	استخراج تراخيص المحال العامة ومتابعة إجراءاتها القانونية.
        •	استخراج رخص التشغيل للأنشطة التجارية والصناعية.
        •	استخراج السجلات الصناعية والتعامل مع الجهات المختصة.

    الخدمات القضائية
        •	مباشرة القضايا المدنية وتمثيل العملاء أمام المحاكم.
        •	مباشرة القضايا التجارية ومنازعات الشركات.

    الخدمات الضريبية
        •	تقديم الدعم القانوني في المعاملات الضريبية.
        •	مباشرة القضايا والمنازعات الضريبية أمام الجهات المختصة </p>
                        {{-- <div class="signature">
                            <img src="img/about/signature.png" alt="">
                        </div> --}}
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="single_about_info text-center">
                        <div class="about_thumb">
                            <div class="image_hover">
                                <div class="hover_inner">
                                    <h2>100%</h2>
                                    <br>
                                        <i class="like fa fa-thumbs-up" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <h3>خبرة قانونية متكاملة</h3>
                        <p>نمتلك خبرة قانونية واسعة في التعامل مع مختلف انواع القضايا سواء للافراد او الشركات 
                             مما يمكننا من تقديم استشارات قانونية دقيقة <br>وحلول عملية تحقق افضل النتائج </p>
                        {{-- <div class="total_cases">
                            <div class="single_cases">
                                <h4>879</h4>
                                <p>Total Cases</p>
                            </div>
                            <div class="single_cases">
                                <h4>787</h4>
                                <p>Case Won</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area _end -->

    <!-- practice_area_start -->
    <div class="practice_area">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-60">
                        <h3>	الخدمات التى يقدمها المكتب</h3>
                        <p>	نقوم بتقديم كافة الخدمات القانونية داخل جمهورية مصر العربية طبقا
														للقانون المصرى بكافة فروعه, تأسيس الشركات فى مصر , فتح فرع شركة
														أجنبية فى مصر , قضايا العقارات ,القضايا التجارية ,القضايا
														المدنية , القضايا الجنائية , قضايا الأحوال الشخصية وقضايا الاسرة
														, وقضايا التحكيم الدولى , وقضايا الايجارات , وقضايا العمال ,
														صياغة العقود .</p>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_practice">
                        <div class="practice_image">
                            <img src="img/practice/1.png" alt="">
                        </div>
                        <div class="practice_hover text-center">
                            <div class="hover_inner">
                                <i class="flaticon-case"></i>
                                <h3>	صياغة العقود وتوثيقها </h3>
                                <p>	محامي صياغة عقود – محامي عقود – صياغة العقود القانونية – العقود
														التجارية – عقود العمل – عقود العقارات – عقود بيع وشراء – إعداد
														وتدقيق العقود – محامي متخصص في كتابة العقود – صياغة عقود الشركات</p>
                                <a href="{{route('محامي عقود')}}" class="lern_more">اعرف المزيد</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_practice">
                        <div class="practice_image">
                            <img src="img/practice/2.png" alt="">
                        </div>
                        <div class="practice_hover text-center">
                            <div class="hover_inner">
                                <i class="flaticon-courthouse"></i>
                                <h3>	تأسيس شركات عقارية في مصر </h3>
                                <p>	استشارات قانونية للمستثمرين العقاريين – محامي استثمار عقاري –
														مكتب محاماة للاستثمار العقاري – محامي شراء أراضي – توثيق عقود
														بيع وشراء عقارات </p>
                                <a href="{{route('محامي تأسيس شركات عقارية فى مصر')}}" class="lern_more">اعرف المزيد</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_practice">
                        <div class="practice_image">
                            <img src="img/practice/3.png" alt="">
                        </div>
                        <div class="practice_hover text-center">
                            <div class="hover_inner">
                                <i class="flaticon-judge"></i>
                                <h3>محامي قضايا الأحوال الشخصية</h3>
                                <p>	دعوى اثبات نسب - دعوى طلاق - دعوى الخلع - دعوى إثبات علاقة زوجية
														- دعوى نفقة زوجية - دعوى رؤية - دعوى نفقة الصغير واجر المسكن
														وأجر الحضانة وأجر الرضاعة - قضايا التركات والميراث - محامى قضايا
														أسرة </p>
                                <a href="{{route('محامي قضايا أحوال شخصية')}}" class="lern_more">اعرف المزيد</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_practice">
                        <div class="practice_image">
                            <img src="img/practice/4.png" alt="">
                        </div>
                        <div class="practice_hover text-center">
                            <div class="hover_inner">
                                <i class="flaticon-jury"></i>
                                <h3>	ادارة القضايا والمنازعات </h3>
                                <p>	الدعاوى المدنية - الدعاوى الجنائية - دعاوى العمال - دعاوى
														ألاحوال الشخصية والاسرة - دعاوى الايجارات - توكيل محامى للقضايا
														- دعاوى التعويضات - الدعاوى الجنائية والمدنية - دعاوى الافلاس -
														قضايا الصحة والنفاذ - قضايا الافلاس - محامى قضايا </p>
                                <a href="{{route('ادارة القضايا والمنازعات')}}" class="lern_more">اعرف المزيد</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- practice_area_end -->

    {{-- <!-- our_loyers-start  -->
    <div class="our_loyers">
        <div class="container">
                <div class="row">
                        <div class="col-xl-12">
                            <div class="section_title text-center mb-60">
                                <h3>Our Lawyers</h3>
                                <p>Many variations of passages of Lorem Ipsum available, but the majority have <br> suffered alteration in some.</p>
                            </div>
                        </div>
                    </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_loyers text-center">
                        <div class="thumb">
                            <img src="img/lawyers/1.png" alt="">
                        </div>
                        <h3>Henry Miller</h3>
                        <span>Family Lawyer</span>
                        <div class="social_links">
                            <ul>
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_loyers text-center">
                        <div class="thumb">
                            <img src="img/lawyers/2.png" alt="">
                        </div>
                        <h3>Jon Anderson</h3>
                        <span>Consumer Lawyer</span>
                        <div class="social_links">
                            <ul>
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_loyers text-center">
                        <div class="thumb">
                            <img src="img/lawyers/3.png" alt="">
                        </div>
                        <h3>Jaky Nadan</h3>
                        <span>Criminal Lawyer</span>
                        <div class="social_links">
                            <ul>
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- our_loyers-end  -->
{{-- 
    <!-- testmonial_area_start  -->
    <div class="testmonial_area testmonial_bg_1 overlay2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_testmonial text-center">
                            <i class="flaticon-straight-quotes"></i>
                            <p>There are many variations of passages of Lorem Ipsum available, but the <br> majority have suffered alteration in some form, by injected humour, or <br> randomised words which don't look even slightly believable. </p>
                            <div class="author_info d-flex justify-content-center align-items-center">
                                <div class="thumb">
                                    <img src="img/testmonial/smaill_thumb.png" alt="">
                                </div>
                                <span>- Millan Mirza</span>
                            </div>
                        </div>
                        <div class="single_testmonial text-center">
                            <i class="flaticon-straight-quotes"></i>
                            <p>There are many variations of passages of Lorem Ipsum available, but the <br> majority have suffered alteration in some form, by injected humour, or <br> randomised words which don't look even slightly believable. </p>
                            <div class="author_info d-flex justify-content-center align-items-center">
                                <div class="thumb">
                                    <img src="img/testmonial/smaill_thumb.png" alt="">
                                </div>
                                <span>- Millan Mirza</span>
                            </div>
                        </div>
                        <div class="single_testmonial text-center">
                            <i class="flaticon-straight-quotes"></i>
                            <p>There are many variations of passages of Lorem Ipsum available, but the <br> majority have suffered alteration in some form, by injected humour, or <br> randomised words which don't look even slightly believable. </p>
                            <div class="author_info d-flex justify-content-center align-items-center">
                                <div class="thumb">
                                    <img src="img/testmonial/smaill_thumb.png" alt="">
                                </div>
                                <span>- Millan Mirza</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testmonial_area_end  --> --}}

    {{--<div class="appointment_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-md-6 col-lg-6">
                    <div class="appiontment_thumb d-none d-lg-block">
                        <img src="img/appointment/1.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-md-6 col-md-12 col-lg-6">
                    <div class="appointment_info">
                        <div class="opacity_icon d-none d-lg-block">
                            <i class="flaticon-balance"></i>
                        </div>
                        <h3>Make an Appointment</h3>
                        <p>Many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                        <form action="#">
                                <div class="row">
                                    <div class="col-xl-6 col-md-6">
                                            <input type="text" placeholder="Your Name">
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                            <input type="email" placeholder="Your Email">
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                            <input type="text" placeholder="Phone no.">
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <input id="datepicker" placeholder="Appointment date">
                                    </div>
                                    <div class="col-xl-12">
                                        <textarea placeholder="Message" ></textarea>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="appoinment_button">
                                            <button class="boxed-btn5 " type="submit" >Submit</button>
                                        </div>
                                    </div>
                                </div>
        
                            </form>
                    </div>

                </div>
            </div>
        </div>
    </div> --}}

@endsection
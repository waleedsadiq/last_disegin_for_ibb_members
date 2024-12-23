@extends('layouts.app')

@section('content')
<!-- Main content Start -->
<div class="main-content">
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">

            <img src="{{ asset('frontend/images/breadcrumbs/2.jpg') }}" alt="Breadcrumbs Image">
        </div <div class="breadcrumbs-text white-color">
        <h1 class="page-title">
            موقع أعضاء هيئة التدريس </h1>
        <ul>


        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->

</div>

<!-- Blog Section Start -->
<div class="mt--70 ">
    <div class="container">
        <div class="search-box bg-light p-3 rounded-3 walbck edit">
            <div class="row align-items-start">

                <div class="col-md-10">

                    <div class="input-group mb-3">

                        <input type="text" class="form-control" placeholder="بحث من خلال الاسم">
                        <select class="form-select sele colo">
                            <option>فئة حسب</option>

                        </select>
                    </div>


                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <div class="input-group">


                                <input type="text" class="form-control bornon" placeholder="بحث من خلال الاسم">
                                <select class="form-select bor">


                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">


                                <input type="text" class="form-control bornon" placeholder="بحث من خلال الاسم">
                                <select class="form-select bor">


                                </select>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-2 text-center serch_heigh">
                    <button class="btn btn-success w-100 btncolor">بحث</button>
                </div>

            </div>
        </div>
    </div>

</div>


<!-- Blog Section End -->
<!-- Team Section Start -->
<div id="rs-team" class="rs-team home-style15 pt-100 pb-40 md-pt-70 md-pb-70">
    <div class="container">
        <div class="sec-title mb-40 md-mb-20 text-left">
            <h2 class="title mb-0 header-news">المضاف حديثا </h2>
        </div>
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="false"
            data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-mobile-device="1"
            data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
            data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
            data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="false"
            data-md-device-dots="false" data-touch-drag="false" data-mouse-drag="false">

            <div class="team-item">
                <div class="team-wrap">
                    <div class="team-img">
                        <a href="#"><img class="image" src="{{asset('frontend/images/waleed/Rectangle 67.png')}}"
                                alt=""></a>
                        <ul class="team-social-link">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="name"><a href="team-single.html">أ.د محمد اليمني</a></h3>
                        <span class="subject">هندسة يرمجيات</span>
                        <p class="subject"> الكلية-القسم : كلية الحاسبات وتكنلوجيا المعلومات </p>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <div class="team-wrap">
                    <div class="team-img">
                        <a href="#"><img class="image" src="{{asset('frontend/images/waleed/Rectangle 67.png')}}"
                                alt=""></a>
                        <ul class="team-social-link">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="name"><a href="team-single.html">أ.د محمد اليمني</a></h3>
                        <span class="subject">هندسة يرمجيات</span>
                        <p class="subject"> الكلية-القسم : كلية الحاسبات وتكنلوجيا المعلومات </p>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <div class="team-wrap">
                    <div class="team-img">
                        <a href="#"><img class="image" src="{{asset('frontend/images/waleed/Rectangle 67.png')}}"
                                alt=""></a>
                        <ul class="team-social-link">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="name"><a href="team-single.html">أ.د محمد اليمني</a></h3>
                        <span class="subject">هندسة يرمجيات</span>
                        <p class="subject"> الكلية-القسم : كلية الحاسبات وتكنلوجيا المعلومات </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="false"
            data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-mobile-device="1"
            data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
            data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
            data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="false"
            data-md-device-dots="false" data-touch-drag="false" data-mouse-drag="false">

            <div class="team-item">
                <div class="team-wrap">
                    <div class="team-img">
                        <a href="#"><img class="image" src="{{asset('frontend/images/waleed/Rectangle 67.png')}}"
                                alt=""></a>
                        <ul class="team-social-link">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="name"><a href="team-single.html">أ.د محمد اليمني</a></h3>
                        <span class="subject">هندسة يرمجيات</span>
                        <p class="subject"> الكلية-القسم : كلية الحاسبات وتكنلوجيا المعلومات </p>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <div class="team-wrap">
                    <div class="team-img">
                        <a href="#"><img class="image" src="{{asset('frontend/images/waleed/Rectangle 67.png')}}"
                                alt=""></a>
                        <ul class="team-social-link">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="name"><a href="team-single.html">أ.د محمد اليمني</a></h3>
                        <span class="subject">هندسة يرمجيات</span>
                        <p class="subject"> الكلية-القسم : كلية الحاسبات وتكنلوجيا المعلومات </p>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <div class="team-wrap">
                    <div class="team-img">
                        <a href="#"><img class="image" src="{{asset('frontend/images/waleed/Rectangle 67.png')}}"
                                alt=""></a>
                        <ul class="team-social-link">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="name"><a href="team-single.html">أ.د محمد اليمني</a></h3>
                        <span class="subject">هندسة يرمجيات</span>
                        <p class="subject"> الكلية-القسم : كلية الحاسبات وتكنلوجيا المعلومات </p>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
<div id="rs-team" class="rs-team home-style15 pt-100 pb-40 md-pt-70 md-pb-70">
    <div class="container">
        <div class="sec-title mb-40 md-mb-20 text-left">
            <h2 class="title mb-0 header-news">الاكثر زيارة</h2>
        </div>
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="false"
            data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-mobile-device="1"
            data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
            data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
            data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="false"
            data-md-device-dots="false" data-touch-drag="false" data-mouse-drag="false">

            <div class="team-item">
                <div class="team-wrap">
                    <div class="team-img">
                        <a href="#"><img class="image" src="{{asset('frontend/images/waleed/Rectangle 67.png')}}"
                                alt=""></a>
                        <ul class="team-social-link">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="name"><a href="team-single.html">أ.د محمد اليمني</a></h3>
                        <span class="subject">هندسة يرمجيات</span>
                        <p class="subject"> الكلية-القسم : كلية الحاسبات وتكنلوجيا المعلومات </p>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <div class="team-wrap">
                    <div class="team-img">
                        <a href="#"><img class="image" src="{{asset('frontend/images/waleed/Rectangle 67.png')}}"
                                alt=""></a>
                        <ul class="team-social-link">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="name"><a href="team-single.html">أ.د محمد اليمني</a></h3>
                        <span class="subject">هندسة يرمجيات</span>
                        <p class="subject"> الكلية-القسم : كلية الحاسبات وتكنلوجيا المعلومات </p>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <div class="team-wrap">
                    <div class="team-img">
                        <a href="#"><img class="image" src="{{asset('frontend/images/waleed/Rectangle 67.png')}}"
                                alt=""></a>
                        <ul class="team-social-link">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="name"><a href="team-single.html">أ.د محمد اليمني</a></h3>
                        <span class="subject">هندسة يرمجيات</span>
                        <p class="subject"> الكلية-القسم : كلية الحاسبات وتكنلوجيا المعلومات </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="false"
            data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-mobile-device="1"
            data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
            data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
            data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="false"
            data-md-device-dots="false" data-touch-drag="false" data-mouse-drag="false">

            <div class="team-item">
                <div class="team-wrap">
                    <div class="team-img">
                        <a href="#"><img class="image" src="{{asset('frontend/images/waleed/Rectangle 67.png')}}"
                                alt=""></a>
                        <ul class="team-social-link">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="name"><a href="team-single.html">أ.د محمد اليمني</a></h3>
                        <span class="subject">هندسة يرمجيات</span>
                        <p class="subject"> الكلية-القسم : كلية الحاسبات وتكنلوجيا المعلومات </p>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <div class="team-wrap">
                    <div class="team-img">
                        <a href="#"><img class="image" src="{{asset('frontend/images/waleed/Rectangle 67.png')}}"
                                alt=""></a>
                        <ul class="team-social-link">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="name"><a href="team-single.html">أ.د محمد اليمني</a></h3>
                        <span class="subject">هندسة يرمجيات</span>
                        <p class="subject"> الكلية-القسم : كلية الحاسبات وتكنلوجيا المعلومات </p>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <div class="team-wrap">
                    <div class="team-img">
                        <a href="#"><img class="image" src="{{asset('frontend/images/waleed/Rectangle 67.png')}}"
                                alt=""></a>
                        <ul class="team-social-link">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="name"><a href="team-single.html">أ.د محمد اليمني</a></h3>
                        <span class="subject">هندسة يرمجيات</span>
                        <p class="subject"> الكلية-القسم : كلية الحاسبات وتكنلوجيا المعلومات </p>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
<div id="rs-team" class="rs-team home-style15 pt-100 pb-40 md-pt-70 md-pb-70">
    <div class="container">
        <div class="sec-title mb-40 md-mb-20 text-left">
            <h2 class="title mb-0 header-news"> الاكثر زيارة </h2>
        </div>
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="false"
            data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-mobile-device="1"
            data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
            data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
            data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="false"
            data-md-device-dots="false" data-touch-drag="false" data-mouse-drag="false">

            <div class="team-item">
                <div class="team-wrap">
                    <div class="team-img">
                        <a href="#"><img class="image" src="{{asset('frontend/images/waleed/Rectangle 67.png')}}"
                                alt=""></a>
                        <ul class="team-social-link">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="name"><a href="team-single.html">أ.د محمد اليمني</a></h3>
                        <span class="subject">هندسة يرمجيات</span>
                        <p class="subject"> الكلية-القسم : كلية الحاسبات وتكنلوجيا المعلومات </p>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <div class="team-wrap">
                    <div class="team-img">
                        <a href="#"><img class="image" src="{{asset('frontend/images/waleed/Rectangle 67.png')}}"
                                alt=""></a>
                        <ul class="team-social-link">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="name"><a href="team-single.html">أ.د محمد اليمني</a></h3>
                        <span class="subject">هندسة يرمجيات</span>
                        <p class="subject"> الكلية-القسم : كلية الحاسبات وتكنلوجيا المعلومات </p>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <div class="team-wrap">
                    <div class="team-img">
                        <a href="#"><img class="image" src="{{asset('frontend/images/waleed/Rectangle 67.png')}}"
                                alt=""></a>
                        <ul class="team-social-link">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="name"><a href="team-single.html">أ.د محمد اليمني</a></h3>
                        <span class="subject">هندسة يرمجيات</span>
                        <p class="subject"> الكلية-القسم : كلية الحاسبات وتكنلوجيا المعلومات </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="false"
            data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-mobile-device="1"
            data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
            data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
            data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="false"
            data-md-device-dots="false" data-touch-drag="false" data-mouse-drag="false">

            <div class="team-item">
                <div class="team-wrap">
                    <div class="team-img">
                        <a href="#"><img class="image" src="{{asset('frontend/images/waleed/Rectangle 67.png')}}"
                                alt=""></a>
                        <ul class="team-social-link">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="name"><a href="team-single.html">أ.د محمد اليمني</a></h3>
                        <span class="subject">هندسة يرمجيات</span>
                        <p class="subject"> الكلية-القسم : كلية الحاسبات وتكنلوجيا المعلومات </p>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <div class="team-wrap">
                    <div class="team-img">
                        <a href="#"><img class="image" src="{{asset('frontend/images/waleed/Rectangle 67.png')}}"
                                alt=""></a>
                        <ul class="team-social-link">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="name"><a href="team-single.html">أ.د محمد اليمني</a></h3>
                        <span class="subject">هندسة يرمجيات</span>
                        <p class="subject"> الكلية-القسم : كلية الحاسبات وتكنلوجيا المعلومات </p>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <div class="team-wrap">
                    <div class="team-img">
                        <a href="#"><img class="image" src="{{asset('frontend/images/waleed/Rectangle 67.png')}}"
                                alt=""></a>
                        <ul class="team-social-link">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="name"><a href="team-single.html">أ.د محمد اليمني</a></h3>
                        <span class="subject">هندسة يرمجيات</span>
                        <p class="subject"> الكلية-القسم : كلية الحاسبات وتكنلوجيا المعلومات </p>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>

<!-- Team Section End -->
@endsection
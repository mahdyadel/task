<!DOCTYPE html>
{{-- <html lang="ar" dir="rtl"> --}}
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>xgcode</title>


    <link rel="stylesheet" href="{{ asset('backend') }}/css/bootstrap-rtl.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"/>
    <link rel="stylesheet" href="{{ asset('backend') }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/css/style.css">

</head>
<body>


<header>

    <div class="menu-logo py-3">
        <div class="container">
            <div class="menu-wrapper">
                <div class="row">


                    <div class="col-lg-6 col-md-6   align-self-md-center d-md-flex ">
                        <ul class="list-inline user-nav">
                            <li class="list-inline-item"><a href="">الرئيسية</a></li>
                            <li class="list-inline-item"><a href="">الدعم الفني</a></li>
                            <li class="list-inline-item"><a href="">اتصل بنا</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 align-items-center d-md-flex justify-content-end gap-4">
                        <div id="cl_switcher_wrapper">
                            <div id="cl_switcher">
                                <button id="cl_toggle" type="button" role="button" class="btn btn-white-outlined">
                                    <i class="currency-flag currency-flag-usd"></i>
                                    <span>$</span>
                                </button>
                                <ul id="cl_list" data-simplebar data-simplebar-direction='rtl'>
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li class="col">
                                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                {{ $properties['native'] }}
                                            </a>
                                        </li>
                                    @endforeach

                                </ul>
                               
                                
                            </div>
                        </div>
                        <ul class="list-inline user-nav">
                            <li class="dropdown-cart-wrapper d-inline-block">
                                <div class="text-center">
                                    <a href="#" id="cart">
                                        <div class="cart-text"><span class="badge">1</span> <i
                                                class="fa fa-shopping-cart"></i>
                                            السلة
                                        </div>
                                    </a>
                                </div>
                                <div class="shopping-cart ">
                                    <div class="shopping-cart-header">
                                        <div class="shopping-cart-total">
                                            <span class="lighter-text">Total:</span>
                                            <span class="main-color-text total">$461.15</span>
                                        </div>
                                    </div> <!--end shopping-cart-header -->

                                    <ul class="shopping-cart-items list-unstyled" data-simplebar
                                        data-simplebar-direction='rtl'>
                                        <li class="clearfix">
                                            <img src="images/apps.6194.63443774180296696.cd362176-f5a8-4466-88f8-b7d68650d970.png"
                                                 alt="item1"/>
                                            <span class="item-name">XMREDTREE</span>
                                            <span class="item-detail">Pack 100</span>
                                            <span class="item-price">$49.50</span>
                                            <span class="item-quantity">Quantity: 01</span>
                                            <a href="" class="delete-item"><i class="fa fa-close"></i></a>
                                        </li>
                                        <li class="clearfix">
                                            <img src="images/apps.6194.63443774180296696.cd362176-f5a8-4466-88f8-b7d68650d970.png"
                                                 alt="item1"/>
                                            <span class="item-name">XMREDTREE</span>
                                            <span class="item-detail">Pack 100</span>
                                            <span class="item-price">$49.50</span>
                                            <span class="item-quantity">Quantity: 01</span>
                                            <a href="" class="delete-item"><i class="fa fa-close"></i></a>
                                        </li>
                                        <li class="clearfix">
                                            <img src="images/apps.6194.63443774180296696.cd362176-f5a8-4466-88f8-b7d68650d970.png"
                                                 alt="item1"/>
                                            <span class="item-name">XMREDTREE</span>
                                            <span class="item-detail">Pack 100</span>
                                            <span class="item-price">$49.50</span>
                                            <span class="item-quantity">Quantity: 01</span>
                                            <a href="" class="delete-item"><i class="fa fa-close"></i></a>
                                        </li>
                                        <li class="clearfix">
                                            <img src="images/apps.6194.63443774180296696.cd362176-f5a8-4466-88f8-b7d68650d970.png"
                                                 alt="item1"/>
                                            <span class="item-name">XMREDTREE</span>
                                            <span class="item-detail">Pack 100</span>
                                            <span class="item-price">$49.50</span>
                                            <span class="item-quantity">Quantity: 01</span>
                                            <a href="" class="delete-item"><i class="fa fa-close"></i></a>
                                        </li>
                                        <li class="clearfix">
                                            <img src="images/apps.6194.63443774180296696.cd362176-f5a8-4466-88f8-b7d68650d970.png"
                                                 alt="item1"/>
                                            <span class="item-name">XMREDTREE</span>
                                            <span class="item-detail">Pack 100</span>
                                            <span class="item-price">$49.50</span>
                                            <span class="item-quantity">Quantity: 01</span>
                                            <a href="" class="delete-item"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>

                                    <a href="#" class="button">دفع</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown list-inline-item">
                                <a class="nav-link " href="#" data-bs-toggle="modal" data-bs-target="#LoginModal">
                                    <i class="fa fa-user"></i> دخول
                                </a>

                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('backend') }}/images/logo.png" alt="" class="img-fluid" loading="lazy">

            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbar-content">
                <div class="hamburger-toggle">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbar-content">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">{{__('task.home')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="#">تخفيضات</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                           data-bs-auto-close="outside">
                            اشتراكات iPTV</a>
                        <ul class="dropdown-menu shadow">
                            <li><a class="dropdown-item" href="#">اشتراك سنه</a></li>
                            <li><a class="dropdown-item" href="blog.html">اشتراك 6 اشهر</a></li>

                            <li class="dropend">
                                <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                                   data-bs-auto-close="outside">IPTV</a>
                                <ul class="dropdown-menu shadow">
                                    <li><a class="dropdown-item" href="">Free IPTV</a></li>
                                    <li><a class="dropdown-item" href="">اشتراك شهر</a></li>
                                    <li><a class="dropdown-item" href="">اشتراك تجريبي</a></li>

                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">من نحن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">اتصل بنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">الدعم الفني</a>
                    </li>

                </ul>
                <form class="d-flex ms-auto search-form">
                    <div class="input-group">
                        <input class="form-control border-0 mr-2" type="search" placeholder="بحث عن منتح .."
                               aria-label="Search">
                        <button class="btn btn-primary border-0" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </nav>

</header>
<!-- Modal -->
<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">دخول</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center login-modal pb-5">
                <h5 class="mb-4"> اختر طريقة الدخول</h5>
                <button id="emailTrigger" data-name="email" class="btn btn-yellow-outlined me-4">دخول بالبريد
                    الالكتروني
                </button>
                <button id="phoneTrigger" data-name="phone" class="btn btn-yellow-outlined">دخول برقم الجوال</button>

                <input type="email"  data-name="email" class="form-control login-option"
                       placeholder="بريدك الالكتروني">
                <input type="text"   data-name="phone" class="form-control login-option" placeholder="رقم الجوال">


                <input type="submit" value="ارسال كود التحقق" class="btn-submit btn btn-dark mt-4 ">

            </div>

        </div>
    </div>
</div>

<div class="main-slider mb-5">

    @foreach($tasks as $task)

    {{-- {{dd(url('uploads').'/'. $task->photo) }} --}}
    <img src="{{asset('uploads').'/'. $task->photo }}" alt="{{ $task->photo }}"  class="img-fluid" loading="lazy">
        
    @endforeach
</div>


<section class="packages-prices pb-4 mt-3">
    <div class="container">
        <div class="section-title mb-5">
            أسعار الاشتراكات
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="single-package">
                    <div class="top-wrapper">
                        <p>اشتراك</p>
                        <div class="price">$39</div>
                        <p>شهر واحد</p>
                    </div>
                    <ul class="features">
                        <li>يعمل على جهاز واحد فقط</li>
                        <li>اكثر من 200 قناة</li>
                        <li>يعمل على كل انواع الاجهزة</li>
                        <li>تجربه مجانية 24 ساعه</li>
                        <li>ضمان بنسبه 99% دون انقطاع</li>
                    </ul>
                    <button class="btn add-to-cart my-3"><i class="fa fa-shopping-cart"></i>اضف الى السلة</button>

                </div>
            </div>
            <div class="col-md-4">
                <div class="single-package common-package">
                    <div class="top-wrapper">
                        <p>اشتراك</p>
                        <div class="price">$39</div>
                        <p>6 اشهر</p>
                    </div>
                    <ul class="features">
                        <li>يعمل على جهاز واحد فقط</li>
                        <li>اكثر من 200 قناة</li>
                        <li>يعمل على كل انواع الاجهزة</li>
                        <li>تجربه مجانية 24 ساعه</li>
                        <li>ضمان بنسبه 99% دون انقطاع</li>
                    </ul>
                    <button class="btn add-to-cart my-3"><i class="fa fa-shopping-cart"></i>اضف الى السلة</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-package">
                    <div class="top-wrapper">
                        <p>اشتراك</p>
                        <div class="price">$39</div>
                        <p>سنه</p>
                    </div>
                    <ul class="features">
                        <li>يعمل على جهاز واحد فقط</li>
                        <li>اكثر من 200 قناة</li>
                        <li>يعمل على كل انواع الاجهزة</li>
                        <li>تجربه مجانية 24 ساعه</li>
                        <li>ضمان بنسبه 99% دون انقطاع</li>
                    </ul>
                    <button class="btn add-to-cart my-3"><i class="fa fa-shopping-cart"></i>اضف الى السلة</button>

                </div>
            </div>

        </div>

    </div>
</section>


<section class="why-us bg-light py-5 mt-5">
    <div class="container">
        <div class="section-title mb-5  ">
            مميزات خدماتنا
        </div>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="single-section-wrapper">
                    <i class="fa fa-credit-card" aria-hidden="true"></i>


                    <div class="item-details">
                        طرق دفع آمنه تناسب اختياراتك
                    </div>
                    <small class="mt-2 text-black-50">تحويل, فيزا, سداد, مدى, ابل باي ، STC PAY </small>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="single-section-wrapper">
                    <i class="fa fa-tags" aria-hidden="true"></i>

                    <div class="item-details">
                        عروض متجددة ومنافسة
                    </div>
                    <small class="mt-2 text-black-50">افضل العروض الشهرية والخصومات</small>

                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="single-section-wrapper">
                    <i class="fa fa-rocket" aria-hidden="true"></i>
                    <div class="item-details">سرعة صاروخية فى وصول الكود</div>
                    <small class="mt-2 text-black-50">يتم ارسال الاشتراك عبر الواتس اب للعضوية وطريقة الاشتراك</small>

                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="single-section-wrapper">
                    <i class="fa fa-desktop" aria-hidden="true"></i>
                    <div class="item-details">
                        يعمل على كل انواع الاجهزة
                    </div>
                    <small class="mt-2 text-black-50">يعمل علي كل التليفزيونات الذكرية والكمبيوتر والجوالات </small>

                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="single-section-wrapper">
                    <i class="fa fa-television" aria-hidden="true"></i>

                    <div class="item-details">
                        اكثر من 7000 قناة
                    </div>
                    <small class="mt-2 text-black-50">خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً</small>

                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="single-section-wrapper">
                    <i class="fa fa-plug" aria-hidden="true"></i>


                    <div class="item-details">
                        يعمل 24 ساعه دون انقطاع
                    </div>
                    <small class="mt-2 text-black-50">خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً</small>

                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="single-section-wrapper">
                    <i class="fa fa-question-circle" aria-hidden="true"></i>

                    <div class="item-details">
                        دعم فني طوال الاسبوع
                    </div>
                    <small class="mt-2 text-black-50">خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً</small>

                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="single-section-wrapper">
                    <i class="fa fa-desktop" aria-hidden="true"></i>


                    <div class="item-details">
                        يعمل على كل انواع الاجهزة
                    </div>
                    <small class="mt-2 text-black-50">خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً</small>

                </div>
            </div>
        </div>

    </div>
</section>

<section class="testimonials py-5">
    <div class="container">
        <div class="section-title mb-5  ">
            آراء العملاء
        </div>
        <div class="testimonial-slider">
            <div class="testimonials-item">

                <div class=" justify-content-center ">

                    <div class="mb-3 d-flex align-items-center">
                        <img src="https://assets.salla.cloud/themes/default/assets/images/avatar_female.png"
                             loading="lazy" alt="">
                        <div>
                            <span class="testimonials-item__author"> فالح الشهراني</span>
                            <ul class="rating">
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                            </ul>
                        </div>
                    </div>
                    <p> جميل جدا للان والخدمه سريعه وموظف خذمة العملاء ممتاز جدا اسلوب راقي رد سريع الف شكر لكم
                        🙏🏻 </p>


                </div>

            </div>
            <div class="testimonials-item">

                <div class=" justify-content-center ">

                    <div class="mb-3 d-flex align-items-center">
                        <img src="https://assets.salla.cloud/themes/default/assets/images/avatar_female.png"
                             loading="lazy" alt="">
                        <div>
                            <span class="testimonials-item__author"> فالح الشهراني</span>
                            <ul class="rating">
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                            </ul>
                        </div>
                    </div>
                    <p> جميل جدا للان والخدمه سريعه وموظف خذمة العملاء ممتاز جدا اسلوب راقي رد سريع الف شكر لكم
                        🙏🏻 </p>


                </div>

            </div>
            <div class="testimonials-item">

                <div class=" justify-content-center ">

                    <div class="mb-3 d-flex align-items-center">
                        <img src="https://assets.salla.cloud/themes/default/assets/images/avatar_female.png"
                             loading="lazy" alt="">
                        <div>
                            <span class="testimonials-item__author"> فالح الشهراني</span>
                            <ul class="rating">
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                            </ul>
                        </div>
                    </div>
                    <p> جميل جدا للان والخدمه سريعه وموظف خذمة العملاء ممتاز جدا اسلوب راقي رد سريع الف شكر لكم
                        🙏🏻 </p>


                </div>

            </div>
            <div class="testimonials-item">

                <div class=" justify-content-center ">

                    <div class="mb-3 d-flex align-items-center">
                        <img src="https://assets.salla.cloud/themes/default/assets/images/avatar_female.png"
                             loading="lazy" alt="">
                        <div>
                            <span class="testimonials-item__author"> فالح الشهراني</span>
                            <ul class="rating">
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                            </ul>
                        </div>
                    </div>
                    <p> جميل جدا للان والخدمه سريعه وموظف خذمة العملاء ممتاز جدا اسلوب راقي رد سريع الف شكر لكم
                        🙏🏻 </p>


                </div>

            </div>
        </div>
    </div>
</section>

<footer>

    <div class="container">

        <div class="text-center">

            <div class="social-icons mb-3">
                <ul class="list-inline">
                    <li class="list-inline-item"><a href=""><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href=""><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href=""><i class="fa fa-youtube"></i></a></li>
                    <li class="list-inline-item"><a href=""><i class="fa fa-telegram"></i></a></li>
                    <li class="list-inline-item"><a href=""><i class="fa fa-phone"></i></a></li>
                </ul>
            </div>

            <div class="payment-methods mb-4">

                <img src="https://assets.salla.cloud/themes/default/assets/images/mada.png?v=v1.4.134" alt=" ">
                <img src="https://assets.salla.cloud/themes/default/assets/images/cc.png?v=v1.4.134" alt=" ">
                <img src="https://assets.salla.cloud/themes/default/assets/images/applepay.svg?v=v1.4.134" alt=" ">

            </div>

            <ul class="footer-nav list-inline">
                <li class="list-inline-item"><a href="">رابط</a></li>
                <li class="list-inline-item"><a href="">رابط</a></li>
                <li class="list-inline-item"><a href="">رابط</a></li>
                <li class="list-inline-item"><a href="">رابط</a></li>
            </ul>

        </div>


    </div>
    <div class="copyrights">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p><a href="http://www.serv5.com"> برمجة سيرف فايف
                    </a></p>

                </div>
                <div class="col-md-6">
                    <p class="cr">جميع الحقوق محفوظة © 2017</p>

                </div>
            </div>


        </div>
    </div>

</footer>
<a href="#" class="go-top"><i class="fa fa-chevron-up"></i></a>

<script src="{{ asset('backend') }}/js/jquery-3.3.1.min.js"></script>
<script src="{{ asset('backend') }}/js/bootstrap-rtl.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="{{ asset('backend') }}/js/custom.js"></script>
</body>
</html>

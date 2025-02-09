@extends('frontend.layouts.master')
@section('content')
    <section class="my-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-box mb-3">
                        <p class="m-0 p-0">مقالات</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="top-slider owl-carousel owl-theme top-slider-wrap">
                        @foreach($articles as $article)
                            <div class="slider-item bg-white rounded p-4">
                                <figure class="position-relative">
                                    <img src="{{url('images/articles/'.$article->image)}}" alt="" class="w-100 rounded">
                                    <figcaption class="tp_top position-absolute p-4">
                                        <span>{{\Hekmatinasser\Verta\Verta::instance($article->created_at)->format('%B %d، %Y')}}</span>
                                    </figcaption>

                                </figure>
                                <a href="#">
                                    <h6 class="overflow-hidden px-2">{{$article->title}}</h6>
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="title-box mb-3">
                        <p class="m-0 p-0">آخرین مطالب سایت</p>
                        <span class="d-block"><a href="#">مشاهده همه</a> <i
                                class="bi bi-arrow-left position-relative"></i></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 my-3">
                    <div class="blg-wrap bg-white pb-3">
                        <figure class="position-relative">
                            <img src="img/blog/CSS-Contact-Us-Form.png" alt="" class="w-100">
                            <figcaption class="position-absolute w-100 h-100"><span class="blg-dt">4 مرداد</span>
                            </figcaption>
                        </figure class="position-relative">
                        <div class="px-3 py-1 text-start">
                            <span class="blg-cat-name d-inline-block bg-info py-1 px-2">مطالب روز</span>
                        </div>
                        <a href="#">
                            <h4 class="blg-title p-3 mx-5 text-dark border-bottom overflow-hidden">قالب های رایگان
                                Html</h4>
                        </a>
                        <div class="post-type d-flex p-3 pb-0">
                            <i class="bi bi-instagram d-inline-block text-info text-center"></i>
                            <span>مقاله اینستاگرام</span>
                        </div>
                        <p class="p-4 overflow-hidden">زمانی که چندین سال قبل تصمیم گرفتیم تا قدم در میدان طراحی و
                            برنامه نویسی وب سایت بگذاریم هیچ مسیری برای ما واضح و روشن نبود و باید در جستجوی راه های
                            درست ، روز ها و هفته ها وقت سپری می کردیم </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 my-3">
                    <div class="blg-wrap bg-white pb-3">
                        <figure class="position-relative">
                            <img src="img/blog/podcast.jpg" alt="" class="w-100">
                            <figcaption class="position-absolute w-100 h-100"><span class="blg-dt">4 مرداد</span>
                            </figcaption>
                        </figure class="position-relative">
                        <div class="px-3 py-1 text-start">
                            <span class="blg-cat-name d-inline-block bg-danger py-1 px-2">رادیو</span>
                        </div>
                        <a href="#">
                            <h4 class="blg-title p-3 mx-5 text-dark border-bottom overflow-hidden">رادیو آموزشی افتتاح
                                شد</h4>
                        </a>
                        <div class="post-type d-flex p-3 pb-0">
                            <i class="bi bi-headphones d-inline-block text-info text-center"></i>
                            <span>پادکست</span>
                        </div>
                        <p class="p-4 overflow-hidden">زمانی که چندین سال قبل تصمیم گرفتیم تا قدم در میدان طراحی و
                            برنامه نویسی وب سایت بگذاریم هیچ مسیری برای ما واضح و روشن نبود و باید در جستجوی راه های
                            درست ، روز ها و هفته ها وقت سپری می کردیم </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 my-3">
                    <div class="blg-wrap bg-white pb-3">
                        <figure class="position-relative">
                            <img src="img/blog/buisiness.jpg" alt="" class="w-100">
                            <figcaption class="position-absolute w-100 h-100"><span class="blg-dt">4 مرداد</span>
                            </figcaption>
                        </figure class="position-relative">
                        <div class="px-3 py-1 text-start">
                            <span class="blg-cat-name d-inline-block bg-dark py-1 px-2">پرسش و پاسخ</span>
                        </div>
                        <a href="#">
                            <h4 class="blg-title p-3 mx-5 text-dark border-bottom overflow-hidden">بازاریابی محتوا و
                                هدف</h4>
                        </a>
                        <div class="post-type d-flex p-3 pb-0">
                            <i class="bi bi-card-text d-inline-block text-info text-center"></i>
                            <span>پیشنهادی</span>
                        </div>
                        <p class="p-4 overflow-hidden">زمانی که چندین سال قبل تصمیم گرفتیم تا قدم در میدان طراحی و
                            برنامه نویسی وب سایت بگذاریم هیچ مسیری برای ما واضح و روشن نبود و باید در جستجوی راه های
                            درست ، روز ها و هفته ها وقت سپری می کردیم </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 my-3">
                    <div class="blg-wrap bg-white pb-3">
                        <figure class="position-relative">
                            <img src="img/blog/cook.jpg" alt="" class="w-100">
                            <figcaption class="position-absolute w-100 h-100"><span class="blg-dt">4 مرداد</span>
                            </figcaption>
                        </figure class="position-relative">
                        <div class="px-3 py-1 text-start">
                            <span class="blg-cat-name d-inline-block bg-danger py-1 px-2">تغذیه</span>
                        </div>
                        <a href="#">
                            <h4 class="blg-title p-3 mx-5 text-dark border-bottom overflow-hidden">تنظیم برنامه غذا برای
                                منزل</h4>
                        </a>
                        <div class="post-type d-flex p-3 pb-0">
                            <i class="bi bi-clock d-inline-block text-info text-center"></i>
                            <span>خانه و کاشانه</span>
                        </div>
                        <p class="p-4 overflow-hidden">زمانی که چندین سال قبل تصمیم گرفتیم تا قدم در میدان طراحی و
                            برنامه نویسی وب سایت بگذاریم هیچ مسیری برای ما واضح و روشن نبود و باید در جستجوی راه های
                            درست ، روز ها و هفته ها وقت سپری می کردیم </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 my-3">
                    <div class="blg-wrap bg-white pb-3">
                        <figure class="position-relative">
                            <img src="img/blog/Piks.jpg" alt="" class="w-100">
                            <figcaption class="position-absolute w-100 h-100"><span class="blg-dt">4 مرداد</span>
                            </figcaption>
                        </figure class="position-relative">
                        <div class="px-3 py-1 text-start">
                            <span class="blg-cat-name d-inline-block bg-primary py-1 px-2">هنر</span>
                        </div>
                        <a href="#">
                            <h4 class="blg-title p-3 mx-5 text-dark border-bottom overflow-hidden">عجیب ترین تابلو
                                ها</h4>
                        </a>
                        <div class="post-type d-flex p-3 pb-0">
                            <i class="bi bi-columns-gap d-inline-block text-info text-center"></i>
                            <span>مقاله تصویری</span>
                        </div>
                        <p class="p-4 overflow-hidden">زمانی که چندین سال قبل تصمیم گرفتیم تا قدم در میدان طراحی و
                            برنامه نویسی وب سایت بگذاریم هیچ مسیری برای ما واضح و روشن نبود و باید در جستجوی راه های
                            درست ، روز ها و هفته ها وقت سپری می کردیم </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 my-3">
                    <div class="blg-wrap bg-white pb-3">
                        <figure class="position-relative">
                            <img src="img/blog/shop.jpg" alt="" class="w-100">
                            <figcaption class="position-absolute w-100 h-100"><span class="blg-dt">4 مرداد</span>
                            </figcaption>
                        </figure class="position-relative">
                        <div class="px-3 py-1 text-start">
                            <span class="blg-cat-name d-inline-block bg-info py-1 px-2">فروشگاه اینترنتی</span>
                        </div>
                        <a href="#">
                            <h4 class="blg-title p-3 mx-5 text-dark border-bottom overflow-hidden">چگونه 10 برابر
                                فروختیم ؟</h4>
                        </a>
                        <div class="post-type d-flex p-3 pb-0">
                            <i class="bi bi-bag d-inline-block text-info text-center"></i>
                            <span>کسب و کار</span>
                        </div>
                        <p class="p-4 overflow-hidden">زمانی که چندین سال قبل تصمیم گرفتیم تا قدم در میدان طراحی و
                            برنامه نویسی وب سایت بگذاریم هیچ مسیری برای ما واضح و روشن نبود و باید در جستجوی راه های
                            درست ، روز ها و هفته ها وقت سپری می کردیم </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5 ">
        <div class="container bg-white py-3 rounded grided-box px-4 pt-4">
            <div class="row">
                <div class="col-12">
                    <div class="title-box mb-3">
                        <p class="m-0 p-0">آخرین مطالب سایت</p>
                        <span class="d-block"><a href="#">مشاهده همه</a> <i
                                class="bi bi-arrow-left position-relative"></i></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 top-slider">
                            <a href="#">
                                <div class="slider-item index-item-p">
                                    <figure class="position-relative">
                                        <img src="img/blog/CSS-Contact-Us-Form.png" alt="" class="w-100">
                                        <figcaption class="tp_top position-absolute p-4">
                                            <span>20 مرداد</span>
                                        </figcaption>
                                        <figcaption class="tp_bottom w-100 position-absolute p-4">
                                            <h4 class="overflow-hidden px-2 text-light w-100 p-0 m-0">روانشناسی رنگ</h4>
                            </a>
                            </figcaption>
                            </figure>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-6 top-slider">
                        <a href="#">
                            <div class="slider-item index-item-p">
                                <figure class="position-relative">
                                    <img src="img/blog/shop.jpg" alt="" class="w-100">
                                    <figcaption class="tp_top position-absolute p-4">
                                        <span>20 مرداد</span>
                                    </figcaption>
                                    <figcaption class="tp_bottom w-100 position-absolute p-4">
                                        <h4 class="overflow-hidden px-2 text-light w-100 p-0 m-0">درآمد فروشگاه
                                            اینترنتی</h4>
                        </a>
                        </figcaption>
                        </figure>
                    </div>
                    </a>
                </div>
                <div class="col-md-6 top-slider">
                    <a href="#">
                        <div class="slider-item index-item-p">
                            <figure class="position-relative">
                                <img src="img/blog/btstrap.jpg" alt="" class="w-100">
                                <figcaption class="tp_top position-absolute p-4">
                                    <span>20 مرداد</span>
                                </figcaption>
                                <figcaption class="tp_bottom w-100 position-absolute p-4">
                                    <h4 class="overflow-hidden px-2 text-light w-100 p-0 m-0">تغییرات بوت استرپ</h4>
                    </a>
                    </figcaption>
                    </figure>
                </div>
                </a>
            </div>
            <div class="col-md-6 top-slider">
                <a href="#">
                    <div class="slider-item index-item-p">
                        <figure class="position-relative">
                            <img src="img/blog/buisiness.jpg" alt="" class="w-100">
                            <figcaption class="tp_top position-absolute p-4">
                                <span>20 مرداد</span>
                            </figcaption>
                            <figcaption class="tp_bottom w-100 position-absolute p-4">
                                <h4 class="overflow-hidden px-2 text-light w-100 p-0 m-0">ساخت بنرهای زیبا برای پست های
                                    اینستا</h4>
                </a>
                </figcaption>
                </figure>
            </div>
            </a>
        </div>
        </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-12 top-slider">
                    <a href="#">
                        <div class="slider-item index-item-p">
                            <figure class="position-relative">
                                <img src="img/blog/youtube.jpg" alt="" class="w-100">
                                <figcaption class="tp_top position-absolute p-4">
                                    <span>20 مرداد</span>
                                </figcaption>
                                <figcaption class="tp_bottom w-100 position-absolute p-4">
                                    <h4 class="overflow-hidden px-2 text-light w-100 p-0 m-0">تاثیر ویدئو در سئو</h4>
                    </a>
                    </figcaption>
                    </figure>
                </div>
                </a>
            </div>
            <div class="col-12 top-slider">
                <a href="#">
                    <div class="slider-item index-item-p">
                        <figure class="position-relative">
                            <img src="img/blog/cook.jpg" alt="" class="w-100">
                            <figcaption class="tp_top position-absolute p-4">
                                <span>20 مرداد</span>
                            </figcaption>
                            <figcaption class="tp_bottom w-100 position-absolute p-4">
                                <h4 class="overflow-hidden px-2 text-light w-100 p-0 m-0">غذاهای رژیمی خاص</h4>
                </a>
                </figcaption>
                </figure>
            </div>
            </a>
        </div>
        </div>
        </div>
        </div>
        </div>
    </section>
    <section class="mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="title-box mb-3">
                        <p class="m-0 p-0">آخرین مطالب سایت</p>
                        <span class="d-block"><a href="#">مشاهده همه</a> <i
                                class="bi bi-arrow-left position-relative"></i></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 my-3">
                    <div class="blg-wrap bg-white pb-3">
                        <figure class="position-relative">
                            <img src="img/blog/CSS-Contact-Us-Form.png" alt="" class="w-100">
                            <figcaption class="position-absolute w-100 h-100"><span class="blg-dt">4 مرداد</span>
                            </figcaption>
                        </figure class="position-relative">
                        <div class="px-3 py-1 text-start">
                            <span class="blg-cat-name d-inline-block bg-info py-1 px-2">مطالب روز</span>
                        </div>
                        <a href="#">
                            <h4 class="blg-title p-3 mx-5 text-dark border-bottom overflow-hidden">قالب های رایگان
                                Html</h4>
                        </a>
                        <div class="post-type d-flex p-3 pb-0">
                            <i class="bi bi-instagram d-inline-block text-info text-center"></i>
                            <span>مقاله اینستاگرام</span>
                        </div>
                        <p class="p-4 overflow-hidden">زمانی که چندین سال قبل تصمیم گرفتیم تا قدم در میدان طراحی و
                            برنامه نویسی وب سایت بگذاریم هیچ مسیری برای ما واضح و روشن نبود و باید در جستجوی راه های
                            درست ، روز ها و هفته ها وقت سپری می کردیم </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 my-3">
                    <div class="blg-wrap bg-white pb-3">
                        <figure class="position-relative">
                            <img src="img/blog/buisiness.jpg" alt="" class="w-100">
                            <figcaption class="position-absolute w-100 h-100"><span class="blg-dt">4 مرداد</span>
                            </figcaption>
                        </figure class="position-relative">
                        <div class="px-3 py-1 text-start">
                            <span class="blg-cat-name d-inline-block bg-dark py-1 px-2">پرسش و پاسخ</span>
                        </div>
                        <a href="#">
                            <h4 class="blg-title p-3 mx-5 text-dark border-bottom overflow-hidden">بازاریابی محتوا و
                                هدف</h4>
                        </a>
                        <div class="post-type d-flex p-3 pb-0">
                            <i class="bi bi-card-text d-inline-block text-info text-center"></i>
                            <span>پیشنهادی</span>
                        </div>
                        <p class="p-4 overflow-hidden">زمانی که چندین سال قبل تصمیم گرفتیم تا قدم در میدان طراحی و
                            برنامه نویسی وب سایت بگذاریم هیچ مسیری برای ما واضح و روشن نبود و باید در جستجوی راه های
                            درست ، روز ها و هفته ها وقت سپری می کردیم </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 my-3">
                    <div class="blg-wrap bg-white pb-3">
                        <figure class="position-relative">
                            <img src="img/blog/Piks.jpg" alt="" class="w-100">
                            <figcaption class="position-absolute w-100 h-100"><span class="blg-dt">4 مرداد</span>
                            </figcaption>
                        </figure class="position-relative">
                        <div class="px-3 py-1 text-start">
                            <span class="blg-cat-name d-inline-block bg-primary py-1 px-2">هنر</span>
                        </div>
                        <a href="#">
                            <h4 class="blg-title p-3 mx-5 text-dark border-bottom overflow-hidden">عجیب ترین تابلو
                                ها</h4>
                        </a>
                        <div class="post-type d-flex p-3 pb-0">
                            <i class="bi bi-columns-gap d-inline-block text-info text-center"></i>
                            <span>مقاله تصویری</span>
                        </div>
                        <p class="p-4 overflow-hidden">زمانی که چندین سال قبل تصمیم گرفتیم تا قدم در میدان طراحی و
                            برنامه نویسی وب سایت بگذاریم هیچ مسیری برای ما واضح و روشن نبود و باید در جستجوی راه های
                            درست ، روز ها و هفته ها وقت سپری می کردیم </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

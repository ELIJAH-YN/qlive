@extends('layouts.qliveLayout.qlive_design')
@section('content')

    <!-- Start main -->
    <main class="main">
        <!-- Start jumbotron -->
        <div class="jumbotron_Desktop ">
            <div class="jumbotron owl-carousel owl-theme ">
                <div class="jumbotron__item ">
                    <div class="image " style="background-image: url( {{ asset('/assets/images/backend_images/demo/demo-image1.jpg') }})"></div>
                </div>
                <div class="jumbotron__item ">
                    <div class="image " style="background-image: url( 'images/Desktop/banner2.png') "></div>
                </div>
                <div class="jumbotron__item ">
                    <div class="image " style="background-image: url( 'images/Desktop/banner3.png') "></div>
                </div>
                <div class="jumbotron__item ">
                    <div class="image " style="background-image: url( 'images/Desktop/banner4.png') "></div>
                </div>
                <div class="jumbotron__item ">
                    <div class="image " style="background-image: url( 'images/Desktop/banner5.png') "></div>
                </div>
            </div>
        </div>
        <div class="jumbotron_Mobile ">
            <div class="jumbotron owl-carousel owl-theme ">
                <div class="jumbotron__item ">
                    <div class="image " style="background-image: url( 'images/Mobile/banner1_m.jpg') "></div>
                </div>
                <div class="jumbotron__item ">
                    <div class="image " style="background-image: url( 'images/Mobile/banner2_m.jpg') "></div>
                </div>
                <div class="jumbotron__item ">
                    <div class="image " style="background-image: url( 'images/Mobile/banner3_m.jpg') "></div>
                </div>
                <div class="jumbotron__item ">
                    <div class="image " style="background-image: url( 'images/Mobile/banner4_m.jpg') "></div>
                </div>
                <div class="jumbotron__item ">
                    <div class="image " style="background-image: url( 'images/Mobile/banner5_m.jpg') "></div>
                </div>
            </div>
        </div>
        <!-- End jumbotron -->

        <!-- Start internetCelebrity -->
        <div class="internetCelebrity imageMask ">
            <div class="container ">
                <div class="subtitle u-text-center ">
                    Q網紅人
                </div>
                <div class="row ">
                    @foreach($articleIndex_1 as $article)
{{--                    <div class="col-md-3 ">--}}
{{--                        <div class="thumbnail ">--}}
{{--                            <a href="# " class="imgbox ">--}}
{{--                                <div class="imgbox__inner imgbox__inner-16-9">--}}
{{--                                    <div class="image " style="background-image: url( 'images/img1.jpg'); "></div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a href="# " class="thumbnail__info ">--}}
{{--                                <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="col-md-3 ">
                        <div class="thumbnail ">
                            <div class="row ">
                                <div class="col-5 col-md-12 ">
                                    <a href="# " class="imgbox ">
                                        <div class="imgbox__inner imgbox__inner-16-9 ">
{{--                                            <div class="image " style="background-image: url( 'images/img2.jpg'); "></div>--}}
                                            <div class="image" ><img src="{{ asset('/assets/images/cover/small/'.$article->cover) }}" alt=""></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-7 col-md-12 ">
                                    <a href="# " class="thumbnail__info ">
                                        <h6 class="thumbnail__title">{{ $article->title }}</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{--                    <div class="col-md-3 ">--}}
{{--                        <div class="thumbnail ">--}}
{{--                            <div class="row ">--}}
{{--                                <div class="col-5 col-md-12 ">--}}
{{--                                    <a href="# " class="imgbox ">--}}
{{--                                        <div class="imgbox__inner imgbox__inner-16-9 ">--}}
{{--                                            <div class="image " style="background-image: url( 'images/img3.jpg'); "></div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-7 col-md-12 ">--}}
{{--                                    <a href="# " class="thumbnail__info ">--}}
{{--                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 ">--}}
{{--                        <div class="thumbnail ">--}}
{{--                            <div class="row ">--}}
{{--                                <div class="col-5 col-md-12 ">--}}
{{--                                    <a href="# " class="imgbox ">--}}
{{--                                        <div class="imgbox__inner imgbox__inner-16-9">--}}
{{--                                            <div class="image " style="background-image: url( 'images/img4.jpg'); "></div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-7 col-md-12 ">--}}
{{--                                    <a href="# " class="thumbnail__info ">--}}
{{--                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
{{--                <div class="row ">--}}
{{--                    <div class="col-md-3 ">--}}
{{--                        <div class="thumbnail ">--}}
{{--                            <div class="row ">--}}
{{--                                <div class="col-5 col-md-12 ">--}}
{{--                                    <a href="# " class="imgbox ">--}}
{{--                                        <div class="imgbox__inner imgbox__inner-16-9 ">--}}
{{--                                            <div class="image " style="background-image: url( 'images/img5.jpg'); "></div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-7 col-md-12 ">--}}
{{--                                    <a href="# " class="thumbnail__info ">--}}
{{--                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 ">--}}
{{--                        <div class="thumbnail ">--}}
{{--                            <div class="row ">--}}
{{--                                <div class="col-5 col-md-12 ">--}}
{{--                                    <a href="# " class="imgbox ">--}}
{{--                                        <div class="imgbox__inner imgbox__inner-16-9 ">--}}
{{--                                            <div class="image " style="background-image: url( 'images/img6.jpg'); "></div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-7 col-md-12 ">--}}
{{--                                    <a href="# " class="thumbnail__info ">--}}
{{--                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 ">--}}
{{--                        <div class="thumbnail ">--}}
{{--                            <div class="row ">--}}
{{--                                <div class="col-5 col-md-12 ">--}}
{{--                                    <a href="# " class="imgbox ">--}}
{{--                                        <div class="imgbox__inner imgbox__inner-16-9 ">--}}
{{--                                            <div class="image " style="background-image: url( 'images/img7.jpg'); "></div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-7 col-md-12 ">--}}
{{--                                    <a href="# " class="thumbnail__info ">--}}
{{--                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 ">--}}
{{--                        <div class="thumbnail ">--}}
{{--                            <div class="row ">--}}
{{--                                <div class="col-5 col-md-12 ">--}}
{{--                                    <a href="# " class="imgbox ">--}}
{{--                                        <div class="imgbox__inner imgbox__inner-16-9">--}}
{{--                                            <div class="image " style="background-image: url( 'images/img8.jpg'); "></div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-7 col-md-12 ">--}}
{{--                                    <a href="# " class="thumbnail__info ">--}}
{{--                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="btn-group--center ">
                    <div class="btn btn--primary btn--md ">想看更多Q網紅人？</div>
                </div>
            </div>
        </div>
        <!-- End internetCelebrity -->

        <!-- Start Vidio Page -->
        <div class="vidioPage ">
            <div class="container ">
                <div class="subtitle u-text-center ">
                    Q紅影音
                </div>
                <div class="thumbnails_vidio owl-carousel_vidio ">
                    <div class="thumbnail_vidio ">

                        <div class="card ">
                            <a class="imgbox" data-fancybox data-width="1024 " data-height="576 " href="https://www.youtube.com/watch?v=HK7SPnGSxLM">
                                <div class="imgbox__inner imgbox__inner-16-9 ">
                                    <div class="image " style="background-image: url( 'images/img2.jpg'); "></div>
                                </div>
                            </a>

                        </div>

                        <a href="# ">
                            <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>
                        </a>
                    </div>
                    <div class="thumbnail_vidio ">

                        <div class="card ">
                            <a class="imgbox" data-fancybox data-width="1024 " data-height="576 " href="https://www.youtube.com/watch?v=HK7SPnGSxLM">
                                <div class="imgbox__inner imgbox__inner-16-9 ">
                                    <div class="image " style="background-image: url( 'images/img2.jpg'); "></div>
                                </div>
                            </a>

                        </div>

                        <a href="# ">
                            <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>
                        </a>
                    </div>
                    <div class="thumbnail_vidio ">

                        <div class="card ">
                            <a class="imgbox" data-fancybox data-width="1024 " data-height="576 " href="https://www.youtube.com/watch?v=HK7SPnGSxLM">
                                <div class="imgbox__inner imgbox__inner-16-9 ">
                                    <div class="image " style="background-image: url( 'images/img2.jpg'); "></div>
                                </div>
                            </a>

                        </div>

                        <a href="# ">
                            <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>
                        </a>
                    </div>
                    <div class="thumbnail_vidio ">

                        <div class="card ">
                            <a class="imgbox" data-fancybox data-width="1024 " data-height="576 " href="https://www.youtube.com/watch?v=HK7SPnGSxLM">
                                <div class="imgbox__inner imgbox__inner-16-9 ">
                                    <div class="image " style="background-image: url( 'images/img2.jpg'); "></div>
                                </div>
                            </a>

                        </div>

                        <a href="# ">
                            <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>
                        </a>
                    </div>
                    <div class="thumbnail_vidio ">

                        <div class="card ">
                            <a class="imgbox" data-fancybox data-width="1024 " data-height="576 " href="https://www.youtube.com/watch?v=HK7SPnGSxLM">
                                <div class="imgbox__inner imgbox__inner-16-9 ">
                                    <div class="image " style="background-image: url( 'images/img2.jpg'); "></div>
                                </div>
                            </a>

                        </div>

                        <a href="# ">
                            <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>
                        </a>
                    </div>
                    <div class="thumbnail_vidio ">

                        <div class="card ">
                            <a class="imgbox" data-fancybox data-width="1024 " data-height="576 " href="https://www.youtube.com/watch?v=HK7SPnGSxLM">
                                <div class="imgbox__inner imgbox__inner-16-9 ">
                                    <div class="image " style="background-image: url( 'images/img2.jpg'); "></div>
                                </div>
                            </a>

                        </div>

                        <a href="# ">
                            <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>
                        </a>
                    </div>
                    <div class="thumbnail_vidio ">

                        <div class="card ">
                            <a class="imgbox" data-fancybox data-width="1024 " data-height="576 " href="https://www.youtube.com/watch?v=HK7SPnGSxLM">
                                <div class="imgbox__inner imgbox__inner-16-9 ">
                                    <div class="image " style="background-image: url( 'images/img2.jpg'); "></div>
                                </div>
                            </a>

                        </div>

                        <a href="# ">
                            <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Vidio Page -->

        <!-- Start trending -->
        <div class="trending imageMask ">
            <div class="container ">
                <div class="subtitle u-text-center ">
                    當紅潮流
                </div>
                <div class="row ">
{{--                    <div class="col-md-3 ">--}}
{{--                        <div class="thumbnail ">--}}
{{--                            <a href="# " class="imgbox ">--}}
{{--                                <div class="imgbox__inner imgbox__inner-16-9">--}}
{{--                                    <div class="image " style="background-image: url( 'images/img9.jpg'); "></div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a href="# " class="thumbnail__info ">--}}
{{--                                <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    @foreach($articleIndex_2 as $article)
                    <div class="col-md-3 ">
                        <div class="thumbnail ">
                            <div class="row ">
                                <div class="col-5 col-md-12 ">
                                    <a href="# " class="imgbox ">
                                        <div class="imgbox__inner imgbox__inner-16-9">
                                            <div class="image"><img src="{{ asset('/assets/images/cover/small/'.$article->cover) }}" alt=""></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-7 col-md-12 ">
                                    <a href="# " class="thumbnail__info ">
                                        <h6 class="thumbnail__title">{{ $article->title }}</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
{{--                    <div class="col-md-3 ">--}}
{{--                        <div class="thumbnail ">--}}
{{--                            <div class="row ">--}}
{{--                                <div class="col-5 col-md-12 ">--}}
{{--                                    <a href="# " class="imgbox ">--}}
{{--                                        <div class="imgbox__inner imgbox__inner-16-9 ">--}}
{{--                                            <div class="image " style="background-image: url( 'images/img11.jpg'); "></div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-7 col-md-12 ">--}}
{{--                                    <a href="#" class="thumbnail__info ">--}}
{{--                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 ">--}}
{{--                        <div class="thumbnail ">--}}
{{--                            <div class="row ">--}}
{{--                                <div class="col-5 col-md-12 ">--}}
{{--                                    <a href="# " class="imgbox ">--}}
{{--                                        <div class="imgbox__inner imgbox__inner-16-9 ">--}}
{{--                                            <div class="image " style="background-image: url( 'images/img12.jpg'); "></div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-7 col-md-12 ">--}}
{{--                                    <a href="# " class="thumbnail__info ">--}}
{{--                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
{{--                <div class="row ">--}}
{{--                    <div class="col-md-3 ">--}}
{{--                        <div class="thumbnail ">--}}
{{--                            <div class="row ">--}}
{{--                                <div class="col-5 col-md-12 ">--}}
{{--                                    <a href="# " class="imgbox ">--}}
{{--                                        <div class="imgbox__inner imgbox__inner-16-9 ">--}}
{{--                                            <div class="image " style="background-image: url( 'images/img13.jpg'); "></div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-7 col-md-12 ">--}}
{{--                                    <a href="# " class="thumbnail__info ">--}}
{{--                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 ">--}}
{{--                        <div class="thumbnail ">--}}
{{--                            <div class="row ">--}}
{{--                                <div class="col-5 col-md-12 ">--}}
{{--                                    <a href="# " class="imgbox ">--}}
{{--                                        <div class="imgbox__inner imgbox__inner-16-9 ">--}}
{{--                                            <div class="image " style="background-image: url( 'images/img14.jpg'); "></div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-7 col-md-12 ">--}}
{{--                                    <a href="# " class="thumbnail__info ">--}}
{{--                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 ">--}}
{{--                        <div class="thumbnail ">--}}
{{--                            <div class="row ">--}}
{{--                                <div class="col-5 col-md-12 ">--}}
{{--                                    <a href="# " class="imgbox ">--}}
{{--                                        <div class="imgbox__inner imgbox__inner-16-9 ">--}}
{{--                                            <div class="image " style="background-image: url( 'images/img15.jpg'); "></div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-7 col-md-12 ">--}}
{{--                                    <a href="# " class="thumbnail__info ">--}}
{{--                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 ">--}}
{{--                        <div class="thumbnail ">--}}
{{--                            <div class="row ">--}}
{{--                                <div class="col-5 col-md-12 ">--}}
{{--                                    <a href="# " class="imgbox ">--}}
{{--                                        <div class="imgbox__inner imgbox__inner-16-9 ">--}}
{{--                                            <div class="image " style="background-image: url( 'images/img16.jpg'); "></div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-7 col-md-12 ">--}}
{{--                                    <a href="# " class="thumbnail__info ">--}}
{{--                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="btn-group--center ">
                    <div class="btn btn--primary btn--md ">想看更多當紅潮流？</div>
                </div>

            </div>
        </div>
        <!-- End trending -->

        <!-- Start have_fun -->
        <div class="have_fun imageMask ">
            <div class="container ">
                <div class="subtitle u-text-center ">
                    去你的玩
                </div>
                <div class="row ">
{{--                    <div class="col-md-3 ">--}}
{{--                        <div class="thumbnail ">--}}
{{--                            <a href="# " class="imgbox ">--}}
{{--                                <div class="imgbox__inner imgbox__inner-16-9 ">--}}
{{--                                    <div class="image " style="background-image: url( 'images/img17.jpg'); "></div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a href="# " class="thumbnail__info ">--}}
{{--                                <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    @foreach($articleIndex_3 as $article)
                    <div class="col-md-3 ">
                        <div class="thumbnail ">
                            <div class="row ">
                                <div class="col-5 col-md-12 ">
                                    <a href="# " class="imgbox ">
                                        <div class="imgbox__inner imgbox__inner-16-9 ">
                                            <div class="image"><img src="{{ asset('/assets/images/cover/small/'.$article->cover) }}" alt=""></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-7 col-md-12 ">
                                    <a href="# " class="thumbnail__info ">
                                        <h6 class="thumbnail__title">{{ $article->title }}</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
{{--                    <div class="col-md-3 ">--}}
{{--                        <div class="thumbnail ">--}}
{{--                            <div class="row ">--}}
{{--                                <div class="col-5 col-md-12 ">--}}
{{--                                    <a href="# " class="imgbox ">--}}
{{--                                        <div class="imgbox__inner imgbox__inner-16-9 ">--}}
{{--                                            <div class="image " style="background-image: url( 'images/img19.jpg'); "></div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-7 col-md-12 ">--}}
{{--                                    <a href="# " class="thumbnail__info ">--}}
{{--                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>--}}
{{--                                    </a>--}}
{{--                                    </div> -->--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 ">--}}
{{--                        <div class="thumbnail ">--}}
{{--                            <div class="row ">--}}
{{--                                <div class="col-5 col-md-12 ">--}}
{{--                                    <a href="# " class="imgbox ">--}}
{{--                                        <div class="imgbox__inner imgbox__inner-16-9 ">--}}
{{--                                            <div class="image " style="background-image: url( 'images/img20.jpg'); "></div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-7 col-md-12 ">--}}
{{--                                    <a href="# " class="thumbnail__info ">--}}
{{--                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
                </div>
{{--                <div class="row ">--}}
{{--                    <div class="col-md-3 ">--}}
{{--                        <div class="thumbnail ">--}}
{{--                            <div class="row ">--}}
{{--                                <div class="col-5 col-md-12 ">--}}
{{--                                    <a href="# " class="imgbox ">--}}
{{--                                        <div class="imgbox__inner imgbox__inner-16-9 ">--}}
{{--                                            <div class="image " style="background-image: url( 'images/img21.jpg'); "></div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-7 col-md-12 ">--}}
{{--                                    <a href="# " class="thumbnail__info ">--}}
{{--                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 ">--}}
{{--                        <div class="thumbnail ">--}}
{{--                            <div class="row ">--}}
{{--                                <div class="col-5 col-md-12 ">--}}
{{--                                    <a href="# " class="imgbox ">--}}
{{--                                        <div class="imgbox__inner imgbox__inner-16-9 ">--}}
{{--                                            <div class="image " style="background-image: url( 'images/img22.jpg'); "></div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-7 col-md-12 ">--}}
{{--                                    <a href="# " class="thumbnail__info ">--}}
{{--                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>--}}
{{--                                        <!-- <p class="thumbnail__preview ">際最深自的領，這院領傷化現覺圖明中易，巴就在是？關劇著象形</p> -->--}}
{{--                                    </a>--}}
{{--                                    <!-- <div class="thumbnail__bottom thumbnail_bottom_s ">--}}
{{--                                        <div class="thumbnail__bottom-sort ">--}}
{{--                                            <a href="# ">潮物</a>--}}
{{--                                            <a href="# ">Bogi</a>--}}
{{--                                        </div>--}}
{{--                                        <div class="thumbnail__bottom-time ">--}}
{{--                                            14hours ago--}}
{{--                                        </div>--}}
{{--                                    </div> -->--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 ">--}}
{{--                        <div class="thumbnail ">--}}
{{--                            <div class="row ">--}}
{{--                                <div class="col-5 col-md-12 ">--}}
{{--                                    <a href="# " class="imgbox ">--}}
{{--                                        <div class="imgbox__inner imgbox__inner-16-9 ">--}}
{{--                                            <div class="image " style="background-image: url( 'images/img23.jpg'); "></div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-7 col-md-12 ">--}}
{{--                                    <a href="# " class="thumbnail__info ">--}}
{{--                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>--}}
{{--                                        <!-- <p class="thumbnail__preview ">際最深自的領，這院領傷化現覺圖明中易，巴就在是？關劇著象形</p> -->--}}
{{--                                    </a>--}}
{{--                                    <!-- <div class="thumbnail__bottom thumbnail_bottom_s ">--}}
{{--                                        <div class="thumbnail__bottom-sort ">--}}
{{--                                            <a href="# ">潮物</a>--}}
{{--                                            <a href="# ">Bogi</a>--}}
{{--                                        </div>--}}
{{--                                        <div class="thumbnail__bottom-time ">--}}
{{--                                            14hours ago--}}
{{--                                        </div>--}}
{{--                                    </div> -->--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 ">--}}
{{--                        <div class="thumbnail ">--}}
{{--                            <div class="row ">--}}
{{--                                <div class="col-5 col-md-12 ">--}}
{{--                                    <a href="# " class="imgbox ">--}}
{{--                                        <div class="imgbox__inner imgbox__inner-16-9 ">--}}
{{--                                            <div class="image " style="background-image: url( 'images/img24.jpg'); "></div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-7 col-md-12 ">--}}
{{--                                    <a href="# " class="thumbnail__info ">--}}
{{--                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>--}}
{{--                                        <!-- <p class="thumbnail__preview ">際最深自的領，這院領傷化現覺圖明中易，巴就在是？關劇著象形</p> -->--}}
{{--                                    </a>--}}
{{--                                    <!-- <div class="thumbnail__bottom thumbnail_bottom_s ">--}}
{{--                                        <div class="thumbnail__bottom-sort ">--}}
{{--                                            <a href="# ">潮物</a>--}}
{{--                                            <a href="# ">Bogi</a>--}}
{{--                                        </div>--}}
{{--                                        <div class="thumbnail__bottom-time ">--}}
{{--                                            14hours ago--}}
{{--                                        </div>--}}
{{--                                    </div> -->--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="btn-group--center ">
                    <div class="btn btn--primary btn--md ">想看更多去你的玩？</div>
                </div>

            </div>
        </div>
        <!-- End have_fun -->

        <!-- Start food_photo -->
        <div class="food_photo imageMask ">
            <div class="container ">
                <div class="subtitle u-text-center ">
                    美食特拍
                </div>
                <div class="row ">
                    <div class="col-md-3 ">
                        <div class="thumbnail ">
                            <a href="# " class="imgbox ">
                                <div class="imgbox__inner imgbox__inner-16-9 ">
                                    <div class="image " style="background-image: url( 'images/img25.jpg'); "></div>
                                </div>
                            </a>
                            <a href="# " class="thumbnail__info ">
                                <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>
                                <!-- <p class="thumbnail__preview ">際最深自的領，這院領傷化現覺圖明中易，巴就在是？關劇著象形</p> -->
                            </a>
                            <!-- <div class="thumbnail__bottom ">
                                <div class="thumbnail__bottom-sort ">
                                    <a href="# ">潮物</a>
                                    <a href="# ">Bogi</a>
                                </div>
                                <div class="thumbnail__bottom-time ">
                                    14hours ago
                                </div>
                            </div> -->

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="thumbnail ">
                            <div class="row ">
                                <div class="col-5 col-md-12 ">
                                    <a href="# " class="imgbox ">
                                        <div class="imgbox__inner imgbox__inner-16-9 ">
                                            <div class="image " style="background-image: url( 'images/img26.jpg'); "></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-7 col-md-12 ">
                                    <a href="# " class="thumbnail__info ">
                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>
                                        <!-- <p class="thumbnail__preview ">際最深自的領，這院領傷化現覺圖明中易，巴就在是？關劇著象形</p> -->
                                    </a>
                                    <!-- <div class="thumbnail__bottom thumbnail_bottom_s ">
                                        <div class="thumbnail__bottom-sort ">
                                            <a href="# ">潮物</a>
                                            <a href="# ">Bogi</a>
                                        </div>
                                        <div class="thumbnail__bottom-time thumbnail_bottom_s ">
                                            14hours ago
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="thumbnail ">
                            <div class="row ">
                                <div class="col-5 col-md-12 ">
                                    <a href="# " class="imgbox ">
                                        <div class="imgbox__inner imgbox__inner-16-9 ">
                                            <div class="image " style="background-image: url( 'images/img27.jpg'); "></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-7 col-md-12 ">
                                    <a href="# " class="thumbnail__info ">
                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>
                                        <!-- <p class="thumbnail__preview ">際最深自的領，這院領傷化現覺圖明中易，巴就在是？關劇著象形</p> -->
                                    </a>
                                    <!-- <div class="thumbnail__bottom thumbnail_bottom_s ">
                                        <div class="thumbnail__bottom-sort ">
                                            <a href="# ">潮物</a>
                                            <a href="# ">Bogi</a>
                                        </div>
                                        <div class="thumbnail__bottom-time thumbnail_bottom_s ">
                                            14hours ago
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="thumbnail ">
                            <div class="row ">
                                <div class="col-5 col-md-12 ">
                                    <a href="# " class="imgbox ">
                                        <div class="imgbox__inner imgbox__inner-16-9 ">
                                            <div class="image " style="background-image: url( 'images/img28.jpg'); "></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-7 col-md-12 ">
                                    <a href="# " class="thumbnail__info ">
                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>
                                        <!-- <p class="thumbnail__preview ">際最深自的領，這院領傷化現覺圖明中易，巴就在是？關劇著象形</p> -->
                                    </a>
                                    <!-- <div class="thumbnail__bottom thumbnail_bottom_s ">
                                        <div class="thumbnail__bottom-sort ">
                                            <a href="# ">潮物</a>
                                            <a href="# ">Bogi</a>
                                        </div>
                                        <div class="thumbnail__bottom-time thumbnail_bottom_s ">
                                            14hours ago
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-3 ">
                        <div class="thumbnail ">
                            <div class="row ">
                                <div class="col-5 col-md-12 ">
                                    <a href="# " class="imgbox ">
                                        <div class="imgbox__inner imgbox__inner-16-9 ">
                                            <div class="image " style="background-image: url( 'images/img29.jpg'); "></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-7 col-md-12 ">
                                    <a href="# " class="thumbnail__info ">
                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>
                                        <!-- <p class="thumbnail__preview ">際最深自的領，這院領傷化現覺圖明中易，巴就在是？關劇著象形</p> -->
                                    </a>
                                    <!-- <div class="thumbnail__bottom thumbnail_bottom_s ">
                                        <div class="thumbnail__bottom-sort ">
                                            <a href="# ">潮物</a>
                                            <a href="# ">Bogi</a>
                                        </div>
                                        <div class="thumbnail__bottom-time thumbnail_bottom_s ">
                                            14hours ago
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="thumbnail ">
                            <div class="row ">
                                <div class="col-5 col-md-12 ">
                                    <a href="# " class="imgbox ">
                                        <div class="imgbox__inner imgbox__inner-16-9 ">
                                            <div class="image " style="background-image: url( 'images/img30.jpg'); "></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-7 col-md-12 ">
                                    <a href="# " class="thumbnail__info ">
                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>
                                        <!-- <p class="thumbnail__preview ">際最深自的領，這院領傷化現覺圖明中易，巴就在是？關劇著象形</p> -->
                                    </a>
                                    <!-- <div class="thumbnail__bottom thumbnail_bottom_s ">
                                        <div class="thumbnail__bottom-sort ">
                                            <a href="# ">潮物</a>
                                            <a href="# ">Bogi</a>
                                        </div>
                                        <div class="thumbnail__bottom-time thumbnail_bottom_s ">
                                            14hours ago
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="thumbnail ">
                            <div class="row ">
                                <div class="col-5 col-md-12 ">
                                    <a href="# " class="imgbox ">
                                        <div class="imgbox__inner imgbox__inner-16-9 ">
                                            <div class="image " style="background-image: url( 'images/img31.jpg'); "></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-7 col-md-12 ">
                                    <a href="# " class="thumbnail__info ">
                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>
                                        <!-- <p class="thumbnail__preview ">際最深自的領，這院領傷化現覺圖明中易，巴就在是？關劇著象形</p> -->
                                    </a>
                                    <!-- <div class="thumbnail__bottom thumbnail_bottom_s ">
                                        <div class="thumbnail__bottom-sort ">
                                            <a href="# ">潮物</a>
                                            <a href="# ">Bogi</a>
                                        </div>
                                        <div class="thumbnail__bottom-time thumbnail_bottom_s ">
                                            14hours ago
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="thumbnail ">
                            <div class="row ">
                                <div class="col-5 col-md-12 ">
                                    <a href="# " class="imgbox ">
                                        <div class="imgbox__inner imgbox__inner-16-9 ">
                                            <div class="image " style="background-image: url( 'images/img32.jpg'); "></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-7 col-md-12 ">
                                    <a href="# " class="thumbnail__info ">
                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>
                                        <!-- <p class="thumbnail__preview ">際最深自的領，這院領傷化現覺圖明中易，巴就在是？關劇著象形</p> -->
                                    </a>
                                    <!-- <div class="thumbnail__bottom thumbnail_bottom_s ">
                                        <div class="thumbnail__bottom-sort ">
                                            <a href="# ">潮物</a>
                                            <a href="# ">Bogi</a>
                                        </div>
                                        <div class="thumbnail__bottom-time thumbnail_bottom_s ">
                                            14hours ago
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="btn-group--center ">
                    <div class="btn btn--primary btn--md ">想看更多美食特拍？</div>
                </div>

            </div>
        </div>
        <!-- End food_photo -->

        <!-- Start unboxing -->
        <div class="unboxing imageMask ">
            <div class="container ">
                <div class="subtitle u-text-center ">
                    特火開箱
                </div>
                <div class="row ">
                    <div class="col-md-3 ">
                        <div class="thumbnail ">
                            <a href="# " class="imgbox ">
                                <div class="imgbox__inner imgbox__inner-16-9 ">
                                    <div class="image " style="background-image: url( 'images/img1.jpg'); "></div>
                                </div>
                            </a>
                            <a href="# " class="thumbnail__info ">
                                <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>
                                <!-- <p class="thumbnail__preview ">際最深自的領，這院領傷化現覺圖明中易，巴就在是？關劇著象形</p> -->
                            </a>
                            <!-- <div class="thumbnail__bottom ">
                                <div class="thumbnail__bottom-sort ">
                                    <a href="# ">潮物</a>
                                    <a href="# ">Bogi</a>
                                </div>
                                <div class="thumbnail__bottom-time ">
                                    14hours ago
                                </div>
                            </div> -->

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="thumbnail ">
                            <div class="row ">
                                <div class="col-5 col-md-12 ">
                                    <a href="# " class="imgbox ">
                                        <div class="imgbox__inner imgbox__inner-16-9 ">
                                            <div class="image " style="background-image: url( 'images/img2.jpg'); "></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-7 col-md-12 ">
                                    <a href="# " class="thumbnail__info ">
                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>
                                        <!-- <p class="thumbnail__preview ">際最深自的領，這院領傷化現覺圖明中易，巴就在是？關劇著象形</p> -->
                                    </a>
                                    <!-- <div class="thumbnail__bottom thumbnail_bottom_s ">
                                        <div class="thumbnail__bottom-sort ">
                                            <a href="# ">潮物</a>
                                            <a href="# ">Bogi</a>
                                        </div>
                                        <div class="thumbnail__bottom-time ">
                                            14hours ago
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="thumbnail ">
                            <div class="row ">
                                <div class="col-5 col-md-12 ">
                                    <a href="# " class="imgbox ">
                                        <div class="imgbox__inner imgbox__inner-16-9 ">
                                            <div class="image " style="background-image: url( 'images/img3.jpg'); "></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-7 col-md-12 ">
                                    <a href="# " class="thumbnail__info ">
                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>
                                        <!-- <p class="thumbnail__preview ">際最深自的領，這院領傷化現覺圖明中易，巴就在是？關劇著象形</p> -->
                                    </a>
                                    <!-- <div class="thumbnail__bottom thumbnail_bottom_s ">
                                        <div class="thumbnail__bottom-sort ">
                                            <a href="# ">潮物</a>
                                            <a href="# ">Bogi</a>
                                        </div>
                                        <div class="thumbnail__bottom-time ">
                                            14hours ago
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="thumbnail ">
                            <div class="row ">
                                <div class="col-5 col-md-12 ">
                                    <a href="# " class="imgbox ">
                                        <div class="imgbox__inner imgbox__inner-16-9 ">
                                            <div class="image " style="background-image: url( 'images/img4.jpg'); "></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-7 col-md-12 ">
                                    <a href="# " class="thumbnail__info ">
                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>
                                        <!-- <p class="thumbnail__preview ">際最深自的領，這院領傷化現覺圖明中易，巴就在是？關劇著象形</p> -->
                                    </a>
                                    <!-- <div class="thumbnail__bottom thumbnail_bottom_s ">
                                        <div class="thumbnail__bottom-sort ">
                                            <a href="# ">潮物</a>
                                            <a href="# ">Bogi</a>
                                        </div>
                                        <div class="thumbnail__bottom-time ">
                                            14hours ago
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-3 ">
                        <div class="thumbnail ">
                            <div class="row ">
                                <div class="col-5 col-md-12 ">
                                    <a href="# " class="imgbox ">
                                        <div class="imgbox__inner imgbox__inner-16-9 ">
                                            <div class="image " style="background-image: url( 'images/img5.jpg'); "></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-7 col-md-12 ">
                                    <a href="# " class="thumbnail__info ">
                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>
                                        <!-- <p class="thumbnail__preview ">際最深自的領，這院領傷化現覺圖明中易，巴就在是？關劇著象形</p> -->
                                    </a>
                                    <!-- <div class="thumbnail__bottom thumbnail_bottom_s ">
                                        <div class="thumbnail__bottom-sort ">
                                            <a href="# ">潮物</a>
                                            <a href="# ">Bogi</a>
                                        </div>
                                        <div class="thumbnail__bottom-time ">
                                            14hours ago
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="thumbnail ">
                            <div class="row ">
                                <div class="col-5 col-md-12 ">
                                    <a href="# " class="imgbox ">
                                        <div class="imgbox__inner imgbox__inner-16-9 ">
                                            <div class="image " style="background-image: url( 'images/img6.jpg'); "></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-7 col-md-12 ">
                                    <a href="# " class="thumbnail__info ">
                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>
                                <!-- <p class="thumbnail__preview ">際最深自的領，這院領傷化現覺圖明中易，巴就在是？關劇著象形</p> -->
                                    </a>
                                    <!-- <div class="thumbnail__bottom thumbnail_bottom_s ">
                                        <div class="thumbnail__bottom-sort ">
                                            <a href="# ">潮物</a>
                                            <a href="# ">Bogi</a>
                                        </div>
                                        <div class="thumbnail__bottom-time ">
                                            14hours ago
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="thumbnail ">
                            <div class="row ">
                                <div class="col-5 col-md-12 ">
                                    <a href="# " class="imgbox ">
                                        <div class="imgbox__inner imgbox__inner-16-9 ">
                                            <div class="image " style="background-image: url( 'images/img7.jpg'); "></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-7 col-md-12 ">
                                    <a href="# " class="thumbnail__info ">
                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>
                                <!-- <p class="thumbnail__preview ">際最深自的領，這院領傷化現覺圖明中易，巴就在是？關劇著象形</p> -->
                                    </a>
                                    <!-- <div class="thumbnail__bottom thumbnail_bottom_s ">
                                        <div class="thumbnail__bottom-sort ">
                                            <a href="# ">潮物</a>
                                            <a href="# ">Bogi</a>
                                        </div>
                                        <div class="thumbnail__bottom-time ">
                                            14hours ago
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="thumbnail ">
                            <div class="row ">
                                <div class="col-5 col-md-12 ">
                                    <a href="# " class="imgbox ">
                                        <div class="imgbox__inner imgbox__inner-16-9 ">
                                            <div class="image " style="background-image: url( 'images/img8.jpg'); "></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-7 col-md-12 ">
                                    <a href="# " class="thumbnail__info ">
                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>
                                <!-- <p class="thumbnail__preview ">際最深自的領，這院領傷化現覺圖明中易，巴就在是？關劇著象形</p> -->
                                    </a>
                                    <!-- <div class="thumbnail__bottom thumbnail_bottom_s ">
                                        <div class="thumbnail__bottom-sort ">
                                            <a href="# ">潮物</a>
                                            <a href="# ">Bogi</a>
                                        </div>
                                        <div class="thumbnail__bottom-time ">
                                            14hours ago
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="btn-group--center ">
                    <div class="btn btn--primary btn--md ">想看更多特火開箱？</div>
                </div>

            </div>
        </div>
        <!-- End unboxing -->

        <!-- Start shopping_Mall -->
        <div class="shopping_Mall imageMask ">
            <div class="container ">
                <div class="subtitle u-text-center ">
                    購物商城
                </div>
                <div class="row ">
                    <div class="col-md-3 ">
                        <div class="thumbnail ">
                            <a href="# " class="imgbox ">
                                <div class="imgbox__inner imgbox__inner-16-9 ">
                                    <div class="image " style="background-image: url( 'images/img9.jpg'); "></div>
                                </div>
                            </a>
                            <a href="# " class="thumbnail__info ">
                                <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>
                                <!-- <p class="thumbnail__preview ">際最深自的領，這院領傷化現覺圖明中易，巴就在是？關劇著象形</p> -->
                            </a>
                            <!-- <div class="thumbnail__bottom ">
                                <div class="thumbnail__bottom-sort ">
                                    <a href="# ">潮物</a>
                                    <a href="# ">Bogi</a>
                                </div>
                                <div class="thumbnail__bottom-time ">
                                    14hours ago
                                </div>
                            </div> -->

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="thumbnail ">
                            <div class="row ">
                                <div class="col-5 col-md-12 ">
                                    <a href="# " class="imgbox ">
                                        <div class="imgbox__inner imgbox__inner-16-9 ">
                                            <div class="image " style="background-image: url( 'images/img10.jpg'); "></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-7 col-md-12 ">
                                    <a href="# " class="thumbnail__info ">
                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>
                                <!-- <p class="thumbnail__preview ">際最深自的領，這院領傷化現覺圖明中易，巴就在是？關劇著象形</p> -->
                                    </a>
                                    <!-- <div class="thumbnail__bottom thumbnail_bottom_s ">
                                        <div class="thumbnail__bottom-sort ">
                                            <a href="# ">潮物</a>
                                            <a href="# ">Bogi</a>
                                        </div>
                                        <div class="thumbnail__bottom-time ">
                                            14hours ago
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="thumbnail ">
                            <div class="row ">
                                <div class="col-5 col-md-12 ">
                                    <a href="# " class="imgbox ">
                                        <div class="imgbox__inner imgbox__inner-16-9 ">
                                            <div class="image " style="background-image: url( 'images/img11.jpg'); "></div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-7 col-md-12 ">
                                    <a href="# " class="thumbnail__info ">
                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>
                                <!-- <p class="thumbnail__preview ">際最深自的領，這院領傷化現覺圖明中易，巴就在是？關劇著象形</p> -->
                                    </a>
                                    <!-- <div class="thumbnail__bottom thumbnail_bottom_s ">
                                        <div class="thumbnail__bottom-sort ">
                                            <a href="# ">潮物</a>
                                            <a href="# ">Bogi</a>
                                        </div>
                                        <div class="thumbnail__bottom-time ">
                                            14hours ago
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="thumbnail ">
                            <div class="row ">
                                <div class="col-5 col-md-12 ">
                                    <a href="# " class="imgbox ">
                                        <div class="imgbox__inner imgbox__inner-16-9 ">
                                            <div class="image " style="background-image: url( 'images/img12.jpg'); "></div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-7 col-md-12 ">
                                    <a href="# " class="thumbnail__info ">
                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>
                                <!-- <p class="thumbnail__preview ">際最深自的領，這院領傷化現覺圖明中易，巴就在是？關劇著象形</p> -->
                                    </a>
                                    <!-- <div class="thumbnail__bottom thumbnail_bottom_s ">
                                        <div class="thumbnail__bottom-sort ">
                                            <a href="# ">潮物</a>
                                            <a href="# ">Bogi</a>
                                        </div>
                                        <div class="thumbnail__bottom-time ">
                                            14hours ago
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-3 ">
                        <div class="thumbnail ">
                            <div class="row ">
                                <div class="col-5 col-md-12 ">
                                    <a href="# " class="imgbox ">
                                        <div class="imgbox__inner imgbox__inner-16-9 ">
                                            <div class="image " style="background-image: url( 'images/img13.jpg'); "></div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-7 col-md-12 ">
                                    <a href="# " class="thumbnail__info ">
                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>
                                <!-- <p class="thumbnail__preview ">際最深自的領，這院領傷化現覺圖明中易，巴就在是？關劇著象形</p> -->
                                    </a>
                                    <!-- <div class="thumbnail__bottom thumbnail_bottom_s ">
                                        <div class="thumbnail__bottom-sort ">
                                            <a href="# ">潮物</a>
                                            <a href="# ">Bogi</a>
                                        </div>
                                        <div class="thumbnail__bottom-time ">
                                            14hours ago
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="thumbnail ">
                            <div class="row ">
                                <div class="col-5 col-md-12 ">
                                    <a href="# " class="imgbox ">
                                        <div class="imgbox__inner imgbox__inner-16-9 ">
                                            <div class="image " style="background-image: url( 'images/img14.jpg'); "></div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-7 col-md-12 ">
                                    <a href="# " class="thumbnail__info ">
                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>
                                <!-- <p class="thumbnail__preview ">際最深自的領，這院領傷化現覺圖明中易，巴就在是？關劇著象形</p> -->
                                    </a>
                                    <!-- <div class="thumbnail__bottom thumbnail_bottom_s ">
                                        <div class="thumbnail__bottom-sort ">
                                            <a href="# ">潮物</a>
                                            <a href="# ">Bogi</a>
                                        </div>
                                        <div class="thumbnail__bottom-time ">
                                            14hours ago
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="thumbnail ">
                            <div class="row ">
                                <div class="col-5 col-md-12 ">
                                    <a href="# " class="imgbox ">
                                        <div class="imgbox__inner imgbox__inner-16-9 ">
                                            <div class="image " style="background-image: url( 'images/img15.jpg'); "></div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-7 col-md-12 ">
                                    <a href="# " class="thumbnail__info ">
                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>
                                <!-- <p class="thumbnail__preview ">際最深自的領，這院領傷化現覺圖明中易，巴就在是？關劇著象形</p> -->
                                    </a>
                                    <!-- <div class="thumbnail__bottom thumbnail_bottom_s ">
                                        <div class="thumbnail__bottom-sort ">
                                            <a href="# ">潮物</a>
                                            <a href="# ">Bogi</a>
                                        </div>
                                        <div class="thumbnail__bottom-time ">
                                            14hours ago
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="thumbnail ">
                            <div class="row ">
                                <div class="col-5 col-md-12 ">
                                    <a href="# " class="imgbox ">
                                        <div class="imgbox__inner imgbox__inner-16-9 ">
                                            <div class="image " style="background-image: url( 'images/img16.jpg'); "></div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-7 col-md-12 ">
                                    <a href="# " class="thumbnail__info ">
                                        <h6 class="thumbnail__title">文字標題文字標題文字標題文字文字標題文字標題文字標題文字</h6>
                                <!-- <p class="thumbnail__preview ">際最深自的領，這院領傷化現覺圖明中易，巴就在是？關劇著象形</p> -->
                                    </a>
                                    <!-- <div class="thumbnail__bottom thumbnail_bottom_s ">
                                        <div class="thumbnail__bottom-sort ">
                                            <a href="# ">潮物</a>
                                            <a href="# ">Bogi</a>
                                        </div>
                                        <div class="thumbnail__bottom-time ">
                                            14hours ago
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="btn-group--center ">
                    <div class="btn btn--primary btn--md ">想看更多購物商城？</div>
                </div>

            </div>
        </div>
        <!-- End shopping_Mall -->
    </main>
    <!-- End main -->

@endsection

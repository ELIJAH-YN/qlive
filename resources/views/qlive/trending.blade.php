@extends('layouts.qliveLayout.qlive_design')
@section('content')

<!-- Start main -->
<main class="main ">
    <div class="sharePage page＿padding_top ">
        <div class="container">
            <div class="album">
                <div class="sharePage_style album-art-md-s-8">
                    <img class="img" src="https://i.imgur.com/vdqFNTi.png" alt="">
{{--                    <div class=" page_image">--}}
{{--                        <div class="imgboxFix ">--}}
{{--                            <div class="imgboxFix__inner imgbox__inner-55">--}}
{{--                                <div class="imgFix">--}}
{{--                                    <img  src="https://i.imgur.com/vdqFNTi.png" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <a href="{{ url('/qlive/innerpage-page') }}" class="thumbnail__info ">
                        <h6 class="thumbnail__title ">一字馬性感運動女神，錯過會難過的畫面</h6>
                    </a>
                </div>
                <div class="album-art-md-s-4 u-md-hidden ">
                    <div class="sharePage_style">
                        <img class="img" src="https://i.imgur.com/CDlQzsp.png" alt="">
{{--                        <div class=" page_image ">--}}
{{--                            <div class="imgboxFix ">--}}
{{--                                <div class="imgboxFix__inner imgbox__inner-55 ">--}}
{{--                                    <div class="imgFix">--}}
{{--                                        <img src="https://i.imgur.com/CDlQzsp.png" alt="">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <a href="{{ url('/qlive/innerpage-page') }}" class="thumbnail__info ">
                            <h6 class="thumbnail__title ">文字標題文字標題文字標題文字標題文字標題文字標題文字標題文字標題文</h6>
                        </a>

                    </div>

                    <div class="sharePage_style sharePage_style_mb">
                        <img class="img" src="https://i.imgur.com/CDlQzsp.png" alt="">
{{--                        <div class=" page_image ">--}}
{{--                            <div class="imgboxFix">--}}
{{--                                <div class="imgboxFix__inner imgbox__inner-55">--}}
{{--                                    <div class="imgFix">--}}
{{--                                        <img src="https://i.imgur.com/CDlQzsp.png" alt="">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <a href="{{ url('/qlive/innerpage-page') }}" class="thumbnail__info ">
                            <h6 class="thumbnail__title ">文字標題文字標題文字標題文字標題文字標題文字標題文字標題文字標題文字標題文字標題文字標題文字標題文字標題文字標題文字標題文字標題文</h6>
                        </a>

                    </div>
                </div>
            </div>

            <div class="page_hr_top imageMask ">
                <div class="subtitle  u-mt-24">
                    最強網美
                </div>
                <div class="row ">
                    <div class="col-lg-9 ">
                        @foreach($trendingPage as $row)
                        <div class="thumbnail">
                            <div class="row ">
                                <div class="col-5 ">
                                    <a href=""{{ url('/qlive/innerpage-page') }}" class="imgbox ">
                                        <div class="imgbox__inner imgbox__inner-16-9">
                                            <div class="image " style="background-image: url( 'https://i.imgur.com/vdqFNTi.png'); "></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-7 ">
                                    <a href=""{{ url('/qlive/innerpage-page') }}" class="thumbnail__info ">
                                        <h6 class="thumbnail__title">一字馬性感運動女神，錯過會難過的畫面</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="row ">
                            <div class="col-12 ">
                                <img src="images/GDN廣告/gdn手機.png" alt="" class="gdn2 u-mb-16" width="100%">
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="gdn u-mb-24">
                            <img src="images/GDN廣告/gdn.png" alt="" class="gdn1">
                            <img src="images/GDN廣告/gdn手機.png" alt="" class="gdn2">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- End main -->

@endsection

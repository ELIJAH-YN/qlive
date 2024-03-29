@extends('layouts.qliveLayout.qlive_design')
@section('content')

<!-- Strat main -->
<section class="main ">
    <div class="modelcardPage page＿padding_top pageContainer">
        <div class="container">
            <h2 class="subtitle u-text-center bounceInUp">Qlive雜誌_合作夥伴</h2>

            <div class="row ">

                <div class="col-sm-4  wow fadeInLeftBig u-mb-24" data-wow-delay="0.8s">
                    <img class="img" src="images/model/p4.jpg" alt="">
{{--                    <div class="modelcard_imge">--}}
{{--                        <div class="imgbox u-BorderRradius-8">--}}
{{--                            <div class="imgbox__inner imgbox__inner-3-4 ">--}}
{{--                                <div class="image " style="background-image: url(images/model/p4.jpg);"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <div class="col-sm-4  wow zoomIn  u-mb-24" data-wow-delay="0.8s">
                    <img class="img" src="images/model/70559172_923376558018850_5245098032780804096_o.jpg" alt="">
{{--                    <div class="modelcard_imge">--}}
{{--                        <div class="imgbox u-BorderRradius-8">--}}
{{--                            <div class="imgbox__inner imgbox__inner-3-4 ">--}}
{{--                                <div class="image " style="background-image: url(images/model/70559172_923376558018850_5245098032780804096_o.jpg);"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <div class="col-sm-4  wow fadeInRightBig u-mb-24" data-wow-delay="0.8s">
                    <img class="img" src="images/model/p3.jpg" alt="">
{{--                    <div class="modelcard_imge">--}}
{{--                        <div class="imgbox u-BorderRradius-8">--}}
{{--                            <div class="imgbox__inner imgbox__inner-3-4 ">--}}
{{--                                <div class="image " style="background-image: url(images/model/p3.jpg);"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>

            </div>
            <div class="row">
                <div class="col-sm-6  wow fadeInUpBig u-mb-24" data-wow-delay="0.8s">
                    <img class="img" src="assets/qlive/images/model/p2.jpg" alt="">
{{--                    <div class="modelcard_imge">--}}
{{--                        <div class="imgbox u-BorderRradius-8">--}}
{{--                            <div class="imgbox__inner imgbox__inner-4-3 ">--}}
{{--                                <div class="image " style="background-image: url(images/model/p2.jpg);"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <div class="col-sm-6  wow fadeInUpBig u-mb-24" data-wow-delay="0.8s">
                    <img class="img" src="images/model/p1.jpg" alt="">
{{--                    <div class="modelcard_imge">--}}
{{--                        <div class="imgbox u-BorderRradius-8">--}}
{{--                            <div class="imgbox__inner imgbox__inner-4-3 ">--}}
{{--                                <div class="image " style="background-image: url(images/model/p1.jpg);"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>

            </div>
            <div class="modelcard_information">
                <ul class="modelcard_information_List">
                    <li class=" wow bounceIn" data-wow-delay="0.3s">編號：{{ $profile->id }}</li>
                    <li class=" wow bounceIn" data-wow-delay="0.6s">身高：{{ $profile->height }}</li>
                    <li class=" wow bounceIn" data-wow-delay="0.9s">體重：{{ $profile->weight }}</li>
                    <li class=" wow bounceIn" data-wow-delay="1.2s">三圍：{{ $profile->measurements }}</li>
                    <li class=" wow bounceIn" data-wow-delay="1.5s">鞋號：{{ $profile->shoes_size }}</li>
                    <li class=" wow bounceIn" data-wow-delay="1.8s">臉書粉絲人數：{{ $profile->facebook_people }}</li>
                    <li class=" wow bounceIn" data-wow-delay="2.1s">IG粉絲人數：{{ $profile->ig_people }}</li>

                </ul>
            </div>

        </div>
    </div>

</section>
<!-- End main -->


@endsection

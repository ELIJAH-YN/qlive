@extends('layouts.qliveLayout.qlive_design')
@section('content')
    <!-- Strat main -->
    <section class="main">
        <div class="searchPage pageContainer formtStyle page＿padding_top">
            <div class="container">
                <h2 class="subtitle u-text-center wow bounceInUp">Qlive雜誌_合作夥伴</h2>
                <div class="form u-clearfix">
                    <div class="partner_login u-box-shadow" >
                        <a href="{{ url('/qlive/onlineform-page') }}">
                            合作夥伴線上報名
                        </a>
                    </div>
                    <div class="searchBox">
                        <div class="form">
                            <input type="text" name="search">
                            <label for="">
                                <i class="icon icon-search"></i>
                            </label>
                        </div>
                    </div>
                </div>
                <div  class="modeCard_hr u-pb-32 "></div>
                    <div class="row">
                        @foreach($show as $row)
                        <div class="col-lg-2 col-6  u-mb-24" data-wow-delay="0.8s">
                            <div class="searchBoxImg">
                                <a href="{{ url('/qlive/model-profile/'.$row->slug) }}" class="search_imge" >
                                    @foreach($row->modelImage as $img)
                                        <div class="imgbox">
                                            <div class="imgbox__inner imgbox__inner-3-4 ">
                                                <div class="image">
                                                    <img src="{{ asset('/assets/images/modelmg/large/'.$img->images) }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <p>{{ $row->real_name }}</p>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                <ul class="pager u-clearfix">
                    <li class="previous"><a href="news.html">← Newer</a></li>

                    <li class="next"><a href="newspage.html">Older →</a></li>
                    <li class="page-amount">
                        <a href="#" class="click">1</a>
                    </li>
                    <li class="page-amount">
                        <a href="#">2</a>
                    </li>
                </ul>
            </div>

        </div>

    </section>
    <!-- End main -->

@endsection

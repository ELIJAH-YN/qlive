@extends('layouts.qliveLayout.qlive_design')
@section('content')

 <!-- Strat main -->
<section class="main">
    <div class="checkPage page＿padding_top  pageContainer">
        <div class="container">
            <h2 class="subtitle u-text-center wow bounceInUp">Qlive雜誌_合作夥伴</h2>
        
            <div class="row">
                <div class="col-sm-6  wow bounceInLeft u-mb-24" data-wow-delay="0.8s">
                    <div class="checkPage_imge">
                        <div class="imgbox u-BorderRradius-8">
                            <div class="imgbox__inner imgbox__inner-3-4 ">
                                <div class="image" style="background-image: url(images/model/70559172_923376558018850_5245098032780804096_o.jpg)" ></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 wow bounceInRight " data-wow-delay="0.8s">
                    <div class="checkPage_information">
                        <ul class="checkPage_information_List">
                            <li>夥伴名稱 本名</li>
                            <li>藝名/暱稱/LINE暱稱</li>
                            <li>推薦介紹人</li>
                            <li>出生/年/年齡</li>
                            <li>連絡電話/手機</li>
                            <li>line/ID(非暱稱，必填正確，方便專案聯繫)</li>
                            <li>身高/體重/三圍/鞋號</li>
                            <li>目前有無經紀合約/合作是否要與經紀公司接洽</li>
                            <li>臉書/粉專(網址連結)</li>
                            <li>追蹤人數</li>
                            <li>IG(網址連結)</li>
                            <li>IG追蹤人數</li>
                            <li>居住地區</li>
                            <li>目前直播平台</li>
                            <li>曾經直播平台</li>

                            <li>目前職業</li>
                            <li>有興趣經營收益的項目</li>
                            <li>簡介說明自己/目前工作/專業/才藝/項目/經歷</li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="btn-group btn-group--center form__btn-group">
				<!-- <input type="submit" class="btn btn--primary btn--md" value="Send"> -->
				<a href="{{ url('/qlive/onlineform-page') }}" class="btn btn--primary btn--md">返回修改</a>
				<a href="{{ url('/qlive/modelcard-page') }}" class="btn btn--primary btn--md">確認送出</a>
            </div>

        </div>
    </div>

</section>
<!-- End main -->

@endsection
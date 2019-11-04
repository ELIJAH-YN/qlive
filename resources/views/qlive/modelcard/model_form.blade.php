@extends('layouts.qliveLayout.qlive_design')
@section('content');

<!-- Strat main -->
<section class="main">
    <!-- Start onlineFormt -->
    <div class="onlineFormt page＿padding_top formtStyle">
        <div class="container">
            <h2 class="subtitle u-text-center wow bounceInUp">Qlive雜誌_合作夥伴線上表單</h2>
            <form action="{{ url('/qlive/add-model') }}" method="post" class="form wow fadeInUp" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-6">
                        <label>夥伴名稱 本名</label>
                        <input type="text" name="real_name" id="real_name">
                    </div>
                    <div class="col-sm-6">
                        <label>藝名/暱稱/LINE暱稱</label>
                        <input type="text" name="nick_name" id="nick_name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label>推薦介紹人</label>
                        <input type="text" name="referrer" id="referrer">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label>出生/年/年齡</label>
                        <input type="date" name="birth" id="birth">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label>連絡電話/手機</label>
                        <input type="text" name="contact_phone" id="contact_phone">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label>line/ID(非暱稱，必填正確，方便專案聯繫)</label>
                        <input type="text" name="line_id" id="line_id">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label>身高</label>
                        <input type="text" name="height" id="height">
                    </div>
                    <div class="col-sm-6">
                        <label>體重</label>
                        <input type="text" name="weight" id="weight">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <label>三圍</label>
                        <input type="text" name="measurements" id="measurements">
                    </div>
                    <div class="col-sm-6">
                        <label>鞋號</label>
                        <input type="text" name="shoes_size" id="shoes_size">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label>目前有無經紀合約/合作是否要與經紀公司接洽</label>
                        <input type="text" name="contract" id="contract">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label>臉書/粉專(網址連結)</label>
                        <input type="text" name="facebook_url" id="facebook_url">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label>追蹤人數</label>
                        <div class="row input-no-mb">
                            <div class="col-sm-3 col-6">
                                <label>
                                    <input type="radio" name="facebook_people" style="width: 30px; " value="10,000">10000人以上
                                </label>
                            </div>
                            <div class="col-sm-3 col-6">
                                <label>
                                    <input type="radio" name="facebook_people" style="width: 30px; " value="20,000">20000人以上
                                </label>
                            </div>
                            <div class="col-sm-3 col-6">
                                <label>
                                    <input type="radio" name="facebook_people" style="width: 30px; " value="30,000">30000人以上
                                </label>
                            </div>
                            <div class="col-sm-3 col-6">
                                <label>
                                    <input type="radio" name="facebook_people" style="width: 30px; " value="50,000">50000人以上
                                </label>
                            </div>
                            <div class="col-sm-3 col-6">
                                <label>
                                    <input type="radio" name="facebook_people" style="width: 30px; " value="80,000">80000人以上
                                </label>
                            </div>
                            <div class="col-sm-3 col-6">
                                <label>
                                    <input type="radio" name="facebook_people" style="width: 30px; " value="100,000">10萬人以上
                                </label>
                            </div>
                            <div class="col-sm-3 col-6">
                                <label>
                                    <input type="radio" name="facebook_people" style="width: 30px; " value="200,000">20萬人以上
                                </label>
                            </div>
                            <div class="col-sm-3 col-6">
                                <label>
                                    <input type="radio" name="facebook_people" style="width: 30px; " value="300,000">30萬人以上
                                </label>
                            </div>
                            <div class="col-sm-3 col-6">
                                <label>
                                    <input type="radio" name="facebook_people" style="width: 30px; " value="400,000">40萬人以上
                                </label>
                            </div>
                            <div class="col-sm-3 col-6">
                                <label>
                                    <input type="radio" name="facebook_people" style="width: 30px; " value="500,000">50萬人以上
                                </label>
                            </div>
                            <div class="col-sm-3 col-6">
                                <label>
                                    <input type="radio" name="facebook_people" style="width: 30px; " value="600,000">60萬人以上
                                </label>
                            </div>
                            <div class="col-sm-3 col-6">
                                <label>
                                    <input type="radio" name="facebook_people" style="width: 30px; " value="700,000">70萬人以上
                                </label>
                            </div>
                            <div class="col-sm-3 col-6">
                                <label>
                                    <input type="radio" name="facebook_people" style="width: 30px; " value="1,000,000">100萬人以上
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label>IG(網址連結)</label>
                        <input type="text" name="ig_url" id="ig_url">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label>IG追蹤人數</label>
                        <div class="row input-no-mb">
                            <div class="col-sm-3 col-6">
                                <label>
                                    <input type="radio" name="ig_people" style="width: 30px; " value="10,000">10000人以上
                                </label>
                            </div>
                            <div class="col-sm-3 col-6">
                                <label>
                                    <input type="radio" name="ig_people" style="width: 30px; " value="20,000">20000人以上
                                </label>
                            </div>
                            <div class="col-sm-3 col-6">
                                <label>
                                    <input type="radio" name="ig_people" style="width: 30px; " value="30,000">30000人以上
                                </label>
                            </div>
                            <div class="col-sm-3 col-6">

                                <label>
                                    <input type="radio" name="ig_people" style="width: 30px; " value="50,000">50000人以上
                                </label>
                            </div>
                            <div class="col-sm-3 col-6">
                                <label>
                                    <input type="radio" name="ig_people" style="width: 30px; " value="80,000">80000人以上
                                </label>
                            </div>
                            <div class="col-sm-3 col-6">
                                <label>
                                    <input type="radio" name="ig_people" style="width: 30px; " value="100,000">10萬人以上
                                </label>
                            </div>
                            <div class="col-sm-3 col-6">
                                <label>
                                    <input type="radio" name="ig_people" style="width: 30px; " value="200,000">20萬人以上
                                </label>
                            </div>
                            <div class="col-sm-3 col-6">
                                <label>
                                    <input type="radio" name="ig_people" style="width: 30px; " value="300,000">30萬人以上
                                </label>
                            </div>
                            <div class="col-sm-3 col-6">
                                <label>
                                    <input type="radio" name="ig_people" style="width: 30px; " value="400,000">40萬人以上
                                </label>
                            </div>
                            <div class="col-sm-3 col-6">
                                <label>
                                    <input type="radio" name="ig_people" style="width: 30px; " value="500,000">50萬人以上
                                </label>
                            </div>
                            <div class="col-sm-3 col-6">
                                <label>
                                    <input type="radio" name="ig_people" style="width: 30px; " value="600,000">60萬人以上
                                </label>
                            </div>
                            <div class="col-sm-3 col-6">
                                <label>
                                    <input type="radio" name="ig_people" style="width: 30px; " value="700,000">70萬人以上
                                </label>
                            </div>
                            <div class="col-sm-3 col-6">
                                <label>
                                    <input type="radio" name="ig_people" style="width: 30px; " value="1,000,000">100萬人以上
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label>居住地區</label>
                        <input type="text" name="address" id="address">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label>上傳個人正面臉部清晰照5張含一張全身 近照</label>
                        <input type="file" name="image[]" id="image" style="padding: 8px 0px;border: none; ">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label>目前直播平台</label>
                        <input type="text" name="stream_platform_now">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label>曾經直播平台</label>
                        <input type="text" name="stream_platform_past">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label>目前職業</label>
                        <input type="text" name="job">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label>有興趣經營收益的項目</label>
                        <div class="row  input-no-mb">
                            <div class="col-sm-4 col-6">
                                <label>
                                    <input type="checkbox" name="interested_job[]" style="width: 30px; " value="醫美">醫美
                                </label>
                            </div>
                            <div class="col-sm-4 col-6">
                                <label>
                                    <input type="checkbox" name="interested_job[]" style="width: 30px; " value="模特兒">模特兒
                                </label>
                            </div>
                            <div class="col-sm-4 col-6">
                                <label>
                                    <input type="checkbox" name="interested_job[]" style="width: 30px; " value="業配">業配
                                </label>
                            </div>
                            <div class="col-sm-4 col-6">
                                <label>
                                    <input type="checkbox" name="interested_job[]" style="width: 30px; " value="演奏">演奏
                                </label>
                            </div>
                            <div class="col-sm-4 col-6">
                                <label>
                                    <input type="checkbox" name="interested_job[]" style="width: 30px; " value="唱歌">唱歌
                                </label>
                            </div>
                            <div class="col-sm-4 col-6">
                                <label>
                                    <input type="checkbox" name="interested_job[]" style="width: 30px; " value="戲劇">戲劇
                                </label>
                            </div>
                            <div class="col-sm-4 col-6">
                                <label>
                                    <input type="checkbox" name="interested_job[]" style="width: 30px; " value="舞蹈">舞蹈
                                </label>
                            </div>
                            <div class="col-sm-4 col-6">
                                <label>
                                    <input type="checkbox" name="interested_job[]" style="width: 30px; " value="主持">主持
                                </label>
                            </div>
                            <div class="col-sm-4 col-6">
                                <label>
                                    <input type="checkbox" name="interested_job[]" style="width: 30px; " value="電商銷售">電商銷售
                                </label>
                            </div>
                            <div class="col-sm-4 col-6">
                                <label>
                                    <input type="checkbox" name="interested_job[]" style="width: 30px; " value="博弈">博弈
                                </label>
                            </div>
                            <div class="col-sm-4 col-6">
                                <label>
                                    <input type="checkbox" name="interested_job[]" style="width: 30px; " value="繪畫">繪畫
                                </label>
                            </div>
                            <div class="col-sm-4 col-6">
                                <label>
                                    <input type="checkbox" name="interested_job[]" style="width: 30px; " value="電腦遊戲">電腦遊戲
                                </label>
                            </div>
                            <div class="col-sm-4 col-6">
                                <label>
                                    <input type="checkbox" name="interested_job[]" style="width: 30px; " value="手機遊戲">手機遊戲
                                </label>
                            </div>
                            <div class="col-sm-4 col-6">
                                <label>
                                    <input type="checkbox" name="interested_job[]" style="width: 30px; " value="聊天">聊天
                                </label>
                            </div>
                            <div class="col-sm-4 col-6">
                                <label>
                                    <input type="checkbox" name="interested_job[]" style="width: 30px; " value="直播">直播
                                </label>
                            </div>
                            <div class="col-sm-4 col-6">
                                <label>
                                    <input type="checkbox" name="interested_job[]" style="width: 30px; " value="攝影">攝影
                                </label>
                            </div>
                            <div class="col-sm-4 col-6">
                                <label>
                                    <input type="checkbox" name="interested_job[]" style="width: 30px; " value="教育">教育
                                </label>
                            </div>
                            <div class="col-sm-4 col-6">
                                <label">
                                    <input type="checkbox" name="interested_job[]" style="width: 30px; " value="影片製作">影片製作
                                </label>
                            </div>
                            <div class="col-sm-4 col-6">
                                <label">
                                    <input type="checkbox" name="interested_job[]" style="width: 30px; " value="Youtuber">Youtuber
                                </label>
                            </div>
                            <div class="col-sm-4 col-6">
                                <label>
                                    <input type="checkbox" name="interested_job[]" style="width: 30px; " value="音樂製作">音樂製作
                                </label>
                            </div>
                            <div class="col-sm-4 col-6">
                                <label>
                                    <input type="checkbox" name="interested_job[]" style="width: 30px; " value="3C">3C
                                </label>
                            </div>
                            <div class="col-sm-4 col-6">
                                <label>
                                    <input type="checkbox" name="interested_job[]" style="width: 30px; " value="業務推廣">業務推廣
                                </label>
                            </div>
                            <div class="col-sm-4 col-6">
                                <label>
                                    <input type="checkbox" name="interested_job[]" style="width: 30px; " value="表演">表演
                                </label>
                            </div>
                            <div class="col-sm-4 col-6">
                                <label>
                                    <input type="checkbox" name="interested_job[]" style="width: 30px; " value="經紀人/演藝事業">經紀人/演藝事業
                                </label>
                            </div>
                            <div class="col-sm-4 col-6">
                                <label>
                                    <input type="checkbox" name="interested_job[]" style="width: 30px; " value="整合行銷">整合行銷
                                </label>
                            </div>
                            <div class="col-sm-4 col-6">
                                <label>
                                    <input type="checkbox" name="interested_job[]" style="width: 30px; " value="設計美術">設計美術
                                </label>
                            </div>
                            <div class="col-sm-12 col-xs-12">
                                <label>
                                    <input type="checkbox" name="interested_job[]" style="width: 30px; " value="其他">其他
                                    <input class="u-mt-4 u-ml-4" type="text" style="max-width: 175px;">
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label>簡介說明自己/目前工作/專業/才藝/項目/經歷</label>
                        <textarea name="resume" id="resume" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="btn-group btn-group--center form__btn-group">
                            <input type="submit" class="btn btn--primary btn--md" value="Send">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End onlineFormt -->

</section>
<!-- End main -->

@endsection

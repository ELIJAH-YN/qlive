@extends('layouts.qliveLayout.qlive_design')
@section('content')

<!-- Strat main -->
<section class="main">
	<!-- Start onlineFormt -->
	<div class="onlineFormt page＿padding_top formtStyle">
		<div class="container">
			<h2 class="subtitle u-text-center wow bounceInUp">Qlive雜誌_合作夥伴線上表單</h2>

			<form action="" class="form wow fadeInUp">

				<div class="row">
					<div class="col-sm-6">
						<label for="">夥伴名稱 本名</label>
						<input type="tel">
					</div>
					<div class="col-sm-6">
						<label for="">藝名/暱稱/LINE暱稱</label>
						<input type="email">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<label for="">推薦介紹人</label>
						<input type="text">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<label for="">出生/年/年齡</label>
						<input type="date">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<label for="">連絡電話/手機</label>
						<input type="tel">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<label for="">line/ID(非暱稱，必填正確，方便專案聯繫)</label>
						<input type="text">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<label for="">身高</label>
						<input type="tel">
					</div>
					<div class="col-sm-6">
						<label for="">體重</label>
						<input type="email">
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6">
						<label for="">三圍</label>
						<input type="tel">
					</div>
					<div class="col-sm-6">
						<label for="">鞋號</label>
						<input type="email">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<label for="">目前有無經紀合約/合作是否要與經紀公司接洽</label>
						<input type="text">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<label for="">臉書/粉專(網址連結)</label>
						<input type="text">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<label for="">追蹤人數</label>
						<div class="row input-no-mb">
							<div class="col-sm-3 col-6">
								<label for="fb_tenThousand">
									<input id="fb_tenThousand" type="radio" name="fb_people" style="width: 30px; ">10000人以上
								</label>
							</div>
							<div class="col-sm-3 col-6">
								<label for="fb_twoThousand">
									<input id="fb_twoThousand" type="radio" name="fb_people" style="width: 30px; ">20000人以上
								</label>
							</div>
							<div class="col-sm-3 col-6">
								<label for="fb_threeThousand">
									<input id="fb_threeThousand" type="radio" name="fb_people" style="width: 30px; ">30000人以上
								</label>
							</div>
							<div class="col-sm-3 col-6">
								<label for="fb_fiveThousand">
									<input id="fb_fiveThousand" type="radio" name="fb_people" style="width: 30px; ">50000人以上
								</label>
							</div>
							<div class="col-sm-3 col-6">
								<label for="fb_eightThousand">
									<input id="fb_eightThousand" type="radio" name="fb_people" style="width: 30px; ">80000人以上
								</label>
							</div>
							<div class="col-sm-3 col-6">
								<label for="fb_oneHundredThousand">
									<input id="fb_oneHundredThousand" type="radio" name="fb_people" style="width: 30px; ">10萬人以上
								</label>
							</div>
							<div class="col-sm-3 col-6">
								<label for="fb_twoHundredThousand">
									<input id="fb_twoHundredThousand" type="radio" name="fb_people" style="width: 30px; ">20萬人以上
								</label>
							</div>
							<div class="col-sm-3 col-6">
								<label for="fb_treeHundredThousand">
									<input id="fb_treeHundredThousand" type="radio" name="fb_people" style="width: 30px; ">30萬人以上
								</label>
							</div>
							<div class="col-sm-3 col-6">
								<label for="fb_fourHundredThousand">
									<input id="fb_fourHundredThousand" type="radio" name="fb_people" style="width: 30px; ">40萬人以上
								</label>
							</div>
							<div class="col-sm-3 col-6">
								<label for="fb_fiveHundredThousand">
									<input id="fb_fiveHundredThousand" type="radio" name="fb_people" style="width: 30px; ">50萬人以上
								</label>
							</div>
							<div class="col-sm-3 col-6">
								<label for="fb_sixHundredThousand">
									<input id="fb_sixHundredThousand" type="radio" name="fb_people" style="width: 30px; ">60萬人以上
								</label>
							</div>
							<div class="col-sm-3 col-6">
								<label for="fb_sevenHundredThousand">
									<input id="fb_sevenHundredThousand" type="radio" name="fb_people" style="width: 30px; ">70萬人以上
								</label>
							</div>
							<div class="col-sm-3 col-6">
								<label for="fb_oneMillion">
									<input id="fb_oneMillion" type="radio" name="fb_people" style="width: 30px; ">100萬人以上
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<label for="">IG(網址連結)</label>
						<input type="text">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<label for="">IG追蹤人數</label>
						<div class="row input-no-mb">
							<div class="col-sm-3 col-6">
								<label for="ig_tenThousand">
									<input id="ig_tenThousand" type="radio" name="ig_people" style="width: 30px; ">10000人以上
								</label>
							</div>
							<div class="col-sm-3 col-6">
								<label for="ig_twoThousand">
									<input id="ig_twoThousand" type="radio" name="ig_people" style="width: 30px; ">20000人以上
								</label>
							</div>
							<div class="col-sm-3 col-6">
								<label for="ig_threeThousand">
									<input id="ig_threeThousand" type="radio" name="ig_people" style="width: 30px; ">30000人以上
								</label>
							</div>
							<div class="col-sm-3 col-6">

								<label for="ig_fiveThousand">
									<input id="ig_fiveThousand" type="radio" name="ig_people" style="width: 30px; ">50000人以上
								</label>
							</div>
							<div class="col-sm-3 col-6">
								<label for="ig_eightThousand">
									<input id="ig_eightThousand" type="radio" name="ig_people" style="width: 30px; ">80000人以上
								</label>
							</div>
							<div class="col-sm-3 col-6">
								<label for="ig_oneHundredThousand">
									<input id="ig_oneHundredThousand" type="radio" name="ig_people" style="width: 30px; ">10萬人以上
								</label>
							</div>
							<div class="col-sm-3 col-6">
								<label for="ig_twoHundredThousand">
									<input id="ig_twoHundredThousand" type="radio" name="ig_people" style="width: 30px; ">20萬人以上
								</label>
							</div>
							<div class="col-sm-3 col-6">
								<label for="ig_treeHundredThousand">
									<input id="ig_treeHundredThousand" type="radio" name="ig_people" style="width: 30px; ">30萬人以上
								</label>
							</div>
							<div class="col-sm-3 col-6">
								<label for="ig_fourHundredThousand">
									<input id="ig_fourHundredThousand" type="radio" name="ig_people" style="width: 30px; ">40萬人以上
								</label>
							</div>
							<div class="col-sm-3 col-6">
								<label for="ig_fiveHundredThousand">
									<input id="ig_fiveHundredThousand" type="radio" name="ig_people" style="width: 30px; ">50萬人以上
								</label>
							</div>
							<div class="col-sm-3 col-6">
								<label for="ig_sixHundredThousand">
									<input id="ig_sixHundredThousand" type="radio" name="ig_people" style="width: 30px; ">60萬人以上
								</label>
							</div>
							<div class="col-sm-3 col-6">
								<label for="ig_sevenHundredThousand">
									<input id="ig_sevenHundredThousand" type="radio" name="ig_people" style="width: 30px; ">70萬人以上
								</label>
							</div>
							<div class="col-sm-3 col-6">
								<label for="ig_oneMillion">
									<input id="ig_oneMillion" type="radio" name="ig_people" style="width: 30px; ">100萬人以上
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<label for="">居住地區</label>
						<input type="text">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<label for="">上傳個人正面臉部清晰照5張含一張全身 近照</label>
						<input type="file" class="aaa" style="padding: 8px 0px;border: none; ">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<label for="">目前直播平台</label>
						<input type="text">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<label for="">曾經直播平台</label>
						<input type="text">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<label for="">目前職業</label>
						<input type="text">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<label for="">有興趣經營收益的項目</label>
						<div class="row  input-no-mb">
							<div class="col-sm-4 col-6">
								<label for="medicalBeauty">
									<input id="medicalBeauty" type="checkbox" name="" style="width: 30px; ">醫美
								</label>
							</div>
							<div class="col-sm-4 col-6">
								<label for="model">
									<input id="model" type="checkbox" name="" style="width: 30px; ">模特兒
								</label>
							</div>
							<div class="col-sm-4 col-6">
								<label for="industryMatch">
									<input id="industryMatch" type="checkbox" name="" style="width: 30px; ">業配
								</label>
							</div>
							<div class="col-sm-4 col-6">
								<label for="playing">
									<input id="playing" type="checkbox" name="" style="width: 30px; ">演奏
								</label>
							</div>
							<div class="col-sm-4 col-6">
								<label for="singing">
									<input id="singing" type="checkbox" name="" style="width: 30px; ">唱歌
								</label>
							</div>
							<div class="col-sm-4 col-6">
								<label for="drama">
									<input id="drama" type="checkbox" name="" style="width: 30px; ">戲劇
								</label>
							</div>
							<div class="col-sm-4 col-6">
								<label for="dance">
									<input id="dance" type="checkbox" name="" style="width: 30px; ">舞蹈
								</label>
							</div>
							<div class="col-sm-4 col-6">
								<label for="host">
									<input id="host" type="checkbox" name="" style="width: 30px; ">主持
								</label>
							</div>
							<div class="col-sm-4 col-6">
								<label for="eCommerceSales">
									<input id="eCommerceSales" type="checkbox" name="" style="width: 30px; ">電商銷售
								</label>
							</div>
							<div class="col-sm-4 col-6">
								<label for="game">
									<input id="game" type="checkbox" name="" style="width: 30px; ">博弈
								</label>
							</div>
							<div class="col-sm-4 col-6">
								<label for="painting">
									<input id="painting" type="checkbox" name="" style="width: 30px; ">繪畫
								</label>
							</div>
							<div class="col-sm-4 col-6">
								<label for="phoneComputer">
									<input id="phoneComputer" type="checkbox" name="" style="width: 30px; ">電腦遊戲
								</label>
							</div>
							<div class="col-sm-4 col-6">
								<label for="phoneComputer">
									<input id="phoneComputer" type="checkbox" name="" style="width: 30px; ">手機遊戲
								</label>
							</div>
							<div class="col-sm-4 col-6">
								<label for="toChatWith">
									<input id="toChatWith" type="checkbox" name="" style="width: 30px; ">聊天
								</label>
							</div>
							<div class="col-sm-4 col-6">
								<label for="liveBroadcast">
									<input id="liveBroadcast" type="checkbox" name="" style="width: 30px; ">直播
								</label>
							</div>
							<div class="col-sm-4 col-6">
								<label for="photography">
									<input id="photography" type="checkbox" name="" style="width: 30px; ">攝影
								</label>
							</div>
							<div class="col-sm-4 col-6">
								<label for="education">
									<input id="education" type="checkbox" name="" style="width: 30px; ">教育
								</label>
							</div>
							<div class="col-sm-4 col-6">
								<label for="videoProduction ">
									<input id="videoProduction " type="checkbox" name="" style="width: 30px; ">影片製作
								</label>
							</div>
							<div class="col-sm-4 col-6">
								<label for="videoProduction ">
									<input id="videoProduction " type="checkbox" name="" style="width: 30px; ">Youtuber
								</label>
							</div>
							<div class="col-sm-4 col-6">
								<label for="musicProduction">
									<input id="musicProduction" type="checkbox" name="" style="width: 30px; ">音樂製作
								</label>
							</div>
							<div class="col-sm-4 col-6">
								<label for="technology">
									<input id="technology" type="checkbox" name="" style="width: 30px; ">3C
								</label>
							</div>
							<div class="col-sm-4 col-6">
								<label for="businessPromotion">
									<input id="businessPromotion" type="checkbox" name="" style="width: 30px; ">業務推廣
								</label>
							</div>
							<div class="col-sm-4 col-6">
								<label for="performance">
									<input id="performance" type="checkbox" name="" style="width: 30px; ">表演
								</label>
							</div>
							<div class="col-sm-4 col-6">
								<label for="brokerActingCareer">
									<input id="brokerActingCareer" type="checkbox" name="" style="width: 30px; ">經紀人/演藝事業
								</label>
							</div>
							<div class="col-sm-4 col-6">
								<label for="integratedMarketing">
									<input id="integratedMarketing" type="checkbox" name="" style="width: 30px; ">整合行銷
								</label>
							</div>
							<div class="col-sm-4 col-6">
								<label for="designArt">
									<input id="designArt" type="checkbox" name="" style="width: 30px; ">設計美術
								</label>
							</div>
							<div class="col-sm-12 col-xs-12">
								<label for="other">
									<input id="other" type="checkbox" name="" style="width: 30px; ">其他
									<input class="u-mt-4 u-ml-4" type="text" style="max-width: 175px;">
								</label>
							</div>

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<label for="">簡介說明自己/目前工作/專業/才藝/項目/經歷</label>
						<textarea name="" id="" cols="30" rows="10"></textarea>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="btn-group btn-group--center form__btn-group">
							<!-- <input type="submit" class="btn btn--primary btn--md" value="Send"> -->
							<a href="{{ url('/qlive/check-page') }}" class="btn btn--primary btn--md">Send</a>
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
@extends('layouts.qliveLayout.qlive_design')
@section('content')

<!-- Start main -->
<main class="main ">
	<div class="innerpage page＿padding_top">
		<div class="container">
			<div class="subtitle " >
                {{ $innerPage->title }}
			</div>
			<div class="row" >
				<div class="col-lg-9" >

					<div class="row">
						<div class="col-lg-11 col-12">
							<div>
								<div class="imgboxFix">
									<div class="imgboxFix__inner imgbox__inner-55">
										<div class="imgFix">
											<img src="{{ asset('/assets/images/cover/large/'.$innerPage->cover) }}" alt="">
										</div>
									</div>
								</div>
								<div class="innerpage-detail">
									<p>
										{{ $innerPage->description }}
									</p>
								</div>
							</div>
                            @foreach($innerPage->paragraphs as $paragraph)
                                <div>
                                    <div class="imgboxFix">
                                        <div class="imgboxFix__inner imgbox__inner-55">
                                            <div class="imgFix">
                                                <img src="{{ asset('/assets/images/cover/large/'.$paragraph->image) }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="innerpage-detail">
                                        <p>
                                            {{ $paragraph->content }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
{{--							<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fqlivekol%2Fposts%2F950037222019450&width=500" width="100%" height="648" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>--}}
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
</main>
<!-- End main -->

@endsection

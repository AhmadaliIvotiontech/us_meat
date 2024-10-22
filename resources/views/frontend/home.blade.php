@include('frontend.layouts.main')
<body>

<!-- Section 1 -->
<section class="main-bg">
	<!-- Header -->
	<header>
		<nav class="navbar navbar-expand-lg navbar-light pt-4">
			@include('frontend.layouts.menu')
		</nav>
	</header>

	<!-- Slider -->
	<section class="position-relative">
			<div class="main-slider">
				@foreach($all_banners as $key)
			    <div class="slider-item">
			    	<div class="container">
			    		<div class="row align-items-center">
				    		<div class="col-sm-5">
				    			<div class="slider-item-content text-end">
						    		<h1>{{$key->text_1}} <span class="end-txt">&</span><span>{{$key->text_2}}</span></h1>
						    		<div class="placeholder-bg">
						    			<span>{{$key->text_3}}</span>
						    		</div>
						    		<a href="{{$key->button_link}}" class="banner-link">{{$key->button_text}}</a>
						    	</div>
				    		</div>
				    		<div class="col-sm-7 banner-img">
				    			<img src="storage/app/backend/homepage/banner/{{$key->banner_main_img}}" title="" class="img-fluid" alt="">
				    			<div class="pork-tooltip">
				    				<img src="storage/app/backend/homepage/banner/{{$key->banner_trademark_img}}"  class="img-fluid" alt="">
				    				<span>
				    					<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="{{$key->tooltip_txt}}"><i class="fa-regular fa-circle-question"></i></a>
				    				</span>
				    			</div>
				    		</div>
			    		</div>
			    	</div>			    	
			    </div>
				@endforeach
			</div>
				<div class="container position-relative">
					<div class="row">
						<img src="public/frontend/images/banner-plate.png" class="plate-img" alt="">
					</div>
				</div>
				
	</section>
</section>

<!-- Section 2 -->
<section class="into-sec">
	<div class="container">
		<div class="row mt-4">
			<div class="col-sm-4 px-5">
				<h2>{{$all_section->text_1}} <img src="public/frontend/images/us-meat-logo.png" alt=""><span>{{$all_section->text_2}}</span></h2>
			</div>
			<div class="col-sm-6 lemon">
				<p>{{$all_section->description_1}} </p>
				<a href="{{$all_section->button_link}}">{{$all_section->button_text}}</a>
			</div>			
		</div>		
	</div>
</section>

<!-- Section 3 -->
<section class="bg-img-sec">
	<div class="container chilli">
		<div class="row justify-content-center">
			<div class="col-sm-8 text-center">
				<h2>{{$all_section->text_3}}</h2>
				<p>{{$all_section->description_2}} </p>	
			</div>		
		</div>		
	</div>
</section>


<!-- Section 4 -->
<section class="py-5">
	<div class="container">
		<div class="product-slider">
				@foreach($all_meat_slider as $key)
				<div class="card border-0">
				    <img src="storage/app/backend/homepage/meat_slider/{{$key->slider_img}}" class="card-img-top" alt="...">
				    <div class="card-body">
				      <div class="row">
				        <div class="col-12">
				          
				          <div class="slider-tooltip">
				          		<img src="storage/app/backend/homepage/meat_slider/{{$key->trademark_img}}" class="" alt="">
				          		<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="{{$key->button_link}}"><i class="fa-regular fa-circle-question"></i></a>
				          </div>		
				          <p class="card-title">{{$key->slider_name}}</p>
				          <a href="{{$key->button_link}}">{{$key->button_text}}</a>
				        </div>
				      </div>
				     
				    </div>
				</div>
				@endforeach
		</div>
	</div>
</section>

<section class="mb-5 video-card">
	<div class="container">
		<div class="card shadow">
			<div class="expertise-slider">
				
				@foreach($all_testimonial as $key)
				<div class="slider-item">
					<div class="row">
						<div class="col-sm-5">
							<h2 class="mb-5">{{$key->text_1}}<span>{{$key->text_2}}</span></h2>
							<p>{{$key->description}}</p>
							<div class="text-end">
								<button type="submit" class="btn btn-sm btn-primary mb-3 right rounded-pill">{{$key->button_text}}</button>
							</div>
						</div>
						<div class="col-sm-7 c-vid">
							<img src="storage/app/backend/homepage/testimonial/{{$key->img}}" class="img-fluid">
						</div>
					</div>
				</div>
				@endforeach

			</div>
		</div>
	</div>
</section>

<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 cus-tab px-0">
				<ul class="nav nav-pills" id="pills-tab" role="tablist">
				  <li class="nav-item" role="presentation">
					<button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">EN DÓNDE COMPRAR<span>LOS MEJORES CORTES</span></button>
				  </li>
				  <li class="nav-item" role="presentation">
					<button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">EN DÓNDE COMER<span>LOS MEJORES CORTES</span></button>
				  </li>
				</ul>
				<div class="tab-content pb-0" id="pills-tabContent">
				  <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
					<div class="container pt-5">
						<div class="row pb-4">
							<div class="col-sm-3 text-end"><a href="javascript:void();"><img src="storage/app/backend/homepage/where_to_buy/<?php echo $all_where_to_buy['0']['logo_img']; ?>"></a></div>
							<div class="col-sm-3 text-center"><a href="javascript:void();"><img src="storage/app/backend/homepage/where_to_buy/<?php echo $all_where_to_buy['1']['logo_img']; ?>"></a></div>
							<div class="col-sm-3 text-center"><a href="javascript:void();"><img src="storage/app/backend/homepage/where_to_buy/<?php echo $all_where_to_buy['2']['logo_img']; ?>"></a></div>
							<div class="col-sm-3 text-left"><a href="javascript:void();"><img src="storage/app/backend/homepage/where_to_buy/<?php echo $all_where_to_buy['3']['logo_img']; ?>"></a></div>
						</div>
						<div class="row pb-5">
							<div class="col-sm-4 text-end"><a href="javascript:void();"><img src="storage/app/backend/homepage/where_to_buy/<?php echo $all_where_to_buy['4']['logo_img']; ?>"></a></div>
							<div class="col-sm-4 text-center"><a href="javascript:void();"><img src="storage/app/backend/homepage/where_to_buy/<?php echo $all_where_to_buy['5']['logo_img']; ?>"></a></div>
							<div class="col-sm-4 text-left"><a href="javascript:void();"><img src="storage/app/backend/homepage/where_to_buy/<?php echo $all_where_to_buy['6']['logo_img']; ?>"></a></div>
						</div>
						<!-- <div class="row">
							<div class="col-sm-8 app-download d-flex flex-column justify-content-center">
								<div class="text-center">
									<p>Descarga la App y encuentra lo que estas buscando</p>
									<img src="images/app-logo.png" alt="">
									<div class="d-flex justify-content-center align-item-center mt-4">
										<a href="#"><img src="public/frontend/images/play-store.svg" width="120" alt=""></a>
										<a href="#" class="mx-2"><img src="public/frontend/images/app-store.svg" width="120" alt=""></a>
									</div>
								</div>
							</div>
							<div class="col-sm-4"><img src="public/frontend/images/map.png"></div>
						</div> -->
					</div>
				  </div>
				  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
				  	<div class="container pt-5">
						<div class="row pb-4">
							<div class="col-sm-3 text-end"><a href="javascript:void();"><img src="storage/app/backend/homepage/where_to_buy/<?php echo $all_where_to_buy['7']['logo_img']; ?>"></a></div>
							<div class="col-sm-3 text-center"><a href="javascript:void();"><img src="storage/app/backend/homepage/where_to_buy/<?php echo $all_where_to_buy['8']['logo_img']; ?>"></a></div>
							<div class="col-sm-3 text-center"><a href="javascript:void();"><img src="storage/app/backend/homepage/where_to_buy/<?php echo $all_where_to_buy['9']['logo_img']; ?>"></a></div>
							<div class="col-sm-3 text-left"><a href="javascript:void();"><img src="storage/app/backend/homepage/where_to_buy/<?php echo $all_where_to_buy['10']['logo_img']; ?>"></a></div>
						</div>
						<div class="row pb-5">
							<div class="col-sm-4 text-end"><a href="javascript:void();"><img src="storage/app/backend/homepage/where_to_buy/<?php echo $all_where_to_buy['11']['logo_img']; ?>"></a></div>
							<div class="col-sm-4 text-center"><a href="javascript:void();"><img src="storage/app/backend/homepage/where_to_buy/<?php echo $all_where_to_buy['12']['logo_img']; ?>"></a></div>
							<div class="col-sm-4 text-left"><a href="javascript:void();"><img src="storage/app/backend/homepage/where_to_buy/<?php echo $all_where_to_buy['13']['logo_img']; ?>"></a></div>
						</div>
						<!-- <div class="row">
							<div class="col-sm-8 app-download d-flex flex-column justify-content-center">
								<div class="text-center">
									<p>Descarga la App y encuentra lo que estas buscando</p>
									<img src="images/app-logo.png" alt="">
									<div class="d-flex justify-content-center align-item-center mt-4">
										<a href="#"><img src="public/frontend/images/play-store.svg" width="120" alt=""></a>
										<a href="#" class="mx-2"><img src="public/frontend/images/app-store.svg" width="120" alt=""></a>
									</div>
								</div>
							</div>
							<div class="col-sm-4"><img src="public/frontend/images/map.png"></div>
						</div> -->
					</div>
				  </div>
				</div>
			</div>
		</div>
		<div class="row" style="background-color:#F7F7F7;">
			<div class="col-sm-12 cus-tab px-0">
				<div class="row">
					<div class="col-sm-8 app-download d-flex flex-column justify-content-center">
						<div class="text-center">
							<p>Descarga la App y encuentra lo que estas buscando</p>
							<img src="images/app-logo.png" alt="">
							<div class="d-flex justify-content-center align-item-center mt-4">
								<a href="#"><img src="public/frontend/images/play-store.svg" width="120" alt=""></a>
								<a href="#" class="mx-2"><img src="public/frontend/images/app-store.svg" width="120" alt=""></a>
							</div>
						</div>
					</div>
					<div class="col-sm-4"><img src="public/frontend/images/map.png"></div>
				</div>
			</div>
		</div>
	</div>
</section>


@include('frontend.layouts.footer')

<!-- Javascript-->
<script src="{{ asset('public/frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('public/frontend/js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="{{ asset('public/frontend/js/custome.js') }}"></script>
<script type="text/javascript">
	 $(document).ready(function(){

      $('.main-slider').slick({
        slidesToShow: 1,
	  	slidesToScroll: 1,
	  	arrows: true,
	    dots: true,
	    autoplay: true,
	    speed: 900,
	    autoplaySpeed: 5700,
      });

      $('.expertise-slider').slick({
        slidesToShow: 1,
	  	slidesToScroll: 1,
	  	arrows: false,
	    dots: true,
	    autoplay: true,
	    speed: 900,
	    autoplaySpeed: 5700,
      });


      $('.product-slider').slick({
		  centerMode: true,
		  centerPadding: '0',
		  slidesToShow: 3,
		  dots: false,
		  arrows: true,
		  swipe: true,
		//  infinite: true,
		  swipeToSlide: false,
		  adaptiveHeight: true,
		  responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 3,
		        infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }		    
		  ]
		});
    });
</script>
</body>
</html>
@include('frontend.layouts.main')
<body>


<!-- Section 1 -->
<section class="inner-bg" style="background: url(storage/app/backend/about/sections/{{ $all_section->banner_img}}) no-repeat; background-size: cover; background-attachment: fixed;">
	<!-- Header -->
	<header>
		<nav class="navbar navbar-expand-lg navbar-light pt-4">
			@include('frontend.layouts.menu')
		</nav>
	</header>

	<!-- <section class="position-relative">
		<div class="container">
    		<div class="row align-items-center">
	    		<div class="col-sm-12 inn-banner-img">
	    			<a href="{{ $all_section->video_link}}" class="video-img" data-bs-toggle="modal" data-bs-target="#VideoPopup"><img src="public/frontend/images/play-icon.png" class="" alt=""></a>
	    		</div>
    		</div>
    	</div>			
	</section> -->
	<section class="position-relative" style="display:none;">
		<div class="fluid-container">
    		<div class="row align-items-center" >
	    		<div class="col-sm-12 inn-banner-img">
	    			<a href="{{ $all_section->video_link}}" class="video-img" data-bs-toggle="modal" data-bs-target="#VideoPopup"><img src="public/frontend/images/play-icon.png" class="" alt=""></a>
	    		</div>
    		</div>
    	</div>			
	</section>
</section>


<section class="position-relative cust-head" style="background:#000000;">
	<div class="video-wrapper">
		<div class="video-container" id="video-container">
			<video autoplay="autoplay" id="video" preload="metadata" poster="storage/app/backend/about/sections/{{ $all_section->banner_img}}">
				<source src="storage/app/backend/about/sections/{{ $all_section->video_link}}" type="video/mp4">
			</video>
			<div class="play-button-wrapper">
				<div title="Play video" class="play-gif" id="circle-play-b">
					<img src="public/frontend/images/play-icon.png" style="position:absolute;top:39%;left:43%;opacity:1;" id="cover">
				</div>
			</div>
		</div>
	</div>


	<div class="overlay" style="display:none;"></div>
	<div class="row align-items-center" style="display:none;">
		<div class="col-sm-12 inn-banner-img">
			<a href="#" class="video-img" data-bs-toggle="modal" data-bs-target="#VideoPopup"><img src="public/frontend/images/play-icon.png" class="" alt=""></a>
		</div>
	</div>
		
</section>

<!-- Section 2 -->
<!-- <section class="inner-page-banner lemon-chilli-bg">
	<div class="inn-right-img"><img src="public/frontend/images/top-right-img.png"></div>
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-sm-10 text-center mb-5">
					<div class="placeholder-bg placeholder-bg-red">
						<span>NUESTRO PROMESA</span>
					</div>
				</div>
				<div class="col-sm-10 text-center mb-4">
					<img src="storage/app/backend/about/sections/{{ $all_section->us_meat_img}}" alt="">
				</div>
				<div class="col-sm-10 mb-4">
					<p>{{ $all_section->us_meat_description}}</p>
				</div>			
			</div>
			<div class="row justify-content-md-center mb-4">

				<div class="col-sm-3 text-center mb-5">
					<img  src="public/frontend/images/us-beef-img.png" class="img-fluid" alt="">
				</div>
				<div class="col-sm-9">
					<div class="text-center mb-4">
						<img title="{{ $all_section->us_beef_tooltip_txt}}" src="storage/app/backend/about/sections/{{ $all_section->us_beef_img}}" alt="">
					</div>
					<p>{{ $all_section->us_beef_description}}</p>
					<a href="#" class="text-uppercase text-primary">conoce más</a>
				</div>

				<div class="col-sm-9">
					<div class="text-center mb-4">
						<img src="storage/app/backend/about/sections/{{ $all_section->us_pork_img}}" title="{{ $all_section->us_pork_tooltip_txt}}" alt="">
					</div>
					<p>{{ $all_section->us_pork_description}} </p>
					<a href="#" class="text-uppercase text-primary">conoce más</a>
				</div>
				<div class="col-sm-3 text-center mb-5">
					<img src="public/frontend/images/pork-img.png" class="img-fluid" alt="">
				</div>

				<div class="col-sm-3 mt-4">
					<h2>{{ $all_section->text_1}} <span class="d-block text-primary">{{ $all_section->text_2}}</span></h2>
				</div>
				<div class="col-sm-9">
					
					<p>{{ $all_section->description}} </p>
					<a href="{{ $all_section->btn_link}}" class="text-uppercase text-primary">{{ $all_section->btn_txt}}</a>
				</div>
			</div>		
		</div>
</section> -->
<!-- Section 2 -->
<section class="inner-page-banner lemon-chilli-bg">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-sm-12 text-center mb-5">
					<div class="placeholder-bg placeholder-bg-red">
						<span>NUESTRO PROMESA</span>
					</div>
				</div>
				<div class="col-sm-12 text-center mb-4">
					<img src="storage/app/backend/about/sections/{{ $all_section->us_meat_img}}" alt="">
				</div>
				<div class="col-sm-12 mb-4 justify-text">
					<p>{{ $all_section->us_meat_description}}</p>
				</div>			
			</div>
			<div class="row justify-content-md-center mb-4">

				<div class="col-sm-3 text-center mb-5">
					<img  src="public/frontend/images/us-beef-img.png" class="img-fluid" alt="">
				</div>
				<div class="col-sm-9 justify-text">
					<div class="text-center mb-4">
						<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"  tabindex="-1">
							<img title="{{ $all_section->us_beef_tooltip_txt}}" src="storage/app/backend/about/sections/{{ $all_section->us_beef_img}}" alt="">
						</a>		
					</div>
					<p>{{ $all_section->us_beef_description}}</p>
					<a href="#" class="text-uppercase text-primary">conoce más</a>
				</div>

				<div class="col-sm-9 justify-text">
					<div class="text-center mb-4">
						<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"  tabindex="-1">
							<img src="storage/app/backend/about/sections/{{ $all_section->us_pork_img}}" title="{{ $all_section->us_pork_tooltip_txt}}" alt="">
						</a>
					</div>
					<p>{{ $all_section->us_pork_description}} </p>
					<a href="#" class="text-uppercase text-primary">conoce más</a>
				</div>
				<div class="col-sm-3 text-center mb-5">
					<img src="public/frontend/images/pork-img.png" class="img-fluid" alt="">
				</div>

				<div class="col-sm-3 mt-4">
					<h2>{{ $all_section->text_1}} <span class="d-block text-primary">{{ $all_section->text_2}}</span></h2>
				</div>
				<div class="col-sm-9 justify-text">
					
					<p>{{ $all_section->description}} </p>
					<a href="{{ $all_section->btn_link}}" class="text-uppercase text-primary">{{ $all_section->btn_txt}}</a>
				</div>
			</div>		
		</div>
</section>

<!-- Section 3 -->
<section class="bg-img-sec l-r-ct-mix">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-8 text-center">
				<h2 class="large-txt">{{ $all_section->text_3}}</h2>
				<p>{{ $all_section->text_4}}</p>	
			</div>		
		</div>		
	</div>
</section>


<!-- Section 4 -->
<section class="py-5 mt-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">	
				<p>{{ $all_section->description_1}}</p>
			</div>
		</div>
		<div class="row my-5">
			<div class="col-sm-6">
				<img src="storage/app/backend/about/sections/{{ $all_section->chart_img}}" class="img-fluid" alt="">
			</div>
			<div class="col-sm-6 pt-5 text-center">
				<img src="storage/app/backend/about/sections/{{ $all_section->img}}" class="img-fluid" alt="">
			</div>
		</div>
	</div>
</section>

<!-- Section 5 -->
<section class="py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12 text-center">	
				<div class="placeholder-bg placeholder-bg-red">
					<span>Contacto</span>
				</div>
			</div>
			<div class="col-sm-10 text-center pt-5">	
				<p>{{ $all_section->description_2}}</p>
			</div>
		</div>
		
	</div>
</section>
<!-- Section 6 -->
<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 cus-tab contact-tab px-0">
				<ul class="nav nav-pills" id="pills-tab" role="tablist">
				  <li class="nav-item" role="presentation">
					<button class="nav-link active text-end" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
						<span>CONTACTO DIRECTO</span></button>
				  </li>
				  <li class="nav-item" role="presentation">
					<button class="nav-link text-start" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" tabindex="-1"><span>CAPACITACIÓN</span></button>
				  </li>
				</ul>
				<div class="tab-content pb-0" id="pills-tabContent">
				  <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
					<div class="container py-3">
						<div class="row justify-content-center">
							<div class="col-sm-8 ">
								<p>Para nosotros es un placer atenderte. Si deseas conocer más sobre USMEF o tienes alguna duda, déjanos tú mensaje y te responderemos a la brevedad.</p>
							</div>
							<div class="col-sm-6 c-form py-4">
								<div class="row mb-3">
									<div class="col-sm-12 ">
									  <input type="text" class="form-control bg-light" id="inputPassword" placeholder="Nombre">
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-12 ">
									  <input type="email" class="form-control bg-light" id="inputPassword" placeholder="Correo">
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-6 ">
									  <input type="tel" class="form-control bg-light" id="inputPassword" placeholder="Teléfono">
									</div>
									<div class="col-sm-6 ">
										<select class="form-select" aria-label="Default select example">
											@foreach($dropdown as $key)
												@if($key->page_name == 1)
													<option value="{{$key->dropdown_value}}">{{$key->dropdown_name}}</option>
												@endif
											@endforeach
										</select>
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-12 ">
									  <textarea class="form-control bg-light" placeholder="Mensaje"></textarea>
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-12">
										<button type="submit" class="btn btn-sm btn-primary mb-3 right">Enviar</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				  </div>
				  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
				  	<div class="container">
						<div class="container py-3">
						<div class="row justify-content-center">
							<div class="col-sm-8">
								<p>Para nosotros es un placer atenderte. Si deseas conocer más sobre USMEF o tienes alguna duda, déjanos tú mensaje y te responderemos a la brevedad.</p>
							</div>
							<div class="col-sm-6 c-form py-4">
								<div class="row mb-3">
									<div class="col-sm-12 ">
									  <input type="text" class="form-control bg-light" id="inputPassword" placeholder="Nombre">
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-12 ">
									  <input type="email" class="form-control bg-light" id="inputPassword" placeholder="Correo">
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-6 ">
									  <input type="tel" class="form-control bg-light" id="inputPassword" placeholder="Teléfono">
									</div>
									<div class="col-sm-6 ">
									    <select class="form-select" aria-label="Default select example">	
									  		@foreach($dropdown as $key)
												@if($key->page_name == 1)
													<option value="{{$key->dropdown_value}}">{{$key->dropdown_name}}</option>
												@endif
											@endforeach
										</select>
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-12 ">
									  <textarea class="form-control bg-light" placeholder="Mensaje"></textarea>
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-12">
										<button type="submit" class="btn btn-sm btn-primary mb-3 right">Enviar</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>


@include('frontend.layouts.footer')

<!-- POPUP -->
<div class="modal fade" id="VideoPopup" tabindex="-1" aria-labelledby="VideoPopup" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe width="100%" height="500" src="https://www.youtube.com/embed/8JRJlCYd3po?si=VWsY3uROkN4XRph3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
     
    </div>
  </div>
</div>
<!-- Javascript-->
<script src="{{ asset('public/frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('public/frontend/js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- <script src="{{ asset('public/frontend/js/custome.js') }}"></script> -->
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

        const video = document.getElementById("video");
		const circlePlayButton = document.getElementById("circle-play-b");

		

		circlePlayButton.addEventListener("click", togglePlay);
		video.addEventListener("playing", function () {
			circlePlayButton.style.opacity = 0;
		});
		video.addEventListener("pause", function () {
			circlePlayButton.style.opacity = 1;
		});
		video.play();
    });
	function togglePlay() {
		if (video.paused || video.ended) {
			video.play();
		} else {
			video.pause();
		}
	}
</script>



<div style="position: relative;">
    
</div>


<script>
    setInterval(function(){
        if(document.activeElement instanceof HTMLIFrameElement){
            document.getElementById('cover').style.opacity=0.1;
            document.getElementById('player').style.opacity=1;
        }
    } , 50);
</script>
</body>
</html>
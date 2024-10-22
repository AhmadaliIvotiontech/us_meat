@include('frontend.layouts.main')
<body>



<!-- Section 1 -->
<section class="experience-main-bg" style=" background: url(storage/app/backend/experience/sections/{{ $all_section->banner_img}}) no-repeat; background-size: cover;">
	<!-- Header -->
	<header>
		<nav class="navbar navbar-expand-lg navbar-light pt-4">
			@include('frontend.layouts.menu')
		</nav>
	</header>
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
			<video autoplay="autoplay" id="video" preload="metadata" poster="storage/app/backend/experience/sections/{{ $all_section->banner_img}}">
				<source src="storage/app/backend/experience/sections/{{ $all_section->video_link}}" type="video/mp4">
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
<section class="into-sec inner-page-banner">
<div class="inn-left-img"><img src="public/frontend/images/top-left-img.png"></div>
<div class="inn-right-img"><img src="public/frontend/images/top-right-img.png"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center mb-5">
				<div class="placeholder-bg placeholder-bg-red">
	    			<span>{{ $all_section->text}}</span>
	    		</div>
			</div>
			<div class="col-sm-12 mb-4">
				<p>{{ $all_section->text_description}}</p>
			</div>			
		</div>		
	</div>
</section>

<section class="mb-5 video-card">
	<div class="container">
		<div class="card shadow">
			<div class="row">
				<div class="col-sm-6">
					<h2 class="mb-5">{{ $all_section->text_1}} <span>{{ $all_section->text_2}}</span></h2>
					<p>{{ $all_section->description}}</p>
				</div>
				<div class="col-sm-6 c-vid">
					<!-- <a href="#" class="video-img s-v-thumb" data-bs-toggle="modal" data-bs-target="#VideoPopup"><img src="public/frontend/images/play-icon.png" class="" alt=""></a> -->
					<img src="storage/app/backend/experience/sections/{{ $all_section->img}}">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="mb-5 exp mt-10">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center mb-5">
				<div class="placeholder-bg placeholder-bg-red">
	    			<span>Videos competidores</span>
	    		</div>
			</div>
			<div class="row text-right">
				<ul class="pagination justify-content-end mb-4">
					<li class="page-item"><a class="page-link active" href="#">1</a></li>
					<!-- <li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item"><a class="page-link" href="#">4</a></li>
					<li class="page-item"><a class="page-link" href="#">5</a></li> -->
				</ul>				
			</div>
			@foreach($competitor as $key)
			<div class="col-sm-4 mb-4">
				<div class="card text-center">
					<img src="storage/app/backend/experience/competitors/{{ $key->img}}" class="mb-4">
					<h2>{{ $key->text_1}}</h2>
					<p>{{ $key->text_2}}<br>{{ $key->text_3}}</p>
					<p>Preparación: {{ $key->preparation}}<br>Rinde hasta {{ $key->serves}}</p>
					<p><a href="{{ $key->button_link}}">{{ $key->button_text}}</a></p>
				</div>
			</div>
			@endforeach
	
		</div>
	</div>
</section>

<!-- Section 3 -->
<section class="bg-img-sec">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-8 text-center">
				<h2>{{ $all_section->participants}}</h2>
				<p>{{ $all_section->participants_description}}</p>	
			</div>		
		</div>		
	</div>
</section>


<!-- Section 4 -->
<section class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">	
				<p>{{ $all_section->form_description}}</p>
			</div>
			<div class="col-sm-6 c-form">
				<div class="row mb-3">
					<div class="col-sm-12 ">
					  <input type="password" class="form-control" id="inputPassword" placeholder="Nobre">
					</div>
				</div>
				<div class="row mb-3">
					<div class="col-sm-12 ">
					  <input type="password" class="form-control" id="inputPassword" placeholder="Nobre">
					</div>
				</div>
				<div class="row mb-3">
					<div class="col-sm-6 ">
					  <input type="password" class="form-control" id="inputPassword" placeholder="Nobre">
					</div>
					<div class="col-sm-6 ">
					  <input type="text" class="form-control" id="VideoLink" placeholder="Video Link">
					</div>
					<!-- <div class="col-sm-6 ">
					  <select class="form-select" aria-label="Default select example">
						<option selected>Open this select menu</option>
					  		@foreach($dropdown as $key)
								@if($key->page_name == 2)
									<option value="{{$key->dropdown_value}}">{{$key->dropdown_name}}</option>
								@endif
							@endforeach
						</select>
					</div> -->
				</div>
				<div class="row mb-3">
					<div class="col-sm-12 small">
					  * En cuanto lo veamos te contactaremos para que nos compartas los detalles de tu deliciosa expericencia.
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
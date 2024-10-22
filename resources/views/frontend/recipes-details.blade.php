@include('frontend.layouts.main')
<body>


<!-- Section 1 -->
<section class="main-bg main-bg-inner" style="background: url(storage/app/backend/recipes_details/sections/{{ $all_section->banner_bg_img}})  no-repeat !important;background-size: cover !important;">
	<!-- Header -->
	<header>
		<nav class="navbar navbar-expand-lg navbar-light pt-4">
			@include('frontend.layouts.menu')
		</nav>
	</header>

	<section class="position-relative">
		<div class="container">
    		<div class="row align-items-center">
	    		<div class="col-sm-5 slider-item">
	    			<div class="slider-item-content text-start">
			    		<h1>
						{{ $all_section->text_1}} <span class="red-color">{{ $all_section->text_2}}</br>{{ $all_section->text_3}}</span>
			    		</h1>
			    	</div>
	    		</div>
	    		<div class="col-sm-7 banner-img position-static">
	    			<img src="storage/app/backend/recipes_details/sections/{{ $all_section->banner_img}}" class="" alt="">
	    		</div>
    		</div>
    	</div>			
	</section>
</section>
@if($recipes->youtube_link == 1)
	<!-- Section 2 -->
	<section class="into-sec pb-5">
		<div class="container">
			<div class="row mt-4">
				<div class="col-sm-6 px-5">
					<a href="#" class="video-img" data-bs-toggle="modal" data-bs-target="#VideoPopup">
						<img src="public/frontend/images/video-icon.png" class="video-icon" alt="">
						<img src="storage/app/backend/recipes_details/sections/{{ $all_section->video_img}}" class="img-fluid rounded" alt="">
					</a>
				</div>
				<div class="col-sm-6">
					<h2>{{ $all_section->video_text_1}} <span> {{ $all_section->video_text_2}}</span></h2>
					<p class="mt-5">{{ $all_section->video_text_description}}</p>
				</div>			
			</div>		
		</div>
		<!-- Assets -->
		<div class="lemon-assets">
			<img src="public/frontend/images/lemon-img.png" alt="">
		</div>
	</section>
@endif
@if(($recipes->check == 1))
	<!-- Section 3 -->
	<section class="into-sec pb-5 pt-0">
		<div class="container">
			<div class="row mt-4">
				<div class="col-sm-5">
					<div class="placeholder-bg placeholder-bg-red">
						<span>PREPARA TUS </span>
					</div>
					<h2 class="text-end"><span>Ingredientes</span></h2>
					
					<div class="row mt-4">
						<div class="col-6">
							<ul>
								<?php $array = explode(",", $all_section->ingredientes);
									
									$each =	count($array)/2;
									// print_r($each);
									$counter = 0;
									for ($i=0; $i < $each; $i++) { 
										echo "<li>".$array[$i]."</li>";
										$counter++;
									}
									?>
							</ul>
						</div>
						<div class="col-6">
							<ul>
								<?php 
								$each = $each*2;
								for ($i=$counter; $i < $each; $i++) { 
									echo "<li>".$array[$i]."</li>";
									$counter++;
								}
								?>
							</ul>
						</div>
					</div>
				</div>	
				<div class="col-sm-7 text-end">
					<img src="storage/app/backend/recipes_details/sections/{{ $all_section->ingredientes_img}}" class="img-fluid" alt="">
				</div>		
			</div>		
		</div>
	</section>

	<!-- Section 4 -->
	<section class="bg-img-sec">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-sm-8 text-center">
					<h2 class="large-txt">{{ $all_section->preparation_text_1}}</h2>
					<p>{{ $all_section->preparation_text_2}} </p>	
				</div>		
			</div>		
		</div>
	</section>

	<!-- Section 5 -->
	<section class="py-5 lr-t">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">	
					<p>{{ $all_section->preparation_description}}</p>
				</div>
			</div>
			<div class="row mt-5 align-items-center">
				<div class="col-sm-2"></div>
				<div class="col-sm-10">
					<ul class="counter-ul">
						<li>{{ $all_section->preparation_description_1}}</li>
					</ul>
				</div>
			</div>
			<div class="row py-5 align-items-center">
				
				<div class="col-sm-6">	
					<img src="storage/app/backend/recipes_details/sections/{{ $all_section->preparation_img}}" class="img-fluid" alt="">
				</div>
				<div class="col-sm-6">	
					<ul class="counter-ul">
						
						<li class="mb-5 pl-6 number2">
							{{ $all_section->preparation_description_2}}
						</li>
						<li class="number3">
							{{ $all_section->preparation_description_3}}
						</li>
					</ol>
				</div>
			</div>
		</div>
	</section>

	<!-- Section 6 -->
	<section class="py-5 pt-0 lt-r-c-mix">
		<div class="container">
			<div class="row text-center">
				<div class="col-12">
					<img src="storage/app/backend/recipes_details/sections/{{ $all_section->preparation_img_full}}" class="img-fluid" alt="">
				</div>
				<div class="col-12 text-center">
					<a href="{{ $all_section->btn_link}}" class="link">{{ $all_section->btn_txt}}</a>
				</div>
			</div>
		</div>
	</section>
@endif
<!-- Section 7 -->
<section class="mb-5 exp mt-10">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center mb-5">
				<div class="placeholder-bg placeholder-bg-red">
	    			<span>Saborea expericencia</span>
	    		</div>
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
			<!-- <div class="col-sm-4 mb-4">
				<div class="card text-center">
					<img src="images/e2.png" class="mb-4">
					<h2> CARNE EN SU JUGO</h2>
					<p>JESUS RóMERO<br>Puebla</p>
					<p>Preparación: 53  minutos<br>Rinde hasta 6 personas</p>	
					<p><a href="#">ver receta</a></p>					
				</div>
			</div>
			<div class="col-sm-4 mb-4">
				<div class="card text-center">
					<img src="images/e3.png" class="mb-4">
					<h2>Asado envuelto</h2>
					<p>ENRIQUE GALVáN<br>Monterrey</p>
					<p>Preparación: 45 minutos<br>Rinde hasta 6 personas</p>	
					<p><a href="#">ver receta</a></p>
				</div>
			</div> -->
			
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
<script src="{{ asset('public/frontend/js/custome.js') }}"></script>
</body>
</html>
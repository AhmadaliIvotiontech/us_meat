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

	<section class="position-relative">
		<div class="container">
    		<div class="row align-items-center">
	    		<div class="col-sm-5 slider-item">
	    			<div class="slider-item-content text-start">
			    		<p>{{ $all_section->banner_description}}</p>
			    		<div class="d-flex">
			    			<img src="storage/app/backend/recipes/sections/{{ $all_section->us_beef_img}}" class="img-fluid" alt="">
			    			<div class="pork-tooltip position-static mx-4">
				    				<img src="storage/app/backend/recipes/sections/{{ $all_section->us_pork_img}}" width="70" class="img-fluid" alt="">
				    				<span>
				    					<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="{{ $all_section->tooltip_txt}}" data-bs-original-title="{{ $all_section->tooltip_txt}}." tabindex="-1"><i class="fa-regular fa-circle-question"></i></a>
				    				</span>
				    			</div>
			    		</div>
			    	</div>
	    		</div>
	    		<div class="col-sm-7 banner-img">
	    			<img src="storage/app/backend/recipes/sections/{{ $all_section->banner_img}}" class="img-fluid" alt="">
	    		</div>
    		</div>
    	</div>	
		<div class="container position-relative">
			<div class="row">
				<img src="public/frontend/images/Corn-Bowl-img.png" class="plate-img plate-img-corn" alt="">
			</div>
		</div>				
	</section>
</section>

<!-- Section 3 -->
<section class="py-5 product-sec pb-0">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 text-center">
				<h3 class="text-uppercase">Conoce las mejores</h3>
				<div class="text-center">
					<div class="placeholder-bg placeholder-bg-red">
						<span>Recetas</span>
					</div>
				</div>
					
				
			</div>
		</div>
		<div class="row justify-content-center mt-5 mb-4">
			<div class="col-sm-3 text-center align-self-center">
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" checked="" value="All" onchange="d1_toggle()">
				  <label class="form-check-label" for="inlineRadio1">All</label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="UsBeef" value="Us Beef" onchange="d1_toggle()">
				  <label class="form-check-label" for="UsBeef">Us Beef</label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="UsPork" value="Us Pork" onchange="d1_toggle()">
				  <label class="form-check-label" for="UsPork">Us Pork</label>
				</div>
			</div>
			<div class="col-sm-3">
				<select class="form-select sel-item" id="single-select-field1" data-placeholder="Tiempo de preparación" onchange="d1_toggle()">
				    <option value="0">-- All -- </option>
					@foreach($minutes as $key)
					<option value="{{$key}}">{{$key}} minutes</option>
					@endforeach
				</select>
			</div>
			<div class="col-sm-3">
				<select class="form-select sel-item" id="single-select-field2" data-placeholder="Rinde hasta" onchange="d1_toggle()">
					<option value="0">-- All -- </option>
				    @foreach($persons as $key)
					<option value="{{$key}}">{{$key}} persons</option>
					@endforeach
				</select>
			</div>
		</div>
		<div class="row justify-content-center filter-text">
			<div class="col-sm-3 text-end">
				<p><i class="fa-regular fa-file-lines"></i><i class="fa-brands fa-youtube"></i>Incluye video e instrucciones paso a paso </p>
			</div>
			<div class="col-sm-3 text-center">
				<p><i class="fa-brands fa-youtube"></i>Solo incluye video paso a paso</p>
			</div>
			<div class="col-sm-3 text-start">
				<p><i class="fa-regular fa-file-lines"></i>Solo incluye instrucciones paso a paso</p>
			</div>
		</div>
		<div class="py-5">
			<div class="container">
				<div class="row" id="recipes-div">
				@foreach($recipe as $key)
					<div class="col-sm-3">
						<div class="card card-item border-0 text-center">
							<figure><a href="recipes-details?key={{ $key->id}}" title="{{ $key->text_1}}"><img src="storage/app/backend/recipes/recipes/{{ $key->img}}" class="card-img-top" alt="..."></a></figure>
						    <div class="card-body">
						      <div class="row">
						        <div class="col-12 action-col">
						          <h6>{{ $key->text_1}}</h6>
						          <p>{{ $key->preparation}} minutes
						          	<span>{{ $key->serves}} persons</span>
								  </p>
								  <div class="card-link">
									@if(($key->check == 1))
										<a href="recipes-details?key=/{{ $key->id}}" target="_blank" title="Solo incluye instrucciones paso a paso">
											<i class="fa-regular fa-file-lines"></i>
										</a>
									@endif
									@if($key->youtube_link == 1)
										<a href="{{ $key->youtube_link}}" target="_blank" title="Solo incluye video paso a paso" class="mx-2">
											<i class="fa-brands fa-youtube"></i>
										</a>
									@endif
									
								  	<div>
										<a href="recipes-details?key={{ $key->id}}">{{ $key->button_text}}</a>						          		
						          	</div>
								  </div>
						        </div>
						      </div>
						    </div>
						</div>
					</div>
					@endforeach
					
			
					
				</div>

				<!-- <div class="row text-center">
				 	<ul class="pagination justify-content-center">
					    <li class="page-item"><a class="page-link active" href="#">1</a></li>
					    <li class="page-item"><a class="page-link" href="#">2</a></li>
					    <li class="page-item"><a class="page-link" href="#">3</a></li>
					</ul>
					
				</div> -->
			</div>
		</div>
	</div>

</section>

<section>
	<div class="container">
		<div class="row text-center app-cta pb-5">
			<p class="mb-0">EN DÓNDE COMPRAR</p>
			<p class="font-lg">LOS MEJORES CORTES</p>
		</div>
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
		<div class="row">
			<div class="col-sm-8 app-download d-flex flex-column justify-content-center">
				<div class="text-center">
					<p>Descarga la App y encuentra lo que estas buscando</p>
					<img src="public/frontend/images/about-us-meat-logo.png" alt="">
					<div class="d-flex justify-content-center align-item-center mt-4">
						<a href="#"><img src="public/frontend/images/play-store.svg" width="120" alt=""></a>
						<a href="#" class="mx-2"><img src="public/frontend/images/app-store.svg" width="120" alt=""></a>
					</div>
				</div>
			</div>
			<div class="col-sm-4"><img src="public/frontend/images/map.png"></div>
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
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="{{ asset('public/frontend/js/custome.js') }}"></script>
<script type="text/javascript">
	$( document ).ready(function() {

		$('.sel-item').select2( {
		    theme:'bootstrap-5'
		});
	});
	function d1_toggle(){
		var radio = $("input[name='inlineRadioOptions']:checked").val();
		var d1 = $('#single-select-field1').val();
		var d2 = $('#single-select-field2').val();
		$.ajax({
			type:'GET',
			url:"recipes/"+radio+"/"+d1+"/"+d2+"",
			success:function(data){
				// $("#district").empty();
				// $("#district").append("<option value='0' selected disabled>-- Select --</option>");
				$("#recipes-div").empty();
				$.each(JSON.parse(data), function(index, value) {
					console.log(value);
					
					$("#recipes-div").append('<div class="col-sm-3"><div class="card card-item border-0 text-center"><figure><a href="#" title="'+value.text_1+'"><img src="storage/app/backend/recipes/recipes/'+value.img+'" class="card-img-top" alt="..."></a></figure><div class="card-body"><div class="row"><div class="col-12"><h6>'+value.text_1+'</h6><p>'+value.preparation+' minutes<span>'+value.serves+' persons</span></p><div class="card-link"><a href="storage/app/backend/recipes/recipes/'+value.documentation+'" title="Solo incluye instrucciones paso a paso"><i class="fa-regular fa-file-lines"></i></a><div><a href="'+value.button_link+'">'+value.button_text+'</a></div></div></div></div></div></div></div>');            
				});
			}
		});
	}
	// function d2_toggle(){
	// 	var radio = $("input[name='inlineRadioOptions']:checked").val();
	// 	var d1 = $('#single-select-field1').val();
	// 	var d2 = $('#single-select-field2').val();
	// 	$.ajax({
	// 		type:'GET',
	// 		url:"recipes/"+radio+"/"+d1+"/"+d2+"",
	// 		success:function(data){
	// 			// $("#district").empty();
	// 			// $("#district").append("<option value='0' selected disabled>-- Select --</option>");
			
	// 			$.each(JSON.parse(data), function(index, value) {
	// 				console.log(value);
	// 				$("#recipes-div").empty();
	// 				$("#recipes-div").append('<div class="col-sm-3"><div class="card card-item border-0 text-center"><figure><a href="#" title="'+value.text_1+'"><img src="storage/app/backend/recipes/recipes/'+value.img+'" class="card-img-top" alt="..."></a></figure><div class="card-body"><div class="row"><div class="col-12"><h6>'+value.text_1+'</h6><p>'+value.preparation+'<span>'+value.serves+'</span></p><div class="card-link"><a href="storage/app/backend/recipes/recipes/'+value.documentation+'" title="Solo incluye instrucciones paso a paso"><i class="fa-regular fa-file-lines"></i></a><div><a href="'+value.button_link+'">'+value.button_text+'</a></div></div></div></div></div></div></div>');
	// 				// if((value.district_code != " ")){
	// 				// 	$("#district").append("<option value="+value.district_code+">"+value.district_name_english+"</option>");
	// 				// }                
	// 			});
	// 		}
	// 	});
	// }
</script>
<style>
	.select2-container--bootstrap-5 .select2-selection, .select2-container--bootstrap-5 .select2-dropdown {
		border-color: #b53a3d;
		border: 1px solid #b53a3d !important;
		padding-top: 3px;
	}
	.action-col:hover .card-link a {
		color: #b53a3d !important;
	}
</style>
</body>
</html>
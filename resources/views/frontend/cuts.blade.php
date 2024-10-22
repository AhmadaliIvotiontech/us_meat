@include('frontend.layouts.main')
<body>


<!-- Section 1 -->
<section class="main-bg main-bg-inner" style=" background: url(storage/app/backend/cuts/sections/{{ $all_section->banner_bg_img}}) no-repeat; background-size: cover;">
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
							<span class="cortes-txt">{{ $all_section->text_1}}</span> <span>{{ $all_section->text_2}}</span>
			    		</h1>
			    		<div class="placeholder-bg">
							<span>{{ $all_section->text_3}}</span>
						</div>
						<div class="text-center">
			    			<img src="public/frontend/images/footer-logo.png" width="200" class="img-fluid" alt="">
			    		</div>
			    		
			    	</div>
	    		</div>
	    		<div class="col-sm-7 banner-img">
	    			<img src="storage/app/backend/cuts/sections/{{ $all_section->banner_img}}" class="cortes-img" alt="">
	    		</div>
    		</div>
    	</div>	
		<div class="container position-relative">
			<div class="row">
				<img src="public/frontend/images/Tomato-Sauce-img.png" class="plate-img" alt="">
			</div>
		</div>				
	</section>
</section>

<!-- Section 2 -->
<section class="into-sec pb-5">
	<div class="container">
		<div class="row mt-4">
			<div class="col-sm-4 px-5">
				<h2>{{ $all_section->text_4}} <span>{{ $all_section->text_5}}</span></h2>
			</div>
			<div class="col-sm-6">
				<p>{{ $all_section->description}} </p>
				<a href="{{ $all_section->btn_link}}">{{ $all_section->btn_txt}}</a>
			</div>			
		</div>		
	</div>
</section>

<!-- Section 3 -->
<section class="py-5 product-sec">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 text-center">
				<div class="placeholder-bg placeholder-bg-red">
						<span>Elige la carne</span>
					</div>
			</div>
			<div class="col-12 text-center mt-5 mb-4">
			
				<div class="form-check form-check-inline">
						<a  class="showSingle" target="1" style="color:black">
				  		<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" checked="" value="All" onchange="d2_toggle()">
				 		 <label class="form-check-label" for="inlineRadio1">All</label>
				  </a>	
				</div>
				
				<div class="form-check form-check-inline">
					<a  class="showSingle" target="1" style="color:black">
				  		<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Us Beef" onchange="d2_toggle()">
				  		<label class="form-check-label" for="inlineRadio2">Us Beef</label>
				  </a>
				</div>
				<div class="form-check form-check-inline" target="2">
					<a class="showSingle" target="3" style="color:black">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="UsPork" value="Us Pork" onchange="d2_toggle()">
					  <label class="form-check-label" for="UsPork">Us Pork</label>
					</a>
				</div>
			</div>
			<div class="col-12 text-center targetDiv" id="div1">
				
				<img src="public/frontend/images/cow-filter-5.png" usemap="#image-map" class="img-fluid" id="clickableImage">

				<map name="image-map">
				    <area alt="Toungue" onclick="d1_toggle('Us Beef','Toungue')" data-target="public/frontend/images/cow-filter-1.png" title="Toungue" href="#1" coords="187,120,15" shape="circle">
				    <area alt="Cheek" onclick="d1_toggle('Us Beef','Cheek')" data-target="public/frontend/images/cow-filter-2.png" title="Cheek" href="#2" coords="217,92,19" shape="circle">
				    <area alt="Neck" onclick="d1_toggle('Us Beef','Neck')" data-target="public/frontend/images/cow-filter-3.png" title="Neck" href="#3" coords="246,129,275,44" shape="rect">
				    <area alt="Chuck" onclick="d1_toggle('Us Beef','Chuck')" data-target="public/frontend/images/cow-filter-4.png" title="Chuck" href="#4" coords="282,140,347,22" shape="rect">
				    <area alt="Rib" onclick="d1_toggle('Us Beef','Rib')" data-target="public/frontend/images/cow-filter-5.png" title="Rib" href="#5" coords="360,23,449,153" shape="rect">
				    <area alt="Short Loin" onclick="d1_toggle('Us Beef','Short Loin')" data-target="public/frontend/images/cow-filter-6.png" title="Short Loin" href="#6" coords="455,154,454,38,516,41,477,68,492,95,504,101,511,101,514,124,512,147,510,157,494,158" shape="poly">
				    <area alt="Tenderloin" onclick="d1_toggle('Us Beef','Tenderloin')" data-target="public/frontend/images/cow-filter-7.png" title="Tenderloin" href="#7" coords="561,61,497,65,488,78,499,86,511,85,532,86,550,86,556,86" shape="poly">
				    <area alt="Sirloin" onclick="d1_toggle('Us Beef','Sirloin')" data-target="public/frontend/images/cow-filter-8.png" title="Sirloin" href="#8" coords="524,39,553,37,557,55,526,59" shape="poly">
				    <area alt="Top Sirloin" onclick="d1_toggle('Us Beef','Top Sirloin')" data-target="public/frontend/images/cow-filter-9.png" title="Top Sirloin" href="#9" coords="526,94,563,89,564,104,522,107" shape="poly">
				    <area alt="Bottom Sirloin" onclick="d1_toggle('Us Beef','Bottom Sirloin')" data-target="public/frontend/images/cow-filter-10.png" title="Bottom Sirloin" href="#10" coords="522,111,562,113,559,164,520,158" shape="poly">
				    <area alt="Round" onclick="d1_toggle('Us Beef','Round')" data-target="public/frontend/images/cow-filter-11.png" title="Round" href="#11" coords="563,34,581,28,596,40,602,67,609,85,614,98,614,124,614,159,607,172,572,172,566,168" shape="poly">
				    <area alt="Tail" onclick="d1_toggle('Us Beef','Tail')" data-target="public/frontend/images/cow-filter-12.png" title="Tail" href="#12" coords="609,47,625,61,630,81,638,96,639,112,645,138,666,173,612,68" shape="poly">
				    <area alt="Shank" onclick="d1_toggle('Us Beef','Shank')" data-target="public/frontend/images/cow-filter-13.png" title="Shank" href="#13" coords="564,179,601,181,616,215,623,240,612,248,588,248,578,240,558,204" shape="poly">
				    <area alt="Flank" onclick="d1_toggle('Us Beef','Flank')" data-target="public/frontend/images/cow-filter-14.png" title="Flank" href="#14" coords="455,161,447,207,475,206,507,200,531,190,554,185,557,177,542,169,514,163" shape="poly">
				    <area alt="Plate" onclick="d1_toggle('Us Beef','Plate')" data-target="public/frontend/images/cow-filter-15.png" title="Plate" href="#15" coords="358,162,444,160,436,211,366,199" shape="poly">
				    <area alt="Shank" onclick="d1_toggle('Us Beef','Shank')" data-target="public/frontend/images/cow-filter-17.png" title="Shank" href="#16" coords="258,140,276,150,301,158,329,160,345,160,358,196,332,208,304,213,291,204,267,176,252,157" shape="poly">
				    <area alt="Brisket" onclick="d1_toggle('Us Beef','Brisket')" data-target="public/frontend/images/cow-filter-16.png" title="Brisket" href="#17" coords="316,214,365,207,358,259,319,262" shape="poly">
				</map>
			</div>
			
			
			<div class="col-12 text-center targetDiv" id="div2" style="display:none;">
				<img src="public/frontend/images/pork1.png" class="img-fluid">
			</div>
			<div class="col-12 text-center targetDiv" id="div3" style="display:none;">
				
				<img src="public/frontend/images/pork2.png" usemap="#image-map-pork" class="img-fluid" id="clickableImagePork">

				<map name="image-map-pork">
				    <area alt="Head"  onclick="d1_toggle('Us Pork','Head')" data-target="public/frontend/images/pork-1.png" title="Head" href="#Pork1" coords="60,222,82,187,113,179,126,163,135,143,136,130,161,112,171,171,192,207,81,263" shape="poly">				    
				    <area alt="Cheek" onclick="d1_toggle('Us Pork','Cheek')" data-target="public/frontend/images/pork-2.png" title="Cheek" href="#Pork2" coords="62,273,107,257,149,234,192,218,238,294,216,297,149,288" shape="poly">
				    <area alt="Clear Plate" onclick="d1_toggle('Us Pork','Clear Plate')" data-target="public/frontend/images/pork-3.png" title="Clear Plate" href="#Pork3" coords="165,101,186,85,209,70,230,59,273,50,297,45,301,72,228,92,196,110,170,128" shape="poly">				    
				    <area alt="4" onclick="d1_toggle('Us Pork','Boston Shoulder')" data-target="public/frontend/images/pork-4.png" title="4" href="#Pork4" coords="174,136,214,114,258,93,292,85,307,90,315,186,276,179,244,185,210,198,200,206,181,175" shape="poly">
				    <area alt="5" onclick="d1_toggle('Us Pork','Picnic')" data-target="public/frontend/images/pork-5.png" title="5" href="#Pork5" coords="201,214,221,202,244,196,270,188,298,192,314,198,309,236,307,298,259,301,222,267" shape="poly">				    
				    <area alt="6" onclick="d1_toggle('Us Pork','Hock')" data-target="public/frontend/images/pork-6.png" title="6" href="#Pork6" coords="267,307,305,306,297,361,275,362" shape="poly">
				    <area alt="7" onclick="d1_toggle('Us Pork','Back Fat')" data-target="public/frontend/images/pork-7.png" title="7" href="#Pork7" coords="308,46,349,47,399,47,433,43,492,44,534,53,511,93,399,78,328,79,312,79" shape="poly">				    
				    <area alt="8" onclick="d1_toggle('Us Pork','Loin')" data-target="public/frontend/images/pork-8.png" title="8" href="#Pork8" coords="314,84,393,86,484,94,502,114,495,184,387,178,318,185" shape="poly">
				    <area alt="9" onclick="d1_toggle('Us Pork','Ribs')" data-target="public/frontend/images/pork-9.png" title="9" href="#Pork9" coords="321,191,490,193,455,256,381,274,319,268" shape="poly">
				    <area alt="10" onclick="d1_toggle('Us Pork','Bacon')" data-target="public/frontend/images/pork-10.png" title="10" href="#Pork10" coords="495,201,513,255,544,298,491,316,477,319,455,320,380,318,316,302,390,282,317,279,316,302,465,263,485,222,453,295" shape="poly">
				    <area alt="11" onclick="d1_toggle('Us Pork','Leg Ham')" data-target="public/frontend/images/pork-11.png" title="11" href="#Pork11" coords="552,288,531,265,511,228,503,176,509,120,525,83,548,66,592,79,626,102,647,123,654,150,656,189,644,236,638,254,636,263" shape="poly">
				    <area alt="12" onclick="d1_toggle('Us Pork','Hock')" data-target="public/frontend/images/pork-12.png" title="12" href="#Pork12" coords="564,293,586,281,625,279,634,301,633,337,597,309,596,309,626,341,619,337" shape="poly">				    
				    <area alt="13" onclick="d1_toggle('Us Pork','Hock')" data-target="public/frontend/images/pork-13.png" title="13" href="#Pork13" coords="562,305,589,317,571,353,553,343,555,345" shape="poly">
				</map>
			</div>


		</div>
		<div class="py-5">
			<div class="container">
				<div class="row text-end">
					<ul class="pagination justify-content-end">
					    <li class="page-item"><a class="page-link active" href="#">1</a></li>
					    <!-- <li class="page-item"><a class="page-link" href="#">2</a></li>
					    <li class="page-item"><a class="page-link" href="#">3</a></li> -->
					</ul>
				</div>
				<div class="row" id="cuts-div">
					@foreach($cuts as $key)
					<div class="col-6 col-sm-3">
						<div class="card card-item border-0 text-center">
							<figure><a href="#" title="CASUELA DE CARNE"><img src="storage/app/backend/cuts/cuts/{{ $key->img}}" class="card-img-top" alt="..."></a></figure>
						    <div class="card-body">
						      <div class="row">
						        <div class="col-12">
						          <h6>{{ $key->text_1}}</h6>
						          <p>{{ $key->text_2}} 
						          	<span>{{ $key->text_3}}</span>
									  {{ $key->text_4}}
								  </p>
						          <a href="{{ $key->button_link}}">{{ $key->button_text}}</a>
						        </div>
						      </div>
						    </div>
						</div>
					</div>
					@endforeach
					
				
				</div>

				<div class="row text-center">
				 	<!-- <ul class="pagination justify-content-right mb-5">
					    <li class="page-item"><a class="page-link active" href="#">1</a></li>
					    <li class="page-item"><a class="page-link" href="#">2</a></li>
					    <li class="page-item"><a class="page-link" href="#">3</a></li>
					</ul> -->
					<span>* El peso mostrado es aproximado y dependera del empaquetado y proceso de concervación </span>
				</div>
			</div>
		</div>
	</div>

	<!-- Assets -->
	<div class="lemon-assets">
		<img src="public/frontend/images/lemon-img.png" alt="">
	</div>
	<div class="tomato-assets">
		<img src="public/frontend/images/tab-right-img.png" alt="">
	</div>
	<div class="paper-assets">
		<img src="public/frontend/images/lettuce-papper-img.png" alt="">
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
<script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
<script src="{{ asset('public/frontend/js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="{{ asset('public/frontend/js/jquery.rwdImageMaps.min.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function(e) {
		$('img[usemap]').rwdImageMaps();
		// Handle click event on image map areas
		$('map[name="image-map"]').on('click', 'area', function () {
			// Get the data-target attribute value
			var targetImage = $(this).data('target');
			
			// Change the source of the clickableImage to the target image
			$('#clickableImage').attr('src', targetImage);
		});

		// Pork
		$('img[usemap="image-map-pork"]').rwdImageMaps();
			// Handle click event on image map areas
		$('map[name="image-map-pork"]').on('click', 'area', function () {
			// Get the data-target attribute value
			var targetImagePork = $(this).data('target');
			
			// Change the source of the clickableImage to the target image
			$('#clickableImagePork').attr('src', targetImagePork);
		});
	});


	jQuery(function(){
			jQuery('#showall').click(function(){
				jQuery('.targetDiv').show();
		});
		jQuery('.showSingle').click(function(){
				jQuery('.targetDiv').hide();
				jQuery('#div'+$(this).attr('target')).show();
				$('img[usemap="image-map-pork"]').rwdImageMaps();
		});
	});

	function d1_toggle(type, part){
		$.ajax({
			type:'GET',
			url:"cuts/"+type+"/"+part+"",
			success:function(data){
				$("#cuts-div").empty();
				$.each(JSON.parse(data), function(index, value) {
					$("#cuts-div").append('<div class="col-6 col-sm-3"><div class="card card-item border-0 text-center"><figure><a href="#" title="CASUELA DE CARNE"><img src="storage/app/backend/cuts/cuts/'+value.img+'" class="card-img-top" alt="..."></a></figure><div class="card-body"><div class="row"><div class="col-12"><h6>'+value.text_1+'</h6><p>'+value.text_2+' <span>'+value.text_3+'</span>'+value.text_4+'</p><a href="'+value.button_link+'">'+value.button_text+'</a></div></div></div></div></div>');            
				});
			}
		});
	}
	function d2_toggle(){
		var radio = $("input[name='inlineRadioOptions']:checked").val();
		$.ajax({
			type:'GET',
			url:"cuts/"+radio+"",
			success:function(data){
				$("#cuts-div").empty();
				$.each(JSON.parse(data), function(index, value) {
					$("#cuts-div").append('<div class="col-6 col-sm-3"><div class="card card-item border-0 text-center"><figure><a href="#" title="CASUELA DE CARNE"><img src="storage/app/backend/cuts/cuts/'+value.img+'" class="card-img-top" alt="..."></a></figure><div class="card-body"><div class="row"><div class="col-12"><h6>'+value.text_1+'</h6><p>'+value.text_2+' <span>'+value.text_3+'</span>'+value.text_4+'</p><a href="'+value.button_link+'">'+value.button_text+'</a></div></div></div></div></div>');            
				});
			}
		});
	}
</script>
</body>
</html>
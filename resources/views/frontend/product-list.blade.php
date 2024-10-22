<!DOCTYPE html>
  <html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta content="Codescandy" name="author">
  <title>US Meat</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/frontend/images/favicon.png') }}">

  <link href="{{ asset('public/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/> 
  <link href="{{ asset('public/frontend/css/style.css') }}" rel="stylesheet"> 
</head>
<body>


<!-- Section 1 -->
<section class="main-bg main-bg-inner">
	<!-- Header -->
	<header>
		<nav class="navbar navbar-expand-lg navbar-light pt-4">
			<div class="container">
				
					<div class="col-sm-2">
						<a class="navbar-brand" href="#"><img src="{{ asset('public/frontend/images/logo.png') }}" alt=""></a>
					</div>
					<div class="col-sm-10">
						<ul class="navbar-nav sm-icons justify-content-end">
					        <li><a class="nav-link" href="#"><i class="bi bi-facebook"></i></a></li>
					        <li><a class="nav-link" href="#"><i class="bi bi-instagram"></i></a></li>
					        <li><a class="nav-link" href="#"><i class="bi bi-twitter"></i></a></li>
					        <li><a class="nav-link" href="#"><i class="bi bi-pinterest"></i></a></li>
					    </ul>
						<div class="row">
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
							  <ul class="navbar-nav ms-auto">
							    <li class="nav-item">
							      <a class="nav-link active" aria-current="page" href="#">SOBRE NOSOTROS </a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link" href="#">CORTES DE CARNE</a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link" href="#">RECETAS</a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link" href="#">EXPERIENCIAS</a>
							    </li>
							    <li class="nav-item mx-0">
							      <a class="nav-link" href="#">eN DÓNDE COMPRAR</a>
							    </li>
							  </ul>
							</div>
						</div>
					</div>
			</div>
		</nav>
	</header>

	<section class="position-relative">
		<div class="container">
    		<div class="row align-items-center">
	    		<div class="col-sm-5 slider-item">
	    			<div class="slider-item-content text-start">
			    		<h1>
			    			<span class="cortes-txt">CORTES</span> <span>de carne</span>
			    		</h1>
			    		<div>
			    			<img src="{{ asset('public/frontend/images/cortes-text.png') }}" class="img-fluid" alt="">
			    		</div>
			    		
			    	</div>
	    		</div>
	    		<div class="col-sm-7 banner-img">
	    			<img src="{{ asset('public/frontend/images/cortes-img.png') }}" class="" alt="">
	    		</div>
    		</div>
    	</div>	
		<div class="container position-relative">
			<div class="row">
				<img src="{{ asset('public/frontend/images/Tomato-Sauce-img.png') }}" class="plate-img" alt="">
			</div>
		</div>				
	</section>
</section>

<!-- Section 2 -->
<section class="into-sec pb-5">
	<div class="container">
		<div class="row mt-4">
			<div class="col-sm-4 px-5">
				<h2>calidad <span>y frescura</span></h2>
			</div>
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum su spendisse ultrices gravida. Risus commodo viverra maecenas
				accumsan lacus vel facilisis. </p>
				<a href="#">conoce más</a>
			</div>			
		</div>		
	</div>
</section>

<!-- Section 3 -->
<section class="py-5 product-sec">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 text-center">
				<img src="{{ asset('public/frontend/images/Elige-title.png') }}" alt="">
			</div>
			<div class="col-12 text-center mt-5 mb-4">
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" checked="" value="option1">
				  <label class="form-check-label" for="inlineRadio1">All</label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="UsBeef" value="UsBeefOption">
				  <label class="form-check-label" for="UsBeef">Us Beef</label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="UsPork" value="UsPorkOption">
				  <label class="form-check-label" for="UsPork">Us Pork</label>
				</div>
			</div>
			<div class="col-12 text-center">
				<img src="{{ asset('public/frontend/images/cow-filter.png') }}" alt="">
			</div>
		</div>
		<div class="py-5">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<div class="card card-item border-0 text-center">
							<figure><a href="#" title="CASUELA DE CARNE"><img src="{{ asset('public/frontend/images/plate-1.png') }}" class="card-img-top" alt="..."></a></figure>
						    <div class="card-body">
						      <div class="row">
						        <div class="col-12">
						          <h6>Casuela de carne</h6>
						          <p>Pierna 
						          	<span>80/20</span>
									770gr*
								  </p>
						          <a href="#">ver más</a>
						        </div>
						      </div>
						    </div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="card card-item border-0 text-center">
							<figure><a href="#" title="lomo alto"><img src="{{ asset('public/frontend/images/LOMOALTO.png') }}" class="card-img-top" alt="..."></a></figure>
						    
						    <div class="card-body">
						      <div class="row">
						        <div class="col-12">
						          <h6>lomo alto</h6>
						          <p>Lomo
						          	<span>40/20</span>
									450gr*
								  </p>
						          <a href="#">ver más</a>
						        </div>
						      </div>
						    </div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="card card-item border-0 text-center">
						   <figure><a href="#" title="CASUELA DE CARNE"><img src="{{ asset('public/frontend/images/plate-1.png') }}" class="card-img-top" alt="..."></a></figure>
						    <div class="card-body">
						      <div class="row">
						        <div class="col-12">
						          <h6>new york</h6>
						          <p>Espalda 
						          	<span>80/20</span>
									430gr*
								  </p>
						          <a href="#">ver más</a>
						        </div>
						      </div>
						    </div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="card card-item border-0 text-center">
						    <figure><a href="#" title="CASUELA DE CARNE"><img src="{{ asset('public/frontend/images/plate-1.png') }}" class="card-img-top" alt="..."></a></figure>
						    <div class="card-body">
						      <div class="row">
						        <div class="col-12">
						          <h6>rib eye</h6>
						          <p>Cabeza 
						          	<span>40/60</span>
									650gr*
								  </p>
						          <a href="#">ver más</a>
						        </div>
						      </div>
						    </div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="card card-item border-0 text-center">
							<figure><a href="#" title="CASUELA DE CARNE"><img src="{{ asset('public/frontend/images/plate-1.png') }}" class="card-img-top" alt="..."></a></figure>
						    <div class="card-body">
						      <div class="row">
						        <div class="col-12">
						          <h6>Casuela de carne</h6>
						          <p>Pierna 
						          	<span>80/20</span>
									770gr*
								  </p>
						          <a href="#">ver más</a>
						        </div>
						      </div>
						    </div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="card card-item border-0 text-center">
							<figure><a href="#" title="lomo alto"><img src="{{ asset('public/frontend/images/LOMOALTO.png') }}" class="card-img-top" alt="..."></a></figure>
						    
						    <div class="card-body">
						      <div class="row">
						        <div class="col-12">
						          <h6>lomo alto</h6>
						          <p>Lomo
						          	<span>40/20</span>
									450gr*
								  </p>
						          <a href="#">ver más</a>
						        </div>
						      </div>
						    </div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="card card-item border-0 text-center">
						   <figure><a href="#" title="CASUELA DE CARNE"><img src="{{ asset('public/frontend/images/plate-1.png') }}" class="card-img-top" alt="..."></a></figure>
						    <div class="card-body">
						      <div class="row">
						        <div class="col-12">
						          <h6>new york</h6>
						          <p>Espalda 
						          	<span>80/20</span>
									430gr*
								  </p>
						          <a href="#">ver más</a>
						        </div>
						      </div>
						    </div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="card card-item border-0 text-center">
						    <figure><a href="#" title="CASUELA DE CARNE"><img src="{{ asset('public/frontend/images/plate-1.png') }}" class="card-img-top" alt="..."></a></figure>
						    <div class="card-body">
						      <div class="row">
						        <div class="col-12">
						          <h6>rib eye</h6>
						          <p>Cabeza 
						          	<span>40/60</span>
									650gr*
								  </p>
						          <a href="#">ver más</a>
						        </div>
						      </div>
						    </div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="card card-item border-0 text-center">
							<figure><a href="#" title="CASUELA DE CARNE"><img src="{{ asset('public/frontend/images/plate-1.png') }}" class="card-img-top" alt="..."></a></figure>
						    <div class="card-body">
						      <div class="row">
						        <div class="col-12">
						          <h6>Casuela de carne</h6>
						          <p>Pierna 
						          	<span>80/20</span>
									770gr*
								  </p>
						          <a href="#">ver más</a>
						        </div>
						      </div>
						    </div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="card card-item border-0 text-center">
							<figure><a href="#" title="lomo alto"><img src="{{ asset('public/frontend/images/LOMOALTO.png') }}" class="card-img-top" alt="..."></a></figure>
						    
						    <div class="card-body">
						      <div class="row">
						        <div class="col-12">
						          <h6>lomo alto</h6>
						          <p>Lomo
						          	<span>40/20</span>
									450gr*
								  </p>
						          <a href="#">ver más</a>
						        </div>
						      </div>
						    </div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="card card-item border-0 text-center">
						   <figure><a href="#" title="CASUELA DE CARNE"><img src="{{ asset('public/frontend/images/plate-1.png') }}" class="card-img-top" alt="..."></a></figure>
						    <div class="card-body">
						      <div class="row">
						        <div class="col-12">
						          <h6>new york</h6>
						          <p>Espalda 
						          	<span>80/20</span>
									430gr*
								  </p>
						          <a href="#">ver más</a>
						        </div>
						      </div>
						    </div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="card card-item border-0 text-center">
						    <figure><a href="#" title="CASUELA DE CARNE"><img src="{{ asset('public/frontend/images/plate-1.png') }}" class="card-img-top" alt="..."></a></figure>
						    <div class="card-body">
						      <div class="row">
						        <div class="col-12">
						          <h6>rib eye</h6>
						          <p>Cabeza 
						          	<span>40/60</span>
									650gr*
								  </p>
						          <a href="#">ver más</a>
						        </div>
						      </div>
						    </div>
						</div>
					</div>
				</div>

				<div class="row text-center">
				 	<ul class="pagination justify-content-center mb-5">
					    <li class="page-item"><a class="page-link active" href="#">1</a></li>
					    <li class="page-item"><a class="page-link" href="#">2</a></li>
					    <li class="page-item"><a class="page-link" href="#">3</a></li>
					</ul>
					<span>* El peso mostrado es aproximado y dependera del empaquetado y proceso de concervación </span>
				</div>
			</div>
		</div>
	</div>

	<!-- Assets -->
	<div class="lemon-assets">
		<img src="{{ asset('public/frontend/images/lemon-img.png') }}" alt="">
	</div>
	<div class="tomato-assets">
		<img src="{{ asset('public/frontend/images/tab-right-img.png') }}" alt="">
	</div>
	<div class="paper-assets">
		<img src="{{ asset('public/frontend/images/lettuce-papper-img.png') }}" alt="">
	</div>
</section>


<!-- Footer -->
<footer class="footer">
  <div class="container">
    <div class="row g-4 py-4">
      <div class="col-12 col-md-12 col-lg-5 align-self-baseline pe-5">
       		<img src="{{ asset('public/frontend/images/footer-logo.png') }}" class="img-fluid">
       		<p class="mt-4 mx-4">© Todos los derechos reservados. US Meat. 2023</p>
      </div>
      <div class="col-12 col-md-12 col-lg-7">
        <div class="row g-4">
          <div class="col-6 col-sm-6 col-md-3">
           
          </div>
          <div class="col-6 col-sm-6 col-md-3">
            
          </div>
          
          <div class="col-6 col-sm-6 col-md-4">
            <h5 class="mb-3 mt-4 text-center"> Contáctanos</h5>
			<ul class="nav flex-column">
              <li><p><span class="d-block mt-2 font-16 text-center"><img src="{{ asset('public/frontend/images/email-icon.png') }}" class="img-fluid mr-2"> info@usmef.org.mx </span></p></li>
            </ul>
            <ul class="list-inline mb-0 small mt-3 mt-md-0 text-center">
            <li class="list-inline-item  me-1">
              <a href="#!" class="btn btn-xs btn-social btn-icon py-2 px-1">
              	<i class="fa-brands fa-facebook-f"></i>
              </a></li>
            <li class="list-inline-item  me-1">
              <a href="#!" class="btn btn-xs btn-social btn-icon py-2 px-1">
              	<i class="fa-brands fa-twitter"></i>
              </a></li>
            <li class="list-inline-item  me-1">
              <a href="#!" class="btn btn-xs btn-social btn-icon py-2 px-1">
              	<i class="fa-brands fa-instagram"></i></a></li>
            <li class="list-inline-item ">
              <a href="#!" class="btn btn-xs btn-social btn-icon py-2 px-1">
              	<i class="fa-brands fa-linkedin-in"></i>
              </a></li>
          </ul>
          </div>
		  <div class="col-6 col-sm-6 col-md-2">
            
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>


<!-- Javascript-->
<script src="{{ asset('public/frontend/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/frontend/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
</html>
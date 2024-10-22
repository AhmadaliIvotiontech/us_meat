@extends('backend.layouts.admin.master.main')

@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Añadir Receta</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('masterDashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Añadir Receta</li>
            </ol>
        </div>
    </div>
</div>
@endsection
@section('title') Añadir Receta @endsection
@section('content')
@section('content')
<script src="{{ asset('public/backend/assets/admin/master/recipes/recipes/add.js') }}" type="text/javascript"></script>
<link href="{{ asset('public/node_modules/html5-editor/bootstrap-wysihtml5.css') }}" rel="stylesheet">
<script src="{{ asset('public/node_modules/html5-editor/wysihtml5-0.3.0.js') }}"></script>
<script src="{{ asset('public/node_modules//html5-editor/bootstrap-wysihtml5.js') }}"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/docsearch.js/1/docsearch.min.css">
<script src="https://cdn.ckeditor.com/4.18.0/full-all/ckeditor.js"></script>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <input type="hidden" id="check_success" value="0">
                <center><p style="color:red;">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
                </p>
                @if(session()->has('status-s'))
                    <div class="alert alert-success enq-msg-mAdmin text-center">
                        {{ session()->get('status-s') }}
                    </div>
                @elseif(session()->has('status-f'))
                    <div class="alert alert-danger enq-msg-mAdmin text-center">
                        {{ session()->get('status-f') }}
                    </div>
                @else

                @endif 
                </center>
                <h3 class="box-title">Añadir Receta</h3>
                <hr class="m-t-0 m-b-40">
                <form method="post" id="Add_Form" action="{{ route('add_recipes_post') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Tipo de receta</label>
                                <select class="form-control" name="type" id="type">
                                    <option value="" selected="" disabled="">Select Type</option>
                                    <option value="Us Beef">Us Beef</option>
                                    <option value="Us Pork">Us Pork</option>
                                </select>
                                <label id="type-error">
                            </label></div>
                        </div>
    
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Nombre de la receta</label>
                                <input type="text" id="text_1" name="text_1" class="form-control "  placeholder="Nombre de la receta">
                                <label id="text_1-error" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Texto del enlace</label>
                                <input type="text" id="button_text" name="button_text" class="form-control "  placeholder="Texto del enlace">
                                <label id="button_text-error" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Tiempo de preparación </label>
                                <input type="number" min="0" id="preparation" name="preparation" class="form-control "  placeholder="Tiempo de preparación ">
                                <label id="preparation-error" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Capacidad para</label>
                                <input type="number" min="0" id="serves" name="serves" class="form-control "  placeholder="Capacidad para">
                                <label id="serves-error" />
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Enlace de youtube</label>
                                <input type="text" id="youtube_link" name="youtube_link" class="form-control "  placeholder="Enlace de youtube">
                                <label id="youtube_link-error" />
                            </div>
                        </div>  -->

                                                
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Imagen de la receta</label>
                                <input type="file" id="img" class="form-control" name="img"><br>
                                <small>Imagen Size: 260 x 366</small>
                                <label id="img-error" />
                            </div>
                        </div>
                        <h5 class="box-title">Sección 1</h5>
                        <hr class="m-t-0 m-b-40">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Titulo de la receta en negro</label>
                                <input type="text" id="rd_text_1" name="rd_text_1" class="form-control "  placeholder="Titulo de la receta en negro" >
                                <small class="form-control-feedback"> eg: Estofado  </small><br>
                                <label id="rd_text_1-error" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Titulo de la receta en rojo</label>
                                <input type="text" id="text_2" name="text_2" class="form-control "  placeholder="Titulo de la receta en rojo" >
                                <small class="form-control-feedback"> eg: Costilla  </small><br>
                                <label id="text_2-error" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Banner Text 3</label>
                                <input type="text" id="text_3" name="text_3" class="form-control "  placeholder="Enter Banner Text 3">
                                <small class="form-control-feedback"> eg: Corta  </small><br>
                                <label id="text_3-error" />
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Banner Image </label>
                                <input type="file" id="banner_img" class="form-control" name="banner_img">
                                <small>Image Size: 1043 x 749</small>
                                <input type="hidden" id="temp_banner_img" class="form-control" name="temp_banner_img"><br>
                                <label id="banner_img-error" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Imagen de fondo del banner</label>
                                <input type="file" id="banner_bg_img" class="form-control" name="banner_bg_img">
                                <small>Image Size: 1440 x 816</small>
                                <input type="hidden" id="temp_banner_bg_img" class="form-control" name="temp_banner_bg_img"><br>
                                <label id="banner_bg_img-error" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <span class="label label-rounded label-inverse" style="padding: 10px !important;">Show YouTube Section</span> <br>
                            <div class="btn-group" data-bs-toggle="buttons">                                
                                <label class="btn btn-secondary border-0 text-info font-weight-medium active">
                                    <div class="form-check">
                                        <input type="radio" id="YouTubeShowNo" value="0" name="YouTubecheck" class="with-gap material-inputs radio-col-red form-check-input" checked="" onchange="YouTubechecktoggle()">
                                        <label class="form-check-label" for="YouTubeShowNo"><span class="d-block d-md-none">1</span><span class="d-none d-md-block">No</span></label>
                                    </div>
                                </label>
                                <label class="btn btn-secondary border-0 text-info font-weight-medium">
                                    <div class="form-check">
                                        <input type="radio" id="YouTubeShowYes" value="1" name="YouTubecheck" class="with-gap material-inputs radio-col-red form-check-input" onchange="YouTubechecktoggle()">
                                        <label class="form-check-label" for="YouTubeShowYes"><span class="d-block d-md-none">2</span><span class="d-none d-md-block">Yes</span></label>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <br>
                        <div id="YouTubeShowHide" style="display:none">
                            <h5 class="box-title">Sección 2</h5>
                            <hr class="m-t-0 m-b-40">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Imagen del video </label>
                                        <input type="file" id="video_img" class="form-control" name="video_img">
                                        <small>Image Size: 568 x 379</small>
                                        <input type="hidden" id="temp_video_img" class="form-control" name="temp_video_img"><br>
                                        <label id="video_img-error" />
                                    </div>
                                </div>        
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Titulo del video en negro </label>
                                        <input type="text" id="video_text_1" name="video_text_1" class="form-control "  placeholder="Titulo del video en negro " >
                                        <small class="form-control-feedback"> eg: FÁCILES  </small><br>
                                        <label id="video_text_1-error" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Titulo del video en azul</label>
                                        <input type="text" id="video_text_2" name="video_text_2" class="form-control "  placeholder="Titulo del video en azul">
                                        <small class="form-control-feedback"> eg: y rápidas  </small><br>
                                        <label id="video_text_2-error" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Youtube Link</label>
                                        <input type="text" id="video_link" name="video_link" class="form-control "  placeholder="Youtube Link">
                                        <small class="form-control-feedback"> eg: https://www.youtube.com/  </small><br>
                                        <label id="video_link-error" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Descripción del video </label>
                                        <textarea class="form-control" rows="5" id="video_text_description" name="video_text_description"></textarea>
                                        <label id="video_text_description-error" />
                                    </div>
                                </div>
                            </div>
                            
                           
                        </div>
                        <div class="col-md-12">
                            <span class="label label-rounded label-inverse" style="padding: 10px !important;">Show Recipe Details</span> <br>
                            <div class="btn-group" data-bs-toggle="buttons">
                                
                                <label class="btn btn-secondary border-0 text-info font-weight-medium active">
                                    <div class="form-check">
                                        <input type="radio" id="ShowNo" value="0" name="check" class="with-gap material-inputs radio-col-red form-check-input" checked="" onchange="checktoggle()">
                                        <label class="form-check-label" for="ShowNo"><span class="d-block d-md-none">1</span><span class="d-none d-md-block">No</span></label>
                                    </div>
                                </label>
                                <label class="btn btn-secondary border-0 text-info font-weight-medium">
                                    <div class="form-check">
                                        <input type="radio" id="ShowYes" value="1" name="check" class="with-gap material-inputs radio-col-red form-check-input" onchange="checktoggle()">
                                        <label class="form-check-label" for="ShowYes"><span class="d-block d-md-none">2</span><span class="d-none d-md-block">Yes</span></label>
                                    </div>
                                </label>
                            </div>
                        </div>
                        
                        <div id="ShowHide" style="display:none">                       
                            
                            <h5 class="box-title">Sección 3</h5>
                            <hr class="m-t-0 m-b-40">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Subtitulo o Eslogan de Ingredientes</label>
                                        <input type="text" id="ingredientes_text_1" name="ingredientes_text_1" class="form-control "  placeholder="Subtitulo o Eslogan de Ingredientes">
                                        <small class="form-control-feedback"> eg: PREPARA TUS  </small><br>
                                        <label id="ingredientes_text_1-error" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Subtitulo en azul</label>
                                        <input type="text" id="ingredientes_text_2" name="ingredientes_text_2" class="form-control "  placeholder="Subtitulo en azul" >
                                        <small class="form-control-feedback"> eg: Ingredientes  </small><br>
                                        <label id="ingredientes_text_2-error" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Ingredientes</label>
                                        <textarea class="form-control" rows="5" id="ingredientes" name="ingredientes"></textarea>
                                        <label id="ingredientes-error" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Imagen de los ingredientes </label>
                                        <input type="file" id="ingredientes_img" class="form-control" name="ingredientes_img">
                                        <small>Image Size: 751 x 377</small>
                                        <input type="hidden" id="temp_ingredientes_img" class="form-control" name="temp_ingredientes_img" ><br>
                                        <label id="ingredientes_img-error" />
                                    </div>
                                </div>
                                <h5 class="box-title">Sección 4</h5>
                                <hr class="m-t-0 m-b-40">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Titulo Preparación</label>
                                        <input type="text" id="preparation_text_1" name="preparation_text_1" class="form-control "  placeholder="Titulo Preparación" >
                                        <small class="form-control-feedback"> eg: PREPARACIÓN  </small><br>
                                        <label id="preparation_text_1-error" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Tiempo de preparación</label>
                                        <input type="text" id="preparation_text_2" name="preparation_text_2" class="form-control "  placeholder="Tiempo de preparación" >
                                        <small class="form-control-feedback"> eg: 30 minutos  </small><br>
                                        <label id="preparation_text_2-error" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Descripción de la preparación</label>
                                        <textarea class="form-control" rows="5" id="preparation_description" name="preparation_description"></textarea>
                                        <label id="preparation_description-error" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Paso 1 de la preparación</label>
                                        <textarea class="form-control" rows="5" id="preparation_description_1" name="preparation_description_1"></textarea>
                                        <label id="preparation_description_1-error" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Paso 2 de la preparación</label>
                                        <textarea class="form-control" rows="5" id="preparation_description_2" name="preparation_description_2"></textarea>
                                        <label id="preparation_description_2-error" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Paso 3 de la preparación</label>
                                        <textarea class="form-control" rows="5" id="preparation_description_3" name="preparation_description_3"></textarea>
                                        <label id="preparation_description_3-error" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Imagen de la preparación</label>
                                        <input type="file" id="preparation_img" class="form-control" name="preparation_img">
                                        <small>Imagen Size: 583 x 355</small>
                                        <input type="hidden" id="temp_preparation_img" class="form-control" name="temp_preparation_img" ><br>
                                        <label id="preparation_img-error" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Imagen del platillo terminado</label>
                                        <input type="file" id="preparation_img_full" class="form-control" name="preparation_img_full">
                                        <small>Image Size: 908 x 400</small>
                                        <input type="hidden" id="temp_preparation_img_full" class="form-control" name="temp_preparation_img_full"><br>
                                        <label id="preparation_img_full-error" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Texto del enlace </label>
                                        <input type="text" id="btn_txt" name="btn_txt" class="form-control "  placeholder="Texto del enlace " >
                                        <small class="form-control-feedback"> eg: El corte que usamos los puedes ver y comprar aquí  </small><br>
                                        <label id="btn_txt-error" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Url del enlace</label>
                                        <input type="text" id="btn_link" name="btn_link" class="form-control "  placeholder="Url del enlace">
                                        <small class="form-control-feedback"> eg: http://localhost/us_meat/  </small><br>
                                        <label id="btn_link-error" />
                                    </div>
                                </div>
                                
                            </div>
                        </div>                            
                    </div>                    
                    <div class="row">
                        <div class="col-md-6"><br>
                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="status_active" name="status" value="1" class="form-check-input">
                                    <label class="form-check-label" for="status_active">Activo</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="status_deactive" name="status" value="0" class="form-check-input">
                                    <label class="form-check-label" for="status_deactive">Inactivo</label>
                                </div>
                                <label id="statusCheck" />                                        
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="button" onClick="validateForm()" class="btn btn-dark text-white"> <i class="fa fa-check"></i> Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</style>
<script type="text/javascript">

   function category_toggle(){    
        var category = $('#category').val();
        if(category == 'Us Beef'){
            $('#sub_category').empty();
            $('#sub_category').append('<option value="" selected="" disabled="">Select Cuts Sub category</option><option value="Cheek">Cheek</option><option value="Toungh">Toungh</option><option value="Neck">Neck</option><option value="Chunk">Chunk</option><option value="Rib">Rib</option><option value="Brisket">Brisket</option><option value="Shank">Shank</option><option value="Plate">Plate</option><option value="Short Loin">Short Loin</option><option value="Flank">Flank</option><option value="Sirloin">Sirloin</option><option value="Tenderloin">Tenderloin</option><option value="Top Sirloin">Top Sirloin</option><option value="Bottom Sirloin">Bottom Sirloin</option><option value="Round">Round</option>');
        }else{
            $('#sub_category').empty();
            $('#sub_category').append('<option value="" selected="" disabled="">Select Cuts Sub category</option><option value="Cheek">Cheek</option><option value="Toungh">Toungh</option><option value="Neck">Neck</option><option value="Chunk">Chunk</option><option value="Rib">Rib</option><option value="Brisket">Brisket</option><option value="Shank">Shank</option><option value="Plate">Plate</option><option value="Short Loin">Short Loin</option><option value="Flank">Flank</option><option value="Sirloin">Sirloin</option><option value="Tenderloin">Tenderloin</option><option value="Top Sirloin">Top Sirloin</option><option value="Bottom Sirloin">Bottom Sirloin</option><option value="Round">Round</option>');
        }
    }
    function checktoggle() {
        var check=$("input[name='check']:checked").val();
        if(check == 1){
            $('#ShowHide').show();
        }else{
            $('#ShowHide').hide();
            
        }
    }
    function YouTubechecktoggle() {
        var check=$("input[name='YouTubecheck']:checked").val();
        if(check == 1){
            $('#YouTubeShowHide').show();
        }else{
            $('#YouTubeShowHide').hide();
            
        }
    }

</script>
@endsection

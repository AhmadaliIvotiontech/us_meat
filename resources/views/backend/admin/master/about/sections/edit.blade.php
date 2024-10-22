@extends('backend.layouts.admin.master.main')

@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Editar Secciones </h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('masterDashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Editar Secciones </li>
            </ol>
        </div>
    </div>
</div>
@endsection
@section('title') Editar Secciones  @endsection
@section('content')
<script src="{{ asset('public/backend/assets/admin/master/about/sections/edit.js') }}" type="text/javascript"></script>
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
                    <form method="post" id="Update_Form" action="{{ route('updateAboutSectionPost') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row">
                            <h5 class="box-title">Sección 1</h5>
                            <hr class="m-t-0 m-b-40">
                            <div class="col-md-3">
                                <div class="form-group" style="text-align: center;">  
                                    <?php $url = 'storage/app/backend/about/sections/'.$all_data['banner_img'];  ?>
                                    <img src="{{ asset($url) }}" style="height: 125px; width: $all_data;">
                                    <span class="label label-rounded label-inverse">Current Image</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Imagen de fondo del banner</label>
                                    <input type="file" id="banner_img" class="form-control" name="banner_img">
                                    <small>Image Size: 1440 x 717</small>
                                    <input type="hidden" id="temp_banner_img" class="form-control" name="temp_banner_img" value="{{ $all_data->banner_img }}">
                                    <label id="banner_img-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Enlace del video</label>
                                    <input type="file" id="video_link" name="video_link" class="form-control "  placeholder="Enter Video Link" value="{{ $all_data->video_link }}">
                                    <input type="hidden" id="id" name="id" class="form-control" value="{{ $all_data->id }}">
                                    <small class="form-control-feedback"> Format: MP4  </small><br>
                                    <input type="hidden" id="temp_video_link" class="form-temp_video_link" name="temp_banner_img" value="{{ $all_data->video_link }}">
                                    <label id="video_link-error" />
                                </div>
                            </div>
                            <h5 class="box-title">Sección 2</h5>
                            <hr class="m-t-0 m-b-40">
                            <div class="col-md-3">
                                <div class="form-group" style="text-align: center;">  
                                    <?php $url = 'storage/app/backend/about/sections/'.$all_data['us_meat_img'];  ?>
                                    <img src="{{ asset($url) }}" style="height: 125px; width: $all_data;">
                                    <span class="label label-rounded label-inverse">Current Image</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Imagen US MEAT</label>
                                    <input type="file" id="us_meat_img" class="form-control" name="us_meat_img">
                                    <small>Image Size: 71 x 62</small>
                                    <input type="hidden" id="temp_us_meat_img" class="form-control" name="temp_us_meat_img" value="{{ $all_data->us_meat_img }}">
                                    <label id="us_meat_img-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Texto de la Imagen de US MEAT </label>
                                    <input type="text" id="us_meat_tooltip_txt" name="us_meat_tooltip_txt" class="form-control "  placeholder="Texto de la Imagen de US MEAT " value="{{ $all_data->us_meat_tooltip_txt }}">
                                    <small class="form-control-feedback"> eg: Lorem ipsum dolor sit amet  </small><br>
                                    <label id="us_meat_tooltip_txt-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Descripción de US MEAT</label>
                                    <textarea class="form-control" rows="5" id="us_meat_description" name="us_meat_description">{{ $all_data->us_meat_description }}</textarea>
                                    <label id="us_meat_description-error" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" style="text-align: center;">  
                                    <?php $url = 'storage/app/backend/about/sections/'.$all_data['us_beef_img'];  ?>
                                    <img src="{{ asset($url) }}" style="height: 125px; width: $all_data;">
                                    <span class="label label-rounded label-inverse">Current Image</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Imagen de US BEEF</label>
                                    <input type="file" id="us_beef_img" class="form-control" name="us_beef_img">
                                    <small>Imagen Size: 66 x 49</small>
                                    <input type="hidden" id="temp_us_beef_img" class="form-control" name="temp_us_beef_img" value="{{ $all_data->us_beef_img }}">
                                    <label id="us_beef_img-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Texto de la Imagen de US BEEF</label>
                                    <input type="text" id="us_beef_tooltip_txt" name="us_beef_tooltip_txt" class="form-control "  placeholder="Texto de la Imagen de US BEEF" value="{{ $all_data->us_beef_tooltip_txt }}">
                                    <small class="form-control-feedback"> eg: Lorem ipsum dolor sit amet  </small><br>
                                    <label id="us_beef_tooltip_txt-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Descripción de US BEEFn</label>
                                    <textarea class="form-control" rows="5" id="us_beef_description" name="us_beef_description">{{ $all_data->us_beef_description }}</textarea>
                                    <label id="us_beef_description-error" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" style="text-align: center;">  
                                    <?php $url = 'storage/app/backend/about/sections/'.$all_data['us_pork_img'];  ?>
                                    <img src="{{ asset($url) }}" style="height: 125px; width: $all_data;">
                                    <span class="label label-rounded label-inverse">Current Image</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Imagen de US PORK</label>
                                    <input type="file" id="us_pork_img" class="form-control" name="us_pork_img">
                                    <small>Imagen Size: 96 x 42</small>
                                    <input type="hidden" id="temp_us_pork_img" class="form-control" name="temp_us_pork_img" value="{{ $all_data->us_pork_img }}">
                                    <label id="us_pork_img-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Texto de la Imagen de US PORK</label>
                                    <input type="text" id="us_pork_tooltip_txt" name="us_pork_tooltip_txt" class="form-control "  placeholder="Texto de la Imagen de US PORK" value="{{ $all_data->us_pork_tooltip_txt }}">
                                    <small class="form-control-feedback"> eg: Lorem ipsum dolor sit amet  </small><br>
                                    <label id="us_pork_tooltip_txt-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Description de US PORK</label>
                                    <textarea class="form-control" rows="5" id="us_pork_description" name="us_pork_description">{{ $all_data->us_pork_description }}</textarea>
                                    <label id="us_pork_description-error" />
                                </div>
                            </div>
                            <h5 class="box-title">Sección 3</h5>
                            <hr class="m-t-0 m-b-40">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Subtitulo en Negro</label>
                                    <input type="text" id="text_1" name="text_1" class="form-control "  placeholder="Subtitulo en Negro" value="{{ $all_data->text_1 }}">
                                    <small class="form-control-feedback"> eg: INFORMACIÓN  </small><br>
                                    <label id="text_1-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Subtitulo en Azul</label>
                                    <input type="text" id="text_2" name="text_2" class="form-control "  placeholder="Subtitulo en Azul" value="{{ $all_data->text_2 }}">
                                    <small class="form-control-feedback"> eg: de mercado  </small><br>
                                    <label id="text_2-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Descripción</label>
                                    <textarea class="form-control" rows="5" id="description" name="description">{{ $all_data->description }}</textarea>
                                    <label id="description-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Button text</label>
                                    <input type="text" id="btn_txt" name="btn_txt" class="form-control "  placeholder="Enter Banner Button Text" value="{{ $all_data->btn_txt }}">
                                    <small class="form-control-feedback"> eg: CONOCE MÁS  </small><br>
                                    <label id="btn_txt-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Button Link</label>
                                    <input type="text" id="btn_link" name="btn_link" class="form-control "  placeholder="Enter Banner Button Link" value="{{ $all_data->btn_link }}">
                                    <small class="form-control-feedback"> eg: http://localhost/us_meat/  </small><br>
                                    <label id="btn_link-error" />
                                </div>
                            </div>
                            <h5 class="box-title">Section 4</h5>
                            <hr class="m-t-0 m-b-40">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Text 3</label>
                                    <input type="text" id="text_3" name="text_3" class="form-control "  placeholder="Enter Text 3" value="{{ $all_data->text_3 }}">
                                    <small class="form-control-feedback"> eg: ESTRUCTURA  </small><br>
                                    <label id="text_3-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Text 4</label>
                                    <input type="text" id="text_4" name="text_4" class="form-control "  placeholder="Enter Text 4" value="{{ $all_data->text_4 }}">
                                    <small class="form-control-feedback"> eg: Corta  </small><br>
                                    <label id="text_4-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Description 1</label>
                                    <textarea class="form-control" rows="5" id="description_1" name="description_1">{{ $all_data->description_1 }}</textarea>
                                    <label id="description_1-error" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" style="text-align: center;">  
                                    <?php $url = 'storage/app/backend/about/sections/'.$all_data['chart_img'];  ?>
                                    <img src="{{ asset($url) }}" style="height: 125px; width: $all_data;">
                                    <span class="label label-rounded label-inverse">Current Image</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Chart Image </label>
                                    <input type="file" id="chart_img" class="form-control" name="chart_img">
                                    <small>Image Size: 572 x 206</small>
                                    <input type="hidden" id="temp_chart_img" class="form-control" name="temp_chart_img" value="{{ $all_data->chart_img }}">
                                    <label id="chart_img-error" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" style="text-align: center;">  
                                    <?php $url = 'storage/app/backend/about/sections/'.$all_data['img'];  ?>
                                    <img src="{{ asset($url) }}" style="height: 125px; width: $all_data;">
                                    <span class="label label-rounded label-inverse">Current Image</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Image </label>
                                    <input type="file" id="img" class="form-control" name="img">
                                    <small>Image Size: 341 x 160</small>
                                    <input type="hidden" id="temp_img" class="form-control" name="temp_img" value="{{ $all_data->img }}">
                                    <label id="img-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Description 2</label>
                                    <textarea class="form-control" rows="5" id="description_2" name="description_2">{{ $all_data->description_2 }}</textarea>
                                    <label id="description_2-error" />
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-6">
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

<style type="text/css">
.cke_toolbar_break {
    display: none !important;
}
.form-control-feedback{
    color: #103faf;
    font-weight: 700;
    padding-left: 5px;
}
</style>
<script type="text/javascript">
    $(document).ready(function () {
        $(".alert-success").fadeTo(2000, 500).slideUp(500, function() {
                $(".alert-success").slideUp(500);
        });
         $(".alert-danger").fadeTo(2000, 500).slideUp(500, function() {
                $(".alert-success").slideUp(500);
        });       
    }); 
</script>

@endsection

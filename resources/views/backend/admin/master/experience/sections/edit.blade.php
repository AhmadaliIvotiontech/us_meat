@extends('backend.layouts.admin.master.main')

@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Editar secciones </h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('masterDashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Editar secciones </li>
            </ol>
        </div>
    </div>
</div>
@endsection
@section('title') Editar secciones  @endsection
@section('content')
<script src="{{ asset('public/backend/assets/admin/master/experience/sections/edit.js') }}" type="text/javascript"></script>
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
                    <form method="post" id="Update_Form" action="{{ route('updateExperienceSectionPost') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row">
                            <h5 class="box-title">Sección 1</h5>
                            <hr class="m-t-0 m-b-40">
                            <div class="col-md-3">
                                <div class="form-group" style="text-align: center;">  
                                    <?php $url = 'storage/app/backend/experience/sections/'.$all_data['banner_img'];  ?>
                                    <img src="{{ asset($url) }}" style="height: 125px; width: $all_data;">
                                    <span class="label label-rounded label-inverse">Current Image</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Imagen del banner  </label>
                                    <input type="file" id="banner_img" class="form-control" name="banner_img">
                                    <small>Image Size: 1440 x 722</small> 
                                    <input type="hidden" id="temp_banner_img" class="form-control" name="temp_banner_img" value="{{ $all_data->banner_img }}">
                                    <label id="banner_img-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Enlace del video</label>
                                    <input type="file" id="video_link" name="video_link" class="form-control "  placeholder="Enter Video Link" value="{{ $all_data->video_link }}">
                                    <input type="hidden" id="id" name="id" class="form-control" value="{{ $all_data->id }}">
                                    <small class="form-control-feedback">  Format: MP4  </small><br>
                                    <input type="hidden" id="temp_video_link" class="form-control" name="temp_video_link" value="{{ $all_data->video_link }}">
                                    <label id="video_link-error" />
                                </div>
                            </div>
                            <h5 class="box-title">Sección 2</h5>
                            <hr class="m-t-0 m-b-40"> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Subtitulo o Eslogan </label>
                                    <input type="text" id="text" name="text" class="form-control "  placeholder="Subtitulo o Eslogan " value="{{ $all_data->text }}">
                                    <small class="form-control-feedback"> eg: DINAMICA  </small><br>
                                    <label id="text-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Descripción</label>
                                    <textarea class="form-control" rows="5" id="text_description" name="text_description">{{ $all_data->text_description }}</textarea>
                                    <label id="text_description-error" />
                                </div>
                            </div>
                            <h5 class="box-title">Sección 3</h5>
                            <hr class="m-t-0 m-b-40"> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Subtitulo en Negro del mejor participante</label>
                                    <input type="text" id="text_1" name="text_1" class="form-control "  placeholder="Subtitulo en Negro del mejor participante" value="{{ $all_data->text_1 }}">
                                    <small class="form-control-feedback"> eg: EL REY DE LOS  </small><br>
                                    <label id="text_1-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Subtitulo en Azul del mejor participante</label>
                                    <input type="text" id="text_2" name="text_2" class="form-control "  placeholder="Subtitulo en Azul del mejor participante" value="{{ $all_data->text_2 }}">
                                    <small class="form-control-feedback"> eg: ASADOS  </small><br>
                                    <label id="text_2-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Descripción del mejor participante</label>
                                    <textarea class="form-control" rows="5" id="description" name="description">{{ $all_data->description }}</textarea>
                                    <label id="description-error" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" style="text-align: center;">  
                                    <?php $url = 'storage/app/backend/experience/sections/'.$all_data['img'];  ?>
                                    <img src="{{ asset($url) }}" style="height: 125px; width: $all_data;">
                                    <span class="label label-rounded label-inverse">Current Image</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Imagen del mejor participante </label>
                                    <input type="file" id="img" class="form-control" name="img">
                                    <small>Imagen Size: 632 x 425</small> 
                                    <input type="hidden" id="temp_img" class="form-control" name="temp_img" value="{{ $all_data->img }}">
                                    <label id="img-error" />
                                </div>
                            </div>
                            <h5 class="box-title">Sección 4</h5>
                            <hr class="m-t-0 m-b-40"> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Titulo de promoción </label>
                                    <input type="text" id="participants" name="participants" class="form-control "  placeholder="Titulo de promoción " value="{{ $all_data->participants }}">
                                    <small class="form-control-feedback"> eg: y ¡PARTICIPA!  </small><br>
                                    <label id="participants-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Descripción de la promoción  </label>
                                    <textarea class="form-control" rows="5" id="participants_description" name="participants_description">{{ $all_data->participants_description }}</textarea>
                                    <label id="participants_description-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Detalles de la Inscripción </label>
                                    <textarea class="form-control" rows="5" id="form_description" name="form_description">{{ $all_data->form_description }}</textarea>
                                    <label id="form_description-error" />
                                </div>
                            </div>
                                          
                        </div>


                   
          
                        <!-- <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="form-label">Status</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="status_active" name="status" value="1" class="form-check-input">
                                    <label class="form-check-label" for="status_active">Active</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="status_deactive" name="status" value="0" class="form-check-input">
                                    <label class="form-check-label" for="status_deactive">Deactive</label>
                                </div>
                                    <label id="statusCheck" />
                                    <input type="hidden" id="status_temp" name="status_temp" class="form-control" value="{{ $all_data->status }}">
                                </div>
                            </div>
                        </div> -->

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="button" onClick="validateForm()" class="btn btn-dark text-white"> <i class="fa fa-check"></i> Submit</button>
                                </div>
                            </div>
                            <!--/span-->
                            <!-- <div class="col-md-6">
                                <div class="form-group">
                                    <button type="button" class="btn btn-dark text-white editbtn"> Change Password</button>
                                </div>
                            </div> -->
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
         
        // var temp = $('#status_temp').val();
        // $("input[name=status][value="+temp+"]").prop('checked', true);

        
    }); 
</script>

@endsection

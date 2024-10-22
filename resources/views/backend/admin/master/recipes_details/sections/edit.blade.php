@extends('backend.layouts.admin.master.main')

@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Edit Sections</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('masterDashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Edit Sections</li>
            </ol>
        </div>
    </div>
</div>
@endsection
@section('title') Edit Sections @endsection
@section('content')
<script src="{{ asset('public/backend/assets/admin/master/recipes_details/sections/edit.js') }}" type="text/javascript"></script>
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
                    <form method="post" id="Update_Form" action="{{ route('updateRecipeDetailsSectionPost') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row">
                            <h5 class="box-title">Section 1</h5>
                            <hr class="m-t-0 m-b-40">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Banner Text 1</label>
                                    <input type="text" id="text_1" name="text_1" class="form-control "  placeholder="Enter Banner Text 1" value="{{ $all_data->text_1 }}">
                                    <input type="hidden" id="id" name="id" class="form-control" value="{{ $all_data->id }}">
                                    <small class="form-control-feedback"> eg: Estofado  </small><br>
                                    <label id="text_1-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Banner Text 2</label>
                                    <input type="text" id="text_2" name="text_2" class="form-control "  placeholder="Enter Banner Text 2" value="{{ $all_data->text_2 }}">
                                    <small class="form-control-feedback"> eg: Costilla  </small><br>
                                    <label id="text_2-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Banner Text 3</label>
                                    <input type="text" id="text_3" name="text_3" class="form-control "  placeholder="Enter Banner Text 3" value="{{ $all_data->text_3 }}">
                                    <small class="form-control-feedback"> eg: Corta  </small><br>
                                    <label id="text_3-error" />
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Banner Image </label>
                                    <input type="file" id="banner_img" class="form-control" name="banner_img">
                                    <input type="hidden" id="temp_banner_img" class="form-control" name="temp_banner_img" value="{{ $all_data->banner_img }}">
                                    <label id="banner_img-error" />
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <div class="form-group" style="text-align: center;">  
                                    <?php $url = 'storage/app/backend/recipes_details/sections/'.$all_data['banner_img'];  ?>
                                    <img src="{{ asset($url) }}" style="height: 125px; width: $all_data;">
                                    <span class="label label-rounded label-inverse">Current Image</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Banner Background Image </label>
                                    <input type="file" id="banner_bg_img" class="form-control" name="banner_bg_img">
                                    <input type="hidden" id="temp_banner_bg_img" class="form-control" name="temp_banner_bg_img" value="{{ $all_data->banner_bg_img }}">
                                    <label id="banner_bg_img-error" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" style="text-align: center;">  
                                    <?php $url = 'storage/app/backend/recipes_details/sections/'.$all_data['banner_bg_img'];  ?>
                                    <img src="{{ asset($url) }}" style="height: 125px; width: $all_data;">
                                    <span class="label label-rounded label-inverse">Current Image</span>
                                </div>
                            </div>
                            <h5 class="box-title">Section 2</h5>
                            <hr class="m-t-0 m-b-40">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Video Image </label>
                                    <input type="file" id="video_img" class="form-control" name="video_img">
                                    <input type="hidden" id="temp_video_img" class="form-control" name="temp_video_img" value="{{ $all_data->video_img }}">
                                    <label id="video_img-error" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" style="text-align: center;">  
                                    <?php $url = 'storage/app/backend/recipes_details/sections/'.$all_data['video_img'];  ?>
                                    <img src="{{ asset($url) }}" style="height: 125px; width: $all_data;">
                                    <span class="label label-rounded label-inverse">Current Image</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Video Link</label>
                                    <input type="text" id="video_link" name="video_link" class="form-control "  placeholder="Enter Video Link" value="{{ $all_data->video_link }}">
                                    <small class="form-control-feedback"> eg: http://localhost/us_meat/  </small><br>
                                    <label id="video_link-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Video Text 1</label>
                                    <input type="text" id="video_text_1" name="video_text_1" class="form-control "  placeholder="Enter Video Text 1" value="{{ $all_data->video_text_1 }}">
                                    <small class="form-control-feedback"> eg: FÁCILES  </small><br>
                                    <label id="video_text_1-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Video Text 2</label>
                                    <input type="text" id="video_text_2" name="video_text_2" class="form-control "  placeholder="Enter Video Text 2" value="{{ $all_data->video_text_2 }}">
                                    <small class="form-control-feedback"> eg: y rápidas  </small><br>
                                    <label id="video_text_2-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Video Description</label>
                                    <textarea class="form-control" rows="5" id="video_text_description" name="video_text_description">{{ $all_data->video_text_description }}</textarea>
                                    <label id="video_text_description-error" />
                                </div>
                            </div>
                            <h5 class="box-title">Section 3</h5>
                            <hr class="m-t-0 m-b-40">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Ingredientes Text 1</label>
                                    <input type="text" id="ingredientes_text_1" name="ingredientes_text_1" class="form-control "  placeholder="Enter Ingredientes Text 1" value="{{ $all_data->ingredientes_text_1 }}">
                                    <small class="form-control-feedback"> eg: PREPARA TUS  </small><br>
                                    <label id="ingredientes_text_1-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Ingredientes Text 2</label>
                                    <input type="text" id="ingredientes_text_2" name="ingredientes_text_2" class="form-control "  placeholder="Enter Ingredientes Text 2" value="{{ $all_data->ingredientes_text_2 }}">
                                    <small class="form-control-feedback"> eg: Ingredientes  </small><br>
                                    <label id="ingredientes_text_2-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Ingredientes</label>
                                    <textarea class="form-control" rows="5" id="ingredientes" name="ingredientes">{{ $all_data->ingredientes }}</textarea>
                                    <label id="ingredientes-error" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Ingredientes Image </label>
                                    <input type="file" id="ingredientes_img" class="form-control" name="ingredientes_img">
                                    <input type="hidden" id="temp_ingredientes_img" class="form-control" name="temp_ingredientes_img" value="{{ $all_data->ingredientes_img }}">
                                    <label id="ingredientes_img-error" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" style="text-align: center;">  
                                    <?php $url = 'storage/app/backend/recipes_details/sections/'.$all_data['ingredientes_img'];  ?>
                                    <img src="{{ asset($url) }}" style="height: 125px; width: $all_data;">
                                    <span class="label label-rounded label-inverse">Current Image</span>
                                </div>
                            </div>
                            <h5 class="box-title">Section 4</h5>
                            <hr class="m-t-0 m-b-40">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Preparation Text 1</label>
                                    <input type="text" id="preparation_text_1" name="preparation_text_1" class="form-control "  placeholder="Enter Preparation Text 1" value="{{ $all_data->preparation_text_1 }}">
                                    <small class="form-control-feedback"> eg: PREPARACIÓN  </small><br>
                                    <label id="preparation_text_1-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Preparation Text 2</label>
                                    <input type="text" id="preparation_text_2" name="preparation_text_2" class="form-control "  placeholder="Enter Preparation Text 2" value="{{ $all_data->preparation_text_2 }}">
                                    <small class="form-control-feedback"> eg: 30 minutos  </small><br>
                                    <label id="preparation_text_2-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Preparation Description</label>
                                    <textarea class="form-control" rows="5" id="preparation_description" name="preparation_description">{{ $all_data->preparation_description }}</textarea>
                                    <label id="preparation_description-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Preparation Description 1</label>
                                    <textarea class="form-control" rows="5" id="preparation_description_1" name="preparation_description_1">{{ $all_data->preparation_description_1 }}</textarea>
                                    <label id="preparation_description_1-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Preparation Description 2</label>
                                    <textarea class="form-control" rows="5" id="preparation_description_2" name="preparation_description_2">{{ $all_data->preparation_description_2 }}</textarea>
                                    <label id="preparation_description_2-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Preparation Description 3</label>
                                    <textarea class="form-control" rows="5" id="preparation_description_3" name="preparation_description_3">{{ $all_data->preparation_description_3 }}</textarea>
                                    <label id="preparation_description_3-error" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Preparation Image </label>
                                    <input type="file" id="preparation_img" class="form-control" name="preparation_img">
                                    <input type="hidden" id="temp_preparation_img" class="form-control" name="temp_preparation_img" value="{{ $all_data->preparation_img }}">
                                    <label id="preparation_img-error" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" style="text-align: center;">  
                                    <?php $url = 'storage/app/backend/recipes_details/sections/'.$all_data['preparation_img'];  ?>
                                    <img src="{{ asset($url) }}" style="height: 125px; width: $all_data;">
                                    <span class="label label-rounded label-inverse">Current Image</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Preparation Full Image </label>
                                    <input type="file" id="preparation_img_full" class="form-control" name="preparation_img_full">
                                    <input type="hidden" id="temp_preparation_img_full" class="form-control" name="temp_preparation_img_full" value="{{ $all_data->preparation_img_full }}">
                                    <label id="preparation_img_full-error" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" style="text-align: center;">  
                                    <?php $url = 'storage/app/backend/recipes_details/sections/'.$all_data['preparation_img_full'];  ?>
                                    <img src="{{ asset($url) }}" style="height: 125px; width: $all_data;">
                                    <span class="label label-rounded label-inverse">Current Image</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Button text</label>
                                    <input type="text" id="btn_txt" name="btn_txt" class="form-control "  placeholder="Enter Banner Button Text" value="{{ $all_data->btn_txt }}">
                                    <small class="form-control-feedback"> eg: El corte que usamos los puedes ver y comprar aquí  </small><br>
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

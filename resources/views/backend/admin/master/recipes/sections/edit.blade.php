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
<script src="{{ asset('public/backend/assets/admin/master/recipes/sections/edit.js') }}" type="text/javascript"></script>
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
                    <form method="post" id="Update_Form" action="{{ route('updateRecipeSectionPost') }}" enctype="multipart/form-data">
                        @csrf
                        <h5 class="box-title">Section 1</h5>
                        <hr class="m-t-0 m-b-40">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group" style="text-align: center;">  
                                    <?php $url = 'storage/app/backend/recipes/sections/'.$all_data['banner_img'];  ?>
                                    <img src="{{ asset($url) }}" style="height: 100px; width: $all_data;">
                                    <span class="label label-rounded label-inverse">Current Image</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Imagen del banner </label>
                                    <input type="file" id="banner_img" class="form-control" name="banner_img">
                                    <small>Image Size: 824 x 779</small> 
                                    <input type="hidden" id="temp_banner_img" class="form-control" name="temp_banner_img" value="{{ $all_data->banner_img }}">
                                    <label id="banner_img-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Descripción del platillo</label>
                                    <textarea class="form-control" rows="5" id="banner_description" name="banner_description">{{ $all_data->banner_description }}</textarea>
                                    <label id="banner_description-error" />
                                </div>
                            </div>
                            <!-- <div class="col-md-3">
                                <div class="form-group" style="text-align: center;">  
                                    <?php $url = 'storage/app/backend/recipes/sections/'.$all_data['us_beef_img'];  ?>
                                    <img src="{{ asset($url) }}" style="height: 100px; background: #000000;padding: 10px;">
                                    <span class="label label-rounded label-inverse">Current Image</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">US Beef Image </label>
                                    <input type="file" id="us_beef_img" class="form-control" name="us_beef_img">
                                    <input type="hidden" id="temp_us_beef_img" class="form-control" name="temp_us_beef_img" value="{{ $all_data->us_beef_img }}">
                                    <label id="us_beef_img-error" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">US Pork Image </label>
                                    <input type="file" id="us_pork_img" class="form-control" name="us_pork_img">
                                    <input type="hidden" id="temp_us_pork_img" class="form-control" name="temp_us_pork_img" value="{{ $all_data->us_pork_img }}">
                                    <label id="us_pork_img-error" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" style="text-align: center;">  
                                    <?php $url = 'storage/app/backend/recipes/sections/'.$all_data['us_pork_img'];  ?>
                                    <img src="{{ asset($url) }}" style="height: 100px; background: #000000;padding: 10px;">
                                    <span class="label label-rounded label-inverse">Current Image</span>
                                </div>
                            </div> -->
                            
                            <div class="col-md-3">
                                <div class="form-group" style="text-align: center;">  
                                    <?php $url = 'storage/app/backend/recipes/sections/'.$all_data['tooltip_img'];  ?>
                                    <img src="{{ asset($url) }}" style="height: 100px; background: #000000;padding: 10px;">
                                    <span class="label label-rounded label-inverse">Current Image</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Imagen del tooltip</label>
                                    <input type="file" id="tooltip_img" class="form-control" name="tooltip_img">
                                    <small>Imagen Size: 184 x 48</small> 
                                    <input type="hidden" id="temp_tooltip_img" class="form-control" name="temp_tooltip_img" value="{{ $all_data->tooltip_img }}">
                                    <label id="tooltip_img-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Texto del tooltip</label>
                                    <input type="text" id="tooltip_txt" name="tooltip_txt" class="form-control "  placeholder="Enter Text 1" value="{{ $all_data->tooltip_txt }}">
                                    <small class="form-control-feedback"> eg: Lorem ipsum dolor sit amet. </small><br>
                                    <input type="hidden" id="id" name="id" class="form-control" value="{{ $all_data->id }}">
                                    <label id="tooltip_txt-error" />
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

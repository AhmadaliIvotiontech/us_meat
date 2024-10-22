@extends('backend.layouts.admin.master.main')

@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Edit Categories</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('masterDashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Edit Categories</li>
            </ol>
        </div>
    </div>
</div>
@endsection
@section('title') Edit Banner @endsection
@section('content')
<script src="{{ asset('public/backend/assets/admin/master/homepage/banner/edit.js') }}" type="text/javascript"></script>
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
                    <h3 class="box-title">Edit Banner</h3>
                    <hr class="m-t-0 m-b-40">
                    <form method="post" id="UpdateBannerForm" action="{{ route('updateBannerPost_master') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Banner Text 1</label>
                                    <input type="text" id="text_1" name="text_1" class="form-control "  placeholder="Enter Banner Text 1" value="{{ $banner->text_1 }}">
                                    <input type="hidden" id="id" name="id" class="form-control" value="{{ $banner->id }}">
                                    <label id="text_1-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Banner Text 2</label>
                                    <input type="text" id="text_2" name="text_2" class="form-control "  placeholder="Enter Banner Text 2" value="{{ $banner->text_2 }}">
                                    <label id="text_2-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Banner Text 3</label>
                                    <input type="text" id="text_3" name="text_3" class="form-control "  placeholder="Enter Banner Text 3" value="{{ $banner->text_3 }}">
                                    <label id="text_3-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Banner Button text</label>
                                    <input type="text" id="button_text" name="button_text" class="form-control "  placeholder="Enter Banner Button Text" value="{{ $banner->button_text }}">
                                    <label id="button_text-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Banner Button Link</label>
                                    <input type="text" id="button_link" name="button_link" class="form-control "  placeholder="Enter Banner Button Link" value="{{ $banner->button_link }}">
                                    <label id="button_link-error" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group" style="text-align: center;">  
                                    <?php $url = 'storage/app/backend/homepage/banner/'.$banner['banner_bg_img'];  ?>
                                    <img src="{{ asset($url) }}" style="height: 125px; width: $banner;">
                                    <span class="label label-rounded label-inverse">Current Image</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Banner Background Image </label>
                                    <input type="file" id="bg_image" class="form-control" name="bg_image">
                                    <input type="hidden" id="temp_bg_image" class="form-control" name="temp_bg_image" value="{{ $banner->banner_bg_img }}">
                                    <label id="bg_image-error" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Banner Main Image </label>
                                    <input type="file" id="main_iamge" class="form-control" name="main_iamge">
                                    <input type="hidden" id="temp_main_iamge" class="form-control" name="temp_main_iamge" value="{{ $banner->banner_main_img }}">
                                    <label id="main_iamge-error" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" style="text-align: center;">  
                                    <?php $url = 'storage/app/backend/homepage/banner/'.$banner['banner_main_img'];  ?>
                                    <img src="{{ asset($url) }}" style="height: 125px; width: $banner;">
                                    <span class="label label-rounded label-inverse">Current Image</span>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group" style="text-align: center;">  
                                    <?php $url = 'storage/app/backend/homepage/banner/'.$banner['banner_trademark_img'];  ?>
                                    <img src="{{ asset($url) }}" style="height: 125px; width: $banner;">
                                    <span class="label label-rounded label-inverse">Current Image</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Banner Tradmark Image </label>
                                    <input type="file" id="trademark_image" class="form-control" name="trademark_image">
                                    <input type="hidden" id="temp_trademark_image" class="form-control" name="temp_trademark_image" value="{{ $banner->banner_trademark_img }}">
                                    <label id="trademark_image-error" />
                                </div>
                            </div>
                        </div>
             
   
                       
                        

                        <div class="row">
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
                                    <input type="hidden" id="status_temp" name="status_temp" class="form-control" value="{{ $banner->status }}">
                                </div>
                            </div>
                        </div>

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
<script data-sample="1">
CKEDITOR.replace('description', {

});
</script>
<style type="text/css">
.cke_toolbar_break {
display: none !important;
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
         
        var temp = $('#status_temp').val();
        $("input[name=status][value="+temp+"]").prop('checked', true);

        
    }); 
</script>
@endsection

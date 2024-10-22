@extends('backend.layouts.admin.master.main')

@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Edit Meat Slider</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('masterDashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Edit Meat Slider</li>
            </ol>
        </div>
    </div>
</div>
@endsection
@section('title') Edit Meat Slider @endsection
@section('content')
<script src="{{ asset('public/backend/assets/admin/master/homepage/where_to_buy/edit.js') }}" type="text/javascript"></script>
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
                    <h3 class="box-title">Edit Meat Slider</h3>
                    <hr class="m-t-0 m-b-40">
                    <form method="post" id="Update_Form" action="{{ route('update_where_to_buy_master') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="id" name="id" class="form-control" value="{{ $all_data->id }}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Logo Text</label>
                                    <input type="text" id="logo_txt" name="logo_txt" class="form-control "  placeholder="Enter Logo Text" value="{{ $all_data->logo_txt }}">
                                    <label id="logo_txt-error" />
                                    
                                </div>
                            </div>
     
                            <div class="col-md-3">
                                <div class="form-group" style="text-align: center;">  
                                    <?php $url = 'storage/app/backend/homepage/where_to_buy/'.$all_data['logo_img'];  ?>
                                    <img src="{{ asset($url) }}" style="height: 70px; width: 175px;">
                                    <span class="label label-rounded label-inverse">Current Logo Image</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Logo Image </label>
                                    <input type="file" id="logo_img" class="form-control" name="logo_img">
                                    <small>Image Size: 145 x 36</small> 
                                    <input type="hidden" id="temp_logo_img" class="form-control" name="temp_logo_img" value="{{ $all_data->logo_img }}">
                                    <label id="logo_img-error" />
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
                                    <input type="hidden" id="status_temp" name="status_temp" class="form-control" value="{{ $all_data->status }}">
                                    
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
<!-- <script data-sample="1">
CKEDITOR.replace('description', {

});
</script> -->
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

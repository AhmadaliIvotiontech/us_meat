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
<script src="{{ asset('public/backend/assets/admin/master/homepage/testimonial/edit.js') }}" type="text/javascript"></script>
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
                    <form method="post" id="Update_Form" action="{{ route('update_testimonial_post_master') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="id" name="id" class="form-control" value="{{ $all_data->id }}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Titulo en negro del testimonial</label>
                                    <input type="text" id="text_1" name="text_1" class="form-control "  placeholder="Enter Titulo en negro del testimonial" value="{{ $all_data->text_1 }}">
                                    <label id="text_1-error" />
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Titulo en azul del testimonial</label>
                                    <input type="text" id="text_2" name="text_2" class="form-control "  placeholder="Enter Titulo en azul del testimonial" value="{{ $all_data->text_2 }}">
                                    <label id="text_2-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Description</label>
                                    <input type="description" id="description" name="description" class="form-control "  placeholder="Enter Description" value="{{ $all_data->description }}">
                                    <label id="description-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Texto del botón</label>
                                    <input type="text" id="button_text" name="button_text" class="form-control "  placeholder="Enter Texto del botón" value="{{ $all_data->button_text }}">
                                    <label id="button_text-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Url del botón</label>
                                    <input type="text" id="button_link" name="button_link" class="form-control "  placeholder="Enter Url del botón" value="{{ $all_data->button_link }}">
                                    <label id="button_link-error" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group" style="text-align: center;">  
                                    <?php $url = 'storage/app/backend/homepage/testimonial/'.$all_data['img'];  ?>
                                    <img src="{{ asset($url) }}" style="height: 125px; width: $all_data;">
                                    <span class="label label-rounded label-inverse">Current Image</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Imagen del testimonial</label>
                                    <input type="file" id="img" class="form-control" name="img">
                                    <input type="hidden" id="temp-img" class="form-control" name="temp-img" value="{{ $all_data->img }}">
                                    <small>Image Size: 659 x 440</small> 
                                    <label id="img-error" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Image Text 1</label>
                                    <input type="text" id="img_text_1" name="img_text_1" class="form-control "  placeholder="Enter Image Text 1" value="{{ $all_data->img_text_1 }}">
                                    <label id="img_text_1-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Image Text 2</label>
                                    <input type="text" id="img_text_2" name="img_text_2" class="form-control "  placeholder="Enter Image Text 2" value="{{ $all_data->img_text_2 }}">
                                    <label id="img_text_2-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
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

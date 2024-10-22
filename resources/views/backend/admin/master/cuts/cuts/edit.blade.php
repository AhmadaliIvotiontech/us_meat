@extends('backend.layouts.admin.master.main')

@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Editar  Corte</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('masterDashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Editar  Corte</li>
            </ol>
        </div>
    </div>
</div>
@endsection
@section('title') Editar  Corte @endsection
@section('content')
<script src="{{ asset('public/backend/assets/admin/master/cuts/cuts/edit.js') }}" type="text/javascript"></script>
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
                    <h3 class="box-title">Edit Corte</h3>
                    <hr class="m-t-0 m-b-40">
                    <form method="post" id="Update_Form" action="{{ route('update_cuts') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="id" name="id" class="form-control" value="{{ $all_data->id }}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Categoría</label>
                                    <select class="form-control" name="category" id="category" onchange="category_toggle()">
                                        <option value="" selected="" disabled="">Select Cuts category</option>
                                        <option value="Us Beef">Us Beef</option>
                                        <option value="Us Pork">Us Pork</option>
                                    </select>
                                    <label id="category-error">
                                    <input type="hidden" id="temp_category" name="temp_category" class="form-control " value="{{ $all_data->category }}">
                                </label></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Sub categoría  </label>
                                    <select class="form-control" name="sub_category" id="sub_category">
                                        <option value="" selected="" disabled="">Select Cuts Sub category</option>
                                    </select>
                                    <label id="sub_category-error">
                                    <input type="hidden" id="temp_sub_category" name="temp_sub_category" class="form-control " value="{{ $all_data->sub_category }}">
                                </label></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Nombre del corte</label>
                                    <input type="text" id="text_1" name="text_1" class="form-control "  placeholder="Nombre del corte" value="{{ $all_data->text_1 }}">
                                    <input type="hidden" id="id" name="id" class="form-control" value="{{ $all_data->id }}">
                                    <label id="text_1-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Parte del corte </label>
                                    <input type="text" id="text_2" name="text_2" class="form-control "  placeholder="Parte del corte " value="{{ $all_data->text_2 }}">
                                    <label id="text_2-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Text 3</label>
                                    <input type="text" id="text_3" name="text_3" class="form-control "  placeholder="Enter Text 3" value="{{ $all_data->text_3 }}">
                                    <label id="text_3-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Cantidad del corte</label>
                                    <input type="text" id="text_4" name="text_4" class="form-control "  placeholder="Cantidad del corte" value="{{ $all_data->text_4 }}">
                                    <label id="text_4-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Texto del enlace</label>
                                    <input type="text" id="button_text" name="button_text" class="form-control "  placeholder="Texto del enlace" value="{{ $all_data->button_text }}">
                                    <label id="button_text-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Url del enlace </label>
                                    <input type="text" id="button_link" name="button_link" class="form-control "  placeholder="Url del enlace " value="{{ $all_data->button_link }}">
                                    <label id="button_link-error" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" style="text-align: center;">  
                                    <?php $url = 'storage/app/backend/cuts/cuts/'.$all_data['img'];  ?>
                                    <img src="{{ asset($url) }}" style="height: 125px; width: $all_data;">
                                    <span class="label label-rounded label-inverse">Current Image</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Imagen  </label>
                                    <input type="file" id="img" class="form-control" name="img">
                                    <small>Imagen  Size: 304 x 304</small> 
                                    <input type="hidden" id="temp_img" class="form-control" name="temp_img" value="{{ $all_data->img }}">
                                    <label id="img-error" />
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

        // var temp_category = $('#temp_category').val();
        // $('#category').val(temp_category);
        // category_toggle();
        // var temp_sub_category = $('#temp_sub_category').val();
        // $('#sub_category').val(temp_sub_category);
    }); 
    function category_toggle(){
    
        var category = $('#category').val();
        if(category == 'Us Beef'){
            $('#sub_category').empty();
            $('#sub_category').append('<option value="" selected="" disabled="">Select Cuts Sub category</option><option value="Cheek">Cheek</option><option value="Toungh">Toungh</option><option value="Neck">Neck</option><option value="Chunk">Chunk</option><option value="Rib">Rib</option><option value="Brisket">Brisket</option><option value="Shank">Shank</option><option value="Plate">Plate</option><option value="Short Loin">Short Loin</option><option value="Flank">Flank</option><option value="Sirloin">Sirloin</option><option value="Tenderloin">Tenderloin</option><option value="Top Sirloin">Top Sirloin</option><option value="Bottom Sirloin">Bottom Sirloin</option><option value="Round">Round</option>');
        }else{
            $('#sub_category').empty();
            $('#sub_category').append('<option value="" selected="" disabled="">Select Cuts Sub category</option><option value="Head">Head</option><option value="Cheek">Cheek</option><option value="Clear Plate">Clear Plate</option><option value="Boston Shoulder">Boston Shoulder</option><option value="Picnic">Picnic</option><option value="Hock">Hock</option><option value="Back Fat">Back Fat</option><option value="Loin">Loin</option><option value="Ribs">Ribs</option><option value="Bacon">Bacon</option><option value="Leg Ham">Leg Ham</option>');
        }
    }
</script>
@endsection

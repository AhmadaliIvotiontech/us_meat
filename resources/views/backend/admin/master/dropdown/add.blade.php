@extends('backend.layouts.admin.master.main')

@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Add Dropdown</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('masterDashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Add Dropdown</li>
            </ol>
        </div>
    </div>
</div>
@endsection
@section('title') Add Dropdown @endsection
@section('content')
<script src="{{ asset('public/backend/assets/admin/master/dropdown/add.js') }}" type="text/javascript"></script>
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
                    <h3 class="box-title">Add Dropdown</h3>
                    <hr class="m-t-0 m-b-40">
                    <form method="post" id="Add_Form" action="{{ route('add_dropdown_post') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Nombre de la página </label>
                                    <select class="form-control" name="page_name" id="page_name">
                                        <option value="" selected="" disabled="">Select Nombre de la página </option>
                                        <option value="1">About Us</option>
                                        <option value="2">Experience</option>
                                    </select>
                                    <label id="page_name-error">
                                </label></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Nombre de la opción </label>
                                    <input type="text" id="dropdown_name" name="dropdown_name" class="form-control "  placeholder="Nombre de la opción ">
                                    <label id="dropdown_name-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Correo asociado</label>
                                    <input type="text" id="dropdown_value" name="dropdown_value" class="form-control "  placeholder="Correo asociado">
                                    <label id="dropdown_value-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="form-label">Status</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="status_active" name="status" value="1" class="form-check-input">
                                    <label class="form-check-label" for="status_active">Activado </label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="status_deactive" name="status" value="0" class="form-check-input">
                                    <label class="form-check-label" for="status_deactive">Desactivado</label>
                                </div>
                                    <label id="statusCheck" />
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

<script>
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
</script>
<!-- <style type="text/css">
.cke_toolbar_break {
display: none !important;
}
</style> -->
@endsection

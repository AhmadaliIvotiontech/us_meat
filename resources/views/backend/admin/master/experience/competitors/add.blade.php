@extends('backend.layouts.admin.master.main')

@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Add Competitor</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('masterDashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Add Competitor</li>
            </ol>
        </div>
    </div>
</div>
@endsection
@section('title') Add Competitor @endsection
@section('content')
<script src="{{ asset('public/backend/assets/admin/master/experience/competitors/add.js') }}" type="text/javascript"></script>
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
                    <h3 class="box-title">Añadir competidor</h3>
                    <hr class="m-t-0 m-b-40">
                    <form method="post" id="Add_Form" action="{{ route('add_competitors_post') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Título de Receta</label>
                                    <input type="text" id="text_1" name="text_1" class="form-control "  placeholder="Título de Receta">
                                    <label id="text_1-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Nombre del Competidor  </label>
                                    <input type="text" id="text_2" name="text_2" class="form-control "  placeholder="Nombre del Competidor  ">
                                    <label id="text_2-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Estado de donde participa</label>
                                    <input type="text" id="text_3" name="text_3" class="form-control "  placeholder="Estado de donde participa">
                                    <label id="text_3-error" />
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
                                    <label class="form-label">Url del enlace </label>
                                    <input type="text" id="button_link" name="button_link" class="form-control "  placeholder="Url del enlace ">
                                    <label id="button_link-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Tiempo de preparación </label>
                                    <input type="text" id="preparation" name="preparation" class="form-control "  placeholder="Tiempo de preparación ">
                                    <label id="preparation-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Capacidad para</label>
                                    <input type="text" id="serves" name="serves" class="form-control "  placeholder="Enter Capacidad para">
                                    <label id="serves-error" />
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Imagen</label>
                                    <input type="file" id="img" class="form-control" name="img">
                                    <small>Imagen Size: 377 x 249</small> 
                                    <label id="img-error" />
                                </div>
                            </div>
                            
                        </div>
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

<!-- <script data-sample="1">
CKEDITOR.replace('description', {

});
</script>
<style type="text/css">
.cke_toolbar_break {
display: none !important;
}
</style> -->
@endsection

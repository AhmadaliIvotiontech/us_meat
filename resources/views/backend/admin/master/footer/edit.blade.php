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
<script src="{{ asset('public/backend/assets/admin/master/footer/edit.js') }}" type="text/javascript"></script>
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
                    <form method="post" id="Update_Form" action="{{ route('updateFooterSectionPost') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row">
                            <h5 class="box-title">Section 1</h5>
                            <hr class="m-t-0 m-b-40">
                            <div class="col-md-3">
                                <div class="form-group" style="text-align: center;">  
                                    <?php $url = 'storage/app/backend/footer/'.$all_data['us_meat_img'];  ?>
                                    <img src="{{ asset($url) }}" style="height: 125px;background: #000000; padding: 10px;">
                                    <span class="label label-rounded label-inverse">Current Image</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Imagen US MEAT</label>
                                    <input type="file" id="us_meat_img" class="form-control" name="us_meat_img">
                                    <small>Image Size: 148 x 132</small>
                                    <input type="hidden" id="temp_us_meat_img" class="form-control" name="temp_us_meat_img" value="{{ $all_data->us_meat_img }}">
                                    <label id="us_meat_img-error" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" style="text-align: center;">  
                                    <?php $url = 'storage/app/backend/footer/'.$all_data['us_beef_img'];  ?>
                                    <img src="{{ asset($url) }}" style="height: 125px; background: #000000; padding: 10px;">
                                    <span class="label label-rounded label-inverse">Current Image</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Imagen de US BEEF</label>
                                    <input type="file" id="us_beef_img" class="form-control" name="us_beef_img">
                                    <small>Image Size: 73 x 65</small>
                                    <input type="hidden" id="temp_us_beef_img" class="form-control" name="temp_us_beef_img" value="{{ $all_data->us_beef_img }}">
                                    <label id="us_beef_img-error" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" style="text-align: center;">  
                                    <?php $url = 'storage/app/backend/footer/'.$all_data['us_pork_img'];  ?>
                                    <img src="{{ asset($url) }}" style="height: 125px; background: #000000; padding: 10px;">
                                    <span class="label label-rounded label-inverse">Current Image</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Imagen de US PORK</label>
                                    <input type="file" id="us_pork_img" class="form-control" name="us_pork_img">
                                    <small>Image Size: 95 x 57</small>
                                    <input type="hidden" id="temp_us_pork_img" class="form-control" name="temp_us_pork_img" value="{{ $all_data->us_pork_img }}">
                                    <label id="us_pork_img-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Texto de marca registrada</label>
                                    <textarea class="form-control" rows="5" id="description" name="description">{{ $all_data->description }}</textarea>
                                    <input type="hidden" id="id" name="id" class="form-control" value="{{ $all_data->id }}">
                                    <label id="description-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Correo</label>
                                    <input type="text" id="mail" name="mail" class="form-control "  placeholder="Enter Email" value="{{ $all_data->mail }}">
                                    <small class="form-control-feedback"> eg: Estofado  </small><br>
                                    <label id="mail-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Número de teléfono</label>
                                    <input type="text" id="phone" name="phone" class="form-control "  placeholder="Enter Phone Number" value="{{ $all_data->phone }}">
                                    <small class="form-control-feedback"> eg: Costilla  </small><br>
                                    <label id="phone-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Dirección</label>
                                    <textarea class="form-control" rows="5" id="address" name="address">{{ $all_data->address }}</textarea>
                                    <label id="address-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Enlace a Facebook </label>
                                    <input type="text" id="facebook_link" name="facebook_link" class="form-control "  placeholder="Enlace a Facebook" value="{{ $all_data->facebook_link }}">
                                    <small class="form-control-feedback"> eg: http://facebook/us_meat/  </small><br>
                                    <label id="facebook_link-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Enlace a Youtube</label>
                                    <input type="text" id="twitter_link" name="twitter_link" class="form-control "  placeholder="Enlace a Youtube" value="{{ $all_data->twitter_link }}">
                                    <small class="form-control-feedback"> eg: http://youtube/us_meat/  </small><br>
                                    <label id="twitter_link-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Enlace a Instagram</label>
                                    <input type="text" id="instagram_link" name="instagram_link" class="form-control "  placeholder="Enlace a Instagram" value="{{ $all_data->instagram_link }}">
                                    <small class="form-control-feedback"> eg: http://instagram/us_meat/  </small><br>
                                    <label id="instagram_link-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Enlace a Linkedin</label>
                                    <input type="text" id="linkedin_link" name="linkedin_link" class="form-control "  placeholder="Enlace a Linkedin" value="{{ $all_data->linkedin_link }}">
                                    <small class="form-control-feedback"> eg: http://linkedin/us_meat/  </small><br>
                                    <label id="linkedin_link-error" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Enlace a TikTok</label>
                                    <input type="text" id="pinterest_link" name="pinterest_link" class="form-control "  placeholder="Enlace a TikTok" value="{{ $all_data->pinterest_link }}">
                                    <small class="form-control-feedback"> eg: http://ticktok/us_meat/  </small><br>
                                    <label id="pinterest_link-error" />
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
         
        // var temp = $('#status_temp').val();
        // $("input[name=status][value="+temp+"]").prop('checked', true);

        
    }); 
</script>

@endsection

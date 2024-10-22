@extends('backend.layouts.admin.master.main')

@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Add Vendor</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('masterDashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Add Banner</li>
            </ol>
        </div>
    </div>
</div>
@endsection

@section('content')
<script src="{{ asset('public/backend/assets/admin/master/vendor/add.js') }}" type="text/javascript"></script>
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
                    <h3 class="box-title">Add Banner</h3>
                    <hr class="m-t-0 m-b-40">
                    <form method="post" id="AddVendorForm" action="{{ route('addVendorPost') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Banner Name</label>
                                    <input type="text" id="name" name="name" class="form-control "  placeholder="Enter Banner Name">
                                    <label id="nameCheck" />
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Banner URL</label>
                                    <input type="text" id="email" name="email" class="form-control " placeholder="Enter Banner URL">
                                    <input type="hidden" id="email_exist" name="email_exist" class="form-control " value="{{ $vendors }}">
                                    <label id="emailCheck" />
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Banner Link</label>
                                    <input type="text" id="email" name="email" class="form-control " placeholder="Enter Banner Link">
                                    <input type="hidden" id="email_exist" name="email_exist" class="form-control " value="{{ $vendors }}">
                                    <label id="emailCheck" />
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Banner Image</label>
                                    <input type="file" id="product_img" class="form-control" name="product_img">
                                    <label id="product_imgCheck" />
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Password</label>
                                    <input class="form-control" type="text" required="" id="password" name="password" placeholder="Enter New Password"> 
                                    <label id="passwordCheck" />
                                </div>
                            </div>
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
    <script type="text/javascript">
$(document).ready(function () {
        $(".alert-success").fadeTo(2000, 500).slideUp(500, function() {
                $(".alert-success").slideUp(500);
        });
         $(".alert-danger").fadeTo(2000, 500).slideUp(500, function() {
                $(".alert-success").slideUp(500);
        });
         
    }); 
</script>
@endsection

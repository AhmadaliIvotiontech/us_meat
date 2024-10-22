@extends('backend.layouts.admin.master.main')

@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Profile</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('masterDashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </div>
    </div>
</div>
@endsection
@section('title') Profile @endsection
@section('content')
<script src="{{ asset('public/backend/assets/admin/master/profile.js') }}" type="text/javascript"></script>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <input type="hidden" id="check_success" value="0">
                    <?php if(!empty(session('success')))
                    { 
                        $data1 = session()->get('success'); ?>
                        <input type="hidden" id="check_success" value="1">
                        <div class="alert alert-success" id="success-alert">
                        <strong>Success! </strong> <?php echo $data1; ?>
                        </div>
                        <?php Session::forget('success');  
                    }
                    ?>
                    <center><p style="color:red;">
                        @if ($errors->any())
                        <div class="alert alert-danger" id="check_success" >
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                        @endif
                        </p></center>
                    <h3 class="box-title">Update User Details</h3>
                    <hr class="m-t-0 m-b-40">
                    <form method="post" id="UserUpdateForm" action="{{ route('updateProfile') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="hidden" name="id" value="{{$data['id']}}">
                                    <label class="form-label">User Name</label>
                                    <input type="text" id="UserName" name="UserName" class="form-control " value="{{$data['name']}}" placeholder="Enter User Name">
                                    <label id="UserNameCheck" />
                                    <!-- <small class="form-control-feedback"> This field has error. </small> </div> -->
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">User Email</label>
                                    <input type="text" id="UserEmail" value="{{$data['email']}}" name="UserEmail" class="form-control " placeholder="Enter User Email">
                                    <label id="UserEmailCheck" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="button" onClick="validateForm()" class="btn btn-success text-white"> <i class="fa fa-check"></i> Update</button>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="button" class="btn btn-dark text-white editbtn"> Change Password</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    $(document).ready(function () {

        $("#success-alert").hide();
        if($("#check_success").val())
        {
                $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
                $("#success-alert").slideUp(500);
            });
        }
        else
        {
            $("#success-alert").hide();
        }

        $(document).on('click','.editbtn',function (){
                var sid = $(this).val();
                // alert(sid);
                $('#exampleModalLong').modal('show');
        });
            $(document).on('click','.close',function () {
            $('#exampleModalLong').modal('hide');
        }); 
    });   
</script>
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update User Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form class="form-horizontal form-material" id="changePasswordForm" method="post" action="{{ route('updatePwd') }}">
                @csrf
                <h4 class="text-center m-b-20">Update Password</h4>
                <input type="hidden" id="id" name="id" value="{{$data['id']}}" />
                 <div class="form-group ">
                    <div class="col-xs-12">
                        <label>New Password</label>
                        <input class="form-control" type="text" required="" id="Password" name="Password" placeholder="Enter New Password"> 
                        <label id="PasswordCheck" />
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <label>Confirm Password</label>
                        <input class="form-control" type="text" required="" id="ConfrimPassword" name="ConfrimPassword" placeholder="Confirm new password"> 
                        <label id="ConfrimPasswordCheck" />
                    </div>
                </div>
            <center><p style="color:red;"><?php  
                if(!empty(session('errors'))) 
                    echo session('errors')->first('email'); ?>    
            </p></center>
                <div class="form-group text-center">
                    <div class="col-xs-12 p-b-20">
                        <button class="btn w-100 btn-lg btn-info btn-rounded text-white" onclick="changePassword()" type="button">Update Password</button>
                    </div>
                </div>
               
            </form>
      </div>
    </div>
  </div>
</div>
@endsection

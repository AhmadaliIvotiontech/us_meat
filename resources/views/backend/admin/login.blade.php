@extends('backend.layouts.admin.master.login')
@section('title', '| Login')
@section('content')
<div class="login-register" style="background-image:url(../assets/images/background/login-register.jpg);">
    
    <div class="login-box card">
        <div style="text-align: center;padding-top: 15px;">
            <img src="{{ asset('public/backend/images/logo-fav.png') }}" alt="user-img" class="img-circle" style="height: 100px;"> 
        </div>
        <div class="card-body">
            <form class="form-horizontal form-material" id="loginform" method="post" action="{{route('masterauthenticate')}}">
                @csrf
                <h3 class="text-center m-b-20">Sign In</h3>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" name="email" placeholder="Username"> </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" required="" name="password" placeholder="Password"> </div>
                </div>
                
            <center><p style="color:red;"><?php  
                if(!empty(session('errors'))) 
                    echo session('errors')->first('email'); ?>    
            </p></center>
            <center><p style="color:green;"><?php  
                if(!empty(session('errors'))) 
                    echo session('errors')->first('email-success'); ?>    
            </p></center>
             @if ($errors->has('wrong_creden'))
                    <div class="error" style="color: red">{{ $errors->first('wrong_creden') }}</div>
                        {{-- <span class="error">{{ $errors->first('password') }}</span> --}}
            @endif
            <div class="form-group ">
                    <!-- <div class="col-xs-12">
                        <div class="form-group has-success">
        
                        </div>
                    </div> -->
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="d-flex no-block align-items-center">
                            <div class="form-check">
                                <!-- input type="checkbox" class="form-check-input" id="customCheck1">
                                <label class="form-check-label" for="customCheck1">Remember me</label> -->
                            </div> 
                            <div class="ms-auto">
                                <a href="javascript:void(0)" id="to-recover" class="text-muted"><i class="fas fa-lock m-r-5"></i> Forgot password?</a> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group text-center">
                   
                    <div class="col-xs-12 p-b-20">
                        <button class="btn w-100 btn-lg btn-info btn-rounded text-white" type="submit">Log In</button>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                        <div class="social">
                            <button class="btn  btn-facebook" data-bs-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fab fa-facebook-f"></i> </button>
                            <button class="btn btn-googleplus" data-bs-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fab fa-google-plus-g"></i> </button>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="form-group m-b-0">
                    <div class="col-sm-12 text-center">
                        Don't have an account? <a href="pages-register.html" class="text-info m-l-5"><b>Sign Up</b></a>
                    </div>
                </div> -->
            </form>
            <form class="form-horizontal"id="recoverform" method="post" action="{{route('recoverform')}}">
                @csrf
                <div class="form-group ">
                    <div class="col-xs-12">
                        <h3>Recover Password</h3>
                        <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" id="ForgotEmail" name="ForgotEmail" required="" placeholder="Email"> <br> <label style="margin-top: -10px" id="ForgotEmailCheck"></label></div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <a class="btn btn-primary btn-lg w-100 text-uppercase waves-effect waves-light" onClick="Forgotform()" > Reset</a>
                    </div>
                </div>
            </form>
<script type="text/javascript">
    function Forgotform()   
    {


            var valid = true;

            var CompanyEMail=$("#ForgotEmail");
            if(CompanyEMail.val() == "")
                {
                    document.getElementById("ForgotEmailCheck").innerHTML="Please Enter E-Mail";
                    document.getElementById("ForgotEmailCheck").style.color="red";
                    valid = false;
                }
            else
            {
                        if(validateEmail()){ 
                            $("#ForgotEmailCheck").html("<p class='text-success'></p>");
                        }else{
                            document.getElementById("ForgotEmailCheck").innerHTML="Please Enter valid E-mail";
                            document.getElementById("ForgotEmailCheck").style.color="red";
                            valid = false;
                        }
                    function validateEmail(){
                        // get value of input email
                        var email=$("#ForgotEmail").val();
                        // use reular expression
                        var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
                        if(reg.test(email)){
                            return true;
                        }else{
                            return false;
                    }
                }
            }


             if(valid == true)
            {
                document.getElementById("recoverform").submit();
            }
    }
            
</script>
        </div>
    </div>
</div>
@endsection
function validateForm() 
    {
        var valid = true;


        var UserName=$("#UserName");
        if(UserName.val() == "")
        {
            document.getElementById("UserNameCheck").innerHTML="Please Enter User Name";
            document.getElementById("UserNameCheck").style.color="red";
            valid = false;
        }else{
            document.getElementById("UserNameCheck").innerHTML="";
        }

        var UserEmail=$("#UserEmail").val();
        // use reular expression
        

        if(UserEmail.length > 0){
            var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
         if(!reg.test(UserEmail))
         {
            document.getElementById("UserEmailCheck").innerHTML="Please enter valid E-mail";
            document.getElementById("UserEmailCheck").style.color="red";
            valid = false;
         }else{
            document.getElementById("UserEmailCheck").innerHTML="";
        }
            
        }
        else{
            document.getElementById("UserEmailCheck").innerHTML="Please enter E-mail";
            document.getElementById("UserEmailCheck").style.color="red";
            valid = false;
        }

        // alert(valid);
        if(valid == true)
        {
            document.getElementById("UserUpdateForm").submit();
        }
    }


$(document).ready(function () {
    $("#Password").keyup(function(){
        var password=$("#Password").val();

        if(password.length > 0){
            var password_regex1=/([a-z].*[A-Z])|([A-Z].*[a-z])|([0-9])+([!,%,&,@,#,$,^,*,?,_,~])/;
            var password_regex2=/([0-9])/;
            var password_regex3=/([!,%,&,@,#,$,^,*,?,_,~])/;
            if(password.length<8)
                {
                document.getElementById("PasswordCheck").innerHTML="Please Enter Length more than 8";
                document.getElementById("PasswordCheck").style.color="red";
                valid =  false;
                }
            else if(password_regex1.test(password)==false ){
                document.getElementById("PasswordCheck").innerHTML="Please Mix Your Password with Alphabetic Letters(At least 1 UpperCase & 1 LowerCase";
                document.getElementById("PasswordCheck").style.color="red";
                valid =  false;
                }
            else if(password_regex2.test(password)==false){
                document.getElementById("PasswordCheck").innerHTML="Please Mix Your Password with Numbers";
                document.getElementById("PasswordCheck").style.color="red";
                valid =  false;
                }
            else if(password_regex3.test(password)==false){
                document.getElementById("PasswordCheck").innerHTML="Please Mix Your Password with Special characters";
                document.getElementById("PasswordCheck").style.color="red";
                valid =  false;
                }
                else{
                    document.getElementById("PasswordCheck").innerHTML=" ";
                }
            
        }
        else{
        document.getElementById("PasswordCheck").innerHTML="Please Enter Password";
        document.getElementById("PasswordCheck").style.color="red";
        valid = false;
        }
    });  

    $("#ConfrimPassword").keyup(function(){
        var ConfrimPassword=$("#ConfrimPassword").val();

        if(ConfrimPassword.length > 0){
            var password=$("#Password").val();
            if(ConfrimPassword == password)
            {
                document.getElementById("ConfrimPasswordCheck").innerHTML="Password Match";
                document.getElementById("ConfrimPasswordCheck").style.color="green";
            }else
            {
                document.getElementById("ConfrimPasswordCheck").innerHTML="Password Not Matched";
                document.getElementById("ConfrimPasswordCheck").style.color="red";
                valid = false;
                
            }
            
        }
        else{
        document.getElementById("ConfrimPasswordCheck").innerHTML="Please Enter Password";
        document.getElementById("ConfrimPasswordCheck").style.color="red";
        valid = false;
        }
    });
});

    function changePassword()
    {
        valid = true;
        var password=$("#Password").val();

        if(password.length > 0){
            var password_regex1=/([a-z].*[A-Z])|([A-Z].*[a-z])|([0-9])+([!,%,&,@,#,$,^,*,?,_,~])/;
            var password_regex2=/([0-9])/;
            var password_regex3=/([!,%,&,@,#,$,^,*,?,_,~])/;
            if(password.length<8)
                {
                document.getElementById("PasswordCheck").innerHTML="Please Enter Length more than 8";
                document.getElementById("PasswordCheck").style.color="red";
                valid =  false;
                }
            else if(password_regex1.test(password)==false ){
                document.getElementById("PasswordCheck").innerHTML="Please Mix Your Password with Alphabetic Letters(At least 1 UpperCase & 1 LowerCase";
                document.getElementById("PasswordCheck").style.color="red";
                valid =  false;
                }
            else if(password_regex2.test(password)==false){
                document.getElementById("PasswordCheck").innerHTML="Please Mix Your Password with Numbers";
                document.getElementById("PasswordCheck").style.color="red";
                valid =  false;
                }
            else if(password_regex3.test(password)==false){
                document.getElementById("PasswordCheck").innerHTML="Please Mix Your Password with Special characters";
                document.getElementById("PasswordCheck").style.color="red";
                valid =  false;
                }
                else{
                    document.getElementById("PasswordCheck").innerHTML=" ";
                }
            
        }
        else{
            document.getElementById("PasswordCheck").innerHTML="Please Enter Password";
            document.getElementById("PasswordCheck").style.color="red";
            valid = false;
        }

        var ConfrimPassword=$("#ConfrimPassword").val();

        if(ConfrimPassword.length > 0){
            var password=$("#Password").val();
            if(ConfrimPassword == password)
            {
                document.getElementById("ConfrimPasswordCheck").innerHTML="Password Match";
                document.getElementById("ConfrimPasswordCheck").style.color="green";
            }else
            {
                document.getElementById("ConfrimPasswordCheck").innerHTML="Password Not Matched";
                document.getElementById("ConfrimPasswordCheck").style.color="red";
                valid = false;
                
            }
            
        }
        else{
            document.getElementById("ConfrimPasswordCheck").innerHTML="Please Enter Password";
            document.getElementById("ConfrimPasswordCheck").style.color="red";
            valid = false;
        }
        // alert(valid);
        if(valid == true)
        {
            document.getElementById("changePasswordForm").submit();
        }

    }
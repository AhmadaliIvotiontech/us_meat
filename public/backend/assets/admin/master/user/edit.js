function validateForm() 
    {
        var valid = true;


        var name=$("#name");
        if(name.val() == "")
        {
            document.getElementById("nameCheck").innerHTML="Please Enter User Name";
            document.getElementById("nameCheck").style.color="red";
            valid = false;
        }else{
            document.getElementById("nameCheck").innerHTML="";
        }

        var email=$("#email").val();
        // use reular expression
        if(email.length > 0)
        {
            var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
            if(!reg.test(email))
            {
                document.getElementById("emailCheck").innerHTML="Please enter valid E-mail";
                document.getElementById("emailCheck").style.color="red";
                valid = false;
            }else{
                // document.getElementById("emailCheck").innerHTML="";
                var email_exist=$("#email_exist").val();
                // console.log(email_exist);
                var email_temp=$("#email_temp").val();
                var temp = 0;
                $.each(JSON.parse(email_exist), function(index, value) {
                    if (value.email == email) {
                        temp++;
                    }
                }); 
                if(temp == 0){
                    document.getElementById("emailCheck").innerHTML="This Email Available";
                    document.getElementById("emailCheck").style.color="green";
                }else{
                    if (email_temp == email) {
                        document.getElementById("emailCheck").innerHTML="Current Email";
                        document.getElementById("emailCheck").style.color="green";
                    }else{
                        document.getElementById("emailCheck").innerHTML="This Email is not Available";
                        document.getElementById("emailCheck").style.color="red";
                        valid = false;
                    }
                }
            } 
        }
        else{
            document.getElementById("emailCheck").innerHTML="Please enter E-mail";
            document.getElementById("emailCheck").style.color="red";
            valid = false;
        }

        var password=$("#password").val();
        if(password.length > 0){
            var password_regex1=/([a-z].*[A-Z])|([A-Z].*[a-z])|([0-9])+([!,%,&,@,#,$,^,*,?,_,~])/;
            var password_regex2=/([0-9])/;
            var password_regex3=/([!,%,&,@,#,$,^,*,?,_,~])/;
            if(password.length<8)
                {
                document.getElementById("passwordCheck").innerHTML="Please Enter Length more than 8";
                document.getElementById("PasswordCheck").style.color="red";
                valid =  false;
                }
            else if(password_regex1.test(password)==false ){
                document.getElementById("passwordCheck").innerHTML="Please Mix Your Password with Alphabetic Letters(At least 1 UpperCase & 1 LowerCase";
                document.getElementById("passwordCheck").style.color="red";
                valid =  false;
                }
            else if(password_regex2.test(password)==false){
                document.getElementById("passwordCheck").innerHTML="Please Mix Your Password with Numbers";
                document.getElementById("passwordCheck").style.color="red";
                valid =  false;
                }
            else if(password_regex3.test(password)==false){
                document.getElementById("passwordCheck").innerHTML="Please Mix Your Password with Special characters";
                document.getElementById("passwordCheck").style.color="red";
                valid =  false;
                }
                else{
                    document.getElementById("passwordCheck").innerHTML=" ";
                }
        }
        else{
        document.getElementById("passwordCheck").innerHTML="Please Enter Password";
        document.getElementById("passwordCheck").style.color="red";
        valid = false;
        }

        var role_id=$("#role_id").val();
        if(role_id == null)
        {
            document.getElementById("roleCheck").innerHTML="Please Select User Role";
            document.getElementById("roleCheck").style.color="red";
            valid = false;
        }else{
            document.getElementById("roleCheck").innerHTML="";
        }

        // alert(valid);
        if(valid == true)
        {
            document.getElementById("UpdateUserForm").submit();
        }
    }


$(document).ready(function () {
    $("#password").keyup(function(){
        var password=$("#password").val();
        if(password.length > 0){
            var password_regex1=/([a-z].*[A-Z])|([A-Z].*[a-z])|([0-9])+([!,%,&,@,#,$,^,*,?,_,~])/;
            var password_regex2=/([0-9])/;
            var password_regex3=/([!,%,&,@,#,$,^,*,?,_,~])/;
            if(password.length<8)
                {
                document.getElementById("passwordCheck").innerHTML="Please Enter Length more than 8";
                document.getElementById("passwordCheck").style.color="red";
                valid =  false;
                }
            else if(password_regex1.test(password)==false ){
                document.getElementById("passwordCheck").innerHTML="Please Mix Your Password with Alphabetic Letters(At least 1 UpperCase & 1 LowerCase";
                document.getElementById("passwordCheck").style.color="red";
                valid =  false;
                }
            else if(password_regex2.test(password)==false){
                document.getElementById("passwordCheck").innerHTML="Please Mix Your Password with Numbers";
                document.getElementById("passwordCheck").style.color="red";
                valid =  false;
                }
            else if(password_regex3.test(password)==false){
                document.getElementById("passwordCheck").innerHTML="Please Mix Your Password with Special characters";
                document.getElementById("passwordCheck").style.color="red";
                valid =  false;
                }
                else{
                    document.getElementById("passwordCheck").innerHTML=" ";
                }
            
        }
        else{
        document.getElementById("passwordCheck").innerHTML="Please Enter Password";
        document.getElementById("passwordCheck").style.color="red";
        valid = false;
        }
    });  
    $("#email").keyup(function(){
        var email=$("#email").val();
        // use reular expression
        if(email.length > 0)
        {
            var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
            if(!reg.test(email))
            {
                document.getElementById("emailCheck").innerHTML="Please enter valid E-mail";
                document.getElementById("emailCheck").style.color="red";
                valid = false;
            }else{
                // document.getElementById("emailCheck").innerHTML="";
                var email_exist=$("#email_exist").val();
                // console.log(email_exist);
                var email_temp=$("#email_temp").val();
                var temp = 0;
                $.each(JSON.parse(email_exist), function(index, value) {
                    if (value.email == email) {
                        temp++;
                    }
                }); 
                if(temp == 0){
                    document.getElementById("emailCheck").innerHTML="This Email Available";
                    document.getElementById("emailCheck").style.color="green";
                }else{
                    if (email_temp == email) {
                        document.getElementById("emailCheck").innerHTML="Current Email";
                        document.getElementById("emailCheck").style.color="green";
                    }else{
                        document.getElementById("emailCheck").innerHTML="This Email is not Available";
                        document.getElementById("emailCheck").style.color="red";
                        valid = false;
                    }
                }
            } 
        }
        else{
            document.getElementById("emailCheck").innerHTML="Please enter E-mail";
            document.getElementById("emailCheck").style.color="red";
            valid = false;
        }
    });
});

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
}); 
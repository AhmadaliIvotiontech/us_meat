function validateForm() 
    {
        var valid = true;

        var logo_txt=$("#logo_txt");
        if(logo_txt.val() == "")
        {
            document.getElementById("logo_txt-error").innerHTML="Please Enter Logo Text";
            document.getElementById("logo_txt-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("logo_txt-error").innerHTML="";
        }
        var logo_img=$("#logo_img").val();
        if(logo_img == ""){
            // document.getElementById("slider_img-error").innerHTML="Please Select Slider Image";
            // document.getElementById("slider_img-error").style.color="red";
            // valid = false;
        }else{
            if (!(/\.(png|jpg|jpeg)$/i).test(logo_img)) 
            {
                document.getElementById('logo_img-error').innerHTML = "Invalid file format";
                document.getElementById('logo_img-error').style.color = "red";
                valid = false;
            }
            else
            {
                document.getElementById('logo_img-error').innerHTML = "";
            }
        }
     
        var status=$("input[name='status']:checked").val();
        if(status == undefined)
        {
            document.getElementById("statusCheck").innerHTML="Please Select Status";
            document.getElementById("statusCheck").style.color="red";
            valid = false;
        }else{
            document.getElementById("statusCheck").innerHTML="";
        }
        if(valid == true)
        {
            document.getElementById("Update_Form").submit();
        }
    }

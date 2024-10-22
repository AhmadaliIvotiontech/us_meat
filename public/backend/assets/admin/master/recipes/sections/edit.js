function validateForm() 
    {
        var valid = true;
        var banner_description=$("#banner_description").val();
        if(banner_description == null)
        {
            document.getElementById("banner_description-error").innerHTML="Please Select Banner Description";
            document.getElementById("banner_description-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("banner_description-error").innerHTML="";
        }
        var tooltip_txt=$("#tooltip_txt").val();
        if(tooltip_txt == null)
        {
            document.getElementById("tooltip_txt-error").innerHTML="Please Enter Tooltip Text";
            document.getElementById("tooltip_txt-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("tooltip_txt-error").innerHTML="";
        }
        
        var banner_img=$("#banner_img").val();
        if(banner_img == ""){
            // document.getElementById("bg_image-error").innerHTML="Please Select Banner Background Image";
            // document.getElementById("bg_image-error").style.color="red";
            // valid = false;
        }else{
            if (!(/\.(png|jpg|jpeg)$/i).test(banner_img)) 
            {
                document.getElementById('banner_img-error').innerHTML = "Invalid file format";
                document.getElementById('banner_img-error').style.color = "red";
                valid = false;
            }
            else
            {
                document.getElementById('banner_img-error').innerHTML = "";
            }
        }   
        var us_beef_img=$("#us_beef_img").val();
        if(us_beef_img == ""){
        }else{
            if (!(/\.(png|jpg|jpeg)$/i).test(us_beef_img)) 
            {
                document.getElementById('us_beef_img-error').innerHTML = "Invalid file format";
                document.getElementById('us_beef_img-error').style.color = "red";
                valid = false;
            }
            else
            {
                document.getElementById('us_beef_img-error').innerHTML = "";
            }
        } 
        var us_pork_img=$("#us_pork_img").val();
        if(us_pork_img == ""){
        }else{
            if (!(/\.(png|jpg|jpeg)$/i).test(us_beef_img)) 
            {
                document.getElementById('us_pork_img-error').innerHTML = "Invalid file format";
                document.getElementById('us_pork_img-error').style.color = "red";
                valid = false;
            }
            else
            {
                document.getElementById('us_pork_img-error').innerHTML = "";
            }
        } 
        var tooltip_img=$("#tooltip_img").val();
        if(tooltip_img == ""){
        }else{
            if (!(/\.(png|jpg|jpeg)$/i).test(tooltip_img)) 
            {
                document.getElementById('tooltip_img-error').innerHTML = "Invalid file format";
                document.getElementById('tooltip_img-error').style.color = "red";
                valid = false;
            }
            else
            {
                document.getElementById('tooltip_img-error').innerHTML = "";
            }
        }     
        if(valid == true)
        {
            document.getElementById("Update_Form").submit();
        }
    }

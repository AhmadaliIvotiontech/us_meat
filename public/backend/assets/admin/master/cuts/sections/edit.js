function validateForm() 
    {
        var valid = true;
        var text_1=$("#text_1").val();
        if(text_1 == '')
        {
            document.getElementById("text_1-error").innerHTML="Please Enter Banner Text 1";
            document.getElementById("text_1-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("text_1-error").innerHTML="";
        }
        var text_2=$("#text_2").val();
        if(text_2 == '')
        {
            document.getElementById("text_2-error").innerHTML="Please Enter Banner Text 2";
            document.getElementById("text_2-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("text_2-error").innerHTML="";
        }
        var text_3=$("#text_3").val();
        if(text_3 == '')
        {
            document.getElementById("text_3-error").innerHTML="Please Enter Banner Text 3";
            document.getElementById("text_3-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("text_3-error").innerHTML="";
        }
        var text_4=$("#text_4").val();
        if(text_4 == '')
        {
            document.getElementById("text_4-error").innerHTML="Please Enter Text 4";
            document.getElementById("text_4-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("text_4-error").innerHTML="";
        }
        var text_5=$("#text_5").val();
        if(text_5 == '')
        {
            document.getElementById("text_5-error").innerHTML="Please Enter Text 5";
            document.getElementById("text_5-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("text_5-error").innerHTML="";
        }
        
        var banner_img=$("#banner_img").val();
        if(banner_img == ""){
            document.getElementById('banner_img-error').innerHTML = "";
        }else{
            if (!(/\.(png|jpg|jpeg)$/i).test(banner_img)){
                document.getElementById('banner_img-error').innerHTML = "Invalid file format";
                document.getElementById('banner_img-error').style.color = "red";
                valid = false;
            }else{
                document.getElementById('banner_img-error').innerHTML = "";
            }
        } 
        var banner_bg_img=$("#banner_bg_img").val();
        if(banner_bg_img == ""){
            document.getElementById('banner_bg_img-error').innerHTML = "";
        }else{
            if (!(/\.(png|jpg|jpeg)$/i).test(banner_bg_img)){
                document.getElementById('banner_bg_img-error').innerHTML = "Invalid file format";
                document.getElementById('banner_bg_img-error').style.color = "red";
                valid = false;
            }else{
                document.getElementById('banner_bg_img-error').innerHTML = "";
            }
        } 
        
       
        if(valid == true){
            document.getElementById("Update_Form").submit();
        }
    }

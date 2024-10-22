function validateForm() 
    {
        var valid = true;

        var text_1=$("#text_1");
        if(text_1.val() == "")
        {
            document.getElementById("text_1-error").innerHTML="Please Enter Banner Text 1";
            document.getElementById("text_1-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("text_1-error").innerHTML="";
        }
        var text_2=$("#text_2");
        if(text_2.val() == "")
        {
            document.getElementById("text_2-error").innerHTML="Please Enter Banner Text 2";
            document.getElementById("text_2-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("text_2-error").innerHTML="";
        }
        var text_3=$("#text_3");
        if(text_3.val() == "")
        {
            document.getElementById("text_3-error").innerHTML="Please Enter Banner Text 3";
            document.getElementById("text_3-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("text_3-error").innerHTML="";
        }
        var button_text=$("#button_text");
        if(button_text.val() == "")
        {
            document.getElementById("button_text-error").innerHTML="Please Enter Banner Button text";
            document.getElementById("text_3-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("button_text-error").innerHTML="";
        }
        var button_link=$("#button_link");
        if(button_link.val() == "")
        {
            document.getElementById("button_link-error").innerHTML="Please Enter Banner Button Link";
            document.getElementById("button_link-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("button_link-error").innerHTML="";
        }

        
        var bg_image=$("#bg_image").val();
        if(bg_image == ""){
            // document.getElementById("bg_image-error").innerHTML="Please Select Banner Background Image";
            // document.getElementById("bg_image-error").style.color="red";
            // valid = false;
        }else{
            if (!(/\.(png|jpg|jpeg)$/i).test(bg_image)) 
            {
                document.getElementById('bg_image-error').innerHTML = "Invalid file format";
                document.getElementById('bg_image-error').style.color = "red";
                valid = false;
            }
            else
            {
                document.getElementById('bg_image-error').innerHTML = "";
            }
        }

        var main_iamge=$("#main_iamge").val();
        if(main_iamge == ""){
            // document.getElementById("main_iamge-error").innerHTML="Please Select Banner Main Image";
            // document.getElementById("main_iamge-error").style.color="red";
            // valid = false;
        }else{
            if (!(/\.(png|jpg|jpeg)$/i).test(main_iamge)) 
            {
                document.getElementById('main_iamge-error').innerHTML = "Invalid file format";
                document.getElementById('main_iamge-error').style.color = "red";
                valid = false;
            }
            else
            {
                document.getElementById('main_iamge-error').innerHTML = "";
            }
        }

        var trademark_image=$("#trademark_image").val();
        if(trademark_image == ""){
            // document.getElementById("trademark_image-error").innerHTML="Please Select Banner Tradmark Image";
            // document.getElementById("trademark_image-error").style.color="red";
            // valid = false;
        }else{
            if (!(/\.(png|jpg|jpeg)$/i).test(trademark_image)) 
            {
                document.getElementById('trademark_image-error').innerHTML = "Invalid file format";
                document.getElementById('trademark_image-error').style.color = "red";
                valid = false;
            }
            else
            {
                document.getElementById('trademark_image-error').innerHTML = "";
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
            document.getElementById("UpdateBannerForm").submit();
        }
    }

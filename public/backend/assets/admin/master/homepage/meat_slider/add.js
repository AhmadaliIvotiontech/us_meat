function validateForm() 
    {
        var valid = true;

        var slider_name=$("#slider_name");
        if(slider_name.val() == "")
        {
            document.getElementById("slider_name-error").innerHTML="Please Enter Slider Name";
            document.getElementById("slider_name-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("slider_name-error").innerHTML="";
        }
        var button_text=$("#button_text");
        if(button_text.val() == "")
        {
            document.getElementById("button_text-error").innerHTML="Please Enter Banner Button text";
            document.getElementById("button_text-error").style.color="red";
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

        
        var slider_img=$("#slider_img").val();
        if(slider_img == ""){
            document.getElementById("slider_img-error").innerHTML="Please Select Slider Image";
            document.getElementById("slider_img-error").style.color="red";
            valid = false;
        }else{
            if (!(/\.(png|jpg|jpeg)$/i).test(slider_img)) 
            {
                document.getElementById('slider_img-error').innerHTML = "Invalid file format";
                document.getElementById('slider_img-error').style.color = "red";
                valid = false;
            }
            else
            {
                document.getElementById('slider_img-error').innerHTML = "";
            }
        }

        var trademark_img=$("#trademark_img").val();
        if(trademark_img == ""){
            document.getElementById("trademark_img-error").innerHTML="Please Select Tradmark Image";
            document.getElementById("trademark_img-error").style.color="red";
            valid = false;
        }else{
            if (!(/\.(png|jpg|jpeg)$/i).test(trademark_img)) 
            {
                document.getElementById('trademark_img-error').innerHTML = "Invalid file format";
                document.getElementById('trademark_img-error').style.color = "red";
                valid = false;
            }
            else
            {
                document.getElementById('trademark_img-error').innerHTML = "";
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
            document.getElementById("Add_Form").submit();
        }
    }

function validateForm() 
    {
        var valid = true;

        var text_1=$("#text_1");
        if(text_1.val() == "")
        {
            document.getElementById("text_1-error").innerHTML="Please Enter Testimonial Text 1";
            document.getElementById("text_1-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("text_1-error").innerHTML="";
        }
        var text_2=$("#text_2");
        if(text_2.val() == "")
        {
            document.getElementById("text_2-error").innerHTML="Please Enter Testimonial Text 2";
            document.getElementById("text_2-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("text_2-error").innerHTML="";
        }
        var description=$("#description");
        if(description.val() == "")
        {
            document.getElementById("description-error").innerHTML="Please Enter Testimonial Description";
            document.getElementById("description-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("description-error").innerHTML="";
        }
        var button_text=$("#button_text");
        if(button_text.val() == "")
        {
            document.getElementById("button_text-error").innerHTML="Please Enter Testimonial Button text";
            document.getElementById("button_text-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("button_text-error").innerHTML="";
        }
        var button_link=$("#button_link");
        if(button_link.val() == "")
        {
            document.getElementById("button_link-error").innerHTML="Please Enter Testimonial Button Link";
            document.getElementById("button_link-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("button_link-error").innerHTML="";
        }

        
        var img=$("#img").val();
        if(img == ""){
            // document.getElementById("slider_img-error").innerHTML="Please Select Slider Image";
            // document.getElementById("slider_img-error").style.color="red";
            // valid = false;
        }else{
            if (!(/\.(png|jpg|jpeg)$/i).test(img)) 
            {
                document.getElementById('img-error').innerHTML = "Invalid file format";
                document.getElementById('img-error').style.color = "red";
                valid = false;
            }
            else
            {
                document.getElementById('img-error').innerHTML = "";
            }
        }

        var img_text_1=$("#img_text_1");
        if(img_text_1.val() == "")
        {
            document.getElementById("img_text_1-error").innerHTML="Please Enter Image Text 1";
            document.getElementById("img_text_1-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("img_text_1-error").innerHTML="";
        }
        var img_text_2=$("#img_text_2");
        if(img_text_2.val() == "")
        {
            document.getElementById("img_text_2-error").innerHTML="Please Enter Image Text 2";
            document.getElementById("img_text_2-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("img_text_2-error").innerHTML="";
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

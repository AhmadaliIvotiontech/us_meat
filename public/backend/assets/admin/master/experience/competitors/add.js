function validateForm() 
    {
        var valid = true;

        var text_1=$("#text_1");
        if(text_1.val() == "")
        {
            document.getElementById("text_1-error").innerHTML="Please Enter Text 1";
            document.getElementById("text_1-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("text_1-error").innerHTML="";
        }
        var text_2=$("#text_2");
        if(text_2.val() == "")
        {
            document.getElementById("text_2-error").innerHTML="Please Enter Text 2";
            document.getElementById("text_2-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("text_2-error").innerHTML="";
        }
        var text_3=$("#text_3");
        if(text_3.val() == "")
        {
            document.getElementById("text_3-error").innerHTML="Please Enter Text 3";
            document.getElementById("text_3-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("text_3-error").innerHTML="";
        }
        var button_text=$("#button_text");
        if(button_text.val() == "")
        {
            document.getElementById("button_text-error").innerHTML="Please Enter Button text";
            document.getElementById("text_3-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("button_text-error").innerHTML="";
        }
        var button_link=$("#button_link");
        if(button_link.val() == "")
        {
            document.getElementById("button_link-error").innerHTML="Please Enter Button Link";
            document.getElementById("button_link-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("button_link-error").innerHTML="";
        }
        var preparation=$("#preparation");
        if(preparation.val() == "")
        {
            document.getElementById("preparation-error").innerHTML="Please Enter Preparation Time";
            document.getElementById("preparation-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("preparation-error").innerHTML="";
        }
        var serves=$("#serves");
        if(serves.val() == "")
        {
            document.getElementById("serves-error").innerHTML="Please Enter Serves";
            document.getElementById("serves-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("serves-error").innerHTML="";
        }        
        
        var img=$("#img").val();
        if(img == ""){
            document.getElementById("img-error").innerHTML="Please Select Image";
            document.getElementById("img-error").style.color="red";
            valid = false;
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

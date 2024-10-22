function validateForm() 
    {
        var valid = true;
        
        var text_1=$("#text").val();
        if(text_1 == '')
        {
            document.getElementById("text-error").innerHTML="Please Enter Text";
            document.getElementById("text-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("text-error").innerHTML="";
        }
        var text_description=$("#text_description").val();
        if(text_description == '')
        {
            document.getElementById("text_description-error").innerHTML="Please Enter Text Description";
            document.getElementById("text_description-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("text_description-error").innerHTML="";
        }
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
        var description=$("#description").val();
        if(description == '')
        {
            document.getElementById("description-error").innerHTML="Please Enter Description";
            document.getElementById("description-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("description-error").innerHTML="";
        }
        var participants=$("#participants").val();
        if(participants == '')
        {
            document.getElementById("participants-error").innerHTML="Please Enter Participants Text";
            document.getElementById("participants-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("participants-error").innerHTML="";
        }
        var participants_description=$("#participants_description").val();
        if(participants_description == '')
        {
            document.getElementById("participants_description-error").innerHTML="Please Participants Description";
            document.getElementById("participants_description-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("participants_description-error").innerHTML="";
        }

        var form_description=$("#form_description").val();
        if(form_description == '')
        {
            document.getElementById("form_description-error").innerHTML="Please Form Description";
            document.getElementById("form_description-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("form_description-error").innerHTML="";
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
        var img=$("#img").val();
        if(img == ""){
            document.getElementById('img-error').innerHTML = "";
        }else{
            if (!(/\.(png|jpg|jpeg)$/i).test(img)){
                document.getElementById('img-error').innerHTML = "Invalid file format";
                document.getElementById('img-error').style.color = "red";
                valid = false;
            }else{
                document.getElementById('img-error').innerHTML = "";
            }
        } 
        var video_link=$("#video_link").val();
        if(video_link == ""){
            document.getElementById('video_link-error').innerHTML = "";
        }else{
            if (!(/\.(mp4|jpg|jpeg)$/i).test(video_link)){
                document.getElementById('video_link-error').innerHTML = "Invalid file format";
                document.getElementById('video_link-error').style.color = "red";
                valid = false;
            }else{
                document.getElementById('video_link-error').innerHTML = "";
            }
        } 
       
        if(valid == true){
            document.getElementById("Update_Form").submit();
        }
    }

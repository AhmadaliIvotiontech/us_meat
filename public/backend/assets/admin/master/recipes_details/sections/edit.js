function validateForm() 
    {
        var valid = true;
        var rd_text_1=$("#rd_text_1").val();
        if(rd_text_1 == '')
        {
            document.getElementById("rd_text_1-error").innerHTML="Please Enter Banner Text 1";
            document.getElementById("rd_text_1-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("rd_text_1-error").innerHTML="";
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
        var video_link=$("#video_link").val();
        if(video_link == '')
        {
            document.getElementById("video_link-error").innerHTML="Please Enter Video Link";
            document.getElementById("video_link-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("video_link-error").innerHTML="";
        }
        var video_text_1=$("#video_text_1").val();
        if(video_text_1 == '')
        {
            document.getElementById("video_text_1-error").innerHTML="Please Enter Video Text 1";
            document.getElementById("video_text_1-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("video_text_1-error").innerHTML="";
        }
        var video_text_2=$("#video_text_2").val();
        if(video_text_2 == '')
        {
            document.getElementById("video_text_2-error").innerHTML="Please Enter Video Text 2";
            document.getElementById("video_text_2-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("video_text_2-error").innerHTML="";
        }
        var XXXXX=$("#video_text_description").val();
        if(video_text_description == '')
        {
            document.getElementById("video_text_description-error").innerHTML="Please Enter Video Description";
            document.getElementById("video_text_description-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("video_text_description-error").innerHTML="";
        }
        var ingredientes_text_1=$("#ingredientes_text_1").val();
        if(ingredientes_text_1 == '')
        {
            document.getElementById("ingredientes_text_1-error").innerHTML="Please Enter Ingredientes Text 1";
            document.getElementById("ingredientes_text_1-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("ingredientes_text_1-error").innerHTML="";
        }
        var ingredientes_text_2=$("#ingredientes_text_2").val();
        if(ingredientes_text_2 == '')
        {
            document.getElementById("ingredientes_text_2-error").innerHTML="Please Enter ngredientes Text 2";
            document.getElementById("ingredientes_text_2-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("ingredientes_text_2-error").innerHTML="";
        }
        var ingredientes=$("#ingredientes").val();
        if(ingredientes == '')
        {
            document.getElementById("ingredientes-error").innerHTML="Please Enter Ingredientes";
            document.getElementById("ingredientes-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("ingredientes-error").innerHTML="";
        }
        var preparation_text_1=$("#preparation_text_1").val();
        if(preparation_text_1 == '')
        {
            document.getElementById("preparation_text_1-error").innerHTML="Please Enter Preparation Text 1";
            document.getElementById("preparation_text_1-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("preparation_text_1-error").innerHTML="";
        }
        var preparation_text_2=$("#preparation_text_2").val();
        if(preparation_text_2 == '')
        {
            document.getElementById("preparation_text_2-error").innerHTML="Please Enter Preparation Text 2";
            document.getElementById("preparation_text_2-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("preparation_text_2-error").innerHTML="";
        }
        var preparation_description=$("#preparation_description").val();
        if(preparation_description == '')
        {
            document.getElementById("preparation_description-error").innerHTML="Please Enter Preparation Description";
            document.getElementById("preparation_description-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("preparation_description-error").innerHTML="";
        }
        var preparation_description_1=$("#preparation_description_1").val();
        if(preparation_description_1 == '')
        {
            document.getElementById("preparation_description_1-error").innerHTML="Please Enter Preparation Description 1";
            document.getElementById("preparation_description_1-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("preparation_description_1-error").innerHTML="";
        }
        var preparation_description_2=$("#preparation_description_2").val();
        if(preparation_description_2 == '')
        {
            document.getElementById("preparation_description_2-error").innerHTML="Please Enter Preparation Description 2";
            document.getElementById("preparation_description_2-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("preparation_description_2-error").innerHTML="";
        }
        var preparation_description_3=$("#preparation_description_3").val();
        if(preparation_description_3 == '')
        {
            document.getElementById("preparation_description_3-error").innerHTML="Please Enter Preparation Description 3";
            document.getElementById("preparation_description_3-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("preparation_description_3-error").innerHTML="";
        }
        var btn_txt=$("#btn_txt").val();
        if(btn_txt == '')
        {
            document.getElementById("btn_txt-error").innerHTML="Please Enter Button text";
            document.getElementById("btn_txt-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("btn_txt-error").innerHTML="";
        }
        var btn_link=$("#btn_link").val();
        if(btn_link == '')
        {
            document.getElementById("btn_link-error").innerHTML="Please Enter Button Link";
            document.getElementById("btn_link-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("btn_link-error").innerHTML="";
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
        var video_img=$("#video_img").val();
        if(video_img == ""){
            document.getElementById('video_img-error').innerHTML = "";
        }else{
            if (!(/\.(png|jpg|jpeg)$/i).test(video_img)){
                document.getElementById('video_img-error').innerHTML = "Invalid file format";
                document.getElementById('video_img-error').style.color = "red";
                valid = false;
            }else{
                document.getElementById('video_img-error').innerHTML = "";
            }
        } 
        var ingredientes_img=$("#ingredientes_img").val();
        if(ingredientes_img == ""){
            document.getElementById('ingredientes_img-error').innerHTML = "";
        }else{
            if (!(/\.(png|jpg|jpeg)$/i).test(ingredientes_img)){
                document.getElementById('ingredientes_img-error').innerHTML = "Invalid file format";
                document.getElementById('ingredientes_img-error').style.color = "red";
                valid = false;
            }else{
                document.getElementById('ingredientes_img-error').innerHTML = "";
            }
        } 
        var preparation_img=$("#preparation_img").val();
        if(preparation_img == ""){
            document.getElementById('preparation_img-error').innerHTML = "";
        }else{
            if (!(/\.(png|jpg|jpeg)$/i).test(preparation_img)){
                document.getElementById('preparation_img-error').innerHTML = "Invalid file format";
                document.getElementById('preparation_img-error').style.color = "red";
                valid = false;
            }else{
                document.getElementById('preparation_img-error').innerHTML = "";
            }
        } 
        var preparation_img_full=$("#preparation_img_full").val();
        if(preparation_img_full == ""){
            document.getElementById('preparation_img_full-error').innerHTML = "";
        }else{
            if (!(/\.(png|jpg|jpeg)$/i).test(preparation_img_full)){
                document.getElementById('preparation_img_full-error').innerHTML = "Invalid file format";
                document.getElementById('preparation_img_full-error').style.color = "red";
                valid = false;
            }else{
                document.getElementById('preparation_img_full-error').innerHTML = "";
            }
        } 
       
       
        if(valid == true){
            document.getElementById("Update_Form").submit();
        }
    }

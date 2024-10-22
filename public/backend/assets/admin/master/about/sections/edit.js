function validateForm() 
    {
        var valid = true;
        
        var us_meat_tooltip_txt=$("#us_meat_tooltip_txt").val();
        if(us_meat_tooltip_txt == '')
        {
            document.getElementById("us_meat_tooltip_txt-error").innerHTML="Please Enter US Meat Tooltip Text";
            document.getElementById("us_meat_tooltip_txt-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("us_meat_tooltip_txt-error").innerHTML="";
        }
        var us_meat_description=$("#us_meat_description").val();
        if(us_meat_description == '')
        {
            document.getElementById("us_meat_description-error").innerHTML="Please Enter US Meat Description";
            document.getElementById("us_meat_description-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("us_meat_description-error").innerHTML="";
        }
        var us_beef_tooltip_txt=$("#us_beef_tooltip_txt").val();
        if(us_beef_tooltip_txt == '')
        {
            document.getElementById("us_beef_tooltip_txt-error").innerHTML="Please Enter US Beef Tooltip Text";
            document.getElementById("us_beef_tooltip_txt-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("us_beef_tooltip_txt-error").innerHTML="";
        }
        var us_pork_tooltip_txt=$("#us_pork_tooltip_txt").val();
        if(us_pork_tooltip_txt == '')
        {
            document.getElementById("us_pork_tooltip_txt-error").innerHTML="Please Enter US Pork Tooltip Text";
            document.getElementById("us_pork_tooltip_txt-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("us_pork_tooltip_txt-error").innerHTML="";
        }
        var us_pork_description=$("#us_pork_description").val();
        if(us_pork_description == '')
        {
            document.getElementById("us_pork_description-error").innerHTML="Please Enter US Pork Description";
            document.getElementById("us_pork_description-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("us_pork_description-error").innerHTML="";
        }
        var text_1=$("#text_1").val();
        if(text_1 == '')
        {
            document.getElementById("text_1-error").innerHTML="Please Enter Text 1";
            document.getElementById("text_1-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("text_1-error").innerHTML="";
        }
        var text_2=$("#text_2").val();
        if(text_2 == '')
        {
            document.getElementById("text_2-error").innerHTML="Please Enter Text 2";
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
        var text_3=$("#text_3").val();
        if(text_3 == '')
        {
            document.getElementById("text_3-error").innerHTML="Please Enter Text 3";
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
        var description_1=$("#description_1").val();
        if(description_1 == '')
        {
            document.getElementById("description_1-error").innerHTML="Please Enter Description 1";
            document.getElementById("description_1-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("description_1-error").innerHTML="";
        }
        var description_2=$("#description_2").val();
        if(description_2 == '')
        {
            document.getElementById("description_2-error").innerHTML="Please Enter Description 2";
            document.getElementById("description_2-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("description_2-error").innerHTML="";
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
        var us_meat_img=$("#us_meat_img").val();
        if(us_meat_img == ""){
            document.getElementById('us_meat_img-error').innerHTML = "";
        }else{
            if (!(/\.(png|jpg|jpeg)$/i).test(us_meat_img)){
                document.getElementById('us_meat_img-error').innerHTML = "Invalid file format";
                document.getElementById('us_meat_img-error').style.color = "red";
                valid = false;
            }else{
                document.getElementById('us_meat_img-error').innerHTML = "";
            }
        } 
        var us_beef_img=$("#us_beef_img").val();
        if(us_beef_img == ""){
            document.getElementById('us_beef_img-error').innerHTML = "";
        }else{
            if (!(/\.(png|jpg|jpeg)$/i).test(us_beef_img)){
                document.getElementById('us_beef_img-error').innerHTML = "Invalid file format";
                document.getElementById('us_beef_img-error').style.color = "red";
                valid = false;
            }else{
                document.getElementById('us_beef_img-error').innerHTML = "";
            }
        } 
        var us_pork_img=$("#us_pork_img").val();
        if(us_pork_img == ""){
            document.getElementById('us_pork_img-error').innerHTML = "";
        }else{
            if (!(/\.(png|jpg|jpeg)$/i).test(us_pork_img)){
                document.getElementById('us_pork_img-error').innerHTML = "Invalid file format";
                document.getElementById('us_pork_img-error').style.color = "red";
                valid = false;
            }else{
                document.getElementById('us_pork_img-error').innerHTML = "";
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
        var chart_img=$("#chart_img").val();
        if(chart_img == ""){
            document.getElementById('chart_img-error').innerHTML = "";
        }else{
            if (!(/\.(png|jpg|jpeg)$/i).test(chart_img)){
                document.getElementById('chart_img-error').innerHTML = "Invalid file format";
                document.getElementById('chart_img-error').style.color = "red";
                valid = false;
            }else{
                document.getElementById('chart_img-error').innerHTML = "";
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

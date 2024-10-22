function validateForm() 
    {
        var valid = true;

        var type=$("#type").val();
        if(type == null)
        {
            document.getElementById("type-error").innerHTML="Please Select Type";
            document.getElementById("type-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("type-error").innerHTML="";
        }
        // var category=$("#category").val();
        // if(category == null)
        // {
        //     document.getElementById("category-error").innerHTML="Please Select Category";
        //     document.getElementById("category-error").style.color="red";
        //     valid = false;
        // }else{
        //     document.getElementById("category-error").innerHTML="";
        // }
        // var sub_category=$("#sub_category").val();
        // if(sub_category == null)
        // {
        //     document.getElementById("sub_category-error").innerHTML="Please Select Sub Category";
        //     document.getElementById("sub_category-error").style.color="red";
        //     valid = false;
        // }else{
        //     document.getElementById("sub_category-error").innerHTML="";
        // }
        var text_1=$("#text_1");
        if(text_1.val() == "")
        {
            document.getElementById("text_1-error").innerHTML="Please Enter Text 1";
            document.getElementById("text_1-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("text_1-error").innerHTML="";
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
        // var documentation=$("#documentation");
        // if(documentation.val() == "")
        // {
        //     document.getElementById("documentation-error").innerHTML="Please Enter Documentation";
        //     document.getElementById("documentation-error").style.color="red";
        //     valid = false;
        // }else{
        //     document.getElementById("documentation-error").innerHTML="";
        // }
        // var youtube_link=$("#youtube_link");
        // if(youtube_link.val() == "")
        // {
        //     document.getElementById("youtube_link-error").innerHTML="Please Enter Youtube Link";
        //     document.getElementById("youtube_link-error").style.color="red";
        //     valid = false;
        // }else{
        //     document.getElementById("youtube_link-error").innerHTML="";
        // }   
        var button_text=$("#button_text");
        if(button_text.val() == "")
        {
            document.getElementById("button_text-error").innerHTML="Please Enter Button text";
            document.getElementById("button_text-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("button_text-error").innerHTML="";
        }
        // var button_link=$("#button_link");
        // if(button_link.val() == "")
        // {
        //     document.getElementById("button_link-error").innerHTML="Please Enter Button Link";
        //     document.getElementById("button_link-error").style.color="red";
        //     valid = false;
        // }else{
        //     document.getElementById("button_link-error").innerHTML="";
        // }
      
        
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
        var banner_img=$("#banner_img").val();
        if(banner_img == ""){
            document.getElementById("banner_img-error").innerHTML="Please Select Banner Background Image";
            document.getElementById("banner_img-error").style.color="red";
            valid = false;
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
            document.getElementById("banner_bg_img-error").innerHTML="Please Select Banner Background Image";
            document.getElementById("banner_bg_img-error").style.color="red";
            valid = false;
        }else{
            if (!(/\.(png|jpg|jpeg)$/i).test(banner_bg_img)){
                document.getElementById('banner_bg_img-error').innerHTML = "Invalid file format";
                document.getElementById('banner_bg_img-error').style.color = "red";
                valid = false;
            }else{
                document.getElementById('banner_bg_img-error').innerHTML = "";
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
        var YouTubecheck=$("input[name='YouTubecheck']:checked").val();
        if(YouTubecheck == 1){
            var video_img=$("#video_img").val();
            if(video_img == ""){
                document.getElementById("video_img-error").innerHTML="Please Select Banner Background Image";
                document.getElementById("video_img-error").style.color="red";
                valid = false;
            }else{
                if (!(/\.(png|jpg|jpeg)$/i).test(video_img)){
                    document.getElementById('video_img-error').innerHTML = "Invalid file format";
                    document.getElementById('video_img-error').style.color = "red";
                    valid = false;
                }else{
                    document.getElementById('video_img-error').innerHTML = "";
                }
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
        }
        
        var check=$("input[name='check']:checked").val();
        if(check == 1){            
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
            

            
            
            
            var ingredientes_img=$("#ingredientes_img").val();
            if(ingredientes_img == ""){
                document.getElementById("ingredientes_img-error").innerHTML="Please Select Banner Background Image";
                document.getElementById("ingredientes_img-error").style.color="red";
                valid = false;
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
                document.getElementById("preparation_img-error").innerHTML="Please Select Banner Background Image";
                document.getElementById("preparation_img-error").style.color="red";
                valid = false;
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
                document.getElementById("preparation_img_full-error").innerHTML="Please Select Banner Background Image";
                document.getElementById("preparation_img_full-error").style.color="red";
                valid = false;
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
                document.getElementById("Add_Form").submit();
            }
        }else{
            if(valid == true){
                document.getElementById("Add_Form").submit();
            }
        }
        
    }

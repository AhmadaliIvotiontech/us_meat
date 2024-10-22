function validateForm() 
    {
        var valid = true;
        var description=$("#description").val();
        if(description == '')
        {
            document.getElementById("description-error").innerHTML="Please Enter Description";
            document.getElementById("description-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("description-error").innerHTML="";
        }
        var mail=$("#mail").val();
        if(mail == '')
        {
            document.getElementById("mail-error").innerHTML="Please Enter Email";
            document.getElementById("mail-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("mail-error").innerHTML="";
        }
        var phone=$("#phone").val();
        if(phone == '')
        {
            document.getElementById("phone-error").innerHTML="Please Enter Phone Number";
            document.getElementById("phone-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("phone-error").innerHTML="";
        }
        var address=$("#address").val();
        if(address == '')
        {
            document.getElementById("address-error").innerHTML="Please Enter Address";
            document.getElementById("address-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("address-error").innerHTML="";
        }
        var facebook_link=$("#facebook_link").val();
        if(facebook_link == '')
        {
            document.getElementById("facebook_link-error").innerHTML="Please Enter Facebook Link";
            document.getElementById("facebook_link-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("facebook_link-error").innerHTML="";
        }
        var twitter_link=$("#twitter_link").val();
        if(twitter_link == '')
        {
            document.getElementById("twitter_link-error").innerHTML="Please Enter Twitter Link";
            document.getElementById("twitter_link-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("twitter_link-error").innerHTML="";
        }
        var instagram_link=$("#instagram_link").val();
        if(instagram_link == '')
        {
            document.getElementById("instagram_link-error").innerHTML="Please Enter Instagram Link";
            document.getElementById("instagram_link-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("instagram_link-error").innerHTML="";
        }
        var linkedin_link=$("#linkedin_link").val();
        if(linkedin_link == '')
        {
            document.getElementById("linkedin_link-error").innerHTML="Please Enter Linkedin Link";
            document.getElementById("linkedin_link-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("linkedin_link-error").innerHTML="";
        }
        var pinterest_link=$("#pinterest_link").val();
        if(pinterest_link == '')
        {
            document.getElementById("pinterest_link-error").innerHTML="Please Enter Pinterest Link";
            document.getElementById("pinterest_link-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("pinterest_link-error").innerHTML="";
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
       
       
        if(valid == true){
            document.getElementById("Update_Form").submit();
        }
    }

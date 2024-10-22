function validateForm() 
    {
        var valid = true;

        var page_name=$("#page_name").val();
        if(page_name == null)
        {
            document.getElementById("page_name-error").innerHTML="Please Select Page Name";
            document.getElementById("page_name-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("page_name-error").innerHTML="";
        }
        var dropdown_name=$("#dropdown_name");
        if(dropdown_name.val() == "")
        {
            document.getElementById("dropdown_name-error").innerHTML="Please Enter Dropdown Name";
            document.getElementById("dropdown_name-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("dropdown_name-error").innerHTML="";
        }
        var dropdown_value=$("#dropdown_value");
        if(dropdown_value.val() == "")
        {
            document.getElementById("dropdown_value-error").innerHTML="Please Enter Dropdown Value";
            document.getElementById("dropdown_value-error").style.color="red";
            valid = false;
        }else{
            document.getElementById("dropdown_value-error").innerHTML="";
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

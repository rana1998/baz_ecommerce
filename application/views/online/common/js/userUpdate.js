var password = document.getElementById("psw")
  , confirm_password = document.getElementById("psw-repeat");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;









function subclick()
{
    // alert("check2");
    var jsonobj ={
                                 'emaId':'',
                                 'name':'',
                                 
      
                               }

                   jsonobj.emaId  = document.getElementById('emaId').value;
                   jsonobj.name    = document.getElementById('name').value;
                  

                  alert(jsonobj.emaId);
                  alert(jsonobj.name);
                               

      request = $.ajax({
        url:"<?php echo base_url('index.php/Control_shop/updtuser');?>",
        type: "post",
        dataType: "json",
        data: jsonobj,
        // processData:false,
        // contentType:false,
        // cache:false,
        // async:true,
        // data: data,
        success:function(data){

                 console.log(data);
                 if(data ===1)
                 {
                   window.location = "<?php echo base_url('index.php/Control_shop/profile');?>";
                 }
                 // if(data ===1)
                 // {
                 //   $("#qusId").css("display","none");
                 //   $("#rst").css("display","block");
                 // }
                 // else{
                 //  $("#wrongId").css("display","block");
                 // }

              
                }
    });
}



function upclick()
{
  // alert("check3");
    var jsonobj ={
                                 'emaId':'',
                                 'psw':'',
                                 
      
                               }

                   jsonobj.emaId  = document.getElementById('emaId2').value;
                   jsonobj.psw    = document.getElementById('psw').value;
                 
                               

      request = $.ajax({
        url:"<?php echo base_url('index.php/Sign/updaPass');?>",
        type: "post",
        dataType: "json",
        data: jsonobj,
        // processData:false,
        // contentType:false,
        // cache:false,
        // async:true,
        // data: data,
        success:function(data){

                 console.log(data);
                 if(data ===1)
                 {
                   window.location = "<?php echo base_url('index.php/Login/');?>";
                 }
                 // else{
                 //  $("#wrongId").css("display","block");
                 // }

              
                }
    });
}
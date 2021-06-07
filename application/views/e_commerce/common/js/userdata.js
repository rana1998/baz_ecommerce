function upclick()
{
  // alert("check3");
    var jsonobj ={
                                 'name':'',
                                 'email':'',
                                 'mobile':'',
                                 'password':'',
                                 
      
                               }

                   jsonobj.name   = document.getElementById('name').value;
                   jsonobj.email  = document.getElementById('email').value;
                   jsonobj.mobile  = document.getElementById('mobileno').value;
                   jsonobj.password  = document.getElementById('password').value;
                 
                               

      request = $.ajax({
        url:"<?php echo base_url('index.php/Control_shop/updawebloginPass');?>",
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
                   window.location = "<?php echo base_url('index.php/Control_shop/login2');?>";
                 }
                 // else{
                 //  $("#wrongId").css("display","block");
                 // }

              
                }
    });
}
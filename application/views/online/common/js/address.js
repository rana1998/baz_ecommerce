function switchVisible() {
            if (document.getElementById('Div1')) {

                if (document.getElementById('Div1').style.display == 'none') {
                    document.getElementById('Div1').style.display = 'block';
                    document.getElementById('Div2').style.display = 'none';
                }
                else {
                    document.getElementById('Div1').style.display = 'none';
                    document.getElementById('Div2').style.display = 'block';
                }
            }
}


$(document).ready(function(){
    $('#choseaddress').on('submit',function(e){
         e.preventDefault();
         //alert($("input[type='radio'][name='address']:checked").val());
         //console.log(new FormData(this));
         // if ($("#input_file").val()== ' ') {
         //  alert('please select the valid image');
         // }
         // else{
               
     var selectedadd = $("input[type='radio'][name='address']:checked").val();
     

     

        
          $.ajax({
                url:"<?php echo base_url('index.php/Control_shop/checkout_manage');?>",
                method:'POST',
                data:new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success:function(data){
                  
                  // alert(data);
                  // $("#log_help").click();
                  // $("#ladda2").hide();
                  // alert("put image in div");
                  // $("#up_image").empty();
                  // $("#up_image").html(data);  

                  window.location.href="<?php echo base_url('index.php/Control_shop/checkout_manage?content="+selectedadd+"');?>";
                  //alert("Successfully Activated");
                  //window.location.reload();
                }
          });
         // }
    });
        
});


$(document).ready(function(){
    $('#addnewaddress').on('submit',function(e){
         e.preventDefault();
         //alert($("input[type='radio'][name='address']:checked").val());
         //console.log(new FormData(this));
         // if ($("#input_file").val()== ' ') {
         //  alert('please select the valid image');
         // }
         // else{
               
     

     

        
          $.ajax({
                url:"<?php echo base_url('index.php/Control_shop/addweb_address');?>",
                method:'POST',
                data:new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success:function(data){
                  
                  // alert(data);
                  // $("#log_help").click();
                  // $("#ladda2").hide();
                  // alert("put image in div");
                  // $("#up_image").empty();
                  // $("#up_image").html(data);               
                  //alert("Successfully Activated");
                  window.location.reload();
                }
          });
         // }
    });
        
});

 function deleteaddress(val)
 { 
  var itemId = val.getAttribute('data-address-id');
 // alert(itemId);
  var request;
       request = $.ajax({
         url:"<?php echo base_url('index.php/Control_shop/dlt_webshipaddr');?>",
         type: "post",
         data: "val=" + itemId,
         success: function(data) {
          
           //console.log(data);
           window.location.reload();
          } 
        });
 }

$(document).ready(function(){
    $('#loginId').on('submit',function(e){
         e.preventDefault();
         // alert('check1');
         // if ($("#input_file").val()== ' ') {
         //  alert('please select the valid image');
         // }
         // else{
          $("#ladda2").show();
        
          $.ajax({
                url:"<?php echo base_url('index.php/Login/auth');?>",
                method:'POST',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success:function(data){
                  // alert(data);
                  $("#log_help").click();
                  $("#ladda2").hide();
                  // alert("put image in div");
                  // $("#up_image").empty();
                  // $("#up_image").html(data);               
                }
          });
         // }
    });
        
});

// $(document).ready(function(){
//     $('#signupfrm').on('submit',function(e){
//          e.preventDefault();
//          // alert('check2');
//          // if ($("#input_file").val()== ' ') {
//          //  alert('please select the valid image');
//          // }
//          // else{
//           // var itm_nm=$('')
//           // var itm_code=
//           // var itm_cat=
//           // var itm_wt=
//           // var itm_qnt=
//           // var itm_mrp=
//           // if()
//           $.ajax({
//                 url:"<?php echo base_url('index.php/Login/addsignUp');?>",
//                 method:'POST',
//                 data: new FormData(this),
//                 contentType: false,
//                 cache: false,
//                 processData:false,
//                 success:function(data){
//                   $("#log_help").click();
//                   // alert("put image in div");
//                   // $("#up_image").empty();
//                   // $("#up_image").html(data);               
//                 }
//           });
//          // }
//     });
        
// });


function forclick()
{
  var ema = document.getElementById('logemail').value;
  // alert(ema);
  
  window.location.href = "<?php echo base_url('index.php/Sign/forget?emaId="+ema+"');?>";
}
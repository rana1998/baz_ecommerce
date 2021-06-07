// //Ajax 
// var request;
// $("#signupId").submit(function(event){
//     // Prevent default posting of form - put here to work in case of errors
//     event.preventDefault();

   
//     var data = new FormData(this);
//     // var $resource = $('#classtemplate option:selected').val();
//   console.log(data);


//     // data.append('classtemplate',$resource);

//     // Fire off the request to /form.php
//     request = $.ajax({
//         url:"<?php echo base_url('index.php/Control_shop/addsignUp');?>",
//         type: "post",
//         // dataType: "json",
//         processData:false,
//         contentType:false,
//         cache:false,
//         async:true,
//         data: data,
//     });



 
//  $('#signupId').trigger("reset");
//  // alert('Successfully submitted');

//     // Callback handler that will be called on success
//     request.done(function (response, textStatus, jqXHR){
//         // console.log("Hooray, it worked!");
//         alert(response);

//     });



//     // Callback handler that will be called on failure
//     request.fail(function (jqXHR, textStatus, errorThrown){
//         console.error(
//             "The following error occurred: "+
//             textStatus, errorThrown
//         );
//     });

// });

// function sub()
// {
//     alert('check1');

//     var data = new FormData(this);
//     // var $resource = $('#classtemplate option:selected').val();
//   console.log(data);


//     // data.append('classtemplate',$resource);

//     // Fire off the request to /form.php
//     request = $.ajax({
//         url:"<?php echo base_url('index.php/Control_shop/addsignUp');?>",
//         type: "post",
//         // dataType: "json",
//         processData:false,
//         contentType:false,
//         cache:false,
//         async:true,
//         data: data,
//     });



 
//  $('#signupId').trigger("reset");
//  // alert('Successfully submitted');

//     // Callback handler that will be called on success
//     request.done(function (response, textStatus, jqXHR){
//         // console.log("Hooray, it worked!");
//         alert(response);

//     });



//     // Callback handler that will be called on failure
//     request.fail(function (jqXHR, textStatus, errorThrown){
//         console.error(
//             "The following error occurred: "+
//             textStatus, errorThrown
//         );
//     });

// }
// $(document).ready(function(){
//     $('#loginId').on('submit',function(e){
//          e.preventDefault();
//          // alert('check1');
//          // if ($("#input_file").val()== ' ') {
//          //  alert('please select the valid image');
//          // }
//          // else{
//           $.ajax({
//                 url:"<?php echo base_url('index.php/Login/auth');?>",
//                 method:'POST',
//                 data: new FormData(this),
//                 contentType: false,
//                 cache: false,
//                 processData:false,
//                 success:function(data){
//                   // alert(data);
//                   $("#log_help").click();
//                   // alert("put image in div");
//                   // $("#up_image").empty();
//                   // $("#up_image").html(data);               
//                 }
//           });
//          // }
//     });
        
// });


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




$(document).ready(function(){
    $('#signupfrm').on('submit',function(e){
         e.preventDefault();
         // alert('check2');
         // if ($("#input_file").val()== ' ') {
         //  alert('please select the valid image');
         // }
         // else{
          // var itm_nm=$('')
          // var itm_code=
          // var itm_cat=
          // var itm_wt=
          // var itm_qnt=
          // var itm_mrp=
          // if()

          $secure1 = $("#secure1 option:selected").val();
          $secure2 = $("#secure2 option:selected").val();

          var data = new FormData(this);

    // data.append('name',$secure1);
    // data.append('mobile',$secure1);
    // data.append('email',$secure1);
    // data.append('addresss',$secure1);
    // data.append('psw',$secure1);
    // data.append('pincode',$secure1);
    // data.append('secureans1',$secure1);
    // data.append('secureans1',$secure1);
    data.append('secure1',$secure1);
    data.append('secure2',$secure2);


          $.ajax({
                url:"<?php echo base_url('index.php/Login/addsignUp');?>",
                method:'POST',
                // data: new FormData(this),
                data: data,
                contentType: false,
                cache: false,
                processData:false,
                success:function(data){
                    // window.location =  <?php echo base_url('index.php/Login/');?>;
                  $("#log_help").click();
                  // if(data === 0)
                  // {
                  // window.location = "<?php echo base_url('index.php/Login/');?>";
                  // }

                  // alert("put image in div");
                  // $("#up_image").empty();
                  // $("#up_image").html(data);               
                }
          });
         // }
    });
        
});
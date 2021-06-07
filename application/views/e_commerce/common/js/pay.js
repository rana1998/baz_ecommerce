
function orderclick()
{

  var addrid = document.getElementById('addrid').value;
  //alert(addrid);
  // var user_id = 'order';
  // alert('order');
  
  // var request;
  //     request = $.ajax({
  //       url:"<?php echo base_url('index.php/Control_shop/weborderItm');?>",
  //       type: "post",
  //       data: "val=" + user_id,
  //       success: function(data) {
          
  //         console.log(data);
  //         window.location.href = "<?php echo base_url('index.php/Control_shop/confirmorder');?>";
  //        } 
  //      });

  var finalamt    = $("#famt").text();
  var coupType    = $("#coupantype").val();
  var coupanid    = $("#inputcoupanid").val();
  var discount    = $("#disamt").text();

  if( finalamt == '' || coupType  == '' || coupanid == '' || discount == '')
  {
    finalamt = '0';
    coupType = '0';
    coupanid = '0';
    discount = '0';
  }

  alert(valId);

    var request;
      request = $.ajax({
        url:"<?php echo base_url('index.php/Control_shop/weborderItm');?>",
        type: "post",
        data: "val=" + addrid+ "&finalamt="+finalamt+"&coupType="+coupType+"&coupanid="+coupanid+"&discount="+discount,
        success: function(data) {
          
          console.log(data);
          window.location.href = "<?php echo base_url('index.php/Control_shop/confirmorder');?>";
         } 
       });

}





$(document).ready(function(){
   $("#aid").click(function(){
            var $val =  $("input[name='payment']:checked").val();
            // alert($val);

            // if($val !== '')
            // {
               if($val == "cash")
              {
                // orderclick();
                 var addrid = document.getElementById('addrid').value;

                 // alert(addrid);


                   var finalamt    = $("#famt").text();
  var coupType    = $("#coupantype").val();
  var coupanid    = $("#inputcoupanid").val();
  var discount    = $("#disamt").text();

  // if( finalamt == '' || coupType  == '' || coupanid == '' || discount == '')
  // {
  //   finalamt = '0';
  //   coupType = '0';
  //   coupanid = '0';
  //   discount = '0';
  // }

  
                 // alert(addrid);

                 var request;
                   request = $.ajax({
                     url:"<?php echo base_url('index.php/Control_shop/weborderItm');?>",
                     type: "post",
                     data: "val=" + addrid+ "&finalamt="+finalamt+"&coupType="+coupType+"&coupanid="+coupanid+"&discount="+discount,
                     success: function(data) {
          
                       console.log(data);
                          window.location.href = "<?php echo base_url('index.php/Control_shop/confirmorder');?>";
                      } 
                    });

                  // window.location.reload();
                  // alert('check');
                }
                else if ($val == "online") {

                   // var $val = document.getElementById('famt').innerHTML;
                   // window.location.href="<?php echo base_url('index.php/Control_shop/onlinepayform?valId="+$val+"');?>";
                  //var $amount12= $('#famt').val();
                  //$('#hiddenamt').val($amount12);
                  //alert($('#hiddenamt').val($amount12));
                   $('#clickbtn').click();
                   //  var amount_pay = document.getElementById('famt').innerHTML;
                   //  alert(amount_pay);
                   //    var request;
                   // request = $.ajax({
                   //   url:"<?php echo base_url('index.php/Control_pay/payment');?>",
                   //   type: "post",
                   //   data: "order_amount=" + amount_pay,
                   //   success: function(data) {
                   //      // window.reload();
                   //      var obj = parseJSON(data);
                   //     console.log(obj);
                   //      }
                   //  });

                   // alert("check");

               }
            
           

    });
});

 


 function blclick()
{
   var profileId=document.getElementById("re");
  if(profileId.style.display=="flex")
  {
    profileId.style.display="none";
  }
  else
  {
    profileId.style.display="flex";
  }
}




function proclick(val)
{

  // alert(val.getAttribute('id'));
  var valId =  val.getAttribute('id');
  var valType = val.getAttribute('data-pro-type');
  window.location.href = "<?php echo base_url('index.php/Control_shop/product?valId="+valId+"&valType="+valType+"');?>";
}

function showcoupontext(){

  if(document.getElementById("codebox").style.display="none"){
    document.getElementById("codebox").style.display="block";
  }
}


$(document).ready(function(){
    $('#applycoupon').on('submit',function(e){
         e.preventDefault();
         // alert('check1');
         // if ($("#input_file").val()== ' ') {
         //  alert('please select the valid image');
         // }
         // else{
          $("#ladda2").show();
        
          $.ajax({
                url:"<?php echo base_url('index.php/welcome/apply_code');?>",
                method:'POST',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success:function(data){
                  // alert(data);
                  //$("#log_help").click();
                  $("#ladda2").hide();
                  console.log(data);
              
                  
                    var $amt2 =  $("#amt1").text();
                    var $delivery = $('#damt').text();

                    


                //alert($amt2);
                var obj = $.parseJSON(data);

                $("#coupantype").val(obj.type);

                  console.log(obj); 

                    if(obj.type == "Direct"){

                      if(obj.status == "Active"){

                        if(obj.mini_order <= parseInt($amt2) ){

                          var finalamt= $amt2 - obj.amount + parseInt($delivery) ; 

                          //alert(finalamt);
                          $('#disamt').text(obj.amount);

                          $('#famt').text(finalamt);
                          $('#hiddenamt').val(finalamt);

                           $('#notminamt').hide();
                           $('#statushowsuccess').show();
                        
                        }else{

                            $('#notminamt').show();
                            $('#miniamt').text(obj.mini_order);

                        }

                      }else{
                        $('#statushow').show();
                      }
                   
                    }else if(obj.type == "Percent"){

                     
                      if(obj.status == "Active"){
                        //alert($amt2);
                        //alert(obj.mini_order);
                        
                        if(obj.mini_order <= parseInt($amt2)){

                         //alert("check");
                          var peroff =($amt2*obj.amount) / 100;
                          //alert(peroff);
                          //alert(obj.max_offer_amount);
                            if(peroff >= obj.max_offer_amount){
                                  $('#disamt').text(obj.max_offer_amount);
                                  $amt2= $amt2 - obj.max_offer_amount + parseInt($delivery);
                                  //alert($amt2);
                                  $('#famt').text($amt2);
                                  $('#hiddenamt').val($amt2);
                                  $('#notminamt').hide();
                           $('#statushowsuccess').show();
                                 
                                }else {
                                  $('#disamt').text(peroff);
                                  $amt2 = $amt2 - peroff + parseInt($delivery);
                                  $('#famt').text($amt2);
                                 $('#hiddenamt').val($amt2);
                                  $('#notminamt').hide();
                                  $('#statushowsuccess').show();
                                
                                }
                          

                        }else{

                            $('#notminamt').show();
                            $('#miniamt').text(obj.mini_order);

                        }
                      


                    }else{
                      $('#statushow').show();
                    }

                  }

                }
          });
         // }
    });
        
});


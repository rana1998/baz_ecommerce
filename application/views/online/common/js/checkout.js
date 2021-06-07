function openNav() {
  document.getElementById("myNav").style.width = "70%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

function srchclick()
{
  document.getElementById('gsearch').style.display='block';
  document.getElementById('srchId').style.display='none';
}

// function purchaseClick(val)
// {
// 	document.getElementById('footId').style.display = "block";

    
// 	document.getElementById('ammount').value =  parseInt(document.getElementById('ammount').value) + parseInt(val.getAttribute('data-price-type'));
// 	// if(parseInt(document.getElementById('ammount').value) > 0)
// 	// {
// 	// 	parseInt(document.getElementById('ammount').value) +=  parseInt(val.getAttribute('data-price-type'));
// 	// }
// }


// function removeClick(val)
// {
// 	var itemId = val.getAttribute('data-item-id');
// 	var request;
//       request = $.ajax({
//         url:"<?php echo base_url('index.php/Control_shop/rmvItm');?>",
//         type: "post",
//         data: "val=" + itemId,
//         success: function(data) {
          
//           console.log(data);
//          } 
//        });
// }

var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);

  
}

function showPage() {

  document.getElementById("loader").style.display = "none";
  document.getElementById("mainContentDiv").style.display = "block";
  
  // document.getElementsByTagName("body").style.display = "block";

}

window.onload = function()
{
  myFunction(); 
}


function orderclick()
{
  var modal = document.getElementById("myModal");
  modal.style.display = "block";
  
  //var user_id = 'order';

 
 var user_id = <?php echo $_GET['content']; ?>;
 //alert(user_id);


  
  var request;
      request = $.ajax({
        url:"<?php echo base_url('index.php/Control_shop/orderItm');?>",
        type: "post",
        data: "val=" + user_id,
        success: function(data) {
          
          console.log(data);
         } 
       });

}

 var modal = document.getElementById("myModal");
 
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


function removeClick(val)
{
  var modal = document.getElementById("removedModal");
  modal.style.display = "block";
  
  var itemId = val.getAttribute('id');
  var request;
      request = $.ajax({
        url:"<?php echo base_url('index.php/Control_shop/rmvItm');?>",
        type: "post",
        data: "val=" + itemId,
        success: function(data) {
          
          console.log(data);
          //window.location.reload();
         } 
       });


}


function catclick()
{
var attend = document.getElementById("subAttend");
if(attend.style.display=="none")
{
  attend.style.display="block";
}
else
{
  attend.style.display="none";
}

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

                  console.log(obj); 

                    if(obj.type == "Direct"){

                      if(obj.status == "Active"){

                        if(obj.mini_order <= parseInt($amt2) ){

                          var finalamt= $amt2 - obj.amount + parseInt($delivery) ; 

                          //alert(finalamt);
                          $('#disamt').text(obj.amount);

                          $('#famt').text(finalamt);

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
                                  $('#notminamt').hide();
                           $('#statushowsuccess').show();
                                 
                                }else {
                                  $('#disamt').text(peroff);
                                  $amt2 = $amt2 - peroff + parseInt($delivery);
                                  $('#famt').text($amt2);
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
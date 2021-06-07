

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




function tblshow()
{
  if($("#gsearch").val() !== "")
  {
  $("#tbl").show();
  $("#gsearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("table tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
  }
  else
  {
    $("#tbl").hide();
  }

}


function itemget()
{
   // alert('check3');
}



function itmsrch()
{
  var valType = $("#categoryId option:selected").val();
  // alert(valType);

  var valId = $("#gsearch").val();
   // alert(valId);


  window.location.href = "<?php echo base_url('index.php/Control_shop/product?valId="+valId+"&valType="+valType+"');?>";


}


function itmclick(val)
{
  document.getElementById('tbl').style.display = "none";
  // alert(val.innerHTML);
  // alert(val.getAttribute('data-cat-type'));

  var cat = val.getAttribute('data-cat-type');

  // alert(val.innerHTML);

  $('#gsearch').val(val.innerHTML);
  window.location.href = "<?php echo base_url('index.php/Control_shop/product?valId="+val.id+"&valType="+cat+"');?>";


  // $('#gsearch').val(val.innerHTML);
  // window.location.href = "<?php echo base_url('index.php/Control_shop/product?valId="+val.innerHTML+"&valType="+cat+"');?>";
}




$(document).ready(function() {
            $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
            $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
        });

/*
function minus(val)
{

  var quan = document.getElementById('quanId_'+val).value;
  // alert(quan);
  if(quan > 1)
  {
   document.getElementById('quanId_'+val).value = --quan;
   }

}


// var r = 0;
function pl(val)
{

  var quan = document.getElementById('quanId_'+val).value;
  // alert(quan);
  if(quan < 10)
  {
   document.getElementById('quanId_'+val).value = ++quan;
   }

} */




var count = 0;
var f2 = <?php echo $cardcount?>;
var f3= <?php echo $cardcountberorelog?>;


function addbagclick(val)
{         var addbuttonid = val.getAttribute('id');
          var plusminusbutton = val.getAttribute('id');


          var pbtn = document.getElementById('plusminus_'+plusminusbutton);

          var abtn = document.getElementById('addbuttonid_'+addbuttonid);
           var a1= pbtn.getAttribute('id');
          var b1= abtn.getAttribute('id');
          document.getElementById(a1).style.display="block";
          document.getElementById(b1).style.display="none";

          <?php if($user_info){ ?>
              if(f2>0){
                        document.getElementById('count').innerHTML = ++f2;
                     }else
                    {
                      document.getElementById('count').innerHTML = ++count;
                    }  

          <?php }else{ ?>
              if(f3>0){
                        document.getElementById('count').innerHTML = ++f3;
                     }else
                    {
                      document.getElementById('count').innerHTML = ++count;
                    }
              <?php } ?>

                     var jsonobj ={
                                 'item_id':'',
                                 'price':'',
                                 'quantity':'',
      
                               }

                      var quan = val.getAttribute('data-quantity-type');
                      // alert(quan);

                      var priceval = document.getElementById(val.getAttribute('data-quantity-type')).value;
 
                       var c = val.getAttribute('data-offerprice-type');

                       if(c>0)
                       {
                          // var b = val.getAttribute('data-price-type');
                       var a = parseInt(priceval)*parseInt(c);
                       }
                       else
                       {
                       var b = val.getAttribute('data-price-type');
                       var a = parseInt(priceval)*parseInt(b);
                       }

                       // alert(a);

                   jsonobj.item_id  = val.getAttribute('id');
                   // jsonobj.price    = val.getAttribute('data-price-type');
                   jsonobj.price    = a;
                    // jsonobj.price    = priceval;
//                    jsonobj.quantity = val.getAttribute('data-quantity-type');
                   jsonobj.quantity = priceval;
                   
                       // alert(jsonobj.item_id);
                       // alert(jsonobj.price);
                       // alert(jsonobj.quantity);
                               

                  
      request = $.ajax({
        url:"<?php echo base_url('index.php/Control_shop/webaddcart');?>",
        type: "post",
        dataType: "json",
        data: jsonobj,
           success:function(data){

                    console.log(data);
 // console.log(data['tempuser_id']);
            
 //                    if(data['tempuser_id']);
 //                    {
 //                      // window.location.reload();
 //                       document.getElementById("viewClass").style.display ='flex';
 //                       $("#viewId").attr('data-ran-type',data['tempuser_id']);
 //                       // var $val = $("#viewId").attr('onclick',window.location ='<?php echo base_url('index.php/Control_shop/cart2_manage?val=".data->category"');?>');
 //                       // console.log($val);
 //                    }
               
                    // console.log(data);$("#btn1_"+vaid).attr('data-itm_id',data.item_id);
            $("#btn1_"+addbuttonid).attr('data-itm_id',data.item_id);        
            $("#btn1_"+addbuttonid).attr('data-quantity-type',data.quantity);
            $("#btn1_"+addbuttonid).attr('data-price-type',data.price);
            $("#btn1_"+addbuttonid).attr('id',data.id);

            
          
          // alert( $("#btn2_"+vaid).attr('data-itm_id'));
            $("#btn2_"+addbuttonid).attr('data-itm_id',data.item_id);
            $("#btn2_"+addbuttonid).attr('data-quantity-type',data.quantity);
            $("#btn2_"+addbuttonid).attr('data-price-type',data.price);
            $("#btn2_"+addbuttonid).attr('id',data.id);

            $("#quanId_"+addbuttonid).attr('id','quanId_'+data.id);
                  
                            
                }

                

                  
     
    });


    request.done(function (response, textStatus, jqXHR){
        

    });






}






function minus(val)
{

  // var vId = val.getAttribute('data-cartid');
  var vId = val.id;
  // alert(vId);

   //var quan = document.getElementById('quanId_'+vId).value;
  var quan = document.getElementById('quanId_'+vId).value;
  // alert(quan);
  if(quan > 0 )
  {
   document.getElementById('quanId_'+vId).value = --quan;
   // document.getElementById('itemprice_'+vId).innerHTML = parseInt(document.getElementById('itemprice_'+vId).innerHTML) - parseInt(val.getAttribute('data-price-type'));
   // alert(document.getElementById('amountId').innerHTML);  
   // document.getElementById('amountId').innerHTML = parseInt(document.getElementById('amountId').innerHTML) - parseInt(val.getAttribute('data-price-type'));

   }


  var quan3 = document.getElementById('quanId_'+vId).value;
  // alert(quan3);
if(quan3 == '0')
  {
    var itemId = val.id;
   // alert(itemId);
  var dat2 = val.getAttribute('data-itm_id');
   var dat = 'addbuttonid_'+dat2;
  // alert(dat);

  var dat3 = 'plusminus_'+dat2;

  var request;
      request = $.ajax({
        url:"<?php echo base_url('index.php/Control_shop/webrmv_item2');?>",
        type: "post",
        data: "val=" + itemId,
        success: function(data) {
          
          console.log(data);
          // window.location.reload();
            document.getElementById(dat).style.display = "flex";
            document.getElementById(dat3).style.display ="none";
         } 
       });
  }
  else
  {
         var jsonobj ={
                                 'item_id':'',
                                 'price':'',
                                 'quantity':'',
                                 'card_item_id':'',
      
      
                               }

                      var quan = val.getAttribute('data-quantity-type');
                      //alert(quan);

                      // var priceval = document.getElementById(val.getAttribute('data-quantity-type')).value;
                     // var priceval = val.getAttribute('data-quantity-type').value;
                     var priceval = document.getElementById('quanId_'+vId).value;
                     //alert(priceval); 
 
                       var b = val.getAttribute('data-price-type');
                       var a = parseInt(priceval)*parseInt(b);

                       // alert(a);

                   // jsonobj.item_id  = val.getAttribute('id');
                   jsonobj.item_id = val.getAttribute('data-itm_id');
                   // jsonobj.price    = val.getAttribute('data-price-type');
                   jsonobj.price    = a;
                    // jsonobj.price    = priceval;
//                    jsonobj.quantity = val.getAttribute('data-quantity-type');
                   // jsonobj.quantity = priceval;
                   jsonobj.quantity  = document.getElementById('quanId_'+vId).value;

                   // jsonobj.card_item_id = val.getAttribute('data-cardId-type');
                   jsonobj.card_item_id = val.id;
                   // alert(jsonobj.card_item_id);

                       // alert(jsonobj.item_id);
                       // alert(jsonobj.price);
                       // alert(jsonobj.quantity);
                               

      request = $.ajax({
        url:"<?php echo base_url('index.php/Control_shop/webupaddcart');?>",
        type: "post",
        dataType: "json",
        data: jsonobj,
     
    });

 

 $('form').trigger("reset");

// alert('Successfully submitted');

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        console.log("Hooray, it worked!");

    });



    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });
  }
   
   



}




function pl(val)
{

  // var vId = val.getAttribute('data-cartid');
  var vId = val.id;
  //alert(vId);

  // alert(vId);
  // var quan = document.getElementById('quanId_'+vId).value;
  var quan = document.getElementById('quanId_'+vId).value;
   // alert(quan);
  if(quan < 10)
  {
   document.getElementById('quanId_'+vId).value = ++quan;
   // document.getElementById('itemprice_'+vId).innerHTML = parseInt(document.getElementById('itemprice_'+vId).innerHTML) + parseInt(val.getAttribute('data-price-type'));
   // alert(document.getElementById('amountId').innerHTML); 
   // document.getElementById('amountId').innerHTML = parseInt(document.getElementById('amountId').innerHTML) + parseInt(val.getAttribute('data-price-type'));

   }

   // document.getElementById('itemprice_'+vId).innerHTML = parseInt(document.getElementById('itemprice_'+vId).innerHTML) + parseInt(val.getAttribute('data-price-type'));
   // // alert(document.getElementById('amountId').innerHTML); 
   // document.getElementById('amountId').innerHTML = parseInt(document.getElementById('amountId').innerHTML) + parseInt(val.getAttribute('data-price-type'));

   var jsonobj ={
                                 'item_id':'',
                                 'price':'',
                                 'quantity':'',
                                 'card_item_id':'',
      
                               }

                      var quan = val.getAttribute('data-quantity-type');
                     // alert(quan);

                      // var priceval = document.getElementById(val.getAttribute('data-quantity-type')).value;
                      // var priceval = val.getAttribute('data-quantity-type');

                      var priceval = document.getElementById('quanId_'+vId).value;
 
                       var b = val.getAttribute('data-price-type');
                       var a = parseInt(priceval)*parseInt(b);

                       // alert(a);

                   // jsonobj.item_id  = val.getAttribute('id');
                   jsonobj.item_id = val.getAttribute('data-itm_id');
                   // jsonobj.price    = val.getAttribute('data-price-type');
                   jsonobj.price    = a;
                    // jsonobj.price    = priceval;
//                    jsonobj.quantity = val.getAttribute('data-quantity-type');
                   // jsonobj.quantity = priceval;
                   jsonobj.quantity  = document.getElementById('quanId_'+vId).value;
                   // jsonobj.card_item_id = val.getAttribute('data-cardId-type');

                   jsonobj.card_item_id = val.id;

                       // alert(jsonobj.item_id);
                       // alert(jsonobj.price);
                       // alert(jsonobj.quantity);
                               

      request = $.ajax({
        url:"<?php echo base_url('index.php/Control_shop/webupaddcart');?>",
        type: "post",
        dataType: "json",
        data: jsonobj,
     
    });

 

 $('form').trigger("reset");

// alert('Successfully submitted');

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        console.log("Hooray, it worked!");

    });



    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });

}

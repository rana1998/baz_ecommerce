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

function purchaseClick(val)
{
	document.getElementById('footId').style.display = "block";

    
	document.getElementById('ammount').value =  parseInt(document.getElementById('ammount').value) + parseInt(val.getAttribute('data-price-type'));
	// if(parseInt(document.getElementById('ammount').value) > 0)
	// {
	// 	parseInt(document.getElementById('ammount').value) +=  parseInt(val.getAttribute('data-price-type'));
	// }
}

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

function removeClick(val)
{
  var modal = document.getElementById("myModal");
  modal.style.display = "block";
  
	var itemId = val.getAttribute('data-item-id');
	var request;
      request = $.ajax({
        url:"<?php echo base_url('index.php/Control_shop/webrmv_item');?>",
        type: "post",
        data: "val=" + itemId,
        success: function(data) {
          
          console.log(data);
         } 
       });


}

/*
// var q = 0;
function minus(val)
{

  var vId = val.getAttribute('id');
  // alert(vId);

  var quan = document.getElementById('quanId_'+vId).value;
  // alert(quan);
  if(quan > 1)
  {
   document.getElementById('quanId_'+vId).value = --quan;
   }

   // alert(document.getElementById('amountId').innerHTML);  
   document.getElementById('amountId').innerHTML = parseInt(document.getElementById('amountId').innerHTML) - parseInt(val.getAttribute('data-price-type'));

    var jsonobj ={
                                 'item_id':'',
                                 'price':'',
                                 'quantity':'',
                                 'card_item_id':'',
      
      
                               }

                      var quan = val.getAttribute('data-quantity-type');
                      // alert(quan);

                      var priceval = document.getElementById(val.getAttribute('data-quantity-type')).value;
 
                       var b = val.getAttribute('data-price-type');
                       var a = parseInt(priceval)*parseInt(b);

                       // alert(a);

                   jsonobj.item_id  = val.getAttribute('id');
                   // jsonobj.price    = val.getAttribute('data-price-type');
                   jsonobj.price    = a;
                    // jsonobj.price    = priceval;
//                    jsonobj.quantity = val.getAttribute('data-quantity-type');
                   jsonobj.quantity = priceval;

                   jsonobj.card_item_id = val.getAttribute('data-cardId-type');
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


// var r = 0;
function pl(val)
{

  var vId = val.getAttribute('id');

  // alert(vId);
  var quan = document.getElementById('quanId_'+vId).value;
  // alert(quan);
  if(quan < 10)
  {
   document.getElementById('quanId_'+vId).value = ++quan;
   }

   // alert(document.getElementById('amountId').innerHTML); 
   document.getElementById('amountId').innerHTML = parseInt(document.getElementById('amountId').innerHTML) + parseInt(val.getAttribute('data-price-type'));

   var jsonobj ={
                                 'item_id':'',
                                 'price':'',
                                 'quantity':'',
                                 'card_item_id':'',
      
                               }

                      var quan = val.getAttribute('data-quantity-type');
                      // alert(quan);

                      var priceval = document.getElementById(val.getAttribute('data-quantity-type')).value;
 
                       var b = val.getAttribute('data-price-type');
                       var a = parseInt(priceval)*parseInt(b);

                       // alert(a);

                   jsonobj.item_id  = val.getAttribute('id');
                   // jsonobj.price    = val.getAttribute('data-price-type');
                   jsonobj.price    = a;
                    // jsonobj.price    = priceval;
//                    jsonobj.quantity = val.getAttribute('data-quantity-type');
                   jsonobj.quantity = priceval;
                   jsonobj.card_item_id = val.getAttribute('data-cardId-type');

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

} */


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


function availcheck(){

  var chk = document.getElementById('chkavable');
  if( chk.style.display === "none")
  chk.style.display='flex';
  else
   chk.style.display='none'; 
}

function useridclick()
{
   var dltinfo = document.getElementById('chkavailable').value;
   // alert(dltinfo);

        var inpReq;
      inpReq = $.ajax({
           url:"<?php echo base_url('index.php/Control_shop/checkpincodeid');?>",
           type:"post",
           data: 'val='+dltinfo,
            success:function(data)
          {
            console.log(data);
            var obj = JSON.parse(data);
            console.log(obj);

            if(obj === 1)
            {

              $("#existid").show();
             
              $("#notexistid").hide();
            }
            else
            {
              $("#existid").hide();
              $("#notexistid").show();
           
            }
            
         
          }
      });
}






function minus(val)
{

  var vId = val.getAttribute('id');
  // alert(vId);

  var quan = document.getElementById('quanId_'+vId).value;
  // alert(quan);
  if(quan > 1)
  {
   document.getElementById('quanId_'+vId).value = --quan;
   document.getElementById('itemprice_'+vId).innerHTML = parseInt(document.getElementById('itemprice_'+vId).innerHTML) - parseInt(val.getAttribute('data-price-type'));
   // alert(document.getElementById('amountId').innerHTML);  
   document.getElementById('amountId').innerHTML = parseInt(document.getElementById('amountId').innerHTML) - parseInt(val.getAttribute('data-price-type'));

   }

   

   // document.getElementById('itemprice_'+vId).innerHTML = parseInt(document.getElementById('itemprice_'+vId).innerHTML) - parseInt(val.getAttribute('data-price-type'));
   // // alert(document.getElementById('amountId').innerHTML);  
   // document.getElementById('amountId').innerHTML = parseInt(document.getElementById('amountId').innerHTML) - parseInt(val.getAttribute('data-price-type'));

    var jsonobj ={
                                 'item_id':'',
                                 'price':'',
                                 'quantity':'',
                                 'card_item_id':'',
      
      
                               }

                      var quan = val.getAttribute('data-quantity-type');
                      // alert(quan);

                      var priceval = document.getElementById(val.getAttribute('data-quantity-type')).value;
 
                       var b = val.getAttribute('data-price-type');
                       var a = parseInt(priceval)*parseInt(b);

                       // alert(a);

                   jsonobj.item_id  = val.getAttribute('id');
                   // jsonobj.price    = val.getAttribute('data-price-type');
                   jsonobj.price    = a;
                    // jsonobj.price    = priceval;
//                    jsonobj.quantity = val.getAttribute('data-quantity-type');
                   jsonobj.quantity = priceval;

                   jsonobj.card_item_id = val.getAttribute('data-cardId-type');
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




function pl(val)
{

  var vId = val.getAttribute('id');

  // alert(vId);
  var quan = document.getElementById('quanId_'+vId).value;
  //alert(quan);
  if(quan < 10)
  {
   document.getElementById('quanId_'+vId).value = ++quan;
   document.getElementById('itemprice_'+vId).innerHTML = parseInt(document.getElementById('itemprice_'+vId).innerHTML) + parseInt(val.getAttribute('data-price-type'));
   // alert(document.getElementById('amountId').innerHTML); 
   document.getElementById('amountId').innerHTML = parseInt(document.getElementById('amountId').innerHTML) + parseInt(val.getAttribute('data-price-type'));

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

                      var priceval = document.getElementById(val.getAttribute('data-quantity-type')).value;
 
                       var b = val.getAttribute('data-price-type');
                       var a = parseInt(priceval)*parseInt(b);

                       // alert(a);

                   jsonobj.item_id  = val.getAttribute('id');
                   // jsonobj.price    = val.getAttribute('data-price-type');
                   jsonobj.price    = a;
                    // jsonobj.price    = priceval;
//                    jsonobj.quantity = val.getAttribute('data-quantity-type');
                   jsonobj.quantity = priceval;
                   jsonobj.card_item_id = val.getAttribute('data-cardId-type');

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

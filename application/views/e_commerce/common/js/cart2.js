
window.onload=function()
{

var a=document.querySelectorAll('li');
console.log(a);
var i=0;
for(i;i<a.length;i++)
{
	a[i].addEventListener("click",function(){
		
		var b=this.innerHTML;
		if(b=='Recent')
		{
			document.getElementById('one').style.display="flex";
			document.getElementById('two').style.display="none";
			document.getElementById('three').style.display="none";
			document.getElementById('four').style.display="none";
			document.getElementById('five').style.display="none";
		}
		else if(b== 'Featured')
		{
			document.getElementById('one').style.display="none";
			document.getElementById('two').style.display="flex";
			document.getElementById('three').style.display="none";
			document.getElementById('four').style.display="none";
			document.getElementById('five').style.display="none";

		}
		else if(b=='Top Rated')
		{
			document.getElementById('one').style.display="none";
			document.getElementById('two').style.display="none";
			document.getElementById('three').style.display="flex";
			document.getElementById('four').style.display="none";
			document.getElementById('five').style.display="none";
		}
		else if(b=='Sale')
		{
			document.getElementById('one').style.display="none";
			document.getElementById('two').style.display="none";
			document.getElementById('three').style.display="none";
			document.getElementById('four').style.display="flex";
			document.getElementById('five').style.display="none";
		}
		else if(b=='Best Selling')
		{
			document.getElementById('one').style.display="none";
			document.getElementById('two').style.display="none";
			document.getElementById('three').style.display="none";
			document.getElementById('four').style.display="none";
			document.getElementById('five').style.display="flex";
		}
		else
		{

		}

	});
}

}



function proclick(val)
{

	// alert(val.getAttribute('id'));
	var valId =  val.getAttribute('id');
	var valType = val.getAttribute('data-pro-type');
	window.location.href = "<?php echo base_url('index.php/Control_shop/product?valId="+valId+"&valType="+valType+"');?>";
}


function tblshow()
{

	$("#tbl").show();
	$("#gsearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("table tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
}



window.onclick = function(event)
{
	if(event.target ==  document.getElementById('tblId'))
	{
		
	}
}


function itmclick(val)
{
	document.getElementById('tbl').style.display = "none";
	// alert(val.innerHTML);
	// alert(val.getAttribute('data-cat-type'));

	var cat = val.getAttribute('data-cat-type');

	$('#gsearch').val(val.innerHTML);
	window.location.href = "<?php echo base_url('index.php/Control_shop/product?valId="+val.id+"&valType="+cat+"');?>";
}



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






function removeClick(val)
{
  // var modal = document.getElementById("myModal");
  // modal.style.display = "block";
  
	var itemId = val.getAttribute('data-item-id');
	var request;
      request = $.ajax({
        url:"<?php echo base_url('index.php/Control_shop/webrmv_item');?>",
        type: "post",
        data: "val=" + itemId,
        success: function(data) {
          
          console.log(data);
          window.location.reload();
         } 
       });


}






var count = 0;
var f2 = <?php echo $cardcount?>;
function addbagclick(val)
{
              if(f2>0){
                        document.getElementById('count').innerHTML = ++f2;
                     }else
                    {
                      document.getElementById('count').innerHTML = ++count;
                    }


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
        url:"<?php echo base_url('index.php/Control_shop/addcart');?>",
        type: "post",
        dataType: "json",
        data: jsonobj,
           success:function(data){
                    
                  console.log(data);  
                 
                  window.location.href = "<?php echo base_url('index.php/Control_shop/cart_manage');?>";
                            
                }
     
    });


     window.location.href = "<?php echo base_url('index.php/Control_shop/cart_manage');?>";



    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        console.log("Hooray, it worked!");
        window.location.href = "<?php echo base_url('index.php/Control_shop/cart_manage');?>";

    });





    // window.location.href = "<?php echo base_url('index.php/Control_shop/cart_manage');?>";

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
  // alert(quan);
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
              $("#proceedid").show();
              $("#notexistid").hide();
            }
            else
            {
              $("#existid").hide();
              $("#notexistid").show();
              $("#proceedid").hide();
            }
            
         
          }
      });
}

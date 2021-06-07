



function removeClick(val)
{
  var modal = document.getElementById("myModal");
  modal.style.display = "block";
  
	var itemId = val.getAttribute('data-item-id');
	var request;
      request = $.ajax({
        url:"<?php echo base_url('index.php/Control_shop/rmvItm');?>",
        type: "post",
        data: "val=" + itemId,
        success: function(data) {
          
          console.log(data);
         } 
       });


}


// var q = 0;
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
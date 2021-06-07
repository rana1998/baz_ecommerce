




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
        url:"<?php echo base_url('index.php/Control_shop/webaddcart');?>",
        type: "post",
        dataType: "json",
        data: jsonobj,
           success:function(data){
                    
 console.log(data['tempuser_id']);
            
                    if(data['tempuser_id']);
                    {
                      // window.location.reload();
                       document.getElementById("viewClass").style.display ='flex';
                       $("#viewId").attr('data-ran-type',data['tempuser_id']);
                       // var $val = $("#viewId").attr('onclick',window.location ='<?php echo base_url('index.php/Control_shop/cart2_manage?val=".data->category"');?>');
                       // console.log($val);
                    }
               
                    // console.log(data);
                  
                            
                }

                

                  
     
    });

// window.location.reload();
// document.getElementById("viewClass").style.display ='block';
     // window.location.href = "<?php echo base_url('index.php/Control_shop/cart_manage');?>";



    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // console.log(response);
        // window.location.href = "<?php echo base_url('index.php/Control_shop/cart_manage');?>";

    });





    // window.location.href = "<?php echo base_url('index.php/Control_shop/cart_manage');?>";

}


function vew(val)
{
  var view  = val.getAttribute('data-ran-type');
  // alert(view);
 window.location ="<?php echo base_url('index.php/Control_shop/cart2_manage?valId="+view+"');?>";
 
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
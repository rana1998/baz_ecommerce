$(document).ready(function(){
    $('#addform').on('click',function(e){
         e.preventDefault();
         // alert('check6');


          var jsonobj ={
                                 'name2':'',
                                 'phone_no2':'',
                                 'email2':'',
                                 'address2':'',
                                 'pincode2':'',
      
                        }


          jsonobj.name2      = $("#name2").val();
          jsonobj.phone_no2  = $("#phone_no2").val();
          jsonobj.email2     = $("#email2").val();
          jsonobj.address2   = $("#address2").val();
          jsonobj.pincode2   = $("#pincode2").val();


         var  request = $.ajax({
        url:"<?php echo base_url('index.php/Control_shop/addweb_address');?>",
        type: "post",
        dataType: "json",
        data: jsonobj,
           success:function(data){
                    
                  // console.log(response);  
                 
                  // window.location.href = "<?php echo base_url('index.php/Control_shop/cart_manage');?>";

                  // if(data === 1)
                  // {
                    window.location.reload();
                  // }
                  
                            
                }
     
    });

          // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        console.log("Hooray, it worked!");
         window.location.reload();

    });

         
         
    });
        
});




$(document).ready(function(){
    $('#addressfrm').on('submit',function(e){
         e.preventDefault();
         // alert('check2');


          var data = new FormData(this);


          console.log(data);

          $.ajax({
                url:"<?php echo base_url('index.php/Control_shop/webUpdateAdd');?>",
                method:'POST',
                // data: new FormData(this),
                data: data,
                contentType: false,
                cache: false,
                processData:false,
                success:function(data){
                    
                  // $("#log_help").click();
                  // console.log(data);
                  // if(data === 1)
                  // {
                  //   // window.href="<?php echo base_url('index.php/Control_shop/shipping_manage');?>";
                  //    window.location = "<?php echo base_url('index.php/Control_shop/shipping_manage');?>";
                  // }
                  // window.location = "<?php echo base_url('index.php/Control_shop/pay_manage');?>";
                  window.location.reload();
                            
                }
          });
         
    });
        
});


function radioaddr()
{
   // alert("check5");

   var $val =  $("input[name='choose']:checked").val();

   // alert($val);

   // var request;
   //    request = $.ajax({
   //      url:"<?php echo base_url('index.php/Control_shop/addresupdateItm');?>",
   //      type: "post",
   //      data: "val=" + $val,
   //      success: function(data) {
          
   //        console.log(data);
   //        window.location = "<?php echo base_url('index.php/Control_shop/pay_manage');?>";
   //       } 
   //     });


   // window.location = "<?php echo base_url('index.php/Control_shop/pay_manage');?>";

   if($val !== '')
   {
    window.location = "<?php echo base_url('index.php/Control_shop/pay_manage?valId="+$val+"');?>";
   }
   else
   {
    alert('please select the Address');
   }
   
}


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


     // window.location.href = "<?php echo base_url('index.php/Control_shop/cart_manage');?>";



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



function useridclick()
{
   var dltinfo = document.getElementById('pin').value;
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
              $("#ex").show();
            }
            else
            {
              $("#existid").hide();
              $("#notexistid").show();
              $("#ex").hide();
            }
            
         
          }
      });
}




$(document).ready(function(){
    $('#upload_form').on('submit',function(e){
         e.preventDefault();
         if ($("#input_file").val()== ' ') {
          alert('please select the valid image');
         }
         else{
          $.ajax({
                url:'<?php echo base_url('index.php/Control_shop/upload_file');?>',
                method:'POST',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success:function(data){
                  // alert("put image in div");
                  console.log(data);
                  $("#up_image").empty();
                  $("#up_image").html(data);               
                }
          });
         }
    });
        
});



$(document).ready(function(){
    $('#addform').on('click',function(e){
         e.preventDefault();
         // alert('check6');

         // alert("check5");

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
        url:"<?php echo base_url('index.php/Control_shop/updateweb_userinfo');?>",
        type: "post",
        dataType: "json",
        data: jsonobj,
           success:function(data){
                    
                  // console.log(response);  
                 
                  // window.location.href = "<?php echo base_url('index.php/Control_shop/cart_manage');?>";

                  // if(data === 1)
                  // {
                  //   window.location.reload();
                  // }
                    window.location.reload();
                  
                            
                }
     
    });

          // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        console.log("Hooray, it worked!");
         window.location.reload();

    });

         
         
    });
        
});



function addr()
{
	var add = document.getElementById('addresId');
	var dashId = document.getElementById('dashId');
	var orderId = document.getElementById('orderId');

  var orderIdallindia = document.getElementById('allindiaorderId');
  orderIdallindia.style.display ="none";

	add.style.display ="flex";
	dashId.style.display ="none";
	orderId.style.display ="none";

}

function ordr()
{
	var add = document.getElementById('addresId');
	var dashId = document.getElementById('dashId');
	var orderId = document.getElementById('orderId');

  var orderIdallindia = document.getElementById('allindiaorderId');
  orderIdallindia.style.display ="none";

	add.style.display ="none";
	orderId.style.display ="flex";
	dashId.style.display ="none";
}

function dash()
{
	var add = document.getElementById('addresId');
	var dashId = document.getElementById('dashId');
	var orderId = document.getElementById('orderId');

  var orderIdallindia = document.getElementById('allindiaorderId');
  orderIdallindia.style.display ="none";

	add.style.display ="none";
	orderId.style.display ="none";
	dashId.style.display ="flex";
}


function ordrallindia()
{
  var add = document.getElementById('addresId');
  var dashId = document.getElementById('dashId');
  var orderId = document.getElementById('orderId');

  var orderIdallindia = document.getElementById('allindiaorderId');

  add.style.display ="none";
  orderId.style.display ="none";
  dashId.style.display ="none";
  orderIdallindia.style.display ="flex";
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


function modaldlt(val)
{

        var dltinfo = val.getAttribute('id');

        var inpReq;
      inpReq = $.ajax({
           url:"<?php echo base_url('index.php/Control_shop/rejectInfo');?>",
           type:"post",
           data: 'val='+dltinfo,
            success:function(data)
          {
            console.log(data);
            // var obj = JSON.parse(data);
            // console.log(obj);
            if(data == "success")
            {
              window.location.reload();
            }
          }
      });

      window.location.reload();

}



function modaldlt2(val)
{

        var dltinfo = val.getAttribute('id');

        var inpReq;
      inpReq = $.ajax({
           url:"<?php echo base_url('index.php/Control_shop/rejectInfoallindia');?>",
           type:"post",
           data: 'val='+dltinfo,
            success:function(data)
          {
            console.log(data);
            // var obj = JSON.parse(data);
            // console.log(obj);
            if(data == "success")
            {
              window.location.reload();
            }
          }
      });

      window.location.reload();

}


$(document).ready(function(){
    $('#addform2').on('click',function(e){
         e.preventDefault();
         // alert('check6');


          var jsonobj ={
                                 'name2':'',
                                 'phone_no2':'',
                                 'email2':'',
                                 'address2':'',
                                 'pincode2':'',
      
                        }


          jsonobj.name2      = $("#name3").val();
          jsonobj.phone_no2  = $("#phone_no3").val();
          jsonobj.email2     = $("#email3").val();
          jsonobj.address2   = $("#address3").val();
          jsonobj.pincode2   = $("#pincode3").val();


         var  request = $.ajax({
        url:"<?php echo base_url('index.php/Control_shop/addedwebaddress_update');?>",
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
         // window.location.reload();

    });

         
         
    });
        
});



$(document).ready(function(){
    $('#addform5').on('click',function(e){
         e.preventDefault();
         // alert('check6');


          var jsonobj ={
                                 'name2':'',
                                 'phone_no2':'',
                                 'email2':'',
                                 'address2':'',
                                 'pincode2':'',
      
                        }


          jsonobj.name2      = $("#name5").val();
          jsonobj.phone_no2  = $("#phone_no5").val();
          jsonobj.email2     = $("#email5").val();
          jsonobj.address2   = $("#address5").val();
          jsonobj.pincode2   = $("#pincode5").val();


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
    $('#addform6').on('click',function(e){
         e.preventDefault();
         // alert('check6');

           // alert(this.getAttribute('data-pro_id'));
          var jsonobj ={
                                 'comment':'',
                                 'rating' :'',
                                 'item_id':'',
      
                        }


          jsonobj.comment = $("#comment").val();
          jsonobj.rating  = $("#rating").val();
          jsonobj.item_id = $("#itmid").val();



         var  request = $.ajax({
        url:"<?php echo base_url('index.php/Control_shop/addratings_web');?>",
        type: "post",
        dataType: "json",
        data: jsonobj,
           success:function(data){
                    

                    // console.log(data);
                          var jsval = $.parseJSON(data);
                          console.log(jsval);

                          if(jsval === 2)
                          {
                          	alert('already entered');
                          }
                          else if(jsval === 1)
                          {
                            window.location.reload();	
                          }
                    // var jsval = json.decode(data);
                  // console.log(response);  
                 
                  // window.location.href = "<?php echo base_url('index.php/Control_shop/cart_manage');?>";

                  // if(data === 1)
                  // {
                    // window.location.reload();
                  // }
                  
                            
                }
     
    });

          // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        console.log("Hooray, it worked!");
         // window.location.reload();

    });

         
         
    });
        
});


$(document).ready(function(){
    $('#upload_form2').on('submit',function(e){
         e.preventDefault();
         if ($("#input_file2").val()== ' ') {
          alert('please select the valid image');
         }
         else{
          $.ajax({
                url:'<?php echo base_url('index.php/Control_shop/ratingupload_file');?>',
                method:'POST',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success:function(data){
                  // alert("put image in div");
                  $("#up_image2").empty();
                  $("#up_image2").html(data);               
                }
          });
         }
    });
        
});



function ratingmodal(val)
{
    // alert(val.getAttribute('data-item-id'));
    // alert(val.getAttribute('data-path-type'));
    // alert(val.getAttribute('data-name-type'));
    // alert(val.getAttribute('data-weight-type'));
    // alert(val.getAttribute('data-mrp-type'));
    document.getElementById('exampleModal6').style.display ="flex";

    document.getElementById('pro_name').innerHTML  = val.getAttribute('data-name-type');
    document.getElementById('pro_wight').innerHTML = val.getAttribute('data-weight-type');
    document.getElementById('pro_mrp').innerHTML   = val.getAttribute('data-mrp-type');
    document.getElementById('itmid').value         = val.getAttribute('data-item-id');
    document.getElementById('myImg5').setAttribute('src',val.getAttribute('data-path-type'));
}
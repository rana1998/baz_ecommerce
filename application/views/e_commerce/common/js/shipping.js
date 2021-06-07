// function openNav() {
//   document.getElementById("myNav").style.width = "100%";
// }

// function closeNav() {
//   document.getElementById("myNav").style.width = "0%";
// }

// function srchclick()
// {
//   document.getElementById('gsearch').style.display='block';
//   document.getElementById('srchId').style.display='none';
// }

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



function orderclick()
{
  var modal = document.getElementById("myModal");
  modal.style.display = "block";
  
  var user_id = 'order';
  // alert('order');
  
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

function addclick()
{
  document.getElementById('continuId').style.display="none";
  document.getElementById('addr').style.display="none";
  document.getElementById('prevAddId').style.display="none";
  document.getElementById('addrForm').style.display="block";
}



$(document).ready(function(){
    $('#addressfrm').on('submit',function(e){
         e.preventDefault();
         alert('check2');


          var data = new FormData(this);


          console.log(data);

          $.ajax({
                url:"<?php echo base_url('index.php/Control_shop/UpdateAdd');?>",
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
                  window.location = "<?php echo base_url('index.php/Control_shop/shipping_manage');?>";
                            
                }
          });
         
    });
        
});
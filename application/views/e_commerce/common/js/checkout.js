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
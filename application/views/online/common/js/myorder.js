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
            var obj = JSON.parse(data);
            console.log(obj);
           
          }
      });

      window.location.reload();

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
function openNav() {
  document.getElementById("myNav").style.width = "100%";
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
  //  parseInt(document.getElementById('ammount').value) +=  parseInt(val.getAttribute('data-price-type'));
  // }
}

// var myVar;

// function myFunction() {
//   myVar = setTimeout(showPage, 3000);

  
// }

// function showPage() {

//   document.getElementById("loader").style.display = "none";
//   document.getElementById("mainContentDiv").style.display = "block";
  
//   // document.getElementsByTagName("body").style.display = "block";

// }

// window.onload = function()
// {
//   myFunction(); 




// }


 




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



function upclick()
{
  // alert("check3");
    // var jsonobj ={
    //                              'emaId':'',
    //                              'psw':'',
                                 
      
    //                            }

    //                jsonobj.emaId  = document.getElementById('emaId2').value;
    //                jsonobj.psw    = document.getElementById('psw').value;
                 
                               

    //   request = $.ajax({
    //     url:"<?php echo base_url('index.php/Sign/updaPass');?>",
    //     type: "post",
    //     dataType: "json",
    //     data: jsonobj,
    //     // processData:false,
    //     // contentType:false,
    //     // cache:false,
    //     // async:true,
    //     // data: data,
    //     success:function(data){

    //              console.log(data);
    //              if(data ===1)
    //              {
                   window.location = "<?php echo base_url('index.php/Control_shop/userUpdate');?>";
    //              }
    //              // else{
    //              //  $("#wrongId").css("display","block");
    //              // }

              
    //             }
    // });
}




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



window.onclick = function(event) {



  var nameId = document.getElementById('nameId'); 
  if (event.target == nameId) {
    nameId.style.display = "none";
  }

  var addId = document.getElementById('addId'); 
  if (event.target == addId) {
    addId.style.display = "none";
  }



  var pinId = document.getElementById('pinId'); 
  if (event.target == pinId) {
    pinId.style.display = "none";
  }


  var emaId = document.getElementById('emaId'); 
  if (event.target == emaId) {
    emaId.style.display = "none";
  }


  var mobId = document.getElementById('mobId'); 
  if (event.target == mobId) {
    mobId.style.display = "none";
  }
}



function nameclick()
{
    // alert("check2");
    var jsonobj ={
                                 // 'emaId':'',
                                 'name':'',
                                 
      
                               }

                   jsonobj.name    = document.getElementById('name').value;
                               

      request = $.ajax({
        url:"<?php echo base_url('index.php/Control_shop/nameupdtuser');?>",
        type: "post",
        dataType: "json",
        data: jsonobj,

        success:function(data){

                 console.log(data);
                 if(data ===1)
                 {
                   window.location = "<?php echo base_url('index.php/Control_shop/profile');?>";
                 }
               
              
                }
    });
}


function addclick()
{
    // alert("check2");
    var jsonobj ={
                                 // 'emaId':'',
                                 'add':'',
                                 
      
                               }

                   jsonobj.add    = document.getElementById('add').value;
                               

      request = $.ajax({
        url:"<?php echo base_url('index.php/Control_shop/addupdtuser');?>",
        type: "post",
        dataType: "json",
        data: jsonobj,

        success:function(data){

                 console.log(data);
                 if(data ===1)
                 {
                   window.location = "<?php echo base_url('index.php/Control_shop/profile');?>";
                 }
               
              
                }
    });
}


function pinclick()
{
    // alert("check2");
    var jsonobj ={
                                 // 'emaId':'',
                                 'pin':'',
                                 
      
                               }

                   jsonobj.pin    = document.getElementById('pin').value;
                               

      request = $.ajax({
        url:"<?php echo base_url('index.php/Control_shop/pinupdtuser');?>",
        type: "post",
        dataType: "json",
        data: jsonobj,

        success:function(data){

                 console.log(data);
                 if(data ===1)
                 {
                   window.location = "<?php echo base_url('index.php/Control_shop/profile');?>";
                 }
               
              
                }
    });
}



function emaclick()
{
    // alert("check2");
    var jsonobj ={
                                 // 'emaId':'',
                                 'ema':'',
                                 
      
                               }

                   jsonobj.ema    = document.getElementById('ema').value;
                               

      request = $.ajax({
        url:"<?php echo base_url('index.php/Control_shop/emaupdtuser');?>",
        type: "post",
        dataType: "json",
        data: jsonobj,

        success:function(data){

                 console.log(data);
                 if(data ===1)
                 {
                   window.location = "<?php echo base_url('index.php/Control_shop/profile');?>";
                 }
               
              
                }
    });
}



function mobclick()
{
    // alert("check2");
    var jsonobj ={
                                 // 'emaId':'',
                                 'mob':'',
                                 
      
                               }

                   jsonobj.mob    = document.getElementById('mob').value;
                               

      request = $.ajax({
        url:"<?php echo base_url('index.php/Control_shop/mobupdtuser');?>",
        type: "post",
        dataType: "json",
        data: jsonobj,

        success:function(data){

                 console.log(data);
                 if(data ===1)
                 {
                   window.location = "<?php echo base_url('index.php/Control_shop/profile');?>";
                 }
               
              
                }
    });
}
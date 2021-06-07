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
  showPage(); 




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


function switchVisible() {
            if (document.getElementById('Div1')) {

                if (document.getElementById('Div1').style.display == 'none') {
                    document.getElementById('Div1').style.display = 'block';
                    document.getElementById('Div2').style.display = 'none';
                }
                else {
                    document.getElementById('Div1').style.display = 'none';
                    document.getElementById('Div2').style.display = 'block';
                }
            }
}



$(document).ready(function(){
    $('#updatenamemobile').on('submit',function(e){
         e.preventDefault();
         //alert('check1');
         //console.log(new FormData(this));
         // if ($("#input_file").val()== ' ') {
         //  alert('please select the valid image');
         // }
         // else{
       $("#ladda5").show();
         

        
          $.ajax({
                url:"<?php echo base_url('index.php/Control_shop/updtusr');?>",
                method:'POST',
                data:new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success:function(data){
                  
                  // alert(data);
                  // $("#log_help").click();
                  // $("#ladda2").hide();
                  // alert("put image in div");
                  // $("#up_image").empty();
                  // $("#up_image").html(data);               
                  //window.location.href="<?php echo base_url('index.php/welcome/switching');?>";
                  //alert("Successfully Activated");
                  window.location.reload();
                }
          });
         // }
    });
        
});


$(document).ready(function(){
    $('#updatepass').on('submit',function(e){
         e.preventDefault();
         //alert('check1');
         //console.log(new FormData(this));
         // if ($("#input_file").val()== ' ') {
         //  alert('please select the valid image');
         // }
         // else{
       $("#ladda5").show();
         

        
          $.ajax({
                url:"<?php echo base_url('index.php/Control_shop/updt_passusr');?>",
                method:'POST',
                data:new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success:function(data){
                  
                  // alert(data);
                  // $("#log_help").click();
                  // $("#ladda2").hide();
                  // alert("put image in div");
                  // $("#up_image").empty();
                  // $("#up_image").html(data);               
                  //window.location.href="<?php echo base_url('index.php/welcome/switching');?>";
                  //alert("Successfully Activated");
                  window.location.reload();
                }
          });
         // }
    });
        
});


$(document).ready(function(){
    $('#loginuser').on('submit',function(e){
         e.preventDefault();
         // alert('check1');
         // if ($("#input_file").val()== ' ') {
         //  alert('please select the valid image');
         // }
         // else{
          $("#ladda2").show();
        
          $.ajax({
                url:"<?php echo base_url('index.php/Control_e_commerce/auth');?>",
                method:'POST',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success:function(data){
                  // alert(data);
                 // $("#log_help").click();
                  $("#ladda2").hide();
                 // window.location.reload();
                   window.location.href = "<?php echo base_url('index.php/Control_shop/dashboard'); ?>";            
                }
          });
         // }
    });
        
});


function switchVisible1() {
            if (document.getElementById('logdiv')) {

                if (document.getElementById('logdiv').style.display == 'none') {
                    document.getElementById('logdiv').style.display = 'block';
                    document.getElementById('signdiv').style.display = 'none';
                }
                else {
                    document.getElementById('logdiv').style.display = 'none';
                    document.getElementById('signdiv').style.display = 'block';
                }
            }
}




$(document).ready(function(){
    $('#signupuser').on('submit',function(e){
         e.preventDefault();
         // alert('check2');
         // if ($("#input_file").val()== ' ') {
         //  alert('please select the valid image');
         // }
         // else{
          // var itm_nm=$('')
          // var itm_code=
          // var itm_cat=
          // var itm_wt=
          // var itm_qnt=
          // var itm_mrp=
          // if()

          $("#ladda3").show();
          $secure1 = $("#secure1 option:selected").val();
          $secure2 = $("#secure2 option:selected").val();

          var data = new FormData(this);

    // data.append('name',$secure1);
    // data.append('mobile',$secure1);
    // data.append('email',$secure1);
    // data.append('addresss',$secure1);
    // data.append('psw',$secure1);
    // data.append('pincode',$secure1);
    // data.append('secureans1',$secure1);
    // data.append('secureans1',$secure1);
    data.append('secure1',$secure1);
    data.append('secure2',$secure2);


          $.ajax({
                url:"<?php echo base_url('index.php/Login/addsignUp');?>",
                method:'POST',
                // data: new FormData(this),
                data: data,
                contentType: false,
                cache: false,
                processData:false,
                success:function(data){
                    // window.location =  <?php echo base_url('index.php/Login/');?>;
                  $("#log_help").click();
                  // if(data === 0)
                  // {
                  window.location = "<?php echo base_url('index.php/Control_shop/dashboard');?>";
                  // }

                  // alert("put image in div");
                  // $("#up_image").empty();
                  // $("#up_image").html(data);               
                }
          });
         // }
    });
        
});
function openNav() {
  document.getElementById("myNav").style.width = "70%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}


function srchclick()
{
  document.getElementById('myModal').style.display='block';
  // document.getElementById('gsearch').style.display='block';
  // document.getElementById('srchId').style.display='none';
   var item = '1';
  $.ajax({
        url:"<?php echo base_url('index.php/Control_shop/addSearchdash');?>",
        type: "post",
        data: 'val='+item,
          success:function(data)
          {
            console.log(data);
            var obj = JSON.parse(data);
            console.log(obj);
            
//start search
            $("#search").on("keyup", function() {
             // var value = $('#search').val().toLowerCase();
             $('#mainContentItem').html('');
             var searchField = $('#search').val();
             var expression = new RegExp(searchField,'i');
             $.getJSON('addSearchdash',function(obj){
                 $.each(obj,function(key,value){
                  if(value.item_name.search(expression) != -1)
                  {
                    $('#mainContentItem').append('<div class="img_contain" style="display:block;" id="'+value.id+' " data-card-type="'+value.category+'" onclick=addclick(this)><img src = "'+value.item_image_path+'" class="image"> </div>');
                  }
                 });
             });
             
          
        });
//end search


          }
    });

}


function addclick(val)
{
    var valId = val.getAttribute('id');
    var valType = val.getAttribute('data-card-type');

    window.location.href = "<?php echo base_url('index.php/Control_shop/product?valId="+valId+"&valType="+valType+"');?>";

   // alert(this.getAttribute('id'));
//                    document.getElementById('footId').style.display = "block";
//                    // alert("Added to cart");
//                       var jsonobj ={
//                                  'item_id':'',
//                                  'price':'',
//                                  'quantity':'',
      
//                                }

//                    jsonobj.item_id  = val.getAttribute('id');
//                    jsonobj.price    = val.getAttribute('data-price-type');
//                    jsonobj.quantity = val.getAttribute('data-quantity-type');
                               

//       request = $.ajax({
//         url:"<?php echo base_url('index.php/Control_shop/addcart');?>",
//         type: "post",
//         dataType: "json",
//         data: jsonobj,
//         // processData:false,
//         // contentType:false,
//         // cache:false,
//         // async:true,
//         // data: data,
//     });

 

//  $('form').trigger("reset");
// // alert('Successfully submitted');

//     // Callback handler that will be called on success
//     request.done(function (response, textStatus, jqXHR){
//         console.log("Hooray, it worked!");
//     });



//     // Callback handler that will be called on failure
//     request.fail(function (jqXHR, textStatus, errorThrown){
//         console.error(
//             "The following error occurred: "+
//             textStatus, errorThrown
//         );
//     });

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

     myFunction(); 

    var maincontain,contain,img,txt,checkbox,txtname,txtDiv;
    var count = 0;
//Grocery
    <?php $i = 0;

      if($item_info->num_rows() > 0)
      {

            foreach($item_info->result() as $row)
            {  $i++;

              if($i<4){
        ?>           
         

           contain = document.createElement("div");
           contain.className="img_contain";
           contain.setAttribute("id","contain_"+ "<?php echo $row->id; ?>" );
           document.getElementById("mainContent").appendChild(contain);

           
           document.getElementById("contain_"+ "<?php echo $row->id; ?>").addEventListener("click",function(){
                        var valId = "<?php echo $row->id; ?>";
                        var valType = "<?php echo $row->category; ?>";
                        // alert(valId);
                    window.location.href = "<?php echo base_url('index.php/Control_shop/product?valId="+valId+"&valType="+valType+"');?>";
           });

           
           img = document.createElement("img");
           img.setAttribute("src","<?php echo $row->item_image_path; ?>");
           img.setAttribute("id","img1_"+ "<?php echo $row->id; ?>");
           img.className="image";
           document.getElementById("contain_"+"<?php echo $row->id;?>") .appendChild(img);
 
          
          // txtname = document.createElement("p");
          // txtname.innerHTML = '<?php echo $row->item_name; ?>(<?php echo $row->Item_weight; ?>)';
          // txtname.style.color = 'black';
          // txtname.style.fontSize  = '2.2vw';
          // document.getElementById("contain_"+"<?php echo $row->id; ?>" ).appendChild(txtname);

          // txt = document.createElement("p");
          // txt.style.color = "red";
          // txt.innerHTML = "<?php echo $row->item_mrp; ?>"+" ₹";
          // document.getElementById("contain_"+"<?php echo $row->id;?>" ).appendChild(txt);

          


//           btn = document.createElement('button');
//           btn.style.width="100%";
//           btn.style.backgroundColor="blue";
//           btn.style.color="white";
//           btn.innerHTML = "Add to cart";
//           btn.setAttribute("id","<?php echo $row->id; ?>");
//           btn.setAttribute("data-price-type","<?php echo $row->item_mrp; ?>");
//           btn.setAttribute("data-quantity-type","<?php echo $row->available_quantity; ?>");
//           document.getElementById("contain_"+"<?php echo $row->id; ?>" ).appendChild(btn);

//           var f2 = <?php echo $cardcount?>;         
//           document.getElementById("<?php echo $row->id; ?>").addEventListener("click",function(){
//                    // alert(this.getAttribute('id'));
//                    // var modal = document.getElementById("myModal");
//                    // modal.style.display = "block";
//                    // document.getElementById('count').innerHTML = ++count;

//                    if(f2>0){
//                         document.getElementById('count').innerHTML = ++f2;
//                      }else
//                     {
//                       document.getElementById('count').innerHTML = ++count;
//                     }


//                    document.getElementById('footId').style.display = "block";
//                    // alert("Added to cart");


//                    var jsonobj ={
//                                  'item_id':'',
//                                  'price':'',
//                                  'quantity':'',
      
//                                }

//                    jsonobj.item_id  = this.getAttribute('id');
//                    jsonobj.price    = this.getAttribute('data-price-type');
//                    jsonobj.quantity = this.getAttribute('data-quantity-type');
//                    // alert(jsonobj.quantity);
                               

//       request = $.ajax({
//         url:"<?php echo base_url('index.php/Control_shop/addcart');?>",
//         type: "post",
//         dataType: "json",
//         data: jsonobj,
//         // processData:false,
//         // contentType:false,
//         // cache:false,
//         // async:true,
//         // data: data,
//     });

 

//           $('form').trigger("reset");
// // alert('Successfully submitted');

//     // Callback handler that will be called on success
//     request.success(function (response, textStatus, jqXHR){
//         console.log("Hooray, it worked!");
//         alert(response);
//         alert('Successfully');
//     });



//     // Callback handler that will be called on failure
//     request.fail(function (jqXHR, textStatus, errorThrown){
//         console.error(
//             "The following error occurred: "+
//             textStatus, errorThrown
//         );
//     })





//           });


          console.log('<?php echo $row->item_name; ?>');
     

          
         
     
<?php
          }
            }
      }
      else
      {
        ?>
     
      <?php
          }
      ?>

// milk 


       <?php $i = 0;

      if($milk_info->num_rows() > 0)
      {

            foreach($milk_info->result() as $row)
            {  $i++;

              if($i<4){
        ?>           
         

           contain = document.createElement("div");
           contain.className="img_contain";
           contain.setAttribute("id","contain_"+ "<?php echo $row->id; ?>" );
           document.getElementById("mainContent2").appendChild(contain);

           document.getElementById("contain_"+ "<?php echo $row->id; ?>").addEventListener("click",function(){
                        var valId = "<?php echo $row->id; ?>";
                        var valType = "<?php echo $row->category; ?>";
                        // alert(valId);
                    window.location.href = "<?php echo base_url('index.php/Control_shop/product?valId="+valId+"&valType="+valType+"');?>";
           });
           

           
           img = document.createElement("img");
           img.setAttribute("src","<?php echo $row->item_image_path; ?>");
           img.setAttribute("id","img1_"+ "<?php echo $row->id; ?>");
           img.className="image";
           document.getElementById("contain_"+"<?php echo $row->id;?>") .appendChild(img);
 
          
          // txtname = document.createElement("p");
          // txtname.innerHTML = '<?php echo $row->item_name; ?>(<?php echo $row->Item_weight; ?>)';
          // txtname.style.color = 'black';
          // txtname.style.fontSize  = '2.2vw';
          // document.getElementById("contain_"+"<?php echo $row->id; ?>" ).appendChild(txtname);

          // txt = document.createElement("p");
          // txt.style.color = "red";
          // txt.innerHTML = "<?php echo $row->item_mrp; ?> ₹";
          // document.getElementById("contain_"+"<?php echo $row->id; ?>" ).appendChild(txt);

         
 
//           btn = document.createElement('button');
//           btn.style.width="100%";
//           btn.style.backgroundColor="blue";
//           btn.style.color="white";
//           btn.innerHTML = "Add to cart";
//           btn.setAttribute("id","<?php echo $row->id; ?>");
//           btn.setAttribute("data-price-type","<?php echo $row->item_mrp; ?>");
//           btn.setAttribute("data-quantity-type","<?php echo $row->available_quantity; ?>");
//           document.getElementById("contain_"+"<?php echo $row->id; ?>" ).appendChild(btn);
          
//           document.getElementById("<?php echo $row->id; ?>").addEventListener("click",function(){
//                    // alert(this.getAttribute('id'));
//                    // var modal = document.getElementById("myModal");
//                    // modal.style.display = "block";

//                    // alert("Added to cart");
//                    // document.getElementById('count').innerHTML = ++count;

//                    if(f2>0){
//                         document.getElementById('count').innerHTML = ++f2;
//                      }else
//                     {
//                       document.getElementById('count').innerHTML = ++count;
//                     }


//                    document.getElementById('footId').style.display = "block";
                   
//                    var jsonobj ={
//                                  'item_id':'',
//                                  'price':'',
//                                  'quantity':'',
      
//                                }

//                    jsonobj.item_id  = this.getAttribute('id');
//                    jsonobj.price    = this.getAttribute('data-price-type');
//                    jsonobj.quantity = this.getAttribute('data-quantity-type');
                               

//       request = $.ajax({
//         url:"<?php echo base_url('index.php/Control_shop/addcart');?>",
//         type: "post",
//         dataType: "json",
//         data: jsonobj,
//         // processData:false,
//         // contentType:false,
//         // cache:false,
//         // async:true,
//         // data: data,
//     });

 

//  $('form').trigger("reset");
// // alert('Successfully submitted');

//     // Callback handler that will be called on success
//     request.done(function (response, textStatus, jqXHR){
//         console.log("Hooray, it worked!");
//     });



//     // Callback handler that will be called on failure
//     request.fail(function (jqXHR, textStatus, errorThrown){
//         console.error(
//             "The following error occurred: "+
//             textStatus, errorThrown
//         );
//     });



//           });

          console.log('<?php echo $row->item_name; ?>');
     

          
         
     
<?php
          }
            }
      }
      else
      {
        ?>
     
      <?php
          }
      ?>

//Medicine

      <?php $i = 0;

      if($medicine_info->num_rows() > 0)
      {

            foreach($medicine_info->result() as $row)
            {  $i++;

              if($i<4){
        ?>           
         

           contain = document.createElement("div");
           contain.className="img_contain";
           contain.setAttribute("id","contain_"+ "<?php echo $row->id; ?>" );
           document.getElementById("mainContent3").appendChild(contain);

           document.getElementById("contain_"+ "<?php echo $row->id; ?>").addEventListener("click",function(){
                        var valId = "<?php echo $row->id; ?>";
                        var valType = "<?php echo $row->category; ?>";
                        // alert(valId);
                    window.location.href = "<?php echo base_url('index.php/Control_shop/product?valId="+valId+"&valType="+valType+"');?>";
           });
           

           
           img = document.createElement("img");
           img.setAttribute("src","<?php echo $row->item_image_path; ?>");
           img.setAttribute("id","img1_"+ "<?php echo $row->id; ?>");
           img.className="image";
           document.getElementById("contain_"+"<?php echo $row->id;?>") .appendChild(img);
 
          
          // txtname = document.createElement("p");
          // txtname.innerHTML = '<?php echo $row->item_name; ?>(<?php echo $row->Item_weight; ?>)';
          // txtname.style.color = 'black';
          // txtname.style.fontSize  = '2.2vw';
          // document.getElementById("contain_"+"<?php echo $row->id; ?>" ).appendChild(txtname);

          // txt = document.createElement("p");
          // txt.style.color = "red";
          // txt.innerHTML = "<?php echo $row->item_mrp; ?> ₹";
          // document.getElementById("contain_"+"<?php echo $row->id; ?>" ).appendChild(txt);

         
 
          // btn = document.createElement('button');
          // btn.style.width="100%";
          // btn.style.backgroundColor="blue";
          // btn.style.color="white";
          // btn.innerHTML = "Add to cart";
          // btn.setAttribute("id","<?php echo $row->id; ?>");
          // btn.setAttribute("data-price-type","<?php echo $row->item_mrp; ?>");
          // btn.setAttribute("data-quantity-type","<?php echo $row->available_quantity; ?>");
          // document.getElementById("contain_"+"<?php echo $row->id; ?>" ).appendChild(btn);
          
          // document.getElementById("<?php echo $row->id; ?>").addEventListener("click",function(){
                   // alert(this.getAttribute('id'));
                   // var modal = document.getElementById("myModal");
                   // modal.style.display = "block";

                   // alert("Added to cart");
                   // document.getElementById('count').innerHTML = ++count;

                   // if(f2>0){
                   //      document.getElementById('count').innerHTML = ++f2;
                   //   }else
                   //  {
                   //    document.getElementById('count').innerHTML = ++count;
                   //  }


                   // document.getElementById('footId').style.display = "block";
                   
                   // var jsonobj ={
                   //               'item_id':'',
                   //               'price':'',
                   //               'quantity':'',
      
                   //             }

                   // jsonobj.item_id  = this.getAttribute('id');
                   // jsonobj.price    = this.getAttribute('data-price-type');
                   // jsonobj.quantity = this.getAttribute('data-quantity-type');
                               

    //   request = $.ajax({
    //     url:"<?php echo base_url('index.php/Control_shop/addcart');?>",
    //     type: "post",
    //     dataType: "json",
    //     data: jsonobj,
    //     // processData:false,
    //     // contentType:false,
    //     // cache:false,
    //     // async:true,
    //     // data: data,
    // });

 

//  $('form').trigger("reset");
// // alert('Successfully submitted');

//     // Callback handler that will be called on success
//     request.done(function (response, textStatus, jqXHR){
//         console.log("Hooray, it worked!");
//     });



//     // Callback handler that will be called on failure
//     request.fail(function (jqXHR, textStatus, errorThrown){
//         console.error(
//             "The following error occurred: "+
//             textStatus, errorThrown
//         );
//     });



          // });

          console.log('<?php echo $row->item_name; ?>');
     

          
         
     
<?php
          }
            }
      }
      else
      {
        ?>
     
      <?php
          }
      ?>

      //Daily needs


      <?php $i = 0;

      if($dailyneeds_info->num_rows() > 0)
      {

            foreach($dailyneeds_info->result() as $row)
            {  $i++;

              if($i<4){
        ?>           
         

           contain = document.createElement("div");
           contain.className="img_contain";
           contain.setAttribute("id","contain_"+ "<?php echo $row->id; ?>" );
           document.getElementById("mainContent4").appendChild(contain);

           document.getElementById("contain_"+ "<?php echo $row->id; ?>").addEventListener("click",function(){
                        var valId = "<?php echo $row->id; ?>";
                        var valType = "<?php echo $row->category; ?>";
                        // alert(valId);
                    window.location.href = "<?php echo base_url('index.php/Control_shop/product?valId="+valId+"&valType="+valType+"');?>";
           });
           

           
           img = document.createElement("img");
           img.setAttribute("src","<?php echo $row->item_image_path; ?>");
           img.setAttribute("id","img1_"+ "<?php echo $row->id; ?>");
           img.className="image";
           document.getElementById("contain_"+"<?php echo $row->id;?>") .appendChild(img);
 
          
          // txtname = document.createElement("p");
          // txtname.innerHTML = '<?php echo $row->item_name; ?>(<?php echo $row->Item_weight; ?>)';
          // txtname.style.color = 'black';
          // txtname.style.fontSize  = '2.2vw';
          // document.getElementById("contain_"+"<?php echo $row->id; ?>" ).appendChild(txtname);

          // txt = document.createElement("p");
          // txt.style.color = "red";
          // txt.innerHTML = "<?php echo $row->item_mrp; ?>&nbsp; ₹";
          // document.getElementById("contain_"+"<?php echo $row->id; ?>" ).appendChild(txt);

         
 
//           btn = document.createElement('button');
//           btn.style.width="100%";
//           btn.style.backgroundColor="blue";
//           btn.style.color="white";
//           btn.innerHTML = "Add to cart";
//           btn.setAttribute("id","<?php echo $row->id; ?>");
//           btn.setAttribute("data-price-type","<?php echo $row->item_mrp; ?>");
//           btn.setAttribute("data-quantity-type","<?php echo $row->available_quantity; ?>");
//           document.getElementById("contain_"+"<?php echo $row->id; ?>" ).appendChild(btn);
          
//           document.getElementById("<?php echo $row->id; ?>").addEventListener("click",function(){
//                    // alert(this.getAttribute('id'));
//                    // var modal = document.getElementById("myModal");
//                    // modal.style.display = "block";

//                    // alert("Added to cart");
//                    // document.getElementById('count').innerHTML = ++count;

//                    if(f2>0){
//                         document.getElementById('count').innerHTML = ++f2;
//                      }else
//                     {
//                       document.getElementById('count').innerHTML = ++count;
//                     }

                    
//                    document.getElementById('footId').style.display = "block";
                   
//                    var jsonobj ={
//                                  'item_id':'',
//                                  'price':'',
//                                  'quantity':'',
      
//                                }

//                    jsonobj.item_id  = this.getAttribute('id');
//                    jsonobj.price    = this.getAttribute('data-price-type');
//                    jsonobj.quantity = this.getAttribute('data-quantity-type');
                               

//       request = $.ajax({
//         url:"<?php echo base_url('index.php/Control_shop/addcart');?>",
//         type: "post",
//         dataType: "json",
//         data: jsonobj,
//         // processData:false,
//         // contentType:false,
//         // cache:false,
//         // async:true,
//         // data: data,
//     });

 

//  $('form').trigger("reset");
// // alert('Successfully submitted');

//     // Callback handler that will be called on success
//     request.done(function (response, textStatus, jqXHR){
//         console.log("Hooray, it worked!");
//     });



//     // Callback handler that will be called on failure
//     request.fail(function (jqXHR, textStatus, errorThrown){
//         console.error(
//             "The following error occurred: "+
//             textStatus, errorThrown
//         );
//     });



//           });

          console.log('<?php echo $row->item_name; ?>');
     

          
         
     
<?php
          }
            }
      }
      else
      {
        ?>
     
      <?php
          }
      ?>


      //Featured


      <?php $i = 0;

      if($feat_info->num_rows() > 0)
      {

            foreach($feat_info->result() as $row)
            {  $i++;

              if($i<4){
        ?>           
         

           contain = document.createElement("div");
           contain.className="img_contain";
           contain.setAttribute("id","contain_"+ "<?php echo $row->id; ?>" );
           document.getElementById("mainContent0").appendChild(contain);

           document.getElementById("contain_"+ "<?php echo $row->id; ?>").addEventListener("click",function(){
                        var valId = "<?php echo $row->id; ?>";
                        var valType = "<?php echo $row->category; ?>";
                        // alert(valId);
                    window.location.href = "<?php echo base_url('index.php/Control_shop/product?valId="+valId+"&valType="+valType+"');?>";
           });
           

           
           img = document.createElement("img");
           img.setAttribute("src","<?php echo $row->item_image_path; ?>");
           img.setAttribute("id","img1_"+ "<?php echo $row->id; ?>");
           img.className="image";
           document.getElementById("contain_"+"<?php echo $row->id;?>") .appendChild(img);
 
          
         

          console.log('<?php echo $row->item_name; ?>');
     

          
         
     
<?php
          }
            }
      }
      else
      {
        ?>
     
      <?php
          }
      ?>

}


// window.onload = function()
// { 

// Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// // When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//   var modal = document.getElementById("myModal");
//   modal.style.display = "none";
// }

// // When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  var modal = document.getElementById("myModal");
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

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
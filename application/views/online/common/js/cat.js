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
    var count = 0;
    var maincontain,contain,img,txt,checkbox,txtname,txtDiv;

//Grocery
    <?php 
    // $i = 0;
      
      if($item_info->num_rows() > 0)
      {

            foreach($item_info->result() as $row)
            {  
              // $i++;

              // if($i<4){
        ?>           
         

           contain = document.createElement("div");
           contain.className="img_contain";
           contain.setAttribute("id","contain_"+ "<?php echo $row->id; ?>" );
           document.getElementById("mainContent").appendChild(contain);

           

           
           img = document.createElement("img");
          
           img.setAttribute("src","<?php echo $row->item_image_path; ?>");
           img.setAttribute("onerror", "checkimage(this);");
            
           img.setAttribute("id","img1_"+ "<?php echo $row->id; ?>");
           img.className="image";
           document.getElementById("contain_"+"<?php echo $row->id;?>") .appendChild(img);



          
          txtname = document.createElement("p");
          // txtname = document.createElement("h1");
          txtname.className="productname";
          txtname.innerHTML = "<?php echo $row->item_name; ?>";
          txtname.style.color = 'black';
          // txtname.style.fontSize  = '2.2vw';
          txtname.style.fontWeight  = '600';
          txtname.style.fontFamily = "arial";
          txtname.style.marginTop = "2%";
          txtname.style.marginBottom = "3%";

          document.getElementById("contain_"+"<?php echo $row->id; ?>" ).appendChild(txtname);

 
          

          var price = document.createElement("p");
            price.style.marginTop="-3px";

            <?php if($row->offer_mrp>0){?> 

                price.innerHTML= "MRP :<?php  echo '<del>'.$row->sellingprice.'</del>'; ?>";
            <?php }else{ ?>

                price.innerHTML= "MRP :<?php  echo $row->sellingprice; ?>";
            <?php } ?>
          document.getElementById("contain_"+"<?php echo $row->id;?>") .appendChild(price);
           
          var offer = document.createElement("p");

            offer.style.marginTop="-4px";
            offer.style.marginBottom="-10px";
            <?php  if($row->offer_mrp >0) {?>

             offer.innerHTML= "Offer :<?php  echo $row->offer_mrp; ?>";
             
            <?php } ?>
          
          document.getElementById("contain_"+"<?php echo $row->id;?>") .appendChild(offer);


           var weight = document.createElement("p");

            weight.innerHTML="<?php echo $row->Item_weight; ?>"

            <?php if($row->offer_mrp>0){ ?>
            weight.style.border ="1px solid coral";
            weight.style.marginTop="10px";
            weight.style.borderRadius="10px";
            weight.style.textAlign="center"; 
            <?php }else{ ?>
            weight.style.border ="1px solid coral";
            weight.style.marginTop="25px";
            weight.style.borderRadius="10px";
            weight.style.textAlign="center"; 
            <?php } ?>
         
          document.getElementById("contain_"+"<?php echo $row->id;?>") .appendChild(weight);


            /*
          var off_mrp = <?php echo $row->offer_mrp; ?>;
          if(off_mrp>0){

          txt = document.createElement("p");
          
          txt.style.color = "black";
          
          txt.style.float = "left";
          txt.innerHTML = "<del><?php echo $row->item_mrp; ?> ₹</del><br>";
          document.getElementById("contain_"+"<?php echo $row->id; ?>" ).appendChild(txt);

          offertxt = document.createElement("p");
          
          offertxt.style.color = "black";
          
          offertxt.style.float = "left";
          offertxt.innerHTML = "  <span style='color:red;'><span><?php echo $row->offer_mrp; ?> ₹";
          document.getElementById("contain_"+"<?php echo $row->id; ?>" ).appendChild(offertxt);

          }
          else
          {
          txt = document.createElement("p");
          // txt.style.color = "red";
          txt.style.color = "black";
          // txt.style.display = "inline-block";
          txt.style.float = "left";
          txt.innerHTML = "<?php echo $row->item_mrp; ?> ₹";
          document.getElementById("contain_"+"<?php echo $row->id; ?>" ).appendChild(txt);
          }
            */


          // txt = document.createElement("p");
          // // txt.style.color = "red";
          // txt.style.color = "black";
          // // txt.style.display = "inline-block";
          // txt.style.float = "left";
          // txt.innerHTML = "<?php echo $row->item_mrp; ?> ₹";
          // document.getElementById("contain_"+"<?php echo $row->id; ?>" ).appendChild(txt);

         
          btn = document.createElement('button');
          // btn.style.width="100%";
          btn.style.backgroundColor="transparent";
          btn.style.border = "none";

          <?php if($row->offer_mrp>0){ ?>

           btn.style.marginTop="20px";
           <?php }else{ ?>
           
            
           btn.style.marginTop="24px";
           <?php } ?>

            
          <?php if($row->Item_weight==0){ ?>
           btn.style.marginTop="40px";
           <?php } ?>           
          
         
          btn.style.float ="center";
          btn.innerHTML='<i class="fa fa-shopping-bag" style="color:white;"> Add To Cart</i>';
          btn.setAttribute("id","<?php echo $row->id; ?>");
          <?php if($row->offer_mrp>0){ ?>
            btn.setAttribute("data-price-type","<?php echo $row->offer_mrp; ?>");
            <?php }else{ ?>
          btn.setAttribute("data-price-type","<?php echo $row->sellingprice; ?>");
          <?php } ?>
          btn.setAttribute("data-quantity-type","1");
          document.getElementById("contain_"+"<?php echo $row->id; ?>" ).appendChild(btn);

          document.getElementById("img1_"+ "<?php echo $row->id; ?>").addEventListener("click",function(){
                        var valId = "<?php echo $row->id; ?>";
                        var valType = "<?php echo $row->category; ?>";
                        // alert(valId);
                    window.location.href = "<?php echo base_url('index.php/Control_shop/product?valId="+valId+"&valType="+valType+"');?>";
           });


                    document.getElementById("<?php echo $row->id; ?>").addEventListener("click",function(){
                  //alert(this.id);
                  var thisid= this.id;
                document.getElementById("button_"+thisid).style.display="block";
                document.getElementById(thisid).style.display="none";
          });

          
          var plusminus = document.createElement('div');
          plusminus.setAttribute("id", "button_<?php  echo $row->id; ?>")
          plusminus.style.display="none";
          <?php if($row->offer_mrp > 0){ ?>
          plusminus.style.marginTop="12px";
          <?php }else{ ?>
            plusminus.style.marginTop="17px";
            <?php } ?>
          plusminus.innerHTML= "<input type='button' value='-' class='minus' style='background-color:coral; color:white; border: none;'  data-itm_id='' data-quantity-type='' data-price-type='' id='btn1_<?php echo $row->id; ?>' onclick='minus(this)'> <input style='width:50px; height:30px; border:none; borderRadius:10px;' type='number' data-inp-typ='' id= 'quanId_<?php echo $row->id; ?>' step='1' min='0' max='' name='quantity' value='1' title='Qty' class='input-text qty text' size='4' pattern='' inputmode=''> <input type='button' value='+' class='plus' style='border:none; background-color:coral; color:white'  data-itm_id='' data-quantity-type='' data-price-type='' id='btn2_<?php echo $row->id; ?>' onclick='pl(this)'>";
          
          document.getElementById("contain_"+"<?php echo $row->id;?>").appendChild(plusminus);



          var count = 0;
          var f2 = <?php echo $cardcount?>;
          var f3 = <?php echo $cardcountberorelog ?>;
          document.getElementById("<?php echo $row->id; ?>").addEventListener("click",function(){
                   // alert(this.getAttribute('id'));
                   // document.getElementById('count').innerHTML = ++count;

                  <?php if($user_info){ ?>
                   if(f2>0){
                        document.getElementById('count').innerHTML = ++f2;
                     }else
                    {
                      document.getElementById('count').innerHTML = ++count;
                    }

                    <?php }else{ ?>
                    if(f3>0){
                        document.getElementById('count').innerHTML = ++f3;
                     }else
                    {
                      document.getElementById('count').innerHTML = ++count;
                    }
                    <?php } ?>

                   document.getElementById('footId').style.display = "block";
                   // alert("Added to cart");
                      var jsonobj ={
                                 'item_id':'',
                                 'price':'',
                                 'quantity':'',
      
                               }

                     
                   var vaid = this.getAttribute('id');

                   jsonobj.item_id  = this.getAttribute('id');
                   jsonobj.price    = this.getAttribute('data-price-type');
                   jsonobj.quantity = this.getAttribute('data-quantity-type');
                               

      request = $.ajax({
        url:"<?php echo base_url('index.php/Control_shop/webaddcart');?>",
        type: "post",
        dataType: "json",
        data: jsonobj,

        // processData:false,
        // contentType:false,
        // cache:false,
        // async:true,
        // data: data,
        success:function(data)
        {
          console.log(data);
          // $("#btn1_"+vaid).attr('data-cartid',data.id);
          // $("#btn2_"+vaid).attr('data-cartid',data.id);

          // var $va = $("#quanId_"+vaid).attr('data-inp-typ','inp_'+data.id);

          
          // alert( $("#btn1_"+vaid).attr('data-itm_id'));
          $("#btn1_"+vaid).attr('data-itm_id',data.item_id);
            $("#btn1_"+vaid).attr('data-quantity-type',data.quantity);
            $("#btn1_"+vaid).attr('data-price-type',data.price);
            $("#btn1_"+vaid).attr('id',data.id);


          
          // alert( $("#btn2_"+vaid).attr('data-itm_id'));
            $("#btn2_"+vaid).attr('data-itm_id',data.item_id);
            $("#btn2_"+vaid).attr('data-quantity-type',data.quantity);
            $("#btn2_"+vaid).attr('data-price-type',data.price);
            $("#btn2_"+vaid).attr('id',data.id);

            
          var $va = $("#quanId_"+vaid).attr('id','inp_'+data.id);
          // alert($va);
          
          // $("#data-cartid2").val(data.id);
        }

    });
 });
          

         

          console.log("<?php echo $row->item_name; ?>");


          
         
     
<?php
          // }
            }
      }
      else
      {
        ?>
     
      <?php
          }
      ?>



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

 
function checkimage(image) {
    image.onerror = "";
    image.src = "<?php echo base_url('assets/images/default-image_450.png') ?>";
    return true;
}



function minus(val)
{

  // var vId = val.getAttribute('data-cartid');
  var vId = val.id;
   //alert(vId);

  // var quan = document.getElementById('quanId_'+vId).value;
  var quan = document.getElementById('inp_'+vId).value;
  // alert(quan);
  if(quan > 0 )
  {
   document.getElementById('inp_'+vId).value = --quan;
   // document.getElementById('itemprice_'+vId).innerHTML = parseInt(document.getElementById('itemprice_'+vId).innerHTML) - parseInt(val.getAttribute('data-price-type'));
   // alert(document.getElementById('amountId').innerHTML);  
   // document.getElementById('amountId').innerHTML = parseInt(document.getElementById('amountId').innerHTML) - parseInt(val.getAttribute('data-price-type'));

   }


  var quan3 = document.getElementById('inp_'+vId).value;
  // alert(quan3);
if(quan3 == '0')
  {
    var itemId = val.id;
   // alert(itemId);
  var dat = val.getAttribute('data-itm_id');
  //alert(dat);

  var request;
      request = $.ajax({
        url:"<?php echo base_url('index.php/Control_shop/webrmv_item2');?>",
        type: "post",
        data: "val=" + itemId,
        success: function(data) {
          
          console.log(data);
          // window.location.reload();
            document.getElementById(dat).style.display = "flex";
            document.getElementById('button_'+dat).style.display ="none";
         } 
       });
  }
  else
  {
         var jsonobj ={
                                 'item_id':'',
                                 'price':'',
                                 'quantity':'',
                                 'card_item_id':'',
      
      
                               }

                      var quan = val.getAttribute('data-quantity-type');
                      //alert(quan);

                      // var priceval = document.getElementById(val.getAttribute('data-quantity-type')).value;
                     // var priceval = val.getAttribute('data-quantity-type').value;
                     var priceval = document.getElementById('inp_'+vId).value;
                     //alert(priceval); 
 
                       var b = val.getAttribute('data-price-type');
                       var a = parseInt(priceval)*parseInt(b);

                       // alert(a);

                   // jsonobj.item_id  = val.getAttribute('id');
                   jsonobj.item_id = val.getAttribute('data-itm_id');
                   // jsonobj.price    = val.getAttribute('data-price-type');
                   jsonobj.price    = a;
                    // jsonobj.price    = priceval;
//                    jsonobj.quantity = val.getAttribute('data-quantity-type');
                   // jsonobj.quantity = priceval;
                   jsonobj.quantity  = document.getElementById('inp_'+vId).value;

                   // jsonobj.card_item_id = val.getAttribute('data-cardId-type');
                   jsonobj.card_item_id = val.id;
                   // alert(jsonobj.card_item_id);

                       // alert(jsonobj.item_id);
                       // alert(jsonobj.price);
                       // alert(jsonobj.quantity);
                               

      request = $.ajax({
        url:"<?php echo base_url('index.php/Control_shop/webupaddcart');?>",
        type: "post",
        dataType: "json",
        data: jsonobj,
     
    });

 

 $('form').trigger("reset");

// alert('Successfully submitted');

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        console.log("Hooray, it worked!");

    });



    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });
  }
   
   

   // document.getElementById('itemprice_'+vId).innerHTML = parseInt(document.getElementById('itemprice_'+vId).innerHTML) - parseInt(val.getAttribute('data-price-type'));
   // // alert(document.getElementById('amountId').innerHTML);  
   // document.getElementById('amountId').innerHTML = parseInt(document.getElementById('amountId').innerHTML) - parseInt(val.getAttribute('data-price-type'));

//     var jsonobj ={
//                                  'item_id':'',
//                                  'price':'',
//                                  'quantity':'',
//                                  'card_item_id':'',
      
      
//                                }

//                       var quan = val.getAttribute('data-quantity-type');
//                       //alert(quan);

//                       // var priceval = document.getElementById(val.getAttribute('data-quantity-type')).value;
//                      // var priceval = val.getAttribute('data-quantity-type').value;
//                      var priceval = document.getElementById('inp_'+vId).value;
//                      //alert(priceval); 
 
//                        var b = val.getAttribute('data-price-type');
//                        var a = parseInt(priceval)*parseInt(b);

//                        // alert(a);

//                    // jsonobj.item_id  = val.getAttribute('id');
//                    jsonobj.item_id = val.getAttribute('data-itm_id');
//                    // jsonobj.price    = val.getAttribute('data-price-type');
//                    jsonobj.price    = a;
//                     // jsonobj.price    = priceval;
// //                    jsonobj.quantity = val.getAttribute('data-quantity-type');
//                    // jsonobj.quantity = priceval;
//                    jsonobj.quantity  = document.getElementById('inp_'+vId).value;

//                    // jsonobj.card_item_id = val.getAttribute('data-cardId-type');
//                    jsonobj.card_item_id = val.id;
//                    // alert(jsonobj.card_item_id);

//                        // alert(jsonobj.item_id);
//                        // alert(jsonobj.price);
//                        // alert(jsonobj.quantity);
                               

//       request = $.ajax({
//         url:"<?php echo base_url('index.php/Control_shop/webupaddcart');?>",
//         type: "post",
//         dataType: "json",
//         data: jsonobj,
     
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




function pl(val)
{

  // var vId = val.getAttribute('data-cartid');
  var vId = val.id;

  // alert(vId);
  // var quan = document.getElementById('quanId_'+vId).value;
  var quan = document.getElementById('inp_'+vId).value;
  // alert(quan);
  if(quan < 10)
  {
   document.getElementById('inp_'+vId).value = ++quan;
   // document.getElementById('itemprice_'+vId).innerHTML = parseInt(document.getElementById('itemprice_'+vId).innerHTML) + parseInt(val.getAttribute('data-price-type'));
   // alert(document.getElementById('amountId').innerHTML); 
   // document.getElementById('amountId').innerHTML = parseInt(document.getElementById('amountId').innerHTML) + parseInt(val.getAttribute('data-price-type'));

   }

   // document.getElementById('itemprice_'+vId).innerHTML = parseInt(document.getElementById('itemprice_'+vId).innerHTML) + parseInt(val.getAttribute('data-price-type'));
   // // alert(document.getElementById('amountId').innerHTML); 
   // document.getElementById('amountId').innerHTML = parseInt(document.getElementById('amountId').innerHTML) + parseInt(val.getAttribute('data-price-type'));

   var jsonobj ={
                                 'item_id':'',
                                 'price':'',
                                 'quantity':'',
                                 'card_item_id':'',
      
                               }

                      var quan = val.getAttribute('data-quantity-type');
                     // alert(quan);

                      // var priceval = document.getElementById(val.getAttribute('data-quantity-type')).value;
                      // var priceval = val.getAttribute('data-quantity-type');

                      var priceval = document.getElementById('inp_'+vId).value;
 
                       var b = val.getAttribute('data-price-type');
                       var a = parseInt(priceval)*parseInt(b);

                       // alert(a);

                   // jsonobj.item_id  = val.getAttribute('id');
                   jsonobj.item_id = val.getAttribute('data-itm_id');
                   // jsonobj.price    = val.getAttribute('data-price-type');
                   jsonobj.price    = a;
                    // jsonobj.price    = priceval;
//                    jsonobj.quantity = val.getAttribute('data-quantity-type');
                   // jsonobj.quantity = priceval;
                   jsonobj.quantity  = document.getElementById('inp_'+vId).value;
                   // jsonobj.card_item_id = val.getAttribute('data-cardId-type');

                   jsonobj.card_item_id = val.id;

                       // alert(jsonobj.item_id);
                       // alert(jsonobj.price);
                       // alert(jsonobj.quantity);
                               

      request = $.ajax({
        url:"<?php echo base_url('index.php/Control_shop/webupaddcart');?>",
        type: "post",
        dataType: "json",
        data: jsonobj,
     
    });

 

 $('form').trigger("reset");

// alert('Successfully submitted');

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        console.log("Hooray, it worked!");

    });



    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });

}

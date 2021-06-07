function openNav() {
  document.getElementById("myNav").style.width = "70%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}


function srchclick()
{
  document.getElementById('myModal1').style.display='block';
  //document.getElementById('gsearch').style.display='block';
  //document.getElementById('srchId').style.display='none';
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

   
}

var myVar;

function myFunction() {
  myVar = setTimeout(showPage(), 3000);

  
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

              if($i<6){
        ?>           
         

           contain = document.createElement("div");
           contain.className="img_contain";
           contain.setAttribute("id","contain_"+ "<?php echo $row->id; ?>" );
           document.getElementById("mainContent").appendChild(contain);

    
           img = document.createElement("img");
           img.setAttribute("src","<?php echo $row->item_image_path; ?>");
           img.setAttribute("id","img1_"+ "<?php echo $row->id; ?>");
           img.className="image";
           document.getElementById("contain_"+"<?php echo $row->id;?>") .appendChild(img);

          var name = document.createElement("p");

            name.className="productname";

            name.innerHTML="<?php echo $row->item_name; ?>"
            name.style.fontWeight  = '600';             
            name.style.textAlign="center";
         

          document.getElementById("contain_"+"<?php echo $row->id;?>") .appendChild(name);

 
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

    
          document.getElementById("img1_"+ "<?php echo $row->id; ?>").addEventListener("click",function(){
                        var valId = "<?php echo $row->id; ?>";
                        var valType = "<?php echo $row->category; ?>";
                        // alert(valId);
                    window.location.href = "<?php echo base_url('index.php/Control_shop/product?valId="+valId+"&valType="+valType+"');?>";
           });




          btn = document.createElement('button');
          

          <?php if($row->offer_mrp>0){ ?>

          btn.style.backgroundColor="transparent";
          btn.style.border ="none";
          btn.style.width= "120px";
          btn.style.marginTop="7px";
          btn.style.marginLeft= "-10px";
          btn.style.marginRight= "-10px";  
          <?php }else{ ?>   

          btn.style.backgroundColor="transparent";
          btn.style.border ="none";
          btn.style.width= "120px";
          btn.style.marginTop="17px";
          btn.style.marginLeft= "-10px";
          btn.style.marginRight= "-10px"; 
           <?php } ?>      
         
         
          
          btn.style.float ="center";
          btn.innerHTML='<i class="fa fa-shopping-bag" style="color:white" > Add to Cart</i>';
          btn.setAttribute("id","<?php echo $row->id; ?>");
          btn.setAttribute("data-price-type","<?php echo $row->sellingprice; ?>");
          btn.setAttribute("data-offerprice-type","<?php echo $row->offer_mrp; ?>");
          
          btn.setAttribute("data-quantity-type","1");
          document.getElementById("contain_"+"<?php echo $row->id; ?>" ).appendChild(btn);

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
          plusminus.style.marginTop="5px";
          <?php }else{ ?>
            plusminus.style.marginTop="8px";
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
                        document.getElementById('count1').innerHTML = ++f3;
                     }else
                    {
                      document.getElementById('count1').innerHTML = ++count;
                    }
                    <?php } ?>


                  // document.getElementById('footId').style.display = "block";
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

      if($dairy->num_rows() > 0)
      {

            foreach($dairy->result() as $row)
            {  $i++;

              if($i<6){
        ?>           
         

           contain = document.createElement("div");
           contain.className="img_contain";
           contain.setAttribute("id","contain_"+ "<?php echo $row->id; ?>" );
           document.getElementById("mainContent2").appendChild(contain);

          /* document.getElementById("contain_"+ "<?php echo $row->id; ?>").addEventListener("click",function(){
                        var valId = "<?php echo $row->id; ?>";
                        var valType = "<?php echo $row->category; ?>";
                        // alert(valId);
                    window.location.href = "<?php echo base_url('index.php/Control_shop/product?valId="+valId+"&valType="+valType+"');?>";
           }); */
           

           
           img = document.createElement("img");
           img.setAttribute("src","<?php echo $row->item_image_path; ?>");
           img.setAttribute("id","img1_"+ "<?php echo $row->id; ?>");
           img.className="image";
           document.getElementById("contain_"+"<?php echo $row->id;?>") .appendChild(img);

          var name = document.createElement("p");

            name.className="productname";

            name.innerHTML="<?php echo $row->item_name; ?>"
            name.style.fontWeight  = '600';             
            name.style.textAlign="center";
          document.getElementById("contain_"+"<?php echo $row->id;?>") .appendChild(name);

 
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


          document.getElementById("img1_"+ "<?php echo $row->id; ?>").addEventListener("click",function(){
                        var valId = "<?php echo $row->id; ?>";
                        var valType = "<?php echo $row->category; ?>";
                        // alert(valId);
                    window.location.href = "<?php echo base_url('index.php/Control_shop/product?valId="+valId+"&valType="+valType+"');?>";
           });




          btn = document.createElement('button');
          
          <?php if($row->offer_mrp>0){ ?>

          btn.style.backgroundColor="transparent";
          btn.style.border ="none";
          btn.style.width= "120px";
          btn.style.marginTop="7px";
          btn.style.marginLeft= "-10px";
          btn.style.marginRight= "-10px";  
          <?php }else{ ?>   

          btn.style.backgroundColor="transparent";
          btn.style.border ="none";
          btn.style.width= "120px";
          btn.style.marginTop="17px";
          btn.style.marginLeft= "-10px";
          btn.style.marginRight= "-10px"; 
           <?php } ?>          
         
          btn.innerHTML='<i class="fa fa-shopping-bag" style="color:white;"> Add to Cart</i>';
          btn.setAttribute("id","<?php echo $row->id; ?>");
          btn.setAttribute("data-price-type","<?php echo $row->sellingprice; ?>");
          btn.setAttribute("data-quantity-type","1");
          document.getElementById("contain_"+"<?php echo $row->id; ?>" ).appendChild(btn);


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
          plusminus.style.marginTop="5px";
          <?php }else{ ?>
            plusminus.style.marginTop="8px";
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
                        document.getElementById('count1').innerHTML = ++f3;
                     }else
                    {
                      document.getElementById('count1').innerHTML = ++count;
                    }
                    <?php } ?>
                   //document.getElementById('footId').style.display = "block";
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

      if($masale->num_rows() > 0)
      {

            foreach($masale->result() as $row)
            {  $i++;

              if($i<6){
        ?>           
         

           contain = document.createElement("div");
           contain.className="img_contain";
           contain.setAttribute("id","contain_"+ "<?php echo $row->id; ?>" );
           document.getElementById("mainContent3").appendChild(contain);

         /*  document.getElementById("contain_"+ "<?php echo $row->id; ?>").addEventListener("click",function(){
                        var valId = "<?php echo $row->id; ?>";
                        var valType = "<?php echo $row->category; ?>";
                        // alert(valId);
                    window.location.href = "<?php echo base_url('index.php/Control_shop/product?valId="+valId+"&valType="+valType+"');?>";
           }); */
           

           
           img = document.createElement("img");
           img.setAttribute("src","<?php echo $row->item_image_path; ?>");
           img.setAttribute("id","img1_"+ "<?php echo $row->id; ?>");
           img.className="image";
           document.getElementById("contain_"+"<?php echo $row->id;?>") .appendChild(img);

          var name = document.createElement("p");

            name.className="productname";

            name.innerHTML="<?php echo $row->item_name; ?>"
            name.style.fontWeight  = '600';             
            name.style.textAlign="center";
          document.getElementById("contain_"+"<?php echo $row->id;?>") .appendChild(name);

 
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

          document.getElementById("img1_"+ "<?php echo $row->id; ?>").addEventListener("click",function(){
                        var valId = "<?php echo $row->id; ?>";
                        var valType = "<?php echo $row->category; ?>";
                        // alert(valId);
                    window.location.href = "<?php echo base_url('index.php/Control_shop/product?valId="+valId+"&valType="+valType+"');?>";
           });




          btn = document.createElement('button');
           <?php if($row->offer_mrp>0){ ?>

          btn.style.backgroundColor="transparent";
          btn.style.border ="none";
          btn.style.width= "120px";
          btn.style.marginTop="7px";
          btn.style.marginLeft= "-10px";
          btn.style.marginRight= "-10px";  
          <?php }else{ ?>   

          btn.style.backgroundColor="transparent";
          btn.style.border ="none";
          btn.style.width= "120px";
          btn.style.marginTop="17px";
          btn.style.marginLeft= "-10px";
          btn.style.marginRight= "-10px"; 
           <?php } ?>                  
         
         
          btn.innerHTML='<i class="fa fa-shopping-bag" style="color:white;"> Add to Cart</i>';
          btn.setAttribute("id","<?php echo $row->id; ?>");
          btn.setAttribute("data-price-type","<?php echo $row->sellingprice; ?>");
          btn.setAttribute("data-quantity-type","1");
          document.getElementById("contain_"+"<?php echo $row->id; ?>" ).appendChild(btn);

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
          plusminus.style.marginTop="5px";
          <?php }else{ ?>
            plusminus.style.marginTop="8px";
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
                        document.getElementById('count1').innerHTML = ++f3;
                     }else
                    {
                      document.getElementById('count1').innerHTML = ++count;
                    }
                    <?php } ?>

                   //document.getElementById('footId').style.display = "block";
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

      if($drinks->num_rows() > 0)
      {

            foreach($drinks->result() as $row)
            {  $i++;

              if($i<6){
        ?>           
         

           contain = document.createElement("div");
           contain.className="img_contain";
           contain.setAttribute("id","contain_"+ "<?php echo $row->id; ?>" );
           document.getElementById("mainContent4").appendChild(contain);

           
           

           
           img = document.createElement("img");
           img.setAttribute("src","<?php echo $row->item_image_path; ?>");
           img.setAttribute("id","img1_"+ "<?php echo $row->id; ?>");
           img.className="image";
           document.getElementById("contain_"+"<?php echo $row->id;?>") .appendChild(img);

            var name = document.createElement("p");

              name.className="productname";

              name.innerHTML="<?php echo $row->item_name; ?>"
              name.style.fontWeight  = '600';             
              name.style.textAlign="center";
           document.getElementById("contain_"+"<?php echo $row->id;?>") .appendChild(name);

 
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



          document.getElementById("img1_"+ "<?php echo $row->id; ?>").addEventListener("click",function(){
                        var valId = "<?php echo $row->id; ?>";
                        var valType = "<?php echo $row->category; ?>";
                        // alert(valId);
                    window.location.href = "<?php echo base_url('index.php/Control_shop/product?valId="+valId+"&valType="+valType+"');?>";
           });




          btn = document.createElement('button');
           <?php if($row->offer_mrp>0){ ?>

          btn.style.backgroundColor="transparent";
          btn.style.border ="none";
          btn.style.width= "120px";
          btn.style.marginTop="7px";
          btn.style.marginLeft= "-10px";
          btn.style.marginRight= "-10px";  
          <?php }else{ ?>   

          btn.style.backgroundColor="transparent";
          btn.style.border ="none";
          btn.style.width= "120px";
          btn.style.marginTop="17px";
          btn.style.marginLeft= "-10px";
          btn.style.marginRight= "-10px"; 
           <?php } ?>                  
         
         
          btn.innerHTML='<i class="fa fa-shopping-bag" style="color:white;"> Add to Cart</i>';
          btn.setAttribute("id","<?php echo $row->id; ?>");
          btn.setAttribute("data-price-type","<?php echo $row->sellingprice; ?>");
          btn.setAttribute("data-quantity-type","1");
          document.getElementById("contain_"+"<?php echo $row->id; ?>" ).appendChild(btn);

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
          plusminus.style.marginTop="5px";
          <?php }else{ ?>
            plusminus.style.marginTop="8px";
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
                        document.getElementById('count1').innerHTML = ++f3;
                     }else
                    {
                      document.getElementById('count1').innerHTML = ++count;
                    }
                    <?php } ?>

                   //document.getElementById('footId').style.display = "block";
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


     /* <?php $i = 0;

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

        

           
           img = document.createElement("img");
           img.setAttribute("src","<?php echo $row->item_image_path; ?>");
           img.setAttribute("id","img1_"+ "<?php echo $row->id; ?>");
           img.className="image";
           document.getElementById("contain_"+"<?php echo $row->id;?>") .appendChild(img);

             var name = document.createElement("p");

            name.className="productname";

            name.innerHTML="<?php echo $row->item_name; ?>"
             name.style.fontWeight  = '600';             
            name.style.textAlign="center";
         

           document.getElementById("contain_"+"<?php echo $row->id;?>") .appendChild(name);

 
            var price = document.createElement("p");

              price.style.marginTop="-3px";

            <?php if($row->offer_mrp>0){?> 

           price.innerHTML= "MRP :<?php  echo '<del>'.$row->item_mrp.'</del>'; ?>";
            <?php }else{ ?>

           price.innerHTML= "MRP :<?php  echo $row->item_mrp; ?>";
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


            document.getElementById("img1_"+ "<?php echo $row->id; ?>").addEventListener("click",function(){
                        var valId = "<?php echo $row->id; ?>";
                        var valType = "<?php echo $row->category; ?>";
                        // alert(valId);
                    window.location.href = "<?php echo base_url('index.php/Control_shop/product?valId="+valId+"&valType="+valType+"');?>";
           });




            btn = document.createElement('button');
        
          <?php if($row->offer_mrp>0){ ?>

          btn.style.backgroundColor="transparent";
         
           btn.style.border ="none";
          btn.style.width= "120px";
          btn.style.marginTop="7px";
          btn.style.marginLeft= "-10px";
          btn.style.marginRight= "-10px";  
          <?php }else{ ?>   

          btn.style.backgroundColor="transparent";
          
          btn.style.border ="none";
          btn.style.width= "120px";
          btn.style.marginTop="17px";
          btn.style.marginLeft= "-10px";
          btn.style.marginRight= "-10px"; 
           <?php } ?>               
         
         
          btn.innerHTML='<i class="fa fa-shopping-bag" style="color:white;"> Add to Cart</i>';
          btn.setAttribute("id","<?php echo $row->id; ?>");
          btn.setAttribute("data-price-type","<?php echo $row->item_mrp; ?>");
          btn.setAttribute("data-quantity-type","1");
          document.getElementById("contain_"+"<?php echo $row->id; ?>" ).appendChild(btn);

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
          plusminus.style.marginTop="5px";
          <?php }else{ ?>
            plusminus.style.marginTop="8px";
            <?php } ?>
          plusminus.innerHTML= "<input type='button' value='-' class='minus' style='background-color:coral; border: none; color:white'  onclick='minus(<?php echo $row->id ?>)'> <input style='width:50px; height:30px; border:none; borderRadius:10px;' type='number' id= 'quanId_<?php echo $row->id; ?>' step='1' min='0' max='' name='quantity' value='1' title='Qty' class='input-text qty text' size='4' pattern='' inputmode=''> <input type='button' value='+' class='plus' style='border:none; background-color:coral; color:white' onclick='pl(<?php echo $row->id; ?>)'>";
          
          document.getElementById("contain_"+"<?php echo $row->id;?>").appendChild(plusminus);

          var f2 = <?php echo $cardcount?>;
          document.getElementById("<?php echo $row->id; ?>").addEventListener("click",function(){
                   // alert(this.getAttribute('id'));
                   // document.getElementById('count').innerHTML = ++count;

                   if(f2>0){
                        document.getElementById('count').innerHTML = ++f2;
                     }else
                    {
                      document.getElementById('count').innerHTML = ++count;
                    }

                   document.getElementById('footId').style.display = "block";
                   // alert("Added to cart");
                      var jsonobj ={
                                 'item_id':'',
                                 'price':'',
                                 'quantity':'',
      
                               }

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
    });
 });
          

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
      ?>*/

}



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

/*

function minus(val)
{   //alert(val);
    var quanId__= document.getElementById('quanId_'+val).value;
   //alert(quanId__);
  var quan = document.getElementById('quanId_'+val).value;
  // alert(quan);
  if(quan > 1)
  {
   document.getElementById('quanId_'+val).value = --quan;
   }else if(quanId__ == 1){


    document.getElementById(val).style.display="block";
      document.getElementById('button_'+val).style.display="none";

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
*/






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



 $(window).on('load',function(){
       setTimeout(function(){ $('#myModalpincode').show();
   }, 5000);
        
    });

  /*  window.onclick = function(event) {

  var modalDiv = document.getElementById('myModal');
  if (event.target == modalDiv) {
    modalDiv.style.display = "none";
  }
}
*/
function closeclick() {
   

   var viewDivTwo = document.getElementById('myModalpincode');
   viewDivTwo.style.display = "none";

   var pin = document.getElementById('pincode').value;
   //alert(pin);
   var inpReq;
      inpReq = $.ajax({
           // url:"<?php echo base_url('index.php/Control_shop/acceptInfo2');?>",
           url:"<?php echo base_url('index.php/control_e_commerce/updpincodetempusr');?>",
           type:"post",
           data: 'pincode='+pin,
            success:function(data)
          {
            //console.log(data);
           // var obj = JSON.parse(data);
            //console.log(obj);
            //window.location.reload();
   
          }
      });


}
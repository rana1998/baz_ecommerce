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
 
          
          txtname = document.createElement("p");
          // txtname = document.createElement("h1");
          txtname.innerHTML = '<?php echo $row->item_name; ?>';
          txtname.style.color = 'black';
          // txtname.style.fontSize  = '2.2vw';
          txtname.style.fontWeight  = '600';
          txtname.style.fontFamily = "arial";
          txtname.style.marginTop = "2%";
          txtname.style.marginBottom = "2%";
          document.getElementById("contain_"+"<?php echo $row->id; ?>" ).appendChild(txtname);

 
          
          txtmrp = document.createElement("p");
          // txt.style.color = "red";
          txtmrp.style.color = "grey";
          // txt.style.display = "inline-block";
          // txtmrp.style.float = "left";
          // txtmrp.style.fontSize  = '3vw';
          txtmrp.style.fontFamily = "arial";
          txtmrp.style.marginTop = "2%";
          txtmrp.style.marginBottom = "3%";
          txtmrp.innerHTML = "weight: <?php echo $row->Item_weight; ?>";
          document.getElementById("contain_"+"<?php echo $row->id; ?>" ).appendChild(txtmrp);


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
          // btn.style.color="white";
          // btn.innerHTML = "Add to cart";
          btn.style.float ="right";
          btn.innerHTML='<i class="fa fa-shopping-bag" style="color:grey;"></i>';
          btn.setAttribute("id","<?php echo $row->id; ?>");
          btn.setAttribute("data-price-type","<?php echo $row->item_mrp; ?>");
          btn.setAttribute("data-quantity-type","1");
          document.getElementById("contain_"+"<?php echo $row->id; ?>" ).appendChild(btn);

          

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
        url:"<?php echo base_url('index.php/Control_shop/addcart');?>",
        type: "post",
        dataType: "json",
        data: jsonobj,
        // processData:false,
        // contentType:false,
        // cache:false,
        // async:true,
        // data: data,
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



          });

          console.log('<?php echo $row->item_name; ?>');
     

          
         
     
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
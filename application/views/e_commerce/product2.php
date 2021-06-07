<!DOCTYPE html>
<html>
<head>

<style>
    <?php include 'common/css/product2.css'?>
    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>    

  
 </script>
       <?php include "common/header/header.php";?>
</head>
<body>

   <main>



    <div class="maincontent">


      <section><!--left Content-->
        <div>
           <h1 style="font-size: initial;padding: 3%;font-size: 16px;letter-spacing: 1px;">Categories</h1>
        <ul>

          <?php foreach($cateInfo->result() as $vard){ ?>
                    <li onclick= "window.location ='<?php echo base_url('index.php/Control_shop/cat/'.$vard->id);?>'" class="dropdown-item"><?php echo $vard->category;?></li>

                <?php } ?>
       
        </ul>
          
        </div>
       
       <hr style="border: 1px solid white;">
        
        <div>
          <img src="https://demo.templatetrip.com/WooCommerce/WCM040/WCM05/wp-content/uploads/2017/02/left-banner-1-274x500.jpg">
        </div>

        


        <div>
          <section class="leftContServices">
            <div>
              <section class="servce">
                <div><img src="<?php echo base_url('assets/images/bazaria_deliver.png');?>"></div>
                <div><h1 style="font-size: initial;">Free Shipping</h1>
                <p>Deliver to door</p></div>
              </section>

              <hr>

              <section class="servce">
                <div><img src="<?php echo base_url('assets/images/bazaria_online.png');?>"></div>
                <div> <h1 style="font-size: initial;">24x7 Support</h1>
               <p>in safe hands</p></div>
              </section>

              <hr>

              <section class="servce">
                <div><img src="<?php echo base_url('assets/images/bazaria_piggi.png');?>"></div>
                <div><h1 style="font-size: initial;">Big Saving</h1>
               <p>at lowest price</p></div>
              </section>

             <hr>

              <section class="servce">
                <div><img src="<?php echo base_url('assets/images/bazaria_money.png');?>"></div>
                <div><h1 style="font-size: initial;">
                     Money Back</h1>
               <p>Easy to return</p></div>
              </section>

              <hr>

              <section class="servce">
                <div><img src="<?php echo base_url('assets/images/bazaria_shopping.png');?>"></div>
                <div><h1 style="font-size: initial;">online shopping</h1>
               <p>a huge branding</p></div>
              </section>

              <hr>

              <section class="servce">
                <div><img src="<?php echo base_url('assets/images/bazaria_achive.png');?>"></div>
                <div> <h1 style="font-size: initial;">Award Winner</h1>
               <p>for best services</p></div>
              </section>


            </div>


           


        





          </section>
        </div>



         <div class="topSale">
           <h5 style="font-size: 16px;font-weight: 500;color: grey;letter-spacing: 1px;margin:3% auto;">Top Rated Product</h5>
          <hr>

           <?php $i = 0;

      if($feat_info->num_rows() > 0)
      {

            foreach($feat_info->result() as $row)
            {  $i++;

              if($i<5){
        ?> 
<section id="<?php echo $row->id; ?>" data-pro-type="<?php echo $row->category; ?>"  onclick="proclick(this)">
            <div id="<?php echo $row->id; ?>" data-pro-type="<?php echo $row->category; ?>"  onclick="proclick(this)">
              <img src="<?php echo $row->item_image_path; ?>" style="width:70px;object-fit:contain;border: 1px solid grey;"
              >
            </div>
            <div>
              <h1 style="font-size: initial;"><?php echo $row->item_name; ?></h1>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <p><?php echo $row->item_mrp; ?>&nbsp;Rs.</p>
            </div>
            
          </section>

           <hr>

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
          

         
        </div> 



      </section>



      <section><!-- Right Content -->

      <div class="viewClass" id="viewClass" style="display: none;">
        <section>
          <h1 style="font-size:14px !important;display: inline;" id="viewh1">Your item has been added to your cart.</h1>
        </section>
        <section>
          <span  style="display:inline;background-color: mediumseagreen;color:white;border-radius: 5px;padding:1.5%;cursor: pointer;" id="viewId" data-ran-type="temp" onclick="vew(this)" >View Cart </span>
        </section>
      </div>

      <?php 
      //echo 'hello';
          
           if($new_pro){
           
            foreach($new_pro as $row)
            { 
       ?>

       <div class="productInfo">
      
         <section>
           <img src="<?php echo $row['item_image_path']; ?>" style="width:100%;height:400px ;
           object-fit:contain;">
         </section>

         
                  
        
         <section>
          <div style="padding:4%;">
            <h1 ><?php echo $row['item_name']; ?></h1>
           <h1 style="font-size: initial;color:mediumseagreen;"> ₹ <?php echo $row['sellingprice']; ?></h1>
      
            <p><?php echo $row['dispcription']; ?></p>

         
           <div>
             
           

            <?php if($row['available_quantity']>1)  {
                ?>
                <div>
                 <span class="quantity buttons_added">
                   <input type="button" value="-" class="minus" onclick="minus(<?php echo $row['id']; ?>)">
                   <input type="number" id= 'quanId_<?php echo $row['id']; ?>' step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" style="width:50px;" pattern="" inputmode="">
                   <input type="button" value="+" class="plus" onclick="pl(<?php echo $row['id']; ?>)">
                 </span>

              <!-- <br> -->
                    <span id="<?php echo $row['id']; ?>" class="addbtn" data-price-type="<?php echo $row['sellingprice']; ?>" data-quantity-type="quanId_<?php echo $row['id']; ?>" data-offerprice-type="<?php echo $row['offer_mrp']; ?>" onclick="addbagclick(this)" ><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp;Add to Cart </span> 
                </div>
               


              <div style="margin-top:3%;max-height:100px;position: relative;padding: 2%;">
                 <span  class="addbtn"  id="availcheck"style="background: white;color:mediumseagreen;border:1px solid mediumseagreen " onclick="availcheck()">&nbsp;Check for availability</span>
                 <div id="chkavable" style="display: none;margin-top:10px;">
                   <input type="text" name="chkavailable" id="chkavailable" style="" onkeyup="useridclick()">
                   <!-- <input type="button" value='search'  style="background: white;color:mediumseagreen;border:1px solid mediumseagreen;border-radius: 5px;margin-left: 10px;padding: 2px; " > -->
                 </div>
                 <p id="existid" style="display: none;color:green;">Available</p>
                 <p id="notexistid" style="display: none;color:red;">Not Available</p>
                 
              </div>
             



               
             <?php }else {
                ?>
                  <span class="quantity buttons_added" style="color:red;">
                    Not Available
             </span>
          <?php }
                ?>


          </div>
           
         </div>

         </section>
       </div>

        <?php
          }
        }
                ?>


                <div style="width: 100%;height: 200px;margin-top: 3%;">
                  <h1 style="color:mediumseagreen;">Dispcription</h1>
                  <hr>

                  <div class="disp">
                    <!-- <p>Dispcription</p> -->
                   <!--  <p>
                      Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum
quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.

Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellatdeserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.

Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat Temporibus autem quibusdam et necessitatibus aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.

Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                    </p> -->
                      <?php 
      //echo 'hello';
          
           if($new_pro){
           
            foreach($new_pro as $row)
            { 
       ?>

           <p ><?php echo $row['dispcription']; ?></p>

         <?php
          }
        }
                ?>




         
<!-- <div class="card" style="width: auto; height: auto; ">
            <div class="card-body"> -->
            <!-- <h5 class="card-title">User info</h5> -->
                  <?php 
      //echo 'hello';
          
           if($review){
           
            foreach($review as $row)
            { 
       ?>

           <!-- <p><?php echo $row['user']; ?></p> -->
          <!--   <table class="table-borderless" >
               <tr>
                 <th>Name:</th>
                 <th><?php echo $row['user']; ?></th>
               </tr>
               <tr>
                 <td>Comment</td>
                 <td><?php echo $row['comment']; ?></td>
               </tr>
               <tr>
                 <td>Ratings <span class="fa fa-star checked"></span>

            </td>
                 <td><?php echo $row['ratings']; ?></td>
               </tr>
               
                
                
         </table> -->
    <div  style="width: auto; height: auto; ">
         <h1 style="color:mediumseagreen;font-size:18px !important;">Name : &nbsp; <?php echo $row['user']; ?></h1>
         <p>Comment: &nbsp; <?php echo $row['comment']; ?> </p>
         <p>Ratings <span class="fa fa-star checked" style="color: yellow;"></span>:&nbsp;<?php echo $row['ratings']; ?></p>
    </div>

         <?php
          }
        }
                ?>
        <!-- </div>
          </div>  -->         


                  </div>
                </div>

      </section>
    </div>




  


      <!-- footer -->
     <footer  style="background-color:#FE0000;">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 text-center text-md-left ">
                    
                    <div class="py-0">
                        <h3 class="my-4 text-white">About<span class="mx-2 font-italic text-warning "> <?php echo $com_info['name_logo'];?></span></h3>
 
                        <p class="footer-links font-weight-bold">
                            <a class="text-white" href="#">Home</a>
                            |
                            <a class="text-white" href="#">Blog</a>
                            |
                            <a class="text-white" href="#">About</a>
                            |
                            <a class="text-white" href="#">Contact</a>
                        </p>
                        <p class="text-light py-4 mb-4">&copy;<?php echo $com_info['name'];?></p>
                    </div>
                </div>
                
                <div class="col-md-4 text-white text-center text-md-left ">
                    <div class="py-2 my-4">
                        <div>
                            <p class="text-white"> <i class="fa fa-map-marker mx-2 "></i>
                                    <?php echo $com_info['address'];?>
                                   </p>
                        </div>
 
                        <div> 
                            <p><i class="fa fa-phone  mx-2 "></i> <?php echo $com_info['contact_no'];?> </p>
                        </div>
                        <div>
                            <p><i class="fa fa-envelope  mx-2"></i><a href="mailto:<?php echo $com_info['email'];?>">Support : <?php echo $com_info['email'] , $com_info['name'];?></a></p>
                        </div>  
                    </div>  
                </div>
                
                <div class="col-md-4 text-white my-4 text-center text-md-left ">
                    <span class=" font-weight-bold ">About the Company</span>
          <p class="text-warning my-2" ><?php echo $com_info['about'];?></p>
                    <div class="py-2">
                        <a href="#"><i class="fa fa-facebook fa-2x text-primary mx-3" style="color:white!important;"></i></a>
                        <a href="#"><i class="fa fa-google-plus fa-2x text-danger mx-3" style="color:white!important;"></i></a>
                        <a href="#"><i class="fa fa-twitter fa-2x text-info mx-3" style="color:white!important;"></i></a>
                        <a href="#"><i class="fa fa-youtube fa-2x text-danger mx-3" style="color:white!important;;"></i></a>
                    </div>
                </div>
            </div>  
        </div>
     </footer>


   </main>


   </body>

   <script type="text/javascript">
    <?php
      include 'common/js/product2.js';
    ?>
</script>
</html>

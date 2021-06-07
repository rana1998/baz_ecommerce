<!DOCTYPE html>
<html>
<head>

<style>
    <?php include 'common/css/cart2.css'?>
    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>    

  <script type="text/javascript">
    <?php
      include 'common/js/cart2.js';
    ?>
</script>
<?php include "common/header/header.php"; ?>
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
              <p><?php echo $row->sellingprice; ?>&nbsp;Rs.</p>
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
        <div class="row">   
        <div class="breadcrumb flat" style="padding: 0px; margin-top: 20px; ">
        <a  class="active">Review Cart</a>
        <a >Shipping Info</a>
        <a >Payment Methods</a>
        <a>Order confirm</a>

        </div>
<br>
 

       
<div class="row">
 
 
        

        <div class="tableDiv">
          
          <table>
            <thead>
              <tr>
    <th></th>
    <th></th>
    <th>Product</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Total</th>
  </tr>
            </thead>
  
<tbody>

  <?php 
                 $sp = 0;
                  $t = 0;         
//print_r($product_info);
  foreach ($product_info as $row) { 
             // $sp = $sp + $row['sellingprice'];
                // $t = $t + $row['item_mrp'];
               $t = $t + $row['item_total'];

    ?>
                 <tr>
                     <td>
                      <!-- <button class="btn2" id= "<?php echo $row['id'];?>" onclick = removeClick(this)>Remove</button> -->
                        <i class="fa fa-trash-o" style="font-size:25px;color:red" data-item-id="<?php echo $row['id']; ?>" onclick="removeClick(this)"></i>
                     </td>
                     <td><img src="<?php echo $row['item_image_path']; ?>" style="width:150px;height:100px;"></td> 
                     <td> <?php echo $row['item_name']; ?></td>
                     <!-- <td> <?php echo $key['available_quantity']; ?></td> -->
                     <!-- <td> <?php echo $row['Item_weight']; ?></td> -->
                     <td> <?php echo $row['sellingprice']; ?></td>
                     <td> 
                                <span class="quantity buttons_added">
                          <input type="button" value="-" class="minus" id="<?php echo $row['id']; ?>" data-cardId-type="<?php echo $row['app_cartItem_id']; ?>" data-price-type="<?php echo $row['sellingprice']; ?>" data-quantity-type="quanId_<?php echo $row['id']; ?>" onclick="minus(this)">
                
                <input type="number" id= 'quanId_<?php echo $row['id']; ?>' step="1" min="1" max="" name="quantity" value="<?php echo $row['item_quant']; ?>" title="Qty" class="input-text qty text" style="width:30%;" pattern="" inputmode="">

                <input type="button" value="+" class="plus" data-cardId-type="<?php echo $row['app_cartItem_id']; ?>"
                id="<?php echo $row['id']; ?>" data-price-type="<?php echo $row['sellingprice']; ?>" data-quantity-type="quanId_<?php echo $row['id']; ?>" onclick="pl(this)">
                       </span>
                    </td>
                    <!-- <td> <?php echo $row['item_mrp']; ?></td> -->
                    <td id="itemprice_<?php echo $row['id']; ?>"> <?php echo $row['item_total']; ?></td> 
                     
                     
                 </tr>
             <?php } ?>
  
</tbody>
   




  
</table>




  </div>

       

        <div style="width:50%;float: right;height:auto;margin-top: 5%;">

           <h4 style="letter-spacing: 1px;color: grey;">Cart Totals</h4>

          <div style="background-color: white;">

            
              <table>

           

             <?php if($product_info) {

              ?>
             
              <tr>
                <td>Total </td>
                
                 <td id="amountId"><?php echo $t;?></td>
              </tr>
  
              <?php } ?>
               </table>
          </div>



            <?php if($product_info) {

              ?>
            <div style="display: flex;flex-direction: row;">
              
            
              <div style="margin-top:3%;max-height:100px;position: relative;padding: 2%;width:200px;">
                 <span  class="addbtn"  id="availcheck"style="background: white;color:mediumseagreen;border:1px solid mediumseagreen " onclick="availcheck()">&nbsp;Check for availability</span>
                 <div id="chkavable" style="display: none;margin-top:10px;">
                   <input type="text" name="chkavailable" id="chkavailable" style="" onkeyup="useridclick()" placeholder="Enter Pincode">
                   <!-- <input type="button" value='search'  style="background: white;color:mediumseagreen;border:1px solid mediumseagreen;border-radius: 5px;margin-left: 10px;padding: 2px; " > -->
                 </div>
                 <p id="existid" style="display: none;color:green;">Available</p>
                 <p id="notexistid" style="display: none;color:red;">Not Available</p>
                 
              </div>

              <?php if($user_info){ ?>

          <div style="margin: 3%;width:60%;" id="proceedid">
            <span  class="addbtn" style="float:right;background:orange;color: white;" data-val-type=" <?php echo $product_info[0]['tempuser_id'] ?>" onclick="window.location ='<?php  echo base_url('index.php/Control_shop/checkout_manage');?>'">Proceed To Checkout</span>
          </div>

        <?php }else{ ?>

          <div style="margin: 3%;width:60%;" id="proceedid">
            <span  class="addbtn" style="float:right;background:orange;color: white;" \ onclick="window.location ='<?php  echo base_url('index.php/Control_shop/login2');?>'">Login</span>
          </div>

        <?php } ?>

          </div>

            <?php } ?>

        </div>

       </section>
       </div>

      </section>
    </div>




  


      <!-- footer -->
     <footer  style="background-color:#E31E25;">
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
</html>

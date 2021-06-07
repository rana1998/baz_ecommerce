<!DOCTYPE html>
<html>

   <head>
      <style>
         <?php include 'common/css/cat2.css'?>
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
            include 'common/js/cat2.js';
            ?>
      </script>
       <?php include "common/header/header.php";?>
   </head>
   <body>
    <!-- <?php echo $this->uri->segment(3);?>  -->
      <main>
         
         <div class="maincontent">
            <section>
               <!--left Content-->
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
                           <div>
                              <h1 style="font-size: initial;">Free Shipping</h1>
                              <p>Deliver to door</p>
                           </div>
                        </section>
                        <hr>
                        <section class="servce">
                           <div><img src="<?php echo base_url('assets/images/bazaria_online.png');?>"></div>
                           <div>
                              <h1 style="font-size: initial;">24x7 Support</h1>
                              <p>in safe hands</p>
                           </div>
                        </section>
                        <hr>
                        <section class="servce">
                           <div><img src="<?php echo base_url('assets/images/bazaria_piggi.png');?>"></div>
                           <div>
                              <h1 style="font-size: initial;">Big Saving</h1>
                              <p>at lowest price</p>
                           </div>
                        </section>
                        <hr>
                        <section class="servce">
                           <div><img src="<?php echo base_url('assets/images/bazaria_money.png');?>"></div>
                           <div>
                              <h1 style="font-size: initial;">
                                 Money Back
                              </h1>
                              <p>Easy to return</p>
                           </div>
                        </section>
                        <hr>
                        <section class="servce">
                           <div><img src="<?php echo base_url('assets/images/bazaria_shopping.png');?>"></div>
                           <div>
                              <h1 style="font-size: initial;">online shopping</h1>
                              <p>a huge branding</p>
                           </div>
                        </section>
                        <hr>
                        <section class="servce">
                           <div><img src="<?php echo base_url('assets/images/bazaria_achive.png');?>"></div>
                           <div>
                              <h1 style="font-size: initial;">Award Winner</h1>
                              <p>for best services</p>
                           </div>
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
            <section>
               <!-- Right Content -->
               <div style="width: 100%;height:200px;">
                  <img src="https://demo.templatetrip.com/WooCommerce/WCM040/WCM05/wp-content/uploads/2017/02/category-Banner-900x200.jpg" style="object-fit: contain;">
               </div>
               <button class="btn btn-light listbtn" id="list"><i class="fa fa-bars"></i></button>
               <button class="btn btn-light listbtn" id="grid"><i class="fa fa-th-large"></i></button>
               
               <div id="products" class="row view-group">

                  
                     <?php $i = 0;
                        if($item_info->num_rows() > 0)
                        {
                        
                              foreach($item_info->result() as $row)
                              { 
                              
                          ?> 
            <div class="col-lg-4 col-sm-4 item" style="margin-top: 5px;">
                      <hr style="border: 1px solid white;">
               <div class="thumbnail "   style="justify-content: center">
                           <div class="inner img-event" id="<?php echo $row->id; ?>" data-pro-type="<?php echo $row->category; ?>" onclick="proclick(this)">
                              <img class="group list-group-image img-fluid" src="<?php echo $row->item_image_path; ?>" onerror="this.src='<?php echo base_url('assets/images/default-image_450.png')?>'" alt="products" style="height:200px;object-fit:cover;width: 260px">
                           </div>
                     <div class="card-body caption">
                         <h4 class="group card-title inner "style="font-size: initial;font-weight:bold;letter-spacing: 1px;"><?php echo $row->item_name; ?></h4>
                         <p class="group inner list-group-item-text price" style="font-size: 15px;letter-spacing: 1px;">weight: <?php echo $row->Item_weight; ?>&nbsp;</p>
                              <p class="group inner list-group-item-text price" style="font-size: 15px;letter-spacing: 1px;">MRP: ₹<?php 
                              if ($row->offer_mrp>0){ ?>
                                 <del> <?php echo $row->sellingprice; ?> </del> <?php echo $row->offer_mrp ;  ?>
                              


                             <?php }else{ echo $row->sellingprice; } ?>&nbsp;</p>



                              
                              <p id="plusminus_<?php echo $row->id; ?>" style="display: none"><!--<span class="quantity buttons_added">
                               <input type="button" value="-" class="minus btn btn-danger btn-sm" style="height: 30px" onclick="minus(<?php echo $row->id;; ?>)">
                               
                               <input type="number" id= 'quanId_<?php echo $row->id; ?>' step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" style="width:60px;" pattern="" inputmode="">
                               
                               <input type="button" value="+" class="plus btn btn-danger btn-sm" style="height: 30px" onclick="pl(<?php echo $row->id; ?>)">
                             
                             </span> -->

                          
<!--------->
<span class="quntity buttons_added">

<input type="button" value="-" class="minus btn btn-danger" data-itm_id="" data-quantity-type="" data-price-type="" id="btn1_<?php echo $row->id; ?>" onclick="minus(this)"> 

<input style="width:50px; height:30px; border:none; border-radius:10px;" type="number" data-inp-typ="" id="quanId_<?php echo $row->id; ?>" step="1" min="0" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">

 <input type="button" value="+" class="plus btn btn-danger"  data-itm_id="" data-quantity-type="" data-price-type="" id="btn2_<?php echo $row->id; ?>" onclick="pl(this)">
</span>
<!---->










                          </p> 

                              <p id="addbuttonid_<?php echo $row->id; ?>" >
                                 <span id="<?php echo $row->id; ?>" class="addbtn btn btn-danger" data-price-type="<?php echo $row->sellingprice; ?>" data-quantity-type="quanId_<?php echo $row->id; ?>" data-offerprice-type="<?php echo $row->offer_mrp; ?>" onclick="addbagclick(this)" ><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp;Add to Cart <i id = 'ladda4' class="fa fa-spinner fa-spin" style="display: none;"></i></span> 

                              </p>

                 
                     </div>
               </div>
            </div>
                     <!--/.Card-->
                     <?php
                        }
                        }
                        else
                        {
                        ?>
                     <?php
                        }
                        ?>
               </div>


               <nav aria-label="Page navigation example">
                <?= $this->pagination->create_links(); ?>
              </nav>


              
            </section>


         </div>

      </section>
    </div>




      <!--footer-->
         <?php include "common/header/footer.php"; ?>

      <!-- footer ends-->
   </main>


   </body>
</html>

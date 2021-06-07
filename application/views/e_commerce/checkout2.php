<!DOCTYPE html>
<html>
<head>

<style>
    <?php include 'common/css/checkout2.css'?>
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
      include 'common/js/checkout2.js';
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

        <?php if($user_info) { ?>
            <div></div>
       <?php  } else {?>
                    <div class="returnInfo" style="cursor: pointer;">
         <p  onclick="window.location ='<?php echo base_url('index.php/Control_shop/login2');?>'">Please login before payment? Click here to login</p>
       </div>    

        <?php  } ?>

       

       <div class="returnInfo">
         <p>Have a coupon? Click here to enter your code</p>
       </div>

       
          
     <div class="row">   
  <div class="breadcrumb flat" style="padding: 0px; margin-top: 20px; ">
  <a href="<?php echo base_url('index.php/Control_shop/cart2_manage?valId='.$this->session->userdata('user_id'));?>" >Review Cart</a>
  <a class="active">Shipping Info</a>
  <a >Payment Methods</a>
   <a>Order confirm</a>

</div>
</div>
        
       <div class="formDiv">

         <section>
           <form id="addressfrm">
             <h1 style="font-size: initial;">Shipping Info</h1>
  
             <br>
             <?php 

              

if(!empty($shipping))
  {            
          foreach($shipping as $key) {  
         ?>
          
           
            <div class="card" style="width: auto; height: auto; ">
            <div class="card-body">

        
              <input type="radio"  value="<?php echo $key['id']; ?>" name="choose" style="max-width: 30px;">
              <span><b>Address</b></span>
         
            
            
              <table class="table-borderless" style="font-size: 10px;">
                <td>Name:</td>
                <td><?php echo $key['name'];  ?></td>
                <tr></tr>
                <td>Email ID:</td>
                <td><?php echo $key['email'];  ?></td>
                
                <tr></tr>
                <td>Address:</td>
                <td><?php echo $key['addresss'];  ?></td>
                <tr></tr>
                <td>Pincode:</td>
                <td><?php echo $key['pincode'];  ?></td>
                <tr></tr>
                <td></td>
                <!-- <td><input type="radio"  value="<?php echo $key['id']; ?>" name="choose"></td> -->
                
              </table>
                
              
              
            
             
            </div>
          </div> 
          <br>
                    

<?php

          
}  

    }
else{
  

             ?>


             <label>Full name<span style="color: red;">*</span></label>
             <input type="text" placeholder="Enter Name" name="name" required style="width: 100%;">

           

                <label>Mobile no.<span style="color: red;">*</span></label> 
                <input type="text" placeholder="Enter no." pattern="[7-9]{1}[0-9]{9}" name="phone_no" required> 

                <label>Email<span style="color: red;">*</span></label> 
                <input type="email" placeholder="Enter Email" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" name="email" required > 

                <label>Address<span style="color: red;">*</span></label> 
                <input type="text" placeholder="Enter address" name="address" required> 

                <label>Pin Code<span style="color: red;">*</span></label> 
                <input type="text" placeholder="Enter pincode" name="pincode" id="pin"required onkeyup="useridclick()">
                <p id="existid" style="display: none;color:green;">Available</p>
                 <p id="notexistid" style="display: none;color:red;">Not Available</p>



              <?php } ?>

        <?php if($user_info) { ?>
            <div></div>
       <?php  } else {?>
                    <div class="returnInfo" style="cursor: pointer; margin-top:30px;">
         <p  onclick="window.location ='<?php echo base_url('index.php/Control_shop/login2');?>'">Please login before payment? Click here to login</p>
       </div>   
     <?php } ?>

                <?php if($user_info) { ?>
             

          <div style="text-align: right;">
          

           <?php if(!empty($shipping)) { ?>
          
           <button type="button" class="btn btn-outline-warning addbtn" style="background:mediumseagreen;color: white;" onclick="radioaddr()">Continue</button>

           <?php  } else {?>
            <button type="submit" class=" btn btn-outline-warning addbtn" style="background:orange;color: white;display: none;"  id="ex">Continue</button>
            <?php  } ?>
          
          </div>

                     
          <?php  } else {?>
                       <div></div> 

        <?php  } ?>

           </form>

         <!--   <input type="checkbox" name="">Create an Account

           <div id="chk" style="display: none;">
             <label>Email Address(optional)<span style="color: red;">*</span></label>
             <input type="" name="" style="width: 100%;">
           </div>
             -->

         </section>
         <section>
           <form>
             <h4 style="color: grey;letter-spacing: 1px;">Additional Information</h4>

             <label>Order notes (optional)</label>
             <textarea placeholder="Notes about your orde, e.g special notes for delivery" style="width: 100%"></textarea>
           </form>



            <br>
            <br>
            
                                <!-- Button trigger modal -->
<button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal">
  <i class="fa fa-plus" >Add New Address</i>
</button> 

<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" style="text-align:right" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body " style="width: 100%;">
        <form id="newaddform"> 
          <div class='form-group'>
                <label>Full name<span style="color: red;">*</span></label>
                <input type="text" class="form-control" placeholder="Enter Name" name="name2" id="name2" required style="width: 100%;">
               </div>
               <div class='form-group'>
                <label>Mobile no.<span style="color: red;">*</span></label> 
                <input type="text" class="form-control"  placeholder="Enter no." pattern="[7-9]{1}[0-9]{9}" name="phone_no2" id="phone_no2" required> 
              </div>
                <div class='form-group'>
                <label>Email<span style="color: red;">*</span></label> 
                <input type="email"  class="form-control"  placeholder="Enter Email" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" name="email2" id="email2" required > 
                </div>
              <div class='form-group'>
                <label>Address<span style="color: red;">*</span></label> 
                <input type="text" class="form-control"  placeholder="Enter address" name="address2" id="address2" required> 
                </div>
                <div class='form-group'>
                <label>Pin Code<span style="color: red;">*</span></label> 
                <input type="text" class="form-control"  placeholder="Enter pincode" name="pincode2" id="pincode2" required>
                </div>
            
                 </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-primary">Add</button> -->
        <button type="submit" class="btn btn-primary" id="addform">Add</button> 
        
      </div>
    </div>
  </div>
</div>

              <div class="collapse" id="collapseExample">
                      
                
              </div>

         </section>

       </div>


      <!--  <div class="tbldiv">
         <table>

              <tr>
                <td>Product</td>
                 <td>Total</td>
              </tr>

              <tr>
                <td>Item Amount</td>
                 <td>Amount</td>
              </tr>

              <tr>
                <td>Delivery Charge</td>
                 <td>Amount</td>
              </tr>

              <tr>
                <td>Total </td>
                 <td>Amount</td>
              </tr>

         </table>
       </div> -->

       <!-- <div style="background: white;height:auto;padding: 2%;"> -->
         <!-- <div class="returnInfo2">
         <p>Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.</p>
         <hr>

       </div> -->
           
       
          <!-- <div style="margin: 1% auto;">
            <span  class="addbtn" style="float:right;background:orange;color: white;" >Place order</span>
          </div> -->
          


          

       <!-- </div> -->


       

      </section>
    </div>




  


      <!-- footer -->
      <?php include "common/header/footer.php"; ?>

   </main>


   </body>
</html>

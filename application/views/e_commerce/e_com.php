<!DOCTYPE html>
<html>
<head>

<style>
    <?php include 'common/css/e_com.css'?>
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
      include 'common/js/e_com.js';
    ?>
</script>
 </script>
   <?php include "common/header/header.php";?>

</head>
<body>

  <!-- <?php echo $this->session->userdata('category'); ?> -->

   <main>
      
<div class="maincontent">


      <section><!--left Content-->
        <div>
           <h1 style="font-size: initial;padding: 3%;font-size: 16px;letter-spacing: 1px;">Categories</h1>
        <ul>

          <?php foreach($cateInfo->result() as $vard){ ?>
                    <li onclick= "window.location ='<?php echo base_url('index.php/Control_shop/cat/'.$vard->id);?>'" class="dropdown-item"><?php echo $vard->category;?></li>

                <?php } ?>
          <!-- <li>Grocery</li>
          <li>Spices & Masalas</li>
          <li>Vegetables</li>
          <li>Gourment</li>
          <li>Sweets</li>
          <li>Beverages</li>
          <li>Pickles</li>
          <li>Shop</li>
          <li>Both Sidebar</li>
          <li>Blogs</li>
          <li>shortcode</li> -->
        </ul>
          
        </div>
       
       <hr style="border: 1px solid white;">
        
        <!-- <div>
          <img src="https://demo.templatetrip.com/WooCommerce/WCM040/WCM05/wp-content/uploads/2017/02/left-banner-1-274x500.jpg">
        </div> -->

         <div>
          <?php $i = 0; 
           $count = 0;

           

      if($adver_left->num_rows() > 0)
      {

            foreach($adver_left->result() as $row)
            {  $i++;
              $count++; 

              if($i<2){

                if($count === 1)
                {
                  $class = 'active';
                }
                else
                {
                  $class = '';
                }
        ?> 
          <!-- <img src="https://demo.templatetrip.com/WooCommerce/WCM040/WCM05/wp-content/uploads/2017/02/left-banner-1-274x500.jpg"> -->

        <img src="<?php echo $row->file_path;?>" alt="First slide"> 

        

 <?php
          }
            }
      }
        ?>


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

        <div class="featproduct">
          <section>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner">

    <?php $i = 0; 
           $count = 0;

           

      if($image_info->num_rows() > 0)
      {

            foreach($image_info->result() as $row)
            {  $i++;
              $count++; 

              if($i<5){

                if($count === 1)
                {
                  $class = 'active';
                }
                else
                {
                  $class = '';
                }
        ?> 
     
        <div class="carousel-item <?php echo $class; ?>">
              <img class="" style="width:100%;height:inherit;object-fit: contain;" src="<?php echo $row->file_path;?>" alt="First slide">
        </div>

        

 <?php
          }
            }
      }
        ?>

  </div>


</div>

</section>


          <section class="featpart">
           <div>
                <!-- <img src="https://demo.templatetrip.com/WooCommerce/WCM040/WCM05/wp-content/uploads/2016/11/rightbanner-01.jpg"> -->
                <!-- <img style="width:100%;height:90%;object-fit: contain; "  src="<?php echo base_url('assets/images/bazaria_3.jpeg');?>"> -->
                 <?php $i = 0; 
           $count = 0;

           

      if($image_info->num_rows() > 0)
      {

            foreach($image_info->result() as $row)
            {  $i++;
              $count++; 

              if($i<3){

                if($count === 2)
                {
                  $class = 'margin-top:2%;';
                }
                else
                {
                  $class = '';
                }

               
        ?> 
          <img style="width:100%;object-fit: contain; <?php echo $class; ?>"  src="<?php echo $row->file_path;?>"> 

      <?php
          }
            }
      }
        ?>


            </div>
            <div>
               <!-- <img src="https://demo.templatetrip.com/WooCommerce/WCM040/WCM05/wp-content/uploads/2016/11/rightbanner-02.jpg"> -->
               <!-- <img style="width:100%;height:90%;object-fit: contain; "  src="<?php echo base_url('assets/images/bazaria_6.jpeg');?>"> -->
              
            </div>
          </section>
        </div>







        <div class="featslider">

          <?php $i = 0;

      if($feat_info->num_rows() > 0)
      {

            foreach($feat_info->result() as $row)
            {  $i++;

              if($i<5){
        ?> 


          <section>
            <div style="margin: 1% auto;">
              <img src="<?php echo $row->item_image_path; ?>" style="width:70px;height:70px;object-fit:contain;border: 1px solid grey;border-radius:50%;">
            </div>
            <div>
              <h1 style="font-size: 14px ;
  font-weight: 500;
  color: grey;
  letter-spacing: 1px;"><?php echo $row->item_name; ?></h1>
            </div>
          </section>

          <?php
          }
            }
      }
    
      
        ?>
     
    

       
        </div>
   







       <div class="featlist">
         <ul>
           <li>Recent</li>
           <li>Featured</li>
           <li>Top Rated</li>
           <li>Sale</li>
           <li>Best Selling</li>
         </ul>
       </div>


        <div class="recentfeat" id="one"> 

              
          <?php $i = 0;

      if($feat_info->num_rows() > 0)
      {

            foreach($feat_info->result() as $row)
            {  $i++;

              if($i<9){
        ?> 

          <section id="<?php echo $row->id; ?>" data-pro-type="<?php echo $row->category; ?>"  onclick="proclick(this)">
            <div  style="margin:8px auto;">
              <img src="<?php echo $row->item_image_path; ?>" style="width:180px;height:180px;object-fit:contain;border:0.5px solid grey;">
            </div>
            <h1 style="font-size: initial;"><?php echo $row->item_name; ?></h1>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <p><?php echo $row->item_mrp; ?>&nbsp;Rs.</p>
          </section>


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


        
        <div class="recentfeat" id="two" style="display: none;">
         <!-- sdfgbn -->
              
          <?php $i = 0;

      if($item_info->num_rows() > 0)
      {

            foreach($item_info->result() as $row)
            {  $i++;

              if($i<9){
        ?> 

          <section id="<?php echo $row->id; ?>" data-pro-type="<?php echo $row->category; ?>"  onclick="proclick(this)">
            <div  style="margin:8px auto;">
              <img src="<?php echo $row->item_image_path; ?>" style="width:180px;height:180px;object-fit:contain;border: 1px solid grey;">
            </div>
            <h1 style="font-size: initial;"><?php echo $row->item_name; ?></h1>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <p><?php echo $row->item_mrp; ?>&nbsp;Rs.</p>
          </section>


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

          <div class="recentfeat" id="three" style="display: none;">
         <!-- sdfgbn -->

          <?php $i = 0;

      if($drinks->num_rows() > 0)
      {

            foreach($drinks->result() as $row)
            {  $i++;

              if($i<9){
        ?> 

          <section id="<?php echo $row->id; ?>" data-pro-type="<?php echo $row->category; ?>"  onclick="proclick(this)">
            <div  style="margin:8px auto;">
              <img src="<?php echo $row->item_image_path; ?>" style="width:180px;height:180px;object-fit:contain;border: 1px solid grey;">
            </div>
            <h1 style="font-size: initial;"><?php echo $row->item_name; ?></h1>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <p><?php echo $row->item_mrp; ?>&nbsp;Rs.</p>
          </section>


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


          <div class="recentfeat" id="four" style="display: none;">
         <!-- sdfgbn -->
                
          <?php $i = 0;

      if($item_info->num_rows() > 0)
      {

            foreach($item_info->result() as $row)
            {  $i++;

              if($i<9){
        ?> 

          <section id="<?php echo $row->id; ?>" data-pro-type="<?php echo $row->category; ?>"  onclick="proclick(this)">
            <div  style="margin:8px auto;">
              <img src="<?php echo $row->item_image_path; ?>" style="width:180px;height:180px;object-fit:contain;border: 1px solid grey;">
            </div>
            <h1 style="font-size: initial;"><?php echo $row->item_name; ?></h1>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <p><?php echo $row->item_mrp; ?>&nbsp;Rs.</p>
          </section>


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

          <div class="recentfeat" id="five" style="display: none;">
         <!-- sdfgbn -->
              
          <?php $i = 0;

      if($drinks->num_rows() > 0)
      {

            foreach($drinks->result() as $row)
            {  $i++;

              if($i<9){
        ?> 

          <section id="<?php echo $row->id; ?>" data-pro-type="<?php echo $row->category; ?>"  onclick="proclick(this)">
            <div  style="margin:8px auto;">
              <img src="<?php echo $row->item_image_path; ?>" style="width:180px;height:180px;object-fit:contain;border: 1px solid grey;">
            </div>
            <h1 style="font-size: initial;"><?php echo $row->item_name; ?></h1>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <p><?php echo $row->item_mrp; ?>&nbsp;Rs.</p>
          </section>


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


       <!--  <div class="offerslide">
          
        </div> -->

        <div class="offerslide">
           <div>
          <?php $i = 0; 
           $count = 0;

           

      if($adver_middle->num_rows() > 0)
      {

            foreach($adver_middle->result() as $row)
            {  $i++;
              $count++; 

              if($i<2){

                if($count === 1)
                {
                  $class = 'active';
                }
                else
                {
                  $class = '';
                }
        ?> 
          <!-- <img src="https://demo.templatetrip.com/WooCommerce/WCM040/WCM05/wp-content/uploads/2017/02/left-banner-1-274x500.jpg"> -->

        <img src="<?php echo $row->file_path;?>" alt="First slide"> 

        

 <?php
          }
            }
      }
        ?>
        </div>

      </div>

      

      <h1 style="font-size: initial;letter-spacing: 1px;font-weight: 500;">Sale Product</h1>
         
        <div class="recentSale">
           <?php $i = 0;

      if($feat_info->num_rows() > 0)
      {

            foreach($feat_info->result() as $row)
            {  $i++;

              if($i<5){
        ?>
          <section id="<?php echo $row->id; ?>" data-pro-type="<?php echo $row->category; ?>"  onclick="proclick(this)">
            <div style="margin:15% auto;">
              <img src="<?php echo $row->item_image_path; ?>" style="width:200px;height:200px;object-fit:contain;border: 1px solid grey;">
            </div>
            <h1 style="font-size: initial;"><?php echo $row->item_name; ?></h1>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <p><?php echo $row->item_mrp; ?>&nbsp;Rs.</p>
          </section>

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
    </div>

  
<!--modal-->
<?php if($user_info){ }else{ ?>

  <?php if($pin['pincode']){ }else{ ?>


<div id="myModal" class="modal " role="dialog" style="background-color: transparent;">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content1">
     <!-- <div class="modal-header">
        <button type="button" class="close" onclick="closeclick();">&times;</button>
        <h4 class="modal-title"></h4>
      </div>-->
      <div class="modal-body">
        <h5 style="font-family: Bradley Hand, cursive;">For Better Search Enter your Pincode</h5>
        <br>
        
        <div class="form-group">
        <input class="form-control" type="text" name="pincode" id="pincode" placeholder="Enter Your Pincode" required>
      </div>
      <button type="submit" class="btn btn-link" onclick="closeclick(this);" >ok</button>
      </div>
   
     
    </div>

  </div>
</div>

<?php } } ?>

      <!-- footer -->
     <?php include "common/header/footer.php";?>


   </main>


   </body>
</html>

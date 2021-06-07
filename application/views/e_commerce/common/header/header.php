<!DOCTYPE html>
<html>
   <head>
      <style>
         <?php include 'header.css'; ?>
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
      include 'header.js';
    ?>
</script>
      
   </head>
   <body>


<div class="nav" style="position: fixed; z-index:1 ">
            <div class="left-text">Wants to explore Upcoming Deals on Weekends?</div>
            <div class="right-text">
               <div style="display: inline;position: relative;cursor: pointer;">
                  <p onclick="blclick()">My Account <i class="fa fa-caret-down"></i></p>
                  <div style="display: none;transition: 2s;background-color:white;position: absolute;width: 100px;z-index: 1000;" class="hid" id="re">
                     <ul style="list-style-type: none;">
                        <!-- <li onclick="window.location ='<?php echo base_url('index.php/Control_shop/register2');?>'" >
                           Register
                           </li>
                           <li onclick="window.location ='<?php echo base_url('index.php/Control_shop/login2');?>'">
                           Login
                           </li> -->
                        <?php if($user_info) { ?>
                        <li onclick="window.location ='<?php echo base_url('index.php/Control_shop/webdashboard');?>'" >
                           Dashboard
                        </li>
                        <li  onclick="window.location ='<?php echo base_url('index.php/Control_e_commerce/logout');?>'" >
                           Logout
                        </li>
                        <?php  } else {?>
                        <li onclick="window.location ='<?php echo base_url('index.php/Control_shop/register2');?>'" >
                           Register
                        </li>
                        <li onclick="window.location ='<?php echo base_url('index.php/Control_shop/login2');?>'">
                           Login
                        </li>
                        <?php  } ?>
                     </ul>
                  </div>
               </div>
               <p>Wishlist</p>
               <a href="<?php echo base_url('index.php/Control_shop/cart2_manage?valId='.$this->session->userdata('user_id'));?>">
               <div class="cart">
                  <i class="fa fa-shopping-cart fa-2x icon" style="color:black;"></i>
                  <span class="badge">
                     <div class="circle">

                        <?php 
                        if($user_info){
                        if($cardcount) { ?>
                        <span id="count" style="color:black;font-size:12px;padding:5px;"><?php echo $cardcount?></span>
                        <?php  } else {?>
                        <span id="count" style="color:black;font-size:12px;padding:5px;">0</span>
                        <?php  }


                          }else{
                         if($cardcountberorelog) { ?>
                        <span id="count" style="color:black;font-size:12px;padding:5px;"><?php echo $cardcountberorelog ?></span>
                        <?php  } else {?>
                        <span id="count" style="color:black;font-size:12px;padding:5px;">0</span>
                        <?php  }  } ?>
                        


                  </span>
                  </div>
               </div> </a>
            </div>
         </div>
         </div>
         <div style="clear: both;"></div>
         <br>
         <br>
        

          <nav class="nav2" id="nav2">
        <section>
          <div style="width:150px;height: 100%;">
          <a href="<?php echo base_url('index.php');?>" ><img src="<?php echo base_url('assets/images/logo.png');?>" style="width:100%;height: 100%;image-rendering: auto;image-rendering:crisp-edges;image-rendering: pixelated;"></a>
          </div>
          
        </section>
        <section>

          <div style="">


               <div style="display:inline-block; border: 2px solid #DCDCDC;border-radius:5px; margin-left: 183px;">
  
                 <div style="display: inline;">

                    <div style="display: inline;">
                        <input type="search" name=""placeholder="Enter Your Keyword.." onkeyup="tblshow()" id="gsearch" style="width:20vw;border:none;padding:5px;">
                        
                    </div>

                
                <div id="tbl" style="display: none;position: absolute;z-index: 1;background-color:white;">
                    <table class="table" id="tblId" >
                       <thead>
                          <tr>
        
                          </tr>
                       </thead>
                     <tbody>

                       <?php foreach ($allItem as $key) {
                                      ?>
                    <tr>
                      <td data-cat-type="<?php echo $key['category']; ?>" id="<?php echo $key['id']; ?>" onclick="itmclick(this)"><?php echo $key['item_name']; ?></td>
                     </tr>


                      <?php
                      } ?>
     
                   </tbody>
                      </table>
                  </div>

              </div>
             


             
           <!--  <div style="display: inline;border-left:1px solid grey;">
            

              <select style="border:none;padding:5px" onchange="itemget()" id="categoryId">
                 
                  <?php foreach($cateInfo->result() as $vard){ ?>
                    <option href= "<?php echo base_url('index.php/Control_shop/cat2?valId='.$vard->category);?>" style="cursor: pointer;" class="dropdown-item"><?php echo $vard->category;?></option>

                <?php } ?>

                
               </select>
             </div>
 -->
             <div style="display: inline;font-size: 14px;letter-spacing: 2px;" class="srchbtn">
            
             <input type="button" name="" value="Search" id ="srch" style="padding:5px;width:100px;border:1px solid #FE0000;background-color: #FE0000;color:white;"> 
          </div>
             
           

            </div>
             
     

           
          </div>



         <!--   <div style="">


               <div style="display:inline-block; border: 2px solid #DCDCDC;border-radius:5px;">
  
                 <div style="display: inline;">

                    <div style="display: inline;">
                       
                        <input type="search" name=""placeholder="Enter Your Keyword.."  id="gsearch" style="width:20vw;border:none;padding:5px;">
                    </div>

                   
                <div id="tbl" style="display: none;position: absolute;z-index: 1;background-color:white;">
                    <table class="table" id="tblId" >
                       <thead>
                          <tr>
        
                          </tr>
                       </thead>
                     <tbody>

                       <?php foreach ($allItem as $key) {
                                      ?>
                    <tr>
                      <td data-cat-type="<?php echo $key['category']; ?>" id="<?php echo $key['id']; ?>" onclick="itmclick(this)"><?php echo $key['item_name']; ?></td>
                     </tr>


                      <?php
                      } ?>
     
                   </tbody>
                      </table>
                  </div>

             
              </div>
             


             
            <div style="display: inline;border-left:1px solid grey;">
            

              <select style="border:none;padding:5px" onchange="itemget()" id="categoryId">
                 
                  <?php foreach($cateInfo->result() as $vard){ ?>
                    <option href= "<?php echo base_url('index.php/Control_shop/cat2?valId='.$vard->category);?>" style="cursor: pointer;" class="dropdown-item"><?php echo $vard->category;?></option>

                <?php } ?>

                
               </select>
             </div>

             <div style="display: inline;font-size: 14px;letter-spacing: 2px;" class="srchbtn">
             <input type="button" name="" value="Search" id ="srch" style="padding:5px;width:100px;border:1px solid black;background-color: black;color:white;" onclick="itmsrch()"> 
          </div>
             
           

            </div>
           
          </div> -->
        

        </section>
        <section>
          <div style="width: 100%;height: 100%;">
            <img src="<?php echo base_url('assets/images/sprite_1.png');?>" style="width:50px;height: 60%;display: block;margin-left: auto;margin-right: 0;object-fit: contain;">
          </div>
          <div>
            <p style="margin: 0px;">Call Center</p>
            <!-- <p style="margin: 0px;">088-888-8888</p> -->
            <p style="margin: 0px;"><?php echo $com_info['contact_no'];?></p>
          </div>
          
        </section>
        
      </nav>

      
      </body>
      </html>
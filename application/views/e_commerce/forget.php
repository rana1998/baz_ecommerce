<!DOCTYPE html>
<html>
    
<head>
  <title> Forget Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">


    <style>
       <?php include 'common/css/forget.css'?>
    </style>


  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>





</head>

<body>
  <div class="container h-100">
    <div class="d-flex justify-content-center h-100">
      <div class="user_card">
        <div class="d-flex justify-content-center">
          <!-- <div class="brand_logo_container">
            <img src="<?php echo base_url('assets/images/logo_only.png');?>" class="brand_logo" alt="Logo">
          </div> -->
        </div>
        <div class="d-flex justify-content-center form_container">
          <!-- <form id="loginId"> -->
             <form class="modal-content animate" id="signupfrm"> 
            <div class="container "> 
                
                <!-- <div style="clear:right" ></div> -->

               <div id="qusId">

                <input type="text" placeholder="Answer" id="emaId" name="emaId" value="<?php echo $new_forget['email']; ?>" readonly hidden> 

                <input type="text" placeholder="Answer" name="secureans1" value="<?php echo $new_forget['ques1']; ?>" readonly required> 
                <input type="text" placeholder="Answer" id="sans1" name="sans1" required> 

                <input type="text" placeholder="Answer" name="secureans1" value="<?php echo $new_forget['ques2']; ?>" readonly required> 
                <input type="text" placeholder="Answer" id="sans2" name="sans2" required> 
               
                 <input type="button" class="log btn" id="logId" value="submit" onclick="subclick()">

               </div>

                
                
  
                <div class="clearfix"> 
                    
              <div>
                    
               </div>

                    <!-- <button  class="log btn" id="logId" onclick="subclick()">Submit<i id = 'ladda2' class="fa fa-spinner fa-spin"></i></button>  -->
                    <!-- <input type="button" class="log btn" id="logId" value="submit" onclick="subclick()"> -->
                </div> 


                     <div id="rst" style="display: none;">
                      <input type="text" placeholder="email" id="emaId2" name="emaId2" value="<?php echo $new_forget['email']; ?>" readonly hidden> 
                      <input type="password" placeholder="new Password" id="psw" name="psw" required>                       
                      <input type="password" placeholder="confirm password" id="psw-repeat" name="psw-repeat" required> 
                      <input type="button" class="log btn" onclick="upclick()" value="update">
                  </div>

                

                    <p style="color:red;display: none;" id="wrongId">Wrong Answer,Try another ways</p>
                 

                <!-- <div class="img img-responsive">
                   <img src="<?php echo base_url('assets/images/signHome.jpeg');?>" style="width:100%;max-height:500px;";>
            </div> -->

            </div>


          </form>
        </div>
    
    <form  action="<?php echo site_url('login/switching');?>">
            <button  id="log_help" hidden="true">login</button>
         </form>

        <div class="mt-4">
          <!-- <div class="d-flex justify-content-center links" style="color:white">
            Don't have an account? <a href="#" class="ml-2">Sign Up</a>
          </div>
          <div class="d-flex justify-content-center links">
            <a href="#">Forgot your password?</a>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
 <script type="text/javascript">
    <?php
      include 'common/js/forget.js';
    ?>
    </script>

</html>

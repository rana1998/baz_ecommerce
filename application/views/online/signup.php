<!DOCTYPE html> 
<html> 

 <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
  <?php
  include'common/css/signup.css';
  ?>
</style>
 

<body> 



    <div id="id0" class="hideshow"> 
        <!-- <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>  -->
        <form class="modal-content animate" id="loginId"> 
            <div class="container "> 
                <p style="float:right;margin:1%;"><a href="<?php echo base_url('index.php/Sign/');?>" style="text-decoration: none;">Sign Up</a></p>
                <div style="clear:right" ></div>

                <h1 style="margin-top:5%;">Welcome back!</h1>
                <p style="margin-top:3%;margin-bottom:5%;">Log back into your account</p>
                <label id="youremail"><b>Your Email</b></label> 
                <input type="email" placeholder="Enter Email"  pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" name="email" id="logemail"required> 
                <hr>
  
                <label id="yourpass"><b>Password</b></label> 
                <input type="password" placeholder="Enter Password" name="psw"   id="logpass" required> 
                <hr>
  
                
                <!-- <input type="checkbox"> Remember me  -->
                <!-- <p>By LogIn an account you agree to our Terms & Privacy</a>.</p>  -->
  
                <div class="clearfix"> 
                    <!-- <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn btn">Cancel</button>  -->
              <div>
                    <label class="switch">
                       <input type="checkbox" checked> 
                       <span class="slider round"></span>
                       
                   </label>
                   <span style="float:left;margin:1%;">Remember</span>
                   <span style="float:right;margin:1%;cursor: pointer;"><a  onclick="forclick()">forget password?</a></span>
               </div>
               <?php echo $this->session->flashdata('msg');?>

                    <button type="submit" class="log btn" id="logId" onclick="document.getElementById('ladda2').style.display='block';">Log In<i id = 'ladda2' class="fa fa-spinner fa-spin"></i></button><br>
                    <!-- <?php echo '<div align="center">'.$login_button . '</div>'; ?> -->
                </div> 

                <div class="img img-responsive">
                   <img src="<?php echo base_url('assets/images/signHome.jpeg');?>" style="width:100%;max-height:500px;";>
            </div>

            </div>
        </form> 

            
    </div> 




    
  <!-- <form  action="<?php echo site_url('login/switching');?>"> -->
       <form  action="<?php echo site_url('Control_e_commerce/switching');?>">
            <button  id="log_help" hidden="true">login</button>
         </form>
       
    <!--close the modal by just clicking outside of the modal-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
 <script type="text/javascript">
    <?php
      include 'common/js/signup.js';
    ?>
    </script>

    <script> 
        var modal = document.getElementById('id01'); 
  
        window.onclick = function(event) { 
            if (event.target == modal) { 
                modal.style.display = "none"; 
            } 
        } 

        var modal2 = document.getElementById('id02'); 
  
        window.onclick = function(event) { 
            if (event.target == modal2) { 
                modal.style.display = "none"; 
            } 
        } 
    </script> 
  
</body> 
 

</html> 
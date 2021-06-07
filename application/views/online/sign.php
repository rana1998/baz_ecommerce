<!DOCTYPE html> 
<html> 


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
  <?php
  include'common/css/sign.css';
  ?>
</style>
 

<body> 

<!-- <div class="img img-responsive">
                         <img src="<?php echo base_url('assets/images/signHome.jpeg');?>" style="width:100%";>
</div> -->

  
<!-- <div class="footer">
    
    <button onclick="document.getElementById('id02').style.display='block'" >SignUp</button> 
    <button onclick="document.getElementById('id01').style.display='block'" class="login">Log In</button> 
</div> -->


    

    <div id="id0" class="hideshow"> 
        <!-- <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>  -->
        <form class="modal-content animate" id="signupfrm"> 
            <div class="container "> 
                <!-- <p style="float:right;margin:1%;"><a href="<?php echo base_url('index.php/Login/');?>" style="text-decoration: none;">Log In</a></p> -->
                <p style="float:right;margin:1%;"><a href="<?php echo base_url('index.php/Control_e_commerce/login');?>" style="text-decoration: none;">Log In</a></p>
                <div style="clear:right" ></div>

                <h1 style="margin-top:5%;">Welcome back!</h1>
                <p style="margin-top:3%;margin-bottom:5%;">Sign Up your account</p>
                
                 <label><b>Name</b></label> 
                <input type="text" placeholder="Enter Name" name="name" required> 

                <label><b>Mobile no.</b></label> 
                <input type="text" placeholder="Enter no." pattern="[7-9]{1}[0-9]{9}" name="phone_no" required> 

                <label><b>Email</b></label> 
                <input type="email" placeholder="Enter Email" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" name="email" required> 

                <label><b>Address</b></label> 
                <input type="text" placeholder="Enter address" name="address" required> 

                <label><b>Pin Code</b></label> 
                <input type="text" placeholder="Enter pincode" name="pincode" required> 

                <label><b>Security Question 1</b></label> 
                <select id="secure1">
                  <option>--Select 1---</option>
                  <option>When is your date of birth?</option>
                  <option>What is your memorable date?</option>
                  <option>What is your favourite movie?</option>
                  <option>What primary school did you attend?</option>
                  <option>What is your grandmother's (on your mother's side) maiden name?</option>
                  <option>Who was your childhood hero?</option>
                  <option>What is the last name of your favorite high school teacher?</option>
                  <option>What was your dream job as a child?</option>
                  <option>What is the country of your ultimate dream vacation?</option>
                  <option>What are the last 5 digits of your credit card?</option>
               
                </select>

                <input type="text" placeholder="Answer" name="secureans1" required> 

                 <label><b>Security Question 2</b></label> 
                <select id="secure2">
                  <option>--Select 2---</option>
                  <option>What is the name of your favorite childhood friend?</option>
                  <option>What is your oldest cousin's first and last name?</option>
                  <option>What is the name of a college you applied to but didn't attend?</option>
                  <option>Where were you when you first heard about 9/11?</option>
                  <option>In what city does your nearest sibling live?</option>
                  <option>In what city and country do you want to retire?</option>
                  <option>What is your preferred musical genre?</option>
                  <option>What is the country of your ultimate dream vacation?</option>
                  <option>Who was your childhood hero?</option>
                  <option>What primary school did you attend?</option>
                </select>

                <input type="text" placeholder="Answer" name="secureans2" required> 
                <!-- <input type="text" placeholder="Enter pincode" name="pincode" required>  -->
  
                <label><b>Password</b></label> 
                <input type="password" placeholder="Enter Password" name="psw" id="psw" required onchange=""> 
  
                <label><b>Repeat Password</b></label> 
                <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required> 
                <!-- <input type="checkbox"> Remember me  -->
                <!-- <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>                -->
  
                <div class="clearfix"> 
                    
              <div>
                    <!-- <label class="switch">
                       <input type="checkbox" checked> 
                       <span class="slider round"></span>
                       
                   </label> -->
                   <!-- <span style="float:left;margin:1%;">Remember</span> -->
                   <!-- <span style="float:right;margin:1%;">forget?</span> -->
               </div>

                    <button type="submit" class="log btn" id="logId" onclick="document.getElementById('ladda2').style.display='block';">Sign Up<i id = 'ladda2' class="fa fa-spinner fa-spin"></i></button> 
                </div> 

                <div class="img img-responsive">
                   <img src="<?php echo base_url('assets/images/signHome.jpeg');?>" style="width:100%;max-height:500px;";>
            </div>

            </div>
        </form> 

            
    </div> 


    <!-- <div id="id01" class="modal"> 
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span> 
        <form class="modal-content animate" id="loginId"> 
            <div class="container"> 
                <label><b>Email</b></label> 
                <input type="email" placeholder="Enter Email" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" name="email" required> 
  
                <label><b>Password</b></label> 
                <input type="password" placeholder="Enter Password" name="psw" required> 
  
                
                <input type="checkbox"> Remember me 
                <p>By LogIn an account you agree to our Terms & Privacy</a>.</p> 
  
                <div class="clearfix"> 
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn btn">Cancel</button> 
                    <button type="submit" class="signupbtn btn" onclick="document.getElementById('ladda2').style.display='block';">Log In<i id = 'ladda2' class="fa fa-spinner fa-spin"></i></button> 
                </div> 
            </div> 
        </form> 
    </div>  -->

    
  <form  action="<?php echo site_url('login/switching');?>">
            <button  id="log_help" hidden="true">login</button>
         </form>
       
    <!--close the modal by just clicking outside of the modal-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
 <script type="text/javascript">
    <?php
      include 'common/js/sign.js';
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
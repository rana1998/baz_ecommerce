<!DOCTYPE html> 
<html> 

 <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
  <?php
  include'common/css/userUpdate.css';
  ?>
</style>
 

<body> 



    

    <div id="id0" class="hideshow"> 
        <!-- <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>  -->
        <form class="modal-content animate" id="signupfrm"> 
            <div class="container "> 
                
                <div style="clear:right" ></div>

               <div id="qusId">

                 <label><b>Name</b></label> 
                <input type="text" placeholder="Enter Name" value="<?php echo $user_info['name']; ?>" id="name" name="name" required> 

                <!-- <label><b>Mobile no.</b></label> 
                <input type="text" placeholder="Enter no." pattern="[7-9]{1}[0-9]{9}" name="phone_no" required>  -->

                <label><b>Email</b></label> 
                <input type="email" placeholder="Enter Email" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" id="emaId" name="emaId" value="<?php echo $user_info['email']; ?>" required> 

                <!-- <label><b>Address</b></label> 
                <input type="text" placeholder="Enter address" name="address" required> 

                <label><b>Pin Code</b></label> 
                <input type="text" placeholder="Enter pincode" name="pincode" required>  -->




                <!-- <input type="text" placeholder="Answer" id="emaId" name="emaId" value="<?php echo $user_info['email']; ?>" readonly hidden> 

                <input type="text" placeholder="Answer" name="secureans1" value="<?php echo $user_info['ques1']; ?>" readonly required> 
                <input type="text" placeholder="Answer" id="sans1" name="sans1" required> 

                <input type="text" placeholder="Answer" name="secureans1" value="<?php echo $user_info['ques2']; ?>" readonly required> 
                <input type="text" placeholder="Answer" id="sans2" name="sans2" required>  -->
               
                 <input type="button" class="log btn" id="logId" value="update" onclick="subclick()">

               </div>

                
                
  
                <div class="clearfix"> 
                    
              <div>
                    
               </div>

                    <!-- <button  class="log btn" id="logId" onclick="subclick()">Submit<i id = 'ladda2' class="fa fa-spinner fa-spin"></i></button>  -->
                    <!-- <input type="button" class="log btn" id="logId" value="submit" onclick="subclick()"> -->
                </div> 


                    <div id="rst" style="display: none;">
                      <input type="text" placeholder="email" id="emaId2" name="emaId2" value="<?php echo $user_info['email']; ?>" readonly hidden> 
                      <input type="password" placeholder="new Password" id="psw" name="psw" required>                       
                      <input type="password" placeholder="confirm password" id="psw-repeat" name="psw-repeat" required> 
                      <input type="button" class="log btn" onclick="upclick()" value="update">
                  </div>

                

                    <p style="color:red;display: none;" id="wrongId">Wrong Answer,Try another ways</p>
                 

                <div class="img img-responsive">
                   <img src="<?php echo base_url('assets/images/signHome.jpeg');?>" style="width:100%;max-height:500px;";>
            </div>

            </div>
        </form> 

            
    </div> 


  
       
    <!--close the modal by just clicking outside of the modal-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
 <script type="text/javascript">
    <?php
      include 'common/js/userUpdate.js';
    ?>
    </script>

    <script> 
        
    </script> 
  
</body> 
 

</html> 
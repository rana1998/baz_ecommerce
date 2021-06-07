<!DOCTYPE html> 
<html> 

 <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
  <?php
  include'common/css/logsecurequs.css';
  ?>
</style>
 

<body> 



    

    <div id="id0" class="hideshow"> 
        <!-- <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>  -->
        <form class="modal-content animate" id="signupfrm"> 
            <div class="container "> 
                
                <div style="clear:right" ></div>

               <div id="qusId">

                <input type="text" placeholder="Answer" id="emaId" name="emaId" value="<?php echo $this->session->userdata('email') ?>" readonly hidden> 

                <!-- <input type="text" placeholder="Answer" name="secureans1" value="<?php echo $new_forget['ques1']; ?>" readonly required>  -->
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
                <input type="text" placeholder="Answer" id="sans1" name="sans1" required> 

                <!-- <input type="text" placeholder="Answer" name="secureans1" value="<?php echo $new_forget['ques2']; ?>" readonly required>  -->
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
                      <!-- <input type="text" placeholder="email" id="emaId2" name="emaId2" value="<?php echo $new_forget['email']; ?>" readonly hidden>  -->
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
      include 'common/js/logsecurequs.js';
    ?>
    </script>

    <script> 
        
    </script> 
  
</body> 
 

</html> 
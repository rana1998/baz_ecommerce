<!DOCTYPE html>
<html>
<head>
    <title></title>

    <style>
    <?php include 'common/css/payform.css'?>
    </style>


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script type="text/javascript">
    <?php
      include 'common/js/payonlineform.js';
    ?>
</script> 
</head>
<body>


    <div class="container">
    <div class="row">
    <div class="col-md-4">
        <div class="form_main">
                <h4 class="heading"><strong>Quick </strong> Contact <span></span></h4>
                <div class="form">
                <form action="contact_send_mail.php" method="post" id="contactFrm" name="contactFrm">
                    <input type="text" required="" placeholder="Please input your Name"  id="famt" name="famt" class="txt" value='<?php echo $_post["valId"];?>' >
                    <!-- <input type="text" required="" placeholder="Please input your mobile No" value="" name="mob" class="txt">
                    <input type="text" required="" placeholder="Please input your Email" value="" name="email" class="txt"> -->
                    
                     <textarea placeholder="Your Message" name="mess" type="text" class="txt_3"></textarea>
                     <input type="submit" value="submit" name="submit" id="aid" class="txt2">
                </form>
            </div>
            </div>
            </div>
    </div>
</div>

</body>
</html>





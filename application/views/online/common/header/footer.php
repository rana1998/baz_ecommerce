<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    
    
    <style>
        <?php include 'footer.css'?>
    </style>

    

</head>


<body>

<br>
<br>
<br>

<div class="row d-flex justify-content-center mobile-footer" style="display:  flex;">
   
       <a class="mobile-footer-menu-link" href="<?php echo base_url('index.php/Control_shop/dashboard'); ?>">
            <i class="fa fa-home mobile-footer-menu-icon" aria-hidden="true"></i>
            <h5 style="margin-top: -1px;" class="mobile-footer-menu-text">Home</h5>
            
            </a>
       <div class="clearfix"></div>
    
        <a class="mobile-footer-menu-link" href="<?php echo base_url('index.php/Control_shop/category'); ?>">
            <i class="fa fa-list-alt mobile-footer-menu-icon" aria-hidden="true"> </i>
            <h5 style="margin-top: -1px;" class="mobile-footer-menu-text">Category</h5>
           
        </a>    
      

    
        <a class="mobile-footer-menu-link" href="<?php echo base_url('index.php/Control_shop/contact_us'); ?>">
            <i class="fa fa-phone mobile-footer-menu-icon" aria-hidden="true"></i>
            <center><h5  style="margin-top: -1px;" class="mobile-footer-menu-text">Contact</h5></center>
        </a>
    
        <a class="mobile-footer-menu-link" href="<?php echo base_url('index.php/Control_shop/profile');?>">
            <i class="fa fa-user mobile-footer-menu-icon" aria-hidden="true"></i>
            <h5 style="margin-top: -1px;" class="mobile-footer-menu-text">User</h5>
        </a>
    
</div>


</body>

</html>
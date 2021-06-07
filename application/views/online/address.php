<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daily need app</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <style>
  <?php
  include'common/css/address.css';
  ?>
</style>


<script type="text/javascript">
    <?php
      include 'common/js/profile.js';
    ?>
</script>

</head>
<body style="background-color: #EEEEEE;">

<div id="mainContentDiv">

<div class="nav">
   
     <div>
       <a href="<?php echo base_url('index.php/Control_shop/dashboard');?>" style="color:white;">
          <i class='fa fa-arrow-left' style='font-size:24px'></i>
        </a>
    </div>
</div>


<div class="row">
<div class="col-md-12"><h3 style="text-align: center;">Shipping Address</h3></div>
</div>


<div id="Div1">
  <form id="choseaddress">
<?php if(empty($shipping)){ ?>
    <h3 style="text-align: center">No Address Added</h3>
<?php
} else{

foreach($shipping as $key){
?>
<div class="card" style="width: auto; height: 12rem; margin: 10px; border-radius: 10px;">
    <div class="card-body" style="text-align: left">
      
       <input type="button" class="btn btn-danger btn-sm" style="float: right;" onclick="deleteaddress(this)"  data-address-id="<?php echo $key['id'];?>" value="X">
        <h4><input type="radio" name="address" value="<?php echo $key['id'];?>"> <?php echo $key['name'];?></h4>
        
        

        <h6><?php echo $key['addresss'];?></h6>
        
      
        <h6><?php echo $key['pincode'];?></h6>

        <h6><?php echo $key['mobile'];?></h6>
    
    </div>
</div>  

<?php } } ?>

<?php if(!empty($shipping)){ ?>
<button class="btn btn-danger" type="submit" style="margin-left: 30%">Choose This Address</button>
<?php } ?>
<br>
<br>
</form>
</div>

<div id="Div2" style="margin-left: 10px; margin-top: 40px;">

<form class="w3-container" id="addnewaddress">
  


  


  <input type="text" name="pincode2" class="w3-input" placeholder="Pincode*" >

  <input type="text" name="address2" class="w3-input" placeholder="Address*" >


 


  <input type="text" name="name2" class="w3-input" placeholder="Name*" >


  <input type="text" name="phone_no2" class="w3-input" placeholder="Mobile No*" >


  <input type="text" name="email2" class="w3-input" placeholder="Email*" >

  <br>
  <button type="submit" class="btn btn-danger justify-content-center" style="align-items: center">Submit</button>
</form>

</div>






<button class="btn btn-danger" style="margin-left: 20px; margin-top: 10px;" onclick="switchVisible();"><i class="fa fa-plus"></i> Add Address </button>
 









<!-- loader -->
<div id="loader"></div>
<?php include 'common/header/footer.php'; ?>
</body>

<script>
<?php include 'common/js/address.js';?>
</script>

</html>



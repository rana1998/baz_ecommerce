<!DOCTYPE HTML>  

<html>
<head>

  <style>
 .error {color: #FF0000;}
  </style>

</head>
<body>  

<h2>Payment Information</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo base_url('index.php/Control_pay/payment');?>">  
  Name: <input type="text" name="name">
  <span class="error">*</span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">*</span>
  <br><br>
  Phone number: +91 <input type="text" name="phno">
  <span class="error">*</span>
  <br><br>
  Amount: <input type="text" name="amount">
  <span class="error">*</span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

</body>
</html>
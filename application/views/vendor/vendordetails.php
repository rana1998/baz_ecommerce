<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vendor's Details</title>

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+HK&display=swap" rel="stylesheet">
    <style>
    <?php
    include'common/css/vendordetails.css';
    ?>
       </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark  bg-white navbar-sticky-top">
         <a class="navbar-brand" href="#"><img src ="<?php
         echo base_url('assets/images/logo.png');?>"   alt="Logo" style="width:40px;"></a>
          <a class="navbar-brand" href="#">REGISTER AS VENDOR</a>
        </nav>
        <br><br>
  <div class="details">

  <form id="forrm_ab">
    <label for="fname"> <h5>Name</h5></label>
    <input type="text" id="fname" name="name" placeholder="Your name.."required>
    <label for="fname"><h5>Phone No.</h5></label>
    <input type="text" id="phn" name="mobile" placeholder=".." required>
    <label for="fname"><h5>Email address</h5></label>
    <input type="text" id="fname" name="email" placeholder="...." required>
    <label for="lname"><h5>Address</h5></label>
    <input type="text" id="lname" name="address" placeholder="..."required>
    <label for="lname"><h5>Pin</h5></label>
    <input type="text" id="lname" name="pin" placeholder="..." required>
    <label for="lname"><h5>GST no.</h5></label>
    <input type="text" id="lname" name="gst" placeholder="...">





    <input type="submit" value="Next">

  </form>
</div>


    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
    <?php
      include 'common/js/vendordetails.js';
    ?>
</script>


  </body>
</html>

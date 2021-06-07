<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+HK&display=swap" rel="stylesheet">
    <style>
    <?php
    include'common/css/card.css';
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
    <div class="upload">

    <form id="forrm_ab">
      <label for="fname"><h2> Aadhar Card </h2></label><br>
      <input type="file" id="myFile1" name="filename1"><br>
      <br>
      <label for="fname"><h2> Pan Card </h2></label><br>
      <input type="file" id="myFile" name="filename2"><br>

    <br>

      <input type="submit" value="Next">

    </form>
  </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    <?php
      include 'common/js/card.js';
    ?>
</script>

  </body>
</html>

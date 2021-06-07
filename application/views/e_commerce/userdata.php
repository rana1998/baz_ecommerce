<!DOCTYPE html>
<html>
   <head>

<style>
    <?php include 'common/css/userdata.css'?>
    </style>
      
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>    
      
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   </head>
   <body class="home_banner_area">

    <div class="container box_1620">
      <div class="icon">
        <i class="fa fa-user w3-xxlarge user" style="color: white; " aria-hidden="true"></i>
      </div>
      <div class="clearfix"></div>
        <form class="form">
          <div class="form-group">
            
            <input class="w3-input" type="text"  id="email" placeholder="Email "   value="<?php echo $req['email']; ?>" >
          </div>
          <div class="form-group">
            
            <input class="w3-input" type="text"  id="name" placeholder="Name " value="<?php echo $req['name']; ?>">
          </div>    
          <div class="form-group">
            
            <input class="w3-input" type="text"  id="mobileno" placeholder="Phone No " value="<?php echo $req['mobile']; ?>">
          </div> 
          <div class="form-group">
            
            <input class="w3-input" type="password"  id="password" placeholder="Password " value="<?php echo $req['password']; ?>">
          </div>   

<br>
          <button class="btn btn-primary" onclick="upclick()">Update</button>      
        </form>
    
    </div>

    
    <script>
    <?php include 'common/js/userdata.js'?>
    </script>



    </body>
    </html> 
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <?php include "common/header/header_shop.php"; ?>

  <style>
    <?php include("common/css/item.css"); ?>
  </style>


</head>
<body>


<div class="container bookdetailsContentDiv" id="mainContentDiv">
<div class="row ">
<div>
     <div class="nav">
       <ul>
      <li id="noticeId" onclick="btnOnetoggle()">Item Info</li>
      <li id="addnoticeId" onclick="btnTwotoggle()">Add Item</li>
       </ul>
     </div><!-- end nav-->

     <div id="one" class="table-responsive">
        <table id="myTable">
          <thead>
          <tr>
                <th>S.no</th>
                <th>Item name</th>
                <th>Code</th>
                <th>M.R.P</th>
                <th>Total Quantity</th>
                <th>Available item</th>
          </tr>
          </thead>
          <tbody>

            

            </tbody>

            
   
   
            <div class="viewAttendanceId " id="viewDiv">
                 
            </div><!--  end viewAttendance -->


            <div class="viewAttendanceId modal" id="viewDivTwo"> 
                <!-- Modal content -->
              <span class="close" id="closeTwo">&times;</span>
              <div class="modal-content deleteInfo">         
                 <h1 style="color:red;font-size: 16px;">INFO</h1>
                 <div id="content"></div>
              </div> 
            </div><!--  end viewAttendance -->


        </table>
     </div><!--end Student one-->


     <div id="two">
        <form id="forrm_ab">
        <h1>Add Item</h1>

        <label for="leave">Item Name</label>
        <input type="text" name="item_name" required="required">


        <label for="code">Code</label>
        <input type="text" name="code" required="required">

        <label for="quantity">quantity</label>
        <input type="text" name="quantity" required="required">

        <label for="mrp">M.R.P</label>
        <input type="text" name="mrp" required="required">




        <input type="submit" value="Submit">
        </form>
     </div><!--end formDiv Add Event-->

</div><!-- end Div-->

</div><!--end row-->
</div><!--end mainContentDiv-->

  <script>
    <?php include("common/js/item.js"); ?>
  </script>

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->


</body>
</html>
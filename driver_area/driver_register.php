<?php 
  require ("../assets/common.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Driver Register Portal</title>

  <?php 
    require("../assets/bootstrap_cdn.php");
  ?>
</head>
<body>
  <?php 
    require ("../header.php");
  ?>
  <!-- 
    1.Name
    2.Mobile_no.
    3.vehicle_no
    4.Address
    5.License No.
   -->
    <div class="container">
        <div class="jumbotron">
          <h3>Driver Register Form</h3><br>
          <form action="driver_register_script.php" method="post">
          <!-- name -->
            <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name" required>
            </div>
            <!-- Mobile No. -->
            <div class="form-group">
                <input type="text" class="form-control" name="mobile_no" id="number" placeholder="Enter Your Phone Number" required>
            </div>
            <!-- Vehicle No. -->
            <div class="form-group">
                <input type="text" class="form-control" name="vehicle_no" id="V.No" placeholder="Enter Your Vehicle Number" required>
            </div>
            <!-- Address -->
            <div class="form-group">
                <textarea class="form-control" name="address" id="address" placeholder="Enter Your address"></textarea>
            </div>
            <!-- License No. -->
            <div class="form-group">
                <input type="text" class="form-control" name="license_No" id="License_no" placeholder="Enter Your License Number" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-danger">Submit</button>
            </div>
          </form>
        </div>
    </div>
</body>
</html>
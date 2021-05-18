<?php
    require ("assets/common.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us | Ambulance Management System</title>
        <?php require ("assets/bootstrap_cdn.php") ?>
    </head>
    <body>
        <?php
            require ("header.php");
        ?>
        <div class = "container">
            <div class="jumbotron">
            <form method="POST" action="contactus_script.php">
                <!-- Name -->
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name">
                </div>
               <!-- Email -->
            <div class="form-group">
              <label for="exampleFormControlInput1">Email address</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
            </div>
            <!-- Message -->
            <div class="form-group">
                <label for="message">Enter Message</label>
                <textarea placeholder="Enter Message" class="form-control" id="message" name="message"></textarea>
            </div>
            <!-- Button -->
            <div class="form-group">
                <button type="submit" class="btn btn-danger">Submit</button>
            </div>
            </form>
            </div>
        </div>
    </body>
</html>
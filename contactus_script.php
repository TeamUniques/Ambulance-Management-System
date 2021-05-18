<?php 
    require("assets/common.php");

    $name = $_POST['name'];
    $name = mysqli_real_escape_string($con,$name);
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($con,$email);
    $message = $_POST['message'];

    $query = "INSERT INTO `messages` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message');";
    $result = mysqli_query($con,$query) or die(mysqli_error($con));

    header("location:home.php");
?>
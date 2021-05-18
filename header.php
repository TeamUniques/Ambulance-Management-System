<?php 
    require ("assets/common.php");
?>

<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href = "index.php">Ambulance Management</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right">
            <?php
                if (isset($_SESSION['email'])) {
            ?>
                <li><a href = "home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a href = "aboutus.html"><span class="glyphicon glyphicon-th-list"></span> About Us</a></li>
                <li><a href = "contactus.php"><span class="glyphicon glyphicon-phone"></span> Contact Us </a></li> 
                <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li>   
        </ul>
           <?php 
                }else{
           ?>
        <ul class="nav navbar-nav navbar-right">
                <li><a href = "login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href = "signup.php"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
                <li><a href = "aboutus.html"><span class="glyphicon glyphicon-th-list"></span> About Us</a></li>
                <li><a href = "contactus.php"><span class="glyphicon glyphicon-phone"></span> Contact Us </a></li>                 
           <?php 
                }
           ?>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
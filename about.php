<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

<body>
<div class="logo">
            <img src="assets/img/logo.png" style="height: 400px; width:auto;">
            <div class="header">
                <h1>Cake Bake</h1>
            </div>
        </div>
        <div class="topnav">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact Us</a>
            <a href="cart.php"><i class="fa fa-shopping-cart"></i></a>
            <div class="rightnav">
            <?php
                if (isset($_SESSION['username'])) {
                    // User is logged in
                    $username = $_SESSION['username'];
                    echo "<p class='login-button'>Welcome, $username!  </p>";
                    echo "<a href='logout.php' class='signup-button'>Logout</a>";
                    
                } else {
                    echo "<a href='login.html' class='login-button'>Login</a>";
                    echo "<a href='signup.html' class='signup-button'>Signup</a>";
                }
            ?>
            </div>
          </div>

    <div class="row">
        <div class="leftcolumn">
            <div style="margin: 20px;">

                <h1 style="padding-right: 20px ;">Who we are?</h1>
                <p style="text-align: justify;">
                At Cake Bake, we turn your sweetest dreams into a reality.
                Our passion for crafting exquisite cakes is reflected in every creation.
                From classic birthday cakes to elegant wedding cakes, we offer custom cakes for every occasion, made with the finest ingredients.
                Whether you order online or visit our store, experience the Cake Bake difference and let us sweeten your life.
                </p>
            </div>

        </div>
    </div>

    <div class="footer">
        <div>
            <p>

                Cake Bake.
                10 Colinton Rd
                Edinburgh
                Eh10 5DT
                Phone Toll Free: 800-222-8188
            </p>
            <p>
                Hours of Operation
                Mon-Fri 9:00am-5:30pm
                Saturday 9:00am-5:00pm
            </p>
        </div>
        <div>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact Us</a>

        </div>

    </div>
</body>

</html>
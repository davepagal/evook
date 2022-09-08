<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Vook</title>
</head>

<body>
    <!--calls the css and navbar-->
    <?php 
        require 'addon/navbar.php'; 
        require "addon/user_check.php";
    ?>

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#main-wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>

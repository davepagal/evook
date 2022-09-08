<?php
    $userCheck = $_SESSION["name"];

    if(empty($userCheck)){
        header("Location: home.php");
    }
?>
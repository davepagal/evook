<?php
//connect to database
$conn = new mysqli("localhost", "root" ,"" ,"evook");

//check if has connection
if($conn->connect_error){
    die("Connection Failed: ".$conn->connect_error);
}
?>  
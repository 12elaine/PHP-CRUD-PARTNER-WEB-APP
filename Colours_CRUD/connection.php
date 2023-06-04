<?php 

    $con = new mysqli('localhost:3307', 'root', '', 'coloursdb');
    if(!$con){
        die(mysqli_error($con));
    }
?>

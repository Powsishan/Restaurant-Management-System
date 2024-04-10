<?php

$con=new mysqli('localhost','root','your_password','signaturecuisine');
if(!$con){
    die(mysqli_error($con));
} 

?>
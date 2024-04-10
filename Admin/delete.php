<?php
include 'connect.php';
if(isset($_GET[deleteid])){
$id=$_GET['deleteid'];
$sql="delete from staf where stafID='$id'";
$result=mysqli_query($con,$sql);
if($result){
    header('location:displayuser.php');
}else{
    die(mysqli_error($con));
}
}
?>
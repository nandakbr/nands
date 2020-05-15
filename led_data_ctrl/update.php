<?php
include("../config.php");
$stat = $_GET['stat'];

$sql = "UPDATE lampu SET stat='$stat' WHERE id_lamp='1'";
$query = mysqli_query($db, $sql);

if($query){
    header('location:../index.php');
}else{
    die("gagal");
}
?>
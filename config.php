<?php 
$db = mysqli_connect("104.43.14.103","root123","root123","home");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>
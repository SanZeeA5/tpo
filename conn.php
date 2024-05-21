<?php 
$conn = mysqli_connect("database");
if(!$conn){
    die("koneksi gagal: ".mysqli_connect_error());
}
?>
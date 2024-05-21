<?php 
include 'conn.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($conn ,"select * from admin where username = '$username' and password = '$password'");
$cek = mysqli_num_rows($query);

if($cek > 0){
    session_start();
    $_SESSION['username'] = $username;
    header("location:index2.php");
}else{
    // echo "<script>alert(Login Gagal Username Atau Password Salah')</script>";
    echo "<script >alert('Login Gagal Password Atau Password'); 
    window.location.assign('index.php');
    </script>";
}
?>
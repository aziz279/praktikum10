<?php
$servername="localhost";
$username="root";
$password="";
$dbname = "webalumni";

// Membuat Koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Koneksi gagal dibangun dan Database tidak dapat dibuka");

//memindahkan nilai data form ke variabel sederhana agar mudah ditulis
    $nama=$_POST['nama'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $angkatan=$_POST['angkatan'];
    $jurusan=$_POST['jurusan'];
    $username=$_POST['username'];
    $password=$_POST['password'];
   

$tambah = mysqli_query($conn, "INSERT INTO alumni VALUES ('', '$nama', '$address', '$email',  '$angkatan',  '$jurusan',  '$username',  '$password')")or die(mysqli_error($conn));

header("location: formlogin.php");
?>

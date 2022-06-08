<?php
$servername="localhost";
$username="root";
$password="";
$dbname = "webalumni";

// Membuat Koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Koneksi gagal dibangun dan Database tidak dapat dibuka");

//memindahkan nilai data form ke variabel sederhana agar mudah ditulis
    $username=$_POST['username'];
    $password=$_POST['password'];
   

//buat query untuk cek data
    $sql = "SELECT * FROM alumni WHERE username='$username' AND password='$password'";
    $query = mysqli_query($conn, $sql);
    $cek = mysqli_fetch_assoc($query);

    if ($cek) {
        header("location: menu.php?user=".$loguser."");
    } else {
        echo "Login Failed";
    }

header("location: menu.php");
?>



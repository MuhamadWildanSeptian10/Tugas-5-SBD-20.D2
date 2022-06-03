<?php
$host = "localhost";
$user = "admin_klinik01";
$pass = "312010113";
$db = "klinik_312010113";
$conn = mysqli_connect ($host, $user, $pass, $db);
if ($conn == false)
{
    echo "Koneksi ke server gagal.";
    die();
} #else echo "Koneksi berhasil";
?>
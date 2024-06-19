<?php
$config = mysqli_connect("localhost","root", "","berita_4556");
if (!$config) {
    die('Gagal terhubung ke MySQLi :'.mysqli_connect_error());
}
?>
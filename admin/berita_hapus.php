<?php 
  include "config.php";
  $id_berita = $_GET['berita_id'];
  $sql = "DELETE FROM berita WHERE berita_id = '$id_berita'";
  mysqli_query($config, $sql);
  header("Location: halamanberita.php");
  echo "<script> alert('Data berhasil dihapus')</script>";
?>

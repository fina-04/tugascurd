<?php
$id_buku = $_POST["id_buku"];
$nama_buku = $_POST['nama_buku'];
$pengarang = $_POST['pengarang'];
$deskripsi = $_POST['deskripsi'];
$foto = $_FILES["foto"];
$folder = "foto/";
$temp = $_FILES['foto']['tmp_name'];
$name = rand(0, 9999) . $_FILES['foto']['name'];

include "koneksi.php";
$sql = "select * from buku where id_buku = '$id_buku'";
$query = mysqli_query($koneksi, $sql);
$buku = mysqli_fetch_array($query);

$path = $folder . $buku["foto"];
if (file_exists($path)) {
  unlink($path);
}
move_uploaded_file($temp, $folder . $name);

$queryUpdate = mysqli_query($koneksi, "UPDATE buku SET nama_buku = '" . $nama_buku . "', 
                    pengarang = '" . $pengarang . "', deskripsi = '" . $deskripsi . "', foto = '" . $name . "' WHERE id_buku = '" . $id_buku . "'");

if ($queryUpdate) {
  echo "<script>alert('Berhasil');location.href='tampil_buku.php';</script>";
} else {
  echo "<script>alert('Gagal');location.href='tampil_buku.php';</script>";
  echo mysqli_error($koneksi);
}

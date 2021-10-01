<?php
if ($_POST) {
    $id_siswa=$_POST['id_siswa'];
    $nama_siswa=$_POST['nama_siswa'];
    $tanggal_lahir=$_POST['tanggal_lahir'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['gender'];
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    $id_kelas=$_POST['id_kelas'];
    if (empty($nama_siswa)) {
        echo "<script>alert('nama_siswa tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    }
    elseif (empty($user_name)) {
        echo "<script>alert('user_name tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    }
    else {
        include "koneksi.php";
        if (empty($password)) {
            $update=mysqli_query($koneksi,"update siswa set nama_siswa='".$nama_siswa."',tanggal_lahir='".$tanggal_lahir."',gender='".$gender."', alamat='".$alamat."', user_name='".$user_name."', id_kelas='".$id_kelas."' where id_siswa = '".$id_siswa."' ") or die(mysqli_error($koneksi));
            if ($update) {
                echo "<script>alert('Sukses update siswa');location.href='tampil_siswa.php';</script>";
            }
            else {
                echo "<script>alert('Gagal update siswa');location.href='ubah_siswa.php?id_siswa=".$id_siswa."';</script>";
            }
             {
                $update=mysqli_query($koneksi,"update siswa set nama_siswa='".$nama_siswa."', tanggal_lahir='".$tanggal_lahir."', gender='".$gender."', alamat='".$alamat."', user_name='".$user_name."', password='".md5($password)."', id_kelas='".$id_kelas."' where id_siswa = '".$id_siswa."'") or die(mysqli_error($koneksi));
                if ($update) {
                    echo "<script>alert('Sukses update siswa');location.href='tampil_siswa.php';</script>";
                }
                else {
                    echo "<script>alert('Gagal update siswa');location.href='ubah_siswa.php?id_siswa=".$id_siswa."';</script>";
                }
            }
        }
    }
}
?>
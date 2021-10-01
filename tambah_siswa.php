<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h3>Tambah Siswa</h3>
        <form action="proses_tambah_siswa.php" method="post">
            nama siswa :
            <input type="text" name="nama_siswa" value="" class="form-control">
            Tanggal Lahir :
            <input type="date" name="tanggal_lahir" value="" class="form-control">
            Gender : 
            <select name="gender" class="form-control">
                <option></option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
            Alamat : 
            <textarea name="alamat" class="form-control"
            rows="4"></textarea>
            kelas : 
            <select name="id_kelas" class="form-control">
             <option></option>
        <?php
        include "koneksi.php";
            $qry_kelas=mysqli_query($koneksi,"select * from kelas");
            while($data_kelas=mysqli_fetch_array($qry_kelas)){
            echo '<option value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].'</option>';
        }
        ?>
        </select></br>
            username : 
            <br><input type="text" name="user_name" value="" class="form-control"></br>
            password : 
            <br><input type="password" name="password" value="" class="form-control"></br>
            <br><input type="submit" name="simpan" value="Tambah Siswa" class="btn btn-primary"></br>
        </form>
    </div>
<script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
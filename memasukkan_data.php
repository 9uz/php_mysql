<?php
include("koneksi.php");
// url http://localhost/memasukkan_data.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $gender = $_POST['gender'];
    $agama = $_POST['agama'];
    $insert = "INSERT INTO tbl_pengguna (nama_lengkap,alamat,gender, agama) VALUES ('$nama', '$alamat', '$gender', '$agama')";
    mysqli_query($conn, $insert) or die ("tidak dapat memasukkan data ke tabel");
}


?>

<form action = "<?php $_PHP_SELF ?>" method = "POST">
    Name: <input type="text" name="nama"><br>
    alamat: <input type="text" name="alamat"><br>
    Gender: <select name="gender">
        <option value="P"> Pria</option>
        <option value="W">Wanita</option>
    </select><br>
    agama: <select name="agama">
        <option value="1"> Islam</option>
        <option value="2">Kristen Protestan</option>
    </select><br>
    <input type="submit">
</form>

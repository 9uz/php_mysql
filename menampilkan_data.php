<?php
include("koneksi.php");
// url http://localhost/mmenampilkan_data_data.php
$query = "SELECT * FROM tbl_pengguna";
$result = mysqli_query($conn,$query);
?>

<?php
$numrows = mysqli_num_rows($result);
echo "Jumlah data: $numrows <br>";
?>

    <table border="1">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Tindakan</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";

            echo "<td>".$row['id_pengguna']."</td>";
            echo "<td>".$row['nama_lengkap']."</td>";
            echo "<td>".$row['alamat']."</td>";
            echo "<td>".$row['gender']."</td>";
            echo "<td>".$row['agama']."</td>";

            echo "<td>";
            echo "<a href='detail_data.php?id_pengguna=".$row['id_pengguna']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$row['id_pengguna']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>
        </tbody>
    </table>

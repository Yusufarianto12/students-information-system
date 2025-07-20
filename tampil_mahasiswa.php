<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Pekerjaan</th>
            <th>Hobi</th>
        </tr>
        <?php
        include "koneksi.php";
        $tampil = mysqli_query($konek, "SELECT * FROM data_mahasiswa ORDER BY id");
        $no = 1;
        while ($r = mysqli_fetch_array($tampil)) {
            echo "<tr>";
            echo "<td>$no</td>";
            echo "<td>{$r['nama']}</td>";
            echo "<td>{$r['alamat']}</td>";
            echo "<td>{$r['jenis_kelamin']}</td>";
            echo "<td>{$r['pekerjaan']}</td>";
            echo "<td>{$r['hobi']}</td>";
            echo "</tr>";
            $no++;
        }
        ?>
    </table>
</body>
</html>

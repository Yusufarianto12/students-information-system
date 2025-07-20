<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include "koneksi.php";

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $pekerjaan = $_POST['pekerjaan'];
    $hobi = implode(", ", $_POST['hobi']);

    $query = "INSERT INTO data_mahasiswa (nama, alamat, jenis_kelamin, pekerjaan, hobi) 
              VALUES ('$nama', '$alamat', '$jenis_kelamin', '$pekerjaan', '$hobi')";

    if (mysqli_query($konek, $query)) {
        echo "Data berhasil disimpan! <a href='tampil_mahasiswa.php'>Lihat Data</a>";
    } else {
        echo "Error: " . mysqli_error($konek);
    }
}
?>


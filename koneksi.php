<?php
// Konfigurasi database
$server = "localhost";  // Server database (default: localhost)
$username = "root";     // Username MySQL (default: root)
$password = "";         // Password MySQL (kosong jika belum diatur)
$database = "mahasiswa"; // Nama database

// Membuat koneksi
$konek = mysqli_connect($server, $username, $password, $database);

// Mengecek koneksi
if (!$konek) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
}
?>


<?php
// Koneksi ke database
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "data_produk";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Validasi input
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "'id' tidak valid.";
    exit;
}

$id = intval($_GET['id']);

// Hapus produk dari database
$sql = "DELETE FROM produk WHERE id = $id"; // Perbaikan pada query DELETE
$result = mysqli_query($conn, $sql);

// Periksa hasil penghapusan
if ($result) {
    echo "success"; // Penghapusan berhasil
} else {
    echo "error"; // Penghapusan gagal
}

// Tutup koneksi database
mysqli_close($conn);
?>

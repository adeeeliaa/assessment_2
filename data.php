<?php

// Koneksi database
$db = new mysqli('localhost', 'root', '', 'data_produk');

// Cek koneksi
if ($db->connect_error) {
    die('Koneksi gagal: ' . $db->connect_error);
}

// Query untuk mengambil data produk
$sql = "SELECT * FROM produk";
$result = $db->query($sql);

// Cek hasil query
if ($result->num_rows > 0) {
    $data = array();

    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    // Konversi data ke JSON
    echo json_encode($data);
} else {
    echo 'Tidak ada produk ditemukan.';
}

// Tutup koneksi database
$db->close();

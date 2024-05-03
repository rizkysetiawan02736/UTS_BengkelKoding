<?php
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $nama_pasien = $_POST["nama_pasien"];
    $alamat_pasien = $_POST["alamat_pasien"];
    $no_hp_pasien = $_POST["no_hp_pasien"];

    // Query untuk menambahkan data obat ke dalam tabel
    $query = "INSERT INTO pasien (nama_pasien, alamat_pasien, no_hp_pasien) VALUES ('$nama_pasien', '$alamat_pasien', '$no_hp_pasien')";
    

    // if ($koneksi->query($query) === TRUE) {
    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        // Jika berhasil, redirect kembali ke halaman utama atau sesuaikan dengan kebutuhan Anda
        // header("Location: ../../index.php");
        // exit();
        echo '<script>';
        echo 'alert("Data pasien berhasil ditambahkan!");';
        echo 'window.location.href = "../master_pasien.php";';
        echo '</script>';
        exit();
    } else {
        // Jika terjadi kesalahan, tampilkan pesan error
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

// Tutup koneksi
mysqli_close($koneksi);
?>
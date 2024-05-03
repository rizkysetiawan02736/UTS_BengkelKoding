<?php
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $id = $_POST["id_pasien"];
    $nama_pasien = $_POST["nama_pasien"];
    $alamat_pasien = $_POST["alamat_pasien"];
    $no_hp_pasien = $_POST["no_hp_pasien"];

    // Query untuk melakukan update data obat
    $query = "UPDATE pasien SET 
        nama_pasien = '$nama_pasien', 
        alamat_pasien = '$alamat_pasien', 
        no_hp_pasien = '$no_hp_pasien' 
        WHERE id_pasien = '$id'";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        // Jika berhasil, redirect kembali ke halaman index atau sesuaikan dengan kebutuhan Anda
        echo '<script>';
        echo 'alert("Data pasien berhasil diubah!");';
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
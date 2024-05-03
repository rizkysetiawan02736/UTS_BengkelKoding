<?php
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $id = $_POST["id_dokter"];
    $nama_dokter = $_POST["nama_dokter"];
    $alamat_dokter = $_POST["alamat_dokter"];
    $no_hp_dokter = $_POST["no_hp_dokter"];

    // Query untuk melakukan update data obat
    $query = "UPDATE dokter SET 
        nama_dokter = '$nama_dokter', 
        alamat_dokter = '$alamat_dokter', 
        no_hp_dokter = '$no_hp_dokter' 
        WHERE id_dokter = '$id'";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        // Jika berhasil, redirect kembali ke halaman index atau sesuaikan dengan kebutuhan Anda
        echo '<script>';
        echo 'alert("Data dokter berhasil diubah!");';
        echo 'window.location.href = "../master_dokter.php";';
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
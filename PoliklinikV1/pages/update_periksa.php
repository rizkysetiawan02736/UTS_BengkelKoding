<?php
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $idP = $_POST["id_periksa"];
    $id1 = $_POST["id_dokter"];
    $id2 = $_POST["id_pasien"];
    $tgl = $_POST["tanggal_periksa"];
    $catatan = $_POST["catatan"];
    $obat = $_POST["obat"];

    // Query untuk melakukan update data obat
    $query = "UPDATE periksa SET 
        id_dokter = '$id1', 
        id_pasien = '$id2', 
        tgl_periksa = '$tgl', 
        catatan = '$catatan', 
        obat = '$obat' 
        WHERE id_periksa = '$idP'";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        // Jika berhasil, redirect kembali ke halaman index atau sesuaikan dengan kebutuhan Anda
        echo '<script>';
        echo 'alert("Data dokter berhasil diubah!");';
        echo 'window.location.href = "../master_periksa.php";';
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
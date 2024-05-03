<?php
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $nama_dokter = $_POST["namDok"];
    $nama_pasien = $_POST["namPas"];
    $tanggal_periksa = $_POST["tanggal_periksa"];
    $catatan = $_POST["catatan"];
    $obat = $_POST["obat"];

    // Query untuk menambahkan data obat ke dalam tabel
    $query = "INSERT INTO periksa (id_dokter, id_pasien, tgl_periksa, catatan, obat) VALUES ('$nama_dokter', '$nama_pasien', '$tanggal_periksa', '$catatan', '$obat')";
    

    // if ($koneksi->query($query) === TRUE) {
    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        // Jika berhasil, redirect kembali ke halaman utama atau sesuaikan dengan kebutuhan Anda
        // header("Location: ../../index.php");
        // exit();
        echo '<script>';
        echo 'alert("Data periksa berhasil ditambahkan!");';
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
<?php
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $nama_dokter = $_POST["nama_dokter"];
    $alamat_dokter = $_POST["alamat_dokter"];
    $no_hp_dokter = $_POST["no_hp_dokter"];

    // Query untuk menambahkan data obat ke dalam tabel
    $query = "INSERT INTO dokter (nama_dokter, alamat_dokter, no_hp_dokter) VALUES ('$nama_dokter', '$alamat_dokter', '$no_hp_dokter')";
    

    // if ($koneksi->query($query) === TRUE) {
    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        // Jika berhasil, redirect kembali ke halaman utama atau sesuaikan dengan kebutuhan Anda
        // header("Location: ../../index.php");
        // exit();
        echo '<script>';
        echo 'alert("Data dokter berhasil ditambahkan!");';
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
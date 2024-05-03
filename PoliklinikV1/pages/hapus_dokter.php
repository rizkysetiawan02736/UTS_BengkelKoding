<?php				
	include '../koneksi.php'; //menghubungkan ke file koneksi untuk ke database
	
	//uji tombol hapus di klik
	if(isset($_POST['bHapus'])){
		//persiapan hapus data
		$hapus = mysqli_query($koneksi, "DELETE FROM dokter WHERE id_dokter = '$_POST[id]' ");
	
	//jika hapus sukses
	if($hapus){
		echo "<script>
		alert('Hapus data Sukses!');
		document.location='../master_dokter.php';
		</script>";
	} else {
		echo "<script>
		alert('Hapus data Gagal!');
		document.location='../master_dokter.php';
		</script>";
	}	
	} 
?>
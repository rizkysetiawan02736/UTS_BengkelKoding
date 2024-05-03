<?php				
	include '../koneksi.php'; //menghubungkan ke file koneksi untuk ke database
	
	//uji tombol hapus di klik
	if(isset($_POST['bHapus'])){
		//persiapan hapus data
		$hapus = mysqli_query($koneksi, "DELETE FROM periksa WHERE id_periksa = '$_POST[id]' ");
	
	//jika hapus sukses
	if($hapus){
		echo "<script>
		alert('Hapus data Sukses!');
		document.location='../master_periksa.php';
		</script>";
	} else {
		echo "<script>
		alert('Hapus data Gagal!');
		document.location='../master_periksa.php';
		</script>";
	}	
	} 
?>
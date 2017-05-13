<?php

if(isset($_GET['id'])){
	
	include('koneksi.php');

	$id = $_GET['id'];
	
	$cek = mysql_query("SELECT id_Mahasiswa FROM data_mahasiswa WHERE id_Mahasiswa='$id'") or die(mysql_error());

	//jika data siswa tidak ada
	if(mysql_num_rows($cek) == 0){

		echo '<script>window.history.back()</script>';
	
	}else{
		
		//jika data ada di database, maka melakukan query DELETE table siswa dengan kondisi WHERE siswa_id='$id'
		$del = mysql_query("DELETE FROM data_mahasiswa WHERE id_Mahasiswa='$id'");
		
		//jika query DELETE berhasil
		if($del){
		
		echo "<script>alert('Delete Success');location.href='Data_Mahasiswa.php';</script>";		//Pesan jika proses tambah sukses
		
	}else{
		
		echo "<script>alert('Delete Failed');location.href='Data_Mahasiswa.php';</script>";	//membuat Link untuk kembali ke halaman tambah
		
	}
		
	}
	
}else{
	
	//redirect atau dikembalikan ke halaman beranda
	echo '<script>window.history.back()</script>';
	
}
?>
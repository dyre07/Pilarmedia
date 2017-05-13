<?php

if(isset($_POST['Create'])){

	include('koneksi.php');
	$NPM           = $_POST['NPM'];	
	$Nama          = $_POST['Nama'];	
	$Tempat_lahir  = $_POST['Tempat_lahir'];	
	$Tanggal_lahir = $_POST['Tanggal_lahir'];	
    $Asal          = $_POST['Asal'];
    $JK            = $_POST['JK'];
    $Alamat        = $_POST['Alamat'];
    $Fakultas      = $_POST['Fakultas'];
    $No_Telp       = $_POST['No_Telp'];

	$input = mysql_query("INSERT INTO data_mahasiswa VALUES(NULL, '$NPM', '$Nama', '$Tempat_lahir', '$Tanggal_lahir', '$Asal', '$JK', '$Alamat', '$Fakultas', '$No_Telp' )") or die(mysql_error());
	
	//jika query input sukses
	if($input){
		
		echo "<script>alert('Upload Success');location.href='Data_Mahasiswa.php';</script>";		//Pesan jika proses tambah sukses
		
	}else{
		
		echo "<script>alert('Upload Failed');location.href='CreateDM.php';</script>";	//membuat Link untuk kembali ke halaman tambah
		
	}
 
}else{	//jika tidak terdeteksi tombol tambah di klik
 
	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
 
}
?>
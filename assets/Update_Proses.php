<?php
if(isset($_POST['Update'])) {
    
    include('koneksi.php');
	
    $id            = $_POST['id'];
    $NPM           = $_POST['NPM'];	
	$Nama          = $_POST['Nama'];	
	$Tempat_lahir  = $_POST['Tempat_lahir'];	
	$Tanggal_lahir = $_POST['Tanggal_lahir'];	
    $Asal          = $_POST['Asal'];
    $JK            = $_POST['JK'];
    $Alamat        = $_POST['Alamat'];
    $Fakultas      = $_POST['Fakultas'];
    $No_Telp       = $_POST['No_Telp'];
    
    $Update = mysql_query("UPDATE data_mahasiswa SET NPM='$NPM', Nama='$Nama', Tempat_lahir='$Tempat_lahir', Tanggal_Lahir='$Tanggal_lahir', Asal='$Asal', JK='$JK', Alamat='$Alamat', Fakultas='$Fakultas', No_Telp='$No_Telp' WHERE id_Mahasiswa='$id' ") or die(mysql_error());

if($Update){
		
		echo "<script>alert('Update Success');location.href='Data_Mahasiswa.php';</script>";		//Pesan jika proses tambah sukses
		
	}else{
		
		echo "<script>alert('Update Failed');location.href='UpdateDM.php';</script>";	//membuat Link untuk kembali ke halaman tambah
		
	   }
    }else{	//jika tidak terdeteksi tombol simpan di klik
 
	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';
 
}
?>
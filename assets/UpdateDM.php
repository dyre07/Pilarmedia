<?php
include('Header.php');
include('Sidebar.php');
?>

<?php

	include('koneksi.php');
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
	$id = $_GET['id'];
	
	$show = mysql_query("SELECT * FROM data_mahasiswa WHERE id_Mahasiswa='$id'");
	
	//cek apakah data dari hasil query ada atau tidak
	if(mysql_num_rows($show) == 0){
		
		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
		echo '<script>window.history.back()</script>';
		
	}else{
	
		$data = mysql_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	
	}
	?>
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Mahasiswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="Update_Proses.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
              <div class="box-body">
                <div class="form-group">
                  <label>NPM</label>
                  <div>
                    <input type="text" name="NPM" value="<?php echo $data['NPM']; ?>" class="form-control">
                  </div>
                </div>
                  
                <div class="form-group">
                  <label>Nama</label>
                  <div>
                    <input type="text" name="Nama" value="<?php echo $data['Nama']; ?>" class="form-control" >
                  </div>
                </div>
                  
                  <div class="form-group">
                  <label>Tempat Lahir</label>
                  <div>
                    <input type="text" name="Tempat_lahir" value="<?php echo $data['Tempat_lahir']; ?>" class="form-control" >
                  </div>
                </div>
                  
                <div class="form-group">
                <label>Tanggal Lahir</label>
                    <div>
                        <div class="input-group date">
                            <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                            </div>
                            <input type="date" name="Tanggal_lahir" value="<?php echo $data['Tanggal_lahir']; ?>" class="form-control">
                        </div>
                    </div>
                </div>
                  
                  <div class="form-group">
                  <label>Asal</label>
                  <div>
                    <input type="text" name="Asal" value="<?php echo $data['Asal']; ?>" class="form-control" >
                  </div>
                </div>
                  
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                            <div>
                                <label>
                                    <input type="radio" name="JK" value="Male" class="minimal" <?php if($data['JK'] == 'Male'){ echo 'checked'; } ?>>
                                        Male
                                </label>
                                <label>
                                    <input type="radio" name="JK" value="Female" class="minimal" <?php if($data['JK'] == 'Female'){ echo 'checked'; } ?>>
                                        Female
                                </label>                               
                            </div>
                    </div>
                  
                  <div class="form-group">
                  <label>Alamat</label>
                  <div>
                    <input type="text" name="Alamat" value="<?php echo $data['Alamat']; ?>" class="form-control" >
                  </div>
                </div>
                  
                  <div class="form-group">
                  <label>Fakultas</label>
                  <div>
                    <input type="text" name="Fakultas" value="<?php echo $data['Fakultas']; ?>" class="form-control" >
                  </div>
                </div>
                  
                  <div class="form-group">
                  <label>No. Telpon</label>
                  <div>
                    <input type="text" name="No_Telp" value="<?php echo $data['No_Telp']; ?>" class="form-control" >
                  </div>
                </div>
              </div>
                
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" name="Update" class="btn btn-info pull-right">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
    </div>
</section>

<?php
include('Footer.php');
?>
<?php
include('Header.php');
include('Sidebar.php');
?>

<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Input Data Mahasiswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="Create_Proses.php" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>NPM</label>
                  <div>
                    <input type="text" name="NPM" class="form-control">
                  </div>
                </div>
                  
                <div class="form-group">
                  <label>Nama</label>
                  <div>
                    <input type="text" name="Nama" class="form-control" >
                  </div>
                </div>
                  
                  <div class="form-group">
                  <label>Tempat Lahir</label>
                  <div>
                    <input type="text" name="Tempat_lahir" class="form-control" >
                  </div>
                </div>
                  
                <div class="form-group">
                <label>Tanggal Lahir</label>
                    <div>
                        <div class="input-group date">
                            <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                            </div>
                            <input type="date" name="Tanggal_lahir" class="form-control">
                        </div>
                    </div>
                </div>
                  
                  <div class="form-group">
                  <label>Asal</label>
                  <div>
                    <input type="text" name="Asal" class="form-control" >
                  </div>
                </div>
                  
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                            <div>
                                <label>
                                    <input type="radio" name="JK" value="Male" class="minimal">
                                        Male
                                </label>
                                <label>
                                    <input type="radio" name="JK" value="Female" class="minimal">
                                        Female
                                </label>                               
                            </div>
                    </div>
                  
                  <div class="form-group">
                  <label>Alamat</label>
                  <div>
                    <input type="text" name="Alamat" class="form-control" >
                  </div>
                </div>
                  
                  <div class="form-group">
                  <label>Fakultas</label>
                  <div>
                    <input type="text" name="Fakultas" class="form-control" >
                  </div>
                </div>
                  
                  <div class="form-group">
                  <label>No. Telpon</label>
                  <div>
                    <input type="text" name="No_Telp" class="form-control" >
                  </div>
                </div>
              </div>
                
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" name="Create" class="btn btn-info pull-right">Submit</button>
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
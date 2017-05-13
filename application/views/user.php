<div class="content-wrapper">    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-7">
          <div class="box">


            <form class="form-horizontal" method="post" action="<?php echo base_url('user/input_user')?>" enctype="multipart/form-data">
			  <div class="box-body">
                  
                  <div class="form-group">
                  <label  class="col-sm-3 control-label">Nama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama" required>
                  </div>
                </div>	
                  
                  <div class="form-group">
                  <label  class="col-sm-3 control-label">No Telp</label>
                  <div class="col-sm-8">
                      <input type="text" class="form-control" name="telp">
                  </div>
                </div>
                  
                <div class="form-group">
                  <label  class="col-sm-3 control-label">Alamat</label>
                  <div class="col-sm-8">
                      <textarea class="form-control" name="alamat"></textarea>
                  </div>
                </div>
                  
            <div class="form-group">
                <label class="col-sm-3 control-label">Tanggal lahir</label>
                <div class="col-sm-8">
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="datepicker">
                </div>
                </div>
                <!-- /.input group -->
              </div>
                  
                <div class="form-group">
                  <label  class="col-sm-3 control-label">Kota</label>
                  <div class="col-sm-8">
                      <input type="text" class="form-control" name="tgl_lahir"></textarea>
                  </div>
                </div>
              
                <div class="form-group">
                  <label  class="col-sm-3 control-label">Foto</label>
                  <div class="col-sm-8">
                    <input type="file" name="foto" required>
                  </div>
                </div>	
				
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Tambah</button>
              </div>
              <!-- /.box-footer -->
            </form>
		</div>
	</div>	
	</section>
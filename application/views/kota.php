<style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kota
	  </h1>
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home </a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-8">
          <div class="box">

            <div class="box-body">
			  <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                      <th>Provinsi</th>
                      <th>Kota</th>
                      <th colspan="2"><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"><b>Tambah Data</b><i class="fa fa-plus"></i></button></th>
                    </tr>
                </thead>
                <tbody>
				    <?php
                        foreach($kota as $sh) {
			         ?>	
		
				<tr>
					<td><?php echo $sh['provinsi']; ?></td>
					<td><?php echo $sh['kota']; ?></td>
                    <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal2"><i class="fa fa-edit"></i></button></td>
                    <td><a href="<?php echo base_url('admin/delete/');?><?php echo $sh['id_kota'];?>" onClick="return confirm('Are you sure?')" ><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                    
                    <div class="modal fade" id="myModal2"  role="dialog">
                        <div class="example-modal">
                            <div class="modal">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Edit Kota</h4>
                                  </div>
                                    <form action="<?php echo base_url('home/update_kota').'/'.$sh['id_kota'];?>" method="post">
                                  <div class="modal-body">
                                        <div class="form-group">
                                          <label  class="col-sm-3 control-label">Provinsi</label>
                                              <div class="col-sm-8">
                                                <select class="form-control select" name="id_provinsi">
                                                  <option selected="selected" value="<?php echo $sh['id_provinsi'];?>"><?php echo $sh['provinsi'];?></option>

                                                <?php

                                                    if(!empty($provinsi)) {
                                                        foreach($provinsi as $row) {
                                                ?>					  

                                                  <option value="<?php echo $row['id_provinsi']; ?>"><?php echo $row['provinsi']; ?></option>

                                                <?php		
                                                        }
                                                }		
                                                ?>						  

                                                  </select>
                                              </div>
                                        </div>
                <br><br>
                                        <div class="form-group">
                                          <label  class="col-sm-3 control-label">Kota</label>
                                          <div class="col-sm-8">
                                            <input type="text" class="form-control" name="kota" value="<?php echo $sh['kota'];?>">
                                          </div>
                                        </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                  </div>
                                      </form>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                        <!-- /.modal -->
                      </div>
                    </div>
				</tr>
			<?php		
					}	
			?>				
				

				</tbody>
			   </table>
			  </div> 
			 </div>
			</div>	
		</div>
</section> 
    
    <div class="modal fade" id="myModal"  role="dialog">
        <div class="example-modal">
            <div class="modal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Kota</h4>
                  </div>
                    <form action="<?php echo base_url('home/input_kota');?>" method="post">
                  <div class="modal-body">
                        <div class="form-group">
                          <label  class="col-sm-3 control-label">Provinsi</label>
                              <div class="col-sm-8">
                                <select class="form-control select" name="id_provinsi">
                                  <option selected="selected">pilih di sini</option>

                                <?php

                                    if(!empty($provinsi)) {
                                        foreach($provinsi as $row) {
                                ?>					  

                                  <option value="<?php echo $row['id_provinsi']; ?>"><?php echo $row['provinsi']; ?></option>

                                <?php		
                                        }
                                }		
                                ?>						  

                                  </select>
                              </div>
                        </div>
<br><br>
                        <div class="form-group">
                          <label  class="col-sm-3 control-label">Kota</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="kota" required>
                          </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                  </div>
                      </form>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
        <!-- /.modal -->
      </div>
    </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
      </div>
</div>


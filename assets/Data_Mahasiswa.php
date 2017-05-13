<?php
include('Header.php');
include('Sidebar.php');
?>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
                <tr>
                    <th> No. </th>
                    <th> NPM </th>
                    <th> Nama </th>
                    <th> Tempat Lahir </th>
                    <th> Tanggal Lahir </th>
                    <th> Asal </th>
                    <th> Jenis Kelamin </th>
                    <th> Alamat </th>
                    <th> Fakultas </th>
                    <th> No. Telpon </th>
                </tr>
                <?php
		          include('koneksi.php');
		          $query = mysql_query("SELECT * FROM data_mahasiswa ORDER BY NPM ASC") or die(mysql_error());
		
		          if(mysql_num_rows($query) == 0){
			         echo '<tr><td colspan="6">Sorry, Theres No Record</td></tr>';}
                
                        else{
			             $no = 1;
			             while($data = mysql_fetch_assoc($query)){
				            echo '<tr>';
                                echo '<td>'.$no.'</td>';
                                echo '<td>'.$data['NPM'].'</td>';
                                echo '<td>'.$data['Nama'].'</td>';
                                echo '<td>'.$data['Tempat_lahir'].'</td>';
                                echo '<td>'.$data['Tanggal_lahir'].'</td>';
                                echo '<td>'.$data['Asal'].'</td>';
                                echo '<td>'.$data['JK'].'</td>';
                                echo '<td>'.$data['Alamat'].'</td>';
                                echo '<td>'.$data['Fakultas'].'</td>';
                                echo '<td>'.$data['No_Telp'].'</td>';
                                echo '<td><a href="UpdateDM.php?id='.$data['id_Mahasiswa'].'">Edit</a> / <a href="DeleteDM.php?id='.$data['id_Mahasiswa'].'" onclick="return confirm(\'Are You Sure?\')">Delete</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
				            echo '</tr>';
				        $no++;
                         }
		              }
                ?>
            </table>
                </div>
              </div>
            </div>
          </div>
        </div>
</section>

<?php
include('Footer.php')
?>
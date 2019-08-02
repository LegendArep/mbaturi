            <div class="col-xs-12">  
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Jadwal Pelatihan</h3>
                  <a class='pull-right btn btn-primary btn-sm' href='<?php echo base_url().$this->uri->segment(1); ?>/tambah_jadwal'>Tambahkan Data</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style='width:20px'>No</th>
                        <th>Nama Pelatihan</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Akhir</th>
                        <th>Status</th>
                        <th style='width:70px'>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $no = 1;
                    foreach ($record as $row){
                    echo "<tr><td>$no</td>
                              <td>$row[judul]</td>
                              <td>$row[tanggal_awal]</td>
                              <td>$row[tanggal_akhir]</td>";
                              if ($row[status] == 1) {
                                echo"<td><span class='label label-success'>Aktif</span></td>";
                              }else{
                                echo"<td><span class='label label-danger'>Tidak Aktif</span></td>";
                              }
                     echo "<td><center>
                                <a class='btn btn-success btn-xs' title='Edit Data' href='".base_url().$this->uri->segment(1)."/edit_jadwal/$row[id_schedule]'><span class='glyphicon glyphicon-edit'></span></a></td>
                          </tr>";
                      $no++;
                    }
                  ?>
                  </tbody>
                </table>
              </div>
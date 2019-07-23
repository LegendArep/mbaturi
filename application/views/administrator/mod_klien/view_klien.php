            <div class="col-xs-12">  
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Klien</h3>
                  <a class='pull-right btn btn-primary btn-sm' href='<?php echo base_url().$this->uri->segment(1); ?>/tambah_klien'>Tambahkan Data</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style='width:20px'>No</th>
                        <th>Nama Klien</th>
                        <th>Scope</th>
                        <th>Alamat</th>
                        <th style='width:70px'>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $no = 1;
                    foreach ($record as $row){
                    echo "<tr><td>$no</td>
                              <td>$row[client_name_id]</td>
                              <td>$row[scope]</td>
                              <td>$row[main_site]</td>
                              <td><center>
                                <a class='btn btn-success btn-xs' title='Edit Data' href='".base_url().$this->uri->segment(1)."/edit_klien/$row[id_client_ind]'><span class='glyphicon glyphicon-edit'></span></a>
                                <a class='btn btn-danger btn-xs' title='Delete Data' href='".base_url().$this->uri->segment(1)."/delete_klien/$row[id_client_ind]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
                              </center></td>
                          </tr>";
                      $no++;
                    }
                  ?>
                  </tbody>
                </table>
              </div>
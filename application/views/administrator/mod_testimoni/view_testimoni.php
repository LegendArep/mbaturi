            <div class="col-xs-12">  
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Testimoni</h3>
                  <a class='pull-right btn btn-primary btn-sm' href='<?php echo base_url().$this->uri->segment(1); ?>/tambah_testimoni'>Tambahkan Data</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style='width:20px'>No</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>jabatan </th>
                        <th>Tanggal </th>
                        <th>Testimoni</th>
                        <th style='width:70px'>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $no = 1;
                    foreach ($record as $row){
                    echo "<tr><td>$no</td>
                              <td><img src='".base_url()."asset/foto_orang/$row[gambar]' width='50'></td>
                              <td>$row[nama_kosumen]</td>
                              <td>$row[jabatan]</td>
                              <td>$row[waktu_testimoni]</td>
                              <td>$row[isi_testimoni]</td>
                              <td><center>
                                <a class='btn btn-success btn-xs' title='Edit Data' href='".base_url().$this->uri->segment(1)."/edit_testimoni/$row[id_testimoni]'><span class='glyphicon glyphicon-edit'></span></a>
                                <a class='btn btn-danger btn-xs' title='Delete Data' href='".base_url().$this->uri->segment(1)."/delete_testimoni/$row[id_testimoni]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
                              </center></td>
                          </tr>";
                      $no++;
                    }
                  ?>
                  </tbody>
                </table>
              </div>
            <div class="col-xs-12">  
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Sertifikat</h3>
                  <a class='pull-right btn btn-primary btn-sm' href='../qrcode.php'>Tambahkan Data
                    <!-- <a class='pull-right btn btn-primary btn-sm' href='<?php echo base_url(); ?>/application/views/administrator/mod_sertifikat/qrcode.php'>Tambahkan Data -->
                    </a>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style='width:20px'>No</th>
                        <th>No Sertifikat</th>
                        <th>Nama Klien</th>
                        <th>Tanggal Sertifikat</th>
                        <th>Tanggal kadaluarsa</th>
                        <th>Status</th>
                        <th style='width:70px'>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $no = 1;
                    foreach ($record as $row){
                    echo "<tr><td>$no</td>
                              <td>$row[id_cert_ind]</td>
                              <td>$row[client_name_id]</td>
                              <td>$row[certificate_date]</td>
                              <td>$row[expiration_date]</td>";

                              $teks_status ="";
                              if ($row[status]==1) {
                                $teks_status ="Aprroved";
                              } elseif ($row[status]==2) {
                                $teks_status ="Suspend";
                              } elseif ($row[status]==3) {
                                $teks_status ="Withdraw";
                              } else {
                                $teks_status ="Hide";
                              }
                    echo "    <td>".$teks_status."</td>
                              <td><center>
                                <a class='btn btn-success btn-xs' title='Edit Data' href='".base_url().$this->uri->segment(1)."/edit_sertifikat/$row[id]'><span class='glyphicon glyphicon-edit'></span></a>
                                <a class='btn btn-info btn-xs' title='Edit Data' href='".base_url()."/view_cert.php?id=$row[id]'><span class='glyphicon glyphicon-open-file'></span></a>
                              </center></td>
                          </tr>";
                      $no++;
                    }
                  ?>
                  </tbody>
                </table>
              </div>
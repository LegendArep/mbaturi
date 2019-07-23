            <div class="col-xs-12">  
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Daftar Subscriber</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style='width:20px'>No</th>
                        <th>Email</th>
                        <th style='width:70px'>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $no = 1;
                    foreach ($record as $row){
                    echo "<tr><td>$no</td>
                              <td>$row[email]</td>
                              <td><center>
                                <a class='btn btn-danger btn-xs' title='Delete Data' href='".base_url().$this->uri->segment(1)."/delete_email/$row[id_email]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
                              </center></td>
                          </tr>";
                      $no++;
                    }
                  ?>
                  </tbody>
                </table>
              </div>
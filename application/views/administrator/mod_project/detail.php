       
       <?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Tambah Image Project </h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/detail_project',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='".$this->uri->segment(3)."'>                    
                    <tr><th scope='row'>Gambar</th>                 <td><input type='file' class='form-control' name='k'></td></tr>
                    
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                    <a href='".base_url().$this->uri->segment(1)."/project'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            ?>

<?php
        $id = $this->uri->segment(3);

        ?>
     <div class="col-xs-12">  
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Semua Project <?php // echo"$id"; ?></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style='width:20px'>No</th>
                        <th>Gambar</th>
                        <th style='width:75px'>Action</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
$no=1;
$detailll = $this->model_utama->view_where('image_project',array('id_project' => $id));
            foreach ($detailll->result_array() as $row) {
                    echo "<tr><td>$no</td>
                              <td><a target='_BLANK' href='".base_url()."asset/sub_project/$row[image]'>$row[image]</a></td>
                              <td><center>
                                <a class='btn btn-danger btn-xs' title='Delete Data' href='".base_url().$this->uri->segment(1)."/delete_projectt/$row[id_image]/".$this->uri->segment(3)."' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
                              </center></td>
                          </tr>";
                      $no++;
                    }
                  ?>
                  </tbody>
                </table>
              </div>
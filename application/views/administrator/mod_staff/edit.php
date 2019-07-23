<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Staff </h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/edit_staff',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[id_staff]'>
                    <tr><th width='120px' scope='row'>Nama</th>    <td><input type='text' class='form-control' name='a' value='$rows[nama]' required></td></tr>
                    <tr><th scope='row'>Jabatan</th>              <td><input type='text' class='form-control' name='b' value='$rows[jabatan]'></td></tr>
                    <tr><th scope='row'>Facebook</th>              <td><input type='text' class='form-control' name='c' value='$rows[facebook]'></td></tr>
                    <tr><th scope='row'>Twitter</th>              <td><input type='text' class='form-control' name='d' value='$rows[twitter]'></td></tr>
                    <tr><th scope='row'>Linkedin</th>              <td><input type='text' class='form-control' name='f' value='$rows[linkedin]'></td></tr>
                    <tr><th scope='row'>Google</th>              <td><input type='text' class='form-control' name='e' value='$rows[google]'></td></tr>                    
                    
                    <tr><th scope='row'>Foto</th>                 <td><input type='file' class='form-control' name='k'>";
                     if ($rows['foto'] != ''){ echo "<i style='color:red'>Lihat Gambar Saat ini : </i><a target='_BLANK' href='".base_url()."asset/foto_staf/$rows[foto]'>$rows[foto]</a>"; } echo "</td></tr>
                    
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                    <a href='".base_url().$this->uri->segment(1)."/staff'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();

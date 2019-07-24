<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Klien Data</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/edit_klien',$attributes);
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[id_client_ind]'>
                    <tr><th width='120px' scope='row'>Nama Klien</th>    <td><input name='nama_klien' type='text' class='form-control' value='$rows[client_name_id]'  required></td></tr>

                    <tr><th width='120px' scope='row'>Klien Scope</th>    <td><input name='scope' type='text' class='form-control' value='$rows[scope]'  required></td></tr>

                    <tr><th width='120px' scope='row'>Alamat</th>    <td><textarea name='main_site' class='form-control' >$rows[main_site]</textarea></td></tr>";


                    if ($rows[status_client] == 1) {
                      echo "<tr><th width='120px' scope='row'>Status</th>  <td>
                        <input type='radio'  name='status' value='1' checked>&nbsp;&nbsp;Aktif<br>
                        <input type='radio' name='status' value='2'>&nbsp;&nbsp;TIdak Aktif<br>
                      </td></tr>";
                    } else {
                      echo "<tr><th width='120px' scope='row'>Status</th>  <td>
                        <input type='radio'  name='status' value='1'>&nbsp;&nbsp;Aktif<br>
                        <input type='radio' name='status' value='2'checked>&nbsp;&nbsp;TIdak Aktif<br>
                      </td></tr>";

                    }


                  echo "</tbody>
                  </table>
                </div>";
              
             echo" <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Ubah</button>
                    <a href='".base_url().$this->uri->segment(1)."/klien'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();




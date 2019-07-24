<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Tambah Klien Data</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/tambah_klien',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value=''>
                    <tr><th width='120px' scope='row'>Nama Klien</th>    <td><input type='text' class='form-control' name='nama_klien' required></td></tr>

                    <tr><th width='120px' scope='row'>Klien Scope</th>    <td><input type='text' class='form-control' name='scope' required></td></tr>

                    <tr><th width='120px' scope='row'>Alamat</th>  <td><textarea class='form-control' name='main_site'></textarea></td></tr>

                    <tr><th width='120px' scope='row'>Status</th>  <td>
                      <input type='radio'  name='status' value='1' checked>&nbsp;&nbsp;Aktif<br>
                      <input type='radio' name='status' value='2'>&nbsp;&nbsp;TIdak Aktif<br>
                    </td></tr>
 

                  </tbody>
                  </table>
                </div>";
              
             echo" <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                    <a href='".base_url().$this->uri->segment(1)."/klien'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();

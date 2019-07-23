<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Tambah Berita Baru </h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/tambah_staff',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value=''>
                    <tr><th width='120px' scope='row'>Nama</th>    <td><input type='text' class='form-control' name='a' required></td></tr>
                    <tr><th scope='row'>Jabatan</th>              <td><input type='text' class='form-control' name='b'></td></tr>
                    <tr><th scope='row'>Facebook</th>              <td><input type='text' class='form-control' name='c'></td></tr>
                    <tr><th scope='row'>Twitter</th>              <td><input type='text' class='form-control' name='d'></td></tr>
                    <tr><th scope='row'>Linkedin</th>              <td><input type='text' class='form-control' name='f'></td></tr>
                    <tr><th scope='row'>Google</th>              <td><input type='text' class='form-control' name='e'></td></tr>                    
                    
                    <tr><th scope='row'>Gambar</th>                 <td><input type='file' class='form-control' name='k'></td></tr>
                    
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                    <a href='".base_url().$this->uri->segment(1)."/staff'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();

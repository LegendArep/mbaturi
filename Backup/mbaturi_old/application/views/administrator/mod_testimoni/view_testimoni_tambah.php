<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Tambah Info</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/tambah_testimoni',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value=''>
                    <tr><th scope='row' width='120px'>Nama</th><td><input type='text' name='a' class='form-control' /></td></tr>
                    <tr><th scope='row' width='120px'>Jabatan</th><td><input type='text' name='b' class='form-control' /></td></tr>
                    <tr><th scope='row' width='120px'>Testimoni</th><td><textarea class='form-control' name='c' style='height:200px' required></textarea></td></tr>

                    <tr><th scope='row'>Foto</th>                     <td><input type='file' class='form-control' name='d'></td></tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                    <a href='".base_url().$this->uri->segment(1)."/testimoni'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();

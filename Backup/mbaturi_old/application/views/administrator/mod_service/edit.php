<?php
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Service </h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/edit_service',$attributes);
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[id_service]'>
                    <tr><th width='120px' scope='row'>Judul</th>
                      <td><input type='text' class='form-control' name='a'  value='$rows[judul]' required></td></tr>
                    <tr><th scope='row'>Isi Homepage</th>
                      <td><input type='text' class='form-control' name='b'  value='$rows[isi]'></td></tr>
                    <tr><th scope='row'>Icon</th>
                      <td><input type='text' class='form-control' name='c'  value='$rows[icon]'> </td></tr>
                    <tr><th scope='row'>Service Detail</th>
                      <td><textarea id='editor1' class='form-control' name='d' style='height:260px' required>$rows[isi_keterangan]</textarea></tr>


                    <tr><th scope='row'>Gambar</th>
                      <td><input type='file' class='form-control' name='k'>";
                          if ($rows['gambar'] != ''){ echo "<i style='color:red'>Lihat Gambar Saat ini : </i><a target='_BLANK' href='".base_url()."asset/service/$rows[gambar]'>$rows[gambar]</a>"; } echo "
                  </tbody>
                  </table>
                </div>

              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                    <a href='".base_url().$this->uri->segment(1)."/service'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>

                  </div>
            </div></div></div>";
            echo form_close();

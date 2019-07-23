<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Project </h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/edit_project',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[id_project]'>
                    <tr><th width='120px' scope='row'>Judul</th>    <td><input type='text' class='form-control' name='a' value='$rows[judul]' required></td></tr>
                    <tr><th scope='row'>Sub Judul</th>              <td><input type='text' class='form-control' name='b'  value='$rows[sub_judul]'></td></tr>
                    </tr>
                                       <tr><th scope='row'>Project Detail</th>              <td><textarea id='editor1' class='form-control' name='c' style='height:260px' required>$rows[isi]</textarea></tr>

                    
                    <tr><th scope='row'>Gambar</th>                 <td><input type='file' class='form-control' name='k'>";
                                                                               if ($rows['gambar'] != ''){ echo "<i style='color:red'>Lihat Gambar Saat ini : </i><a target='_BLANK' href='".base_url()."asset/project/$rows[gambar]'>$rows[gambar]</a>"; } echo "
                    
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                    <a href='".base_url().$this->uri->segment(1)."/project'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();

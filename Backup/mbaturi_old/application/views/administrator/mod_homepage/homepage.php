<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Homepage Website</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/homepage',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$record[id_homepage]'>
                    <tr><th width='150px' scope='row'>Judul Layer 1</th>   <td><input type='text' class='form-control' name='a' value='$record[layar1_headline]'></td></tr>
                    <tr><th scope='row'>Keterangan Layer 1</th>                        <td><input type='text' class='form-control' name='b' value='$record[layar1_keterangan]'></td></tr>
                    <tr><th scope='row'>Judul Layer 2</th>                       <td><input type='text' class='form-control' name='c' value='$record[layar2_headline]'></td></tr>
                    <tr><th scope='row'>Keterangan Layer 2</th>               <td><input type='text' class='form-control' name='d' value='$record[layar2_keterangan]'></td></tr>
                    <tr><th scope='row'>Judul di Testimoni (layer 3)</th>                  <td><textarea class='form-control' name='e' style='height:80px'>$record[layar3_keterangan]</textarea></td></tr>
                    <tr><th scope='row'>Katerangan Layer 4</th>                    <td><input type='text' class='form-control' name='f' value='$record[layar4_keterangan]'></td></tr>   
                    <tr><th scope='row'>Judul Header box</th>               <td><input type='text' class='form-control' name='g' value='$record[header_judul]'></td></tr>           
                    <tr><th scope='row'>link URL Judul Header box</th>                 <td><input type='text' class='form-control' name='h' value='$record[header_url]'></td></tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='".base_url().$this->uri->segment(1)."/identitaswebsite'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();

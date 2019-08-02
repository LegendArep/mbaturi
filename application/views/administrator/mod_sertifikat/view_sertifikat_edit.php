<?php 
// $server = "localhost"; $username = "root"; $password = ""; $database = "db_mbaturi";
// mysql_connect($server,$username,$password) or die("Koneksi gagal");
// mysql_select_db($database) or die("Database tidak bisa dibuka");
include "koneksi.php";
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Klien Data</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/edit_sertifikat',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>";
                  // include base_url()."koneksi.php";
                  $query_select = "SELECT * FROM v_get_daftar_sertifikat WHERE id = $rows[id]";
                  $result_select = mysql_query($query_select) or die(mysql_error());
                  $rows = array();
                  while ($row = mysql_fetch_array($result_select))
                      $rows[] = $row;
                  foreach ($rows as $row) {
                  
          echo "  <input type='hidden' name='id' value='$row[id]'>
                    <tr><th width='150px' scope='row'>Nomor Sertifikat</th>    <td><input name='nomor_sertifikat' type='text' class='form-control' value='$row[id_cert_ind]'  readonly></td></tr>

                    <tr><th width='120px' scope='row'>Nama Sertifikat</th>    <td><input name='judul' type='text' class='form-control' value='$row[judul]'  readonly></td></tr>

                    <tr><th width='120px' scope='row'>Nama Klien</th>    <td><input name='nama_klien' type='text' class='form-control' value='$row[client_name_id]'  readonly></td></tr>

                    <tr><th width='120px' scope='row'>Scope</th>    <td><input name='scope' type='text' class='form-control' value='$row[scope]'  readonly></td></tr>


                    <tr><th width='120px' scope='row'>Alamat</th>    <td><textarea name='main_site' class='form-control' readonly>$row[main_site]</textarea></td></tr>

                    <tr><th width='150px'>Status</th>   
                      <td>
                      <select name='status' class='form-control' id='form-field-select-1' style='width: 150px'>";

                      $age = array("Approved"=>"1", "Suspend"=>"2", "Withdraw"=>"3", "Hide"=>"4");
                      foreach($age as $x => $x_value) {
                        if ($x_value == $row[status]) {
                          $kepilih = "selected";
                           echo "<option value='".$x_value."'".$kepilih.">".$x."</option>";   
                        } else {
                          $kepilih = "";
                           echo "<option value='".$x_value."'".$kepilih.">".$x."</option>";   
                        }
                      }
                       
            echo "     </td>
                    </tr>


                    <tr><th width='150px'>Tanggal Sertifikat</th>    
                      <td>
                        <input name='certificate_date' class='form-control date-picker' data-provide='datepicker' type='text' data-date-format='yyyy-mm-dd' style='width: 150px' value=".$row[certificate_date]." />
                      </td>
                    </tr>
                    <tr><th width='150px'>Tanggal Kadaluwarsa</th>    
                      <td>
                        <input name='expiration_date' class='form-control date-picker' data-provide='datepicker' type='text' data-date-format='yyyy-mm-dd' style='width: 150px' value=".$row[expiration_date]." />
                      </td>
                    </tr>";}



          echo"     </tbody>
                  </table>
                </div>
              
                <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Ubah</button>
                    <a href='".base_url().$this->uri->segment(1)."/sertifikat'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();




<?php 
// PENGATURAN HARI
include "koneksi.php";
// $tglToday = date('Y-m-d');
// $datetime = new DateTime('tomorrow');
// $tglBesok = $datetime->format('Y-m-d');

    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Tambah Jadwal Pelatihan</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/edit_jadwal',$attributes);
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[id_schedule]'>
                    <tr>
                      <th width='120px' scope='row'>Pelatihan</th>    
                        <td>
                          <select name='id_training' class='form-control' id='form-field-select-1'>";
                          $query_select = "SELECT * FROM training";
                          $result_select = mysql_query($query_select) or die(mysql_error());
                          $view_rows = array();
                          while ($view = mysql_fetch_array($result_select))
                              $view_rows[] = $view;
                          foreach ($view_rows as $view) {
                            if($rows["id_training"]==$view["id_training"]){
                              $selected = "selected";
                            }
                            else{
                              $selected = "";
                            }              
          echo '          <option value="' . $view['id_training'] .'" '.$selected.'>' . $view['judul'] . '</option>'; }
          echo "          </select>
                      </td>
                    </tr>

                    <tr>
                      <th width='120px' scope='row'>Tanggal Mulai</th>    
                        <td><input name='tanggal_awal' class='form-control date-picker input-icon input-icon-right' data-provide='datepicker' type='text' data-date-format='yyyy-mm-dd' placeholder='Tanggal Mulai Pelatihan' value='" . $rows[tanggal_awal] . "' />
                        </td>
                    </tr>

                    <tr>
                      <th width='120px' scope='row'>Tanggal Akhir</th>    
                        <td><input name='tanggal_akhir' class='form-control date-picker input-icon input-icon-right' data-provide='datepicker' type='text' data-date-format='yyyy-mm-dd' placeholder='Tanggal Akhir Pelatihan' value='" . $rows[tanggal_akhir] . "'/>
                        </td>
                    </tr>

                    <tr><th width='120px' scope='row'>Status</th>  <td>
                      <input type='radio'  name='status' value='1' checked>&nbsp;&nbsp;Aktif<br>
                      <input type='radio' name='status' value='2'>&nbsp;&nbsp;TIdak Aktif<br>
                    </td></tr>
 

                  </tbody>
                  </table>
                </div>";
              
             echo" <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Ubah Data</button>
                    <a href='".base_url().$this->uri->segment(1)."/jadwal'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                  </div>
            </div></div></div>";
            echo form_close();




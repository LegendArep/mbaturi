<?php
$base_url = (isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST'];
$pusat_url = $base_url."/mbaturi";
?>
    <section class="flat-row project-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="featured-single">
                        <h4>Ayo Verifikasi Sertifikatmu</h4>
                        <form action="javascript:void(0)" method="get" id="form_verifikasi">
                            <input name="nama_peserta" required="required" type="text" placeholder="Nama Peserta*" /><br> 
                            <input name="nomor_cert" required="required" type="text" placeholder="Nomor Sertifikat*" /> <span class="flat-input"><br>
<!--                                 <button name="submit" type="submit" class="flat-button" id="submit" title="Submit now" onclick="myFunction()">send messages</form> -->
                                <button onclick="open_modal()" class="btn view_data">VERIFY</button></form>
                    </div>
                </div><!-- /.col-md-6 --> 
            </div><!-- /.row -->        
        </div><!-- /.container -->   
    </section>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Data Sertifikat</h4>
      </div>
      <div class="modal-body" id="modal_certdetail">
        <table>
        <tbody>
            
                <tr>
                    <td><strong>Company Name</strong></td>
                    <td>:</td>
                    <td>PT. FATUHA AMANAH WISATA INSANI</td>
                </tr>
                <tr style="height: 15px;">
                    <td style="height: 15px;"><strong>Client section-overlaype &nbsp;</strong></td>
                    <td style="height: 15px;">:</td>
                    <td style="height: 15px;">Biro Perjalanan Wisata</td>
                </tr>
                <tr style="height: 15px;">
                    <td style="height: 15px;"><strong>Location &nbsp;</strong></td>
                    <td style="height: 15px;">:</td>
                    <td style="height: 15px;">Jl. Kawaluyaan Indah XI No. 20, Kel. Jatisari, Kec. Buah  BatuBatu, Prov Jawa Barat 40286 - Indonesia</td>
                </tr>
            </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> 

<script type="text/javascript">
    
    function open_modal(){

        var url = "get_data"

        $.ajax({
          url: url,
          data: data,
          success: success,
          dataType: dataType
        });  
          
        $('#myModal').modal('show')  
    }

</script>
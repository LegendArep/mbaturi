
    <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h1 class="title">Verifikasi Sertifikat</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumbs">
                        <ul>
                            <li class="home"><i class="fa fa-home"></i><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li>Verifikiasi Sertifikasi</li>
                        </ul>
                    </div><!-- /.breadcrumbs -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->


    <section class="flat-row project-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-post">
                        <div class="single-text1">
                            <h2>Sekilas info verifikasi sertifikasi</h2>
                            <p>Setiap sertifikat yang dikeluarkan oleh Lembaga terkait baik itu sertifikasi ISO maupun sertifikasi lainnya seluruhnya memiliki nomer seri sertifikat yang bisa di cek keabsahannya. Masukkan saja nama peserta dan nomor sertifikat untuk memulai verifikasinya. Jika Anda merasa telah melakukan sertifikasi dan mendapatkan sertifikat dari Lembaga terkait namun tidak terdata nomer serinya di veritifkasi sertifikasi ini. Silahkan kontak ke data berikut :</p>
                            <div class="project-info">
                                <h4>Kontak Pelayanan</h4>
                                <ul>
                                    <li><span class="name">Nama</span>:<span class="info">Arief N.R</span></li>
                                    <li><span class="name">Email</span>:<span class="info">arepmain@gmail.com</span></li>
                                    <li><span class="name">No. Hp</span>:<span class="info">0812-1407-1941</span></li>
                                    <li><span class="name">No. WA</span>:<span class="info">0812-1407-1941</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-6 --> 
                <div class="col-lg-6">
                    <div class="featured-single">
                        <h4>Ayo Verifikasi Sertifikatmu</h4>
                        <form action="./contact/contact-process.php" id="contactform" method="post">
                            <input name="nama_peserta" required="required" type="text" placeholder="Nama Peserta*" /><br> 
                            <input name="nomor_cert" required="required" type="text" placeholder="Nomor Sertifikat*" /> <span class="flat-input"><br>
<!--                                 <button name="submit" type="submit" class="flat-button" id="submit" title="Submit now" onclick="myFunction()">send messages</form> -->
                                <button data-toggle="modal" data-target="#myModal">send messages</form>
                    </div>
                </div><!-- /.col-md-6 --> 
            </div><!-- /.row -->        
        </div><!-- /.container -->   
    </section>

    <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Data Sertifikat</h4>
      </div>
      <div class="modal-body">
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


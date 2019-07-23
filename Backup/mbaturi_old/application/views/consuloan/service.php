<?php
        $homepage = $this->model_utama->view('homepage')->row_array();

?>
<div class="page-title parallax parallax1">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h1 class="title">Services</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumbs">
                        <ul>
 <li class="home"><i class="fa fa-home"></i><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li><a href="<?php echo base_url(); ?>service">services</a></li>
                                                    </ul>
                    </div><!-- /.breadcrumbs -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->

    <!-- Services item -->
    <section class="flat-row section-iconbox padding2 bg-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="title-section style3 left">
                        <h1 class="title"><?php echo"$homepage[layar1_headline]"; ?></h1>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="title-section padding-left50">
                        <div class="sub-title style3">
<?php echo"$homepage[layar1_keterangan]"; ?>                          </div>
                    </div>
                </div>
            </div>
            <div class="row">
              <?php
                $service = $this->model_utama->view_ordering_limit('service','id_service','DESC');
                foreach ($service->result_array() as $serv) {

                        ?>
                          <!-- SLIDE 1 -->

                <div class="col-lg-4">
                     <div class="iconbox style3">
                        <div class="box-header">
                          <img style="opacity: 0.3;" src="<?php echo"".base_url()."/asset/service/$serv[gambar]"; ?>">
                            <div class="box-icon">
                                <!-- <i class="<?php echo"$serv[icon]"; ?>"></i> -->
                            </div>
                        </div>
                        <div class="box-content">
                            <h5  class="box-title"><a href="<?php echo base_url(); ?><?php echo"service/$serv[seo_judul]"; ?>"><?php echo"$serv[judul]"; ?></a></h5>
                            <p><?php echo"$serv[isi]"; ?></p>
                        </div>
                    </div>
                </div>
                <?php $no++; }  ?>
            </div>
        </div>
    </section>

     <section class="flat-row section-testimonials2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-center">
                        <div class="symbol">
                           ​‌“
                        </div>
                        <h1 class="cd-headline clip is-full-width">
                            <span>2000+</span>
                            <span class="cd-words-wrapper">
<?php echo"$homepage[layar3_keterangan]"; ?>
                            </span>
                        </h1>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="wrap-testimonial padding-lr79">
                        <div id="testimonial-slider">
                            <ul class="slides">

                               <?php
                $testimoni = $this->model_utama->view_ordering_limit('testimoni','id_testimoni','DESC',0,3);
                foreach ($testimoni->result_array() as $tes) {

                        ?>

                          <li>
                                    <div class="testimonials style3 text-center">
                                        <div class="message">
                                            <blockquote class="whisper">
                                               "<?php echo"$tes[isi_testimoni]"; ?>"
                                            </blockquote>
                                        </div>
                                        <div class="avatar">
                                            <span class="name"><?php echo"$tes[nama_kosumen]"; ?></span><br>
                                            <div class="start">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span class="position"><?php echo"$tes[jabatan]"; ?></span>
                                        </div>
                                    </div>
                                </li>

                                <?php } ?>
                            </ul>
                        </div>

                        <div id="testimonial-carousel">
                            <ul class="slides clearfix">
                                    <?php
                $testimoni = $this->model_utama->view_ordering_limit('testimoni','id_testimoni','DESC',0,3);
                foreach ($testimoni->result_array() as $tesa) {

                        ?>
                                <li>
                                    <img alt="testimoni person" src="<?php echo"".base_url()."asset/foto_orang/$tesa[gambar]"; ?>">
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div><!-- /.wrap-testimonial -->
                </div>
            </div>
        </div>
    </section>


        <section class="flat-row v12 parallax parallax5">
            <div class="section-overlay style2"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="infomation-text padding-lr140 text-center">
<?php echo"$homepage[layar4_keterangan]"; ?>
                        </h1>
                    </div>
                </div>
            </div>
        </section>

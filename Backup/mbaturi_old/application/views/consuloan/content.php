<?php
        $homepage = $this->model_utama->view('homepage')->row_array();

?>



    <div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container slide-overlay" data-alias="classic4export" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">

            <!-- START REVOLUTION SLIDER 5.3.0.2 auto mode -->
            <div id="rev_slider_1078_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
                <div class="slotholder"></div>

                    <ul><!-- SLIDE  -->

                        <!-- SLIDE 1 -->
                 <?php
                 $no=1;
                $header = $this->model_utama->view_ordering_limit('header','id_header','DESC',0,5);
                foreach ($header->result_array() as $h) {

                        ?>



                        <!-- SLIDE 1 -->
                        <li data-index="rs-305<?php echo"$no"; ?>" data-transition="fade" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"    data-rotate="0"  data-saveperformance="off"  data-title="Ken Burns" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                           <!--  <div class="overlay">
                            </div> -->
                            <!-- MAIN IMAGE -->
                            <img src="<?php echo"".base_url()."/asset/header/$h[gambar]"; ?>"  alt=""  data-bgposition="center center" data-kenburns="off" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <!-- LAYER NR. 12 -->
                            <div class="tp-caption title-slide"
                                id="slide-3050-layer-1"
                                data-x="['left','left','left','left']" data-hoffset="['35','20','50','50']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-82','-82','-82','-82']"
                                data-fontsize="['60','60','50','33']"
                                data-lineheight="['70','70','50','35']"
                                data-fontweight="['700','700','700','700']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"

                                data-type="text"
                                data-responsive_offset="on"

                                data-frames='[{"delay":100,"speed":3000,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[10,10,10,10]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index: 16; white-space: nowrap;">
                                <?php echo"$h[heading]"; ?>
                            </div>

                             <!-- LAYER NR. 12 -->
                            <div class="tp-caption sub-title position"
                                id="slide-3050-layer-3"
                                data-x="['left','left','left','left']" data-hoffset="['35','25','50','50']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-122','-122','-122','-122']"
                                data-fontsize="['16',16','16','14']"
                                data-fontweight="['600','600','600','600']"
                                data-width="['660','660','660','300']"
                                data-height="none"
                                data-whitespace="nowrap"

                                data-type="text"
                                data-responsive_offset="on"

                                data-frames='[{"delay":1100,"speed":3000,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index: 17; white-space: nowrap;text-transform:left;">
                                <i class="fa fa-minus" aria-hidden="true"></i>&nbsp;&nbsp;
                                    <?php echo"$h[subheading]"; ?>
                                &nbsp;&nbsp;<i class="fa fa-minus" aria-hidden="true"></i>
                            </div>

                            <!-- LAYER NR. 13 -->
                            <div class="tp-caption sub-title"
                                id="slide-3050-layer-4"
                                data-x="['left','left','left','left']" data-hoffset="['35','20','50','50']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['12','12','-20,'-20']"
                                data-fontsize="['18',18','18','16']"
                                data-lineheight="['30','30','22','16']"
                                data-fontweight="['400','400','400','400']"
                                data-width="['800',800','800','450']"
                                data-height="none"
                                data-whitespace="['nowrap',normal','normal','normal']"

                                data-type="text"
                                data-responsive_offset="on"

                                data-frames='[{"delay":1100,"speed":3000,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index: 17; white-space: normal;"><?php echo"$h[keterangan]"; ?>
                            </div>

                            <a href="<?php echo"$h[url_button1]"; ?>" target="_self" class="tp-caption flat-button text-center"

                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'

                            data-x="['center','center','center','center']" data-hoffset="['-502','-400','-240','-70']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['106','106','80','50']"
                            data-fontweight="['700','700','700','700']"
                            data-width="['auto']"
                            data-height="['auto']"
                            style="z-index: 3;"><?php echo"$h[button1]"; ?>
                            </a><!-- END LAYER LINK -->

                            <!-- <a href="<?php echo"$h[url_button2]"; ?>" target="_self" class="tp-caption flat-button style2 text-center"

                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'

                            data-x="['center','center','center','center']" data-hoffset="['-318','-200','-30','-70']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['106','106','80','110']"
                            data-fontweight="['700','700','700','700']"
                            data-width="['auto']"
                            data-height="['auto']"
                            style="z-index: 3;"><?php echo"$h[buton2]"; ?>
                            </a><!-- END LAYER LINK -->
                        </li>

                       <?php $no++;
                   } ?>

                    </ul>
            </div>
    </div><!-- END REVOLUTION SLIDER -->

    <section class="flat-row section-iconbox">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="title-section padding-left50">
                        <div class="sub-title style3">
                          <?php echo"$homepage[layar1_keterangan]"; ?>                        
                      </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="title-section style3 left">
                        <h1 class="title"><?php echo"$homepage[layar1_headline]"; ?></h1>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="flat-row v4 bg-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 reponsive-onehalf">
                    <div class="title-section style2 left">
                        <h1 class="title"><?php echo"$homepage[layar2_headline]"; ?></h1>
                        <div class="sub-title">
                            <?php echo"$homepage[layar2_keterangan]"; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 reponsive-onehalf">
                    <div class="btn-showall float-right">
                        <a href="<?php echo"".base_url().""; ?>project/" class="flat-button">Show All Projects</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap-imagebox flat-carousel" data-item="5" data-nav="false" data-dots="false" data-auto="false">

              <?php
                $projects = $this->model_utama->view_ordering_limit('project','id_project','DESC',0,6);
                foreach ($projects->result_array() as $proj) {
                        ?>

                        <div class="imagebox">
                          <div class="imagebox-image">
                            <a href="<?php echo"".base_url()."project/$proj[seo_judul]"; ?>"><img src="<?php echo"".base_url()."/asset/project/$proj[gambar]"; ?>" alt="image"></a>
                          </div>
                          <div class="imagebox-content">
                            <h5 class="imagebox-title"><a href="<?php echo"".base_url()."project/$proj[seo_judul]"; ?>"><?php echo"$proj[judul]"; ?></a></h5>
                            <p class="imagebox-category"><?php echo"$proj[sub_judul]"; ?></p>
                          </div>
                        </div>
                      <?php } ?>
                    </div>
    </section>

    <section class="flat-row v6">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-center">
                        <h3 class="title">Berita Terkini</h3>
                    </div>
                </div>
            </div>
            <div class="blog-carosuel-wrap">
                <div class="blog-shortcode post-grid" >

                                            <?php
                            $no = 1;
                            $hot = $this->model_utama->view_join_two('berita','users','kategori','username','id_kategori',array('status' => 'Y'),'id_berita','DESC',0,6);
                            foreach ($hot->result_array() as $row) {
                            $tgl = tgl_indo($row['tanggal']);

                            ?>
                    <article class="entry border-shadow clearfix">
                        <div class="entry-border clearfix">
                            <div class="featured-post">
                                <a href="<?php echo"".base_url()."berita/$row[judul_seo]"; ?>"> <img src="<?php echo"".base_url()."/asset/foto_berita/$row[gambar]"; ?>" style="width: 100%; height: 250px;" alt="<?php echo"$row[judul]"; ?>" ></a>
                            </div><!-- /.feature-post -->
                            <div class="content-post">
                                <span class="category"><?php echo"$row[nama_kategori]"; ?></span>
                                <h2 class="title-post"><a href="<?php echo"".base_url()."berita/$row[judul_seo]"; ?>"><?php echo"$row[judul]"; ?></a></h2>
                                <div class="meta-data style2 clearfix">
                                    <ul class="meta-post clearfix">
                                        <li class="day-time">
                                            <span><?php echo"$tgl"; ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- /.contetn-post -->
                        </div><!-- /.entry-border -->
                    </article>
                    <?php } ?>

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

    <section class="flat-row section-testimonials2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-center">
                        <div class="symbol">
                           ​‌“
                        </div>
                        <h1 class="cd-headline clip is-full-width">

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

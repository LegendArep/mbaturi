<?php
        $homepage = $this->model_utama->view('homepage')->row_array();

?>


<div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container slide-overlay" data-alias="classic4export" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                
        <!-- START REVOLUTION SLIDER 5.3.0.2 auto mode -->
        <div id="rev_slider_1078_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
            <div class="slotholder"></div>

                <ul><!-- SLIDE  -->
                    <?php
                         $no=1;
                        $header = $this->model_utama->view_ordering_limit('header','id_header','DESC',0,5);
                        foreach ($header->result_array() as $h) {

                    ?>

                    <!-- SLIDE 2 -->
                    <li data-index="rs-305<?php echo"$no"; ?>" data-transition="fade" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"    data-rotate="0"  data-saveperformance="off"  data-title="Ken Burns" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">                        
                        <!-- <div class="overlay">
                        </div> -->
                        <!-- MAIN IMAGE -->
                        <img src="<?php echo"".base_url()."/asset/header/$h[gambar]"; ?>"  alt=""  data-bgposition="center center" data-kenburns="off" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 12 -->
                        <div class="tp-caption title-slide" 
                            id="slide-3051-layer-1" 
                            data-x="['left','left','left','left']" data-hoffset="['35','20','50','50']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['-66','-66','-66','-66']" 
                            data-fontsize="['60','60','50','33']"
                            data-lineheight="['60','60','50','35']"
                            data-fontweight="['700','700','700','700']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                 
                            data-type="text" 
                            data-responsive_offset="on"                             

                            data-frames='[{"delay":100,"speed":3000,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[10,10,10,10]"
                            data-paddingright="[30,30,30,30]"
                            data-paddingbottom="[0,0,0,0"
                            data-paddingleft="[30,30,30,30]"

                            style="z-index: 16; white-space: nowrap;" >
                                    <?php echo"$h[subheading]"; ?><br>
                                    <?php echo"$h[heading]"; ?><br>
                                    <?php echo"$h[keterangan]"; 
                                    ?>

                        </div>

                        <a href="<?php echo"$h[url_button1]"; ?>" target="_self" class="tp-caption flat-button text-center"         

                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1600,"to":"o:1;","delay":1600,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                     
                        data-x="['center','center','center','center']" data-hoffset="['-502','-400','-240','-70']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['102','102','80','40']" 
                        data-fontweight="['700','700','700','700']"
                        data-width="['auto']"
                        data-height="['auto']"
                        style="z-index: 3;"><?php echo"$h[button1]"; ?>
                        </a><!-- END LAYER LINK -->

                        <a href="<?php echo"$h[url_button2]"; ?>" target="_self" class="tp-caption flat-button style2 text-center"         

                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1600,"to":"o:1;","delay":1600,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                     
                        data-x="['center','center','center','center']" data-hoffset="['-318','-200','40','-70']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['102','102','80','120']" 
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


    
<section class="flat-row v8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">  
                    <div class="title-section style3 text-center">
                        <h1 class="title">Lembaga Kami</h1>
                    </div>          
                </div>
            </div>      
            <ul id="data-effect" class="data-effect wrap-iconbox clearfix">
                <?php
                $service = $this->model_utama->view_ordering_limit('service','id_service','DESC');
                foreach ($service->result_array() as $serv) {

                        ?>
                <li>
                    <div class="iconbox effect text-center">
                    <a href="<?php echo base_url(); echo"service/$serv[seo_judul]"; ?>">
                    <div class="box-header">
                            <div class="box-icon">
                                <img src="<?php echo"".base_url()."/asset/service/$serv[gambar]"; ?>" style="border-radius: 25px">
                            </div>
                        </div>
                        <div class="box-content">
                            <h5  class="box-title"><?php echo"$serv[judul]"; ?></h5>  
                            <p><?php echo"$serv[isi]"; ?></p> 
                        </div>
                        <div class="effecthover"></div>
                    </a>
                    </div>
                </li>
                <?php $no++; }  ?> 
            </ul>
        </div>
    </section>

    <section class="flat-row v5 parallax parallax5"> 
        <div class="section-overlay style2"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-about about-video margin-right_30">
                        <a class="fancybox" data-type="iframe" href="https://www.youtube.com/embed/2Ge1GGitzLw?autoplay=1"> 
                            <img src="<?php echo"".base_url()."/asset/foto_statis/office1.jpg"; ?>" alt="image" style="border-radius: 25px">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-about padding-left70">
                        <div class="title-section style2 color-white">
                            <h1 class="title"><?php echo"$homepage[layar1_headline]"; ?></h1>
                            <div class="sub-title">
                               <?php echo"$homepage[layar1_keterangan]"; ?>
                            </div>
                        </div>
                        <a href="halaman/tentang-kami" class="flat-button">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>  
    </section>

    <section class="flat-row padingbotom" style="padding: 100px 0px 68px;">
        <div class="container">
            <div class="row">
                 <div class="col-lg-6" style="background-color: #eceeef54; border-radius: 25px; box-shadow: 0px 16px 35px 0px rgba(0, 0, 0, 0.2); padding: 30px 20px 20px 10px;">
                     <div class="title-section style3 text-center">
                        <h1 class="title">Berita Terkini</h1>
                    </div>
                    <div class="post-wrap post-list">
                        <?php
                        $hot_news = $this->model_utama->view_join_two('berita','users','kategori','username','id_kategori',array('status' => 'Y'),'id_berita','DESC',0,3);
                        foreach ($hot_news->result_array() as $r) {
                            $tgl = tgl_indo($r['tanggal']);
                            // $judul = substr($r['judul'],0,50); 
                        ?>
                        <article class="entry border-shadow clearfix effect-animation"  data-animation="fadeInUp" data-animation-delay="0.2s" data-animation-offset="75%">
                            <div class="entry-border clearfix">
                                <div class="featured-post">
                                    <a href="<?php echo"".base_url()."berita/$r[judul_seo]"; ?>"> 
                                        <img src="<?php echo "".base_url()."asset/foto_berita/$r[gambar]"; ?>" style="width: 140px; height: 140px; object-fit: cover; padding: 20px 0px 0px 15px;" alt="Berita Terkini">
                                    </a>
                                </div><!-- /.feature-post -->
                                <div class="content-post">
                                    <li class="fa fa-calendar">
                                            <?php echo"$tgl"; ?>
                                    </li>
                                    <h2 class="title-post"><a href="<?php echo"".base_url()."berita/$r[judul_seo]"; ?>" ><font size="4"><?php echo"$r[judul]"; ?></font></a></h2>
                                    <a href="<?php echo"".base_url()."berita/$r[judul_seo]"; ?>" class="readmore">READ MORE</a>
                                </div><!-- /.contetn-post -->
                            </div><!-- /.entry-border -->
                        </article>
                        <?php } ?>
                    </div>  
                </div>
                <div class="col-lg-6" style="background-color: #eceeef54; border-radius: 25px; box-shadow: 0px 16px 35px 0px rgba(0, 0, 0, 0.2); padding: 30px 20px 20px 10px;">
                    <div class="title-section style3 text-center">
                        <h1 class="title">Jadwal Pelatihan</h1>
                    </div>
                    <div class="main-history">
                        <div class="wrap-step clearfix">
                            <a href="#"> 
                                    <img src="<?php echo "".base_url()."asset/pelatihan/pelatihan_1.jpg"; ?>" style="width: 140px; height: 140px; object-fit: cover; padding: 20px 0px 0px 15px;" alt="Berita Terkini">
                                </a>    
                            <div class=" info-step float-right">
                                <h7><i class="fa fa-calendar-check-o">&nbsp;</i>05 Agustus 2019 - 06 Agustus 2019<br></h7><h5>Training Implementing ISO 9001:2015 </h5>
                                <p align="justify">Training ISO 9001:2015 ini akan mengarahkan dan memberi kepahaman kepada peserta dalam menyiapkan dan menyusun dokumentasi yang teruji sebagai dasar penerapan dan evaluasi, serta strategi penerapan Sistem Manajemen Mutu ISO 9001:2015 bagi perusahaan yang berkomitmen menghasilkan produk dan layanan bermutu serta kinerja yang tinggi.</p>
                            </div>
                        </div>
                        <div class="wrap-step clearfix">
                            <a href="#"> 
                                    <img src="<?php echo "".base_url()."asset/pelatihan/pelatihan_2.jpg"; ?>" style="width: 140px; height: 140px; object-fit: cover; padding: 20px 0px 0px 15px;" alt="Berita Terkini">
                                </a>    
                            <div class=" info-step float-right">
                                <h7><i class="fa fa-calendar-check-o">&nbsp;</i>05 Agustus 2019 - 06 Agustus 2019<br></h7><h5>Training Awareness ISO 9001:2015 </h5>
                                <p align="justify">Seperti kita ketahui bahwa pada bulan September 2015 yang baru lalu, telah terbit versi terbaru ISO 9001, yang kita kenal dengan ISO 9001:2015. Terdapat beberapa perubahan yang cukup mendasar yaitu diperkenalkannya “risk based thinking” pada versi terbaru ini.</p>
                            </div>
                        </div>
                        <div class="wrap-step clearfix">
                            <a href="#"> 
                                    <img src="<?php echo "".base_url()."asset/pelatihan/pelatihan_3.jpg"; ?>" style="width: 140px; height: 140px; object-fit: cover; padding: 20px 0px 0px 15px;" alt="Berita Terkini">
                                </a>    
                            <div class=" info-step float-right">
                                <h7><i class="fa fa-calendar-check-o">&nbsp;</i>09 Desember 2019 - 10 Desember 2019<br></h7><h5>Training HR for Non HR</h5>
                                <p align="justify">Semua Manager, Asst Manager, Supervisor pada dasarnya dituntut untuk mampu memahami bagaimana mengelola SDM dalam area yang dipimpinnya. </p>
                            </div>
                        </div>
                        <div class="wrap-step clearfix">
                            <a href="#"> 
                                    <img src="<?php echo "".base_url()."asset/pelatihan/pelatihan_4.jpg"; ?>" style="width: 140px; height: 140px; object-fit: cover; padding: 20px 0px 0px 15px;" alt="Berita Terkini">
                                </a>    
                            <div class=" info-step float-right">
                                <h7><i class="fa fa-calendar-check-o">&nbsp;</i>10 Februari 2020 - 11 Februari 2020<br></h7><h5>Training Awareness DIS ISO 45001:2018 </h5>
                                <p align="justify">ISO 45001:2018 merupakan Standard Sistem Manajemen Kesehatan dan keselamatan kerja yang baru dirilis oleh International Organization Of Standardization pada 12 Maret 2018.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 

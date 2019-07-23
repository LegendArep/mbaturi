<!DOCTYPE HTML>
<html lang = "en">
<head>
<title><?php echo $title; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="index, follow">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="author" content="Themelokomedia">
    <meta name="robots" content="all,index,follow">
    <meta http-equiv="Content-Language" content="id-ID">
    <meta NAME="Distribution" CONTENT="Global">
    <meta NAME="Rating" CONTENT="General">
    <?php if ($this->uri->segment(1)=='berita' AND $this->uri->segment(2)=='detail'){ $rows = $this->model_utama->view_where('berita',array('judul_seo' => $this->uri->segment(3)))->row_array();

    echo '
    <meta property="og:title" content="'.$title.'" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="'.base_url().'berita/detail/'.$this->uri->segment(3).'" />
    <meta property="og:image" content="'.base_url().'asset/foto_berita/'.$rows['gambar'].'" />
    <meta property="og:description" content="'.$description.'"/>';
    } ?>
    <?php if ($this->uri->segment(1)=='project'){ $rows = $this->model_utama->view_where('project',array('seo_judul' => $this->uri->segment(2)))->row_array();
       echo '
    <meta property="og:title" content="'.$title.'" />
    <meta property="og:type" content="project" />
    <meta property="og:url" content="'.base_url().'project/'.$this->uri->segment(2).'" />
    <meta property="og:image" content="'.base_url().'asset/project/'.$rows['gambar'].'" />
    <meta property="og:description" content="'.$description.'"/>';
    } ?>

    <?php if ($this->uri->segment(1)=='service'){ $rows = $this->model_utama->view_where('service',array('seo_judul' => $this->uri->segment(2)))->row_array();
       echo '
    <meta property="og:title" content="'.$title.'" />
    <meta property="og:type" content="service" />
    <meta property="og:url" content="'.base_url().'service/'.$this->uri->segment(2).'" />
    <meta property="og:image" content="'.base_url().'asset/service/'.$rows['gambar'].'" />
    <meta property="og:description" content="'.$description.'"/>';
    } ?>

    <link rel="canonical" href="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>"/>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>asset/images/<?php echo favicon(); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/stylesheets/bootstrap.css">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/stylesheets/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/stylesheets/responsive.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/stylesheets/colors/color1.css" id="colors">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/stylesheets/animate.css">

    <!-- Animation headline Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/stylesheets/headline.css">

    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="styles.css?version=51">

    <!-- Favicon and touch icons  -->


    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->
</head>
<body class="header_sticky">
    <!-- Preloader -->
    <div id="loading-overlay">
        <div class="loader"></div>
    </div>

    <!-- Boxed -->
    <div class="boxed">

    <div class="top style2 background-661 padding-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">                      
                    <div class="wrap-top margin-top9 clearfix">
                        <div class="float-left flat-language color-white">                        
                            <ul class="unstyled">
                                <li class="current"><a href="#">Indonesia</a>
                                    <ul class="unstyled">
                                        <li class="en"><a href="#">French</a></li>
                                        <li class="ge"><a href="#">German</a></li>
                                    </ul>
                                 </li>
                            </ul>
                        </div>
                        <ul class="flat-information style2 float-left">
                            <?php
                                  $iden = $this->model_utama->view('identitas')->row_array();
                            ?>
                            <li><i class="fa fa-envelope" style="color:orange;"></i><a href="mailto:<?php echo"$iden[email]"; ?>"><?php echo"$iden[email]"; ?></a></li>
                            <li><i class="fa fa-phone" style="color:orange;"></i><a href="https://api.whatsapp.com/send?phone=<?php echo"+$iden[no_telp]"; ?>&text=Hi%20there%21">+<?php echo"$iden[no_telp]"; ?> (Abi)</a></li>
                            <li><i class="fa fa-phone" style="color:orange;"></i><a href="https://api.whatsapp.com/send?phone=+6281953554143&text=Hi%20there%21">+6281953554143 (Wiwit)</a></li>
                        </ul>
                    </div>
                </div><!-- /.col-lg-6 -->       
                <div class="col-lg-3">
                    <div class="wrap-top reponsive-none clearfix">
                        <ul class="social-links color-white float-right margin-left25 margin-top14">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>        
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.top -->


    <div class="flat-header-wrap">
        <!-- Header -->            
        <header id="header" class="header header-classic header-style2 bg-white box-shadow1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div id="logo" class="logo">
                            <h1>
                                <!-- <a href="<?php echo base_url()?>" style="color: white; text-shadow: -5px 0px black; font-family:sans-serif; ">M</a> -->
                                <a href="<?php echo base_url()?>" style="color: white; text-shadow: -5px 0px black; font-family:Pacifico; ">Mbaturi</a>
                            </h1>
                            <!-- <?php
                                  $iden = $this->model_utama->view('identitas')->row_array();
                                  $homepagea = $this->model_utama->view('homepage')->row_array();
                                  $logo = $this->model_utama->view_ordering_limit('logo','id_logo','DESC',0,1);
                                  foreach ($logo->result_array() as $row) {
                                    echo "<a href='".base_url()."' rel='home'><img  style='width:40% ! important;' src='".base_url()."asset/logo/mbaturi_black.png'/></a>";
                                  }
                            ?> -->
                        </div><!-- /.logo -->
                    </div>
                    <div class="col-lg-10">
                        <div class="flat-wrap-header">
                            <div class="nav-wrap clearfix">        
                                <nav id="mainnav" class="mainnav style2 color-93a float-left">
                                        <?php
                                           function main_menu() {
                                             $ci = & get_instance();
                                             $query = $ci->db->query("SELECT id_menu, nama_menu, link, id_parent FROM menu where aktif='Ya' AND position='Bottom' order by urutan");
                                             $menu = array('items' => array(),'parents' => array());
                                             foreach ($query->result() as $menus) {
                                               $menu['items'][$menus->id_menu] = $menus;
                                               $menu['parents'][$menus->id_parent][] = $menus->id_menu;
                                             }
                                             if ($menu) {
                                               $result = build_main_menu(0, $menu);
                                               return $result;
                                             }else{
                                               return FALSE;
                                             }
                                           }

                                           function build_main_menu($parent, $menu) {
                                             $html = "";
                                             if (isset($menu['parents'][$parent])) {
                                               if ($parent=='0'){
                                                 $html .= "<ul class='the-menu'>";
                                               }else{
                                                 $html .= " <ul class='submenu'>
                                                 ";
                                               }
                                               foreach ($menu['parents'][$parent] as $itemId) {
                                                 if (!isset($menu['parents'][$itemId])) {
                                                   if(preg_match("/^http/", $menu['items'][$itemId]->link)) {
                                                     $html .= "<li><a  href='".$menu['items'][$itemId]->link."'>".$menu['items'][$itemId]->nama_menu."</a></li>";
                                                   }else{
                                                     $html .= "<li><a href='".base_url().''.$menu['items'][$itemId]->link."'>".$menu['items'][$itemId]->nama_menu."</a></li>";
                                                   }
                                                 }
                                                 if (isset($menu['parents'][$itemId])) {
                                                   if(preg_match("/^http/", $menu['items'][$itemId]->link)) {
                                                     $html .= "<li><a  href='".$menu['items'][$itemId]->link."'><span>".$menu['items'][$itemId]->nama_menu."</span></a>";
                                                   }else{
                                                     $html .= "<li><a href='".base_url().''.$menu['items'][$itemId]->link."'><span>".$menu['items'][$itemId]->nama_menu."</span></a>";
                                                   }
                                                   $html .= build_main_menu($itemId, $menu);
                                                   $html .= "</li>";
                                                 }
                                               }
                                               $html .= "</ul>";
                                             }
                                             return $html;
                                           }
                                           echo main_menu();
                                        ?>
                                </nav><!-- /.mainnav -->  
                                <div class="top-search">                        
                                    <form action="#" id="searchform-all" method="get">
                                        <div>
                                            <input type="text" id="input-search" class="sss" placeholder="Search...">
                                            <input type="submit" id="searchsubmit">
                                        </div>
                                    </form>
                                </div>
                                <ul class="menu menu-extra style2 color-661">
                                    <li id="s" class="show-search">
                                        <a href="#search" class="flat-search"><i class="fa fa-search"></i></a>
                                    </li>
                                </ul>
                                <div class="btn-menu">
                                    <span></span>
                                </div><!-- //mobile menu button -->  
                            </div><!-- /.nav-wrap -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    
                        <?php echo $contents; ?>


    <section class="flat-row section-client bg-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flat-client" data-item="5" data-nav="true" data-dots="false" data-auto="true">

                    <?php
                    $banersid = $this->model_utama->view_ordering_limit('pasangiklan','id_pasangiklan','DESC',0,7);
                    foreach ($banersid->result_array() as $bar) {
                    ?>
                    <div class="client"><img src="<?php echo"".base_url()."/asset/foto_pasangiklan/$bar[gambar]"; ?>" alt="<?php echo"$bar[judul]"; ?>"></div>
                        <?php } ?>
                    </div><!-- /.flat-client -->
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer widget-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 reponsive-mb30">
                    <div class="widget-logo">
                        <div id="logo-footer" class="logo">
                            <!-- <a href="index.php" rel="home">
                              <?php
                              $logo = $this->model_utama->view_ordering_limit('logo','id_logo','DESC',0,1);
                              foreach ($logo->result_array() as $row) {
                                echo "<a href='".base_url()."'><img style='width:70% ! important;' src='".base_url()."asset/logo/$row[gambar]'/></a>";
                              }
                              ?>
                            </a> -->
                        </div>
                        <p><?php echo"$iden[meta_deskripsi]"; ?></p>
                        <ul class="flat-information">
                            <li><i class="fa fa-map-marker" style="color:orange;"></i><a href="#"><?php echo rtrim("$iden[alamat]","Rukan"); ?></a></li>
                            <li><i class="fa fa-phone" style="color:orange;"></i><a href="https://api.whatsapp.com/send?phone=<?php echo"+$iden[no_telp]"; ?>&text=Hi%20there%21"><?php echo"+$iden[no_telp] (Abi) <br>"; ?></a></li>
                            <li><i class="fa fa-mobile" style="color:orange;"></i><a href="https://api.whatsapp.com/send?phone=+6281953554143&text=Hi%20there%21">+6281953554143 (Wiwit)</a></li> 
                            <li><i class="fa fa-envelope" style="color:orange;"></i><a href="mailto:<?php echo"$iden[email]"; ?>"><?php echo"$iden[email]"; ?></a></li>
                        </ul>
                    </div>
                </div><!-- /.col-md-3 -->

                <div class="col-lg-3 col-sm-6 reponsive-mb30">
                    <div class="widget widget-out-link clearfix">
                        <h5 class="widget-title">Link Kami</h5>
                        <ul class="one-half">
                        <?php
                        $topmenu2 = $this->model_utama->view_where_ordering_limit('menu',array('position' => 'Bottom','aktif' => 'Ya'),'urutan','ASC',0,5);
                                    foreach ($topmenu2->result_array() as $row) {
                                    echo "<li><a href='$row[link]'>$row[nama_menu]</a></li>";
                                }
                        ?>                        
                        </ul>
                    </div>
                </div><!-- /.col-md-3 -->

                <div class="col-lg-3 col-sm-6 reponsive-mb30">
                    <div class="widget widget-recent-new">
                        <h5 class="widget-title">Kunjungan Terkini</h5>
                        <ul class="popular-new">
                        <li>
                            <?php 
                                // Total kunjungan hari ini
                                $get_tolkun = $this->model_app->tolkun_today();
                                foreach ($get_tolkun->result_array() as $row){
                                    $hitcount = $row['tolhit_today']+1;
                                }

                                // Total pengunjung hari ini
                                $get_tolpen = $this->model_app->tolpen_today();
                                foreach ($get_tolpen->result_array() as $row){
                                    $tgl_tolgan = $row['toljung_today'];
                                }

                                // Total kunjungan
                                $tolkun = $this->model_app->total_kunjungan();
                                foreach ($tolkun->result_array() as $row){
                                    $tolgan = $row['total_hits']+1;
                                }

                                // Pengunjung online
                                $get_pen_ol = $this->model_app->get_online();
                                foreach ($get_pen_ol->result_array() as $row){
                                    $pengen_ol = $row['ip_online'];
                                }

                                echo "<i class='fa fa-calendar-check-o'></i> Kunjungan hari ini : ".$hitcount."<br>
                                     <i class='fa fa-male'></i> Pengunjung hari ini : ".$tgl_tolgan."<br>".
                                     "<i class='fa fa-users'></i> Total kunjungan : ".$tolgan."<br>".
                                     "<i class='fa fa-child'></i> Pengunjung Online : ".$pengen_ol;
                                
                            ?>
                        </li>
                        </ul>
                    </div>
                </div><!-- /.col-md-3 -->

               <div class="col-lg-3 col-sm-6 reponsive-mb30">
                    <div class="widget widget-letter">
                        <h5 class="widget-title">Newsletter</h5>
                        <p class="info-text">Berlangganan dengan kami dan dapatkan pemberitahuan tentang pembaruan baru, dll.</p>
                        <form  class="flat-mailchimp" method="post" action="<?php echo base_url(); ?>daftaremail/kirim" >
                            <div class="field clearfix" id="subscribe-content">
                                <p class="wrap-input-email">
                                    <input name="a" type="text" tabindex="2" id="subscribe-email" name="subscribe-email" placeholder="Enter Your Email">
                                </p>
                                <p class="wrap-btn">
                                    <button type="submit" name="submit" id="subscribe-button" class="flat-button subscribe-submit" title="Subscribe now">SUBSCRIBE</button>
                                </p>
                            </div>

                        </form>
                    </div>
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </footer>

    <?php
              $this->model_utama->kunjungan();
?>  <!-- Bottom -->
    <div class="bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="copyright">
                        <p>@<?php echo"".date('Y').""; ?> <a href="#">Mbaturi Konsultan</a>. All rights reserved.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <ul class="social-links style2 text-right">
                        <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter-square  "></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                </div>
            </div>
        </div><!-- /.container -->
    </div><!-- bottom -->

    <!-- Go Top -->
    <a class="go-top">
        <i class="fa fa-angle-up"></i>
    </a>
    </div>

    <!-- Javascript -->
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/javascript/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/javascript/tether.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/javascript/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/javascript/jquery.easing.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/javascript/jquery-waypoints.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/javascript/jquery-validate.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/javascript/jquery.cookie.js"></script>

    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/javascript/owl.carousel.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/javascript/jquery.flexslider-min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/javascript/headline.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/javascript/parallax.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/javascript/modern.custom.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/javascript/jquery.hoverdir.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/javascript/jquery.fancybox.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/javascript/gmap3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtwK1Hd3iMGyF6ffJSRK7I_STNEXxPdcQ&region=GB"></script>


    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/javascript/main.js"></script>

    <!-- Revolution Slider -->

    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/revolution/js/slider.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
</body>
</html>

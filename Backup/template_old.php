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

    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 reponsive-onehalf">
                    <p class="info-text"><i class="fa fa-clock-o"></i> Jam Operasional: <font color="orange">Senin-Jum'at / 09:00-17:00</font></p>
                </div>
                <div class="col-lg-6 col-sm-6 reponsive-onehalf">
                    <div class="wrap-top">
                        <ul class="flat-top social-links">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                        <div class="flat-top flat-language">
                            <ul class="unstyled">
                                <li class="current"><a href="#">Indonesia</a>
                                    <ul class="unstyled">
                                        <li class="en"><a href="#">English</a></li>
                                        <li class="ge"><a href="#">French</a></li>
                                    </ul>
                                 </li>
                            </ul>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="flat-header-wrap">
        <!-- Header -->
        <div class="header widget-header clearfix">
            <div class="container">
                <div class="header-wrap clearfix">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div id="logo" class="logo">
                                <a href="index.php" rel="home">
                                  <?php
                                  $iden = $this->model_utama->view('identitas')->row_array();
                                  $homepagea = $this->model_utama->view('homepage')->row_array();
                                  $logo = $this->model_utama->view_ordering_limit('logo','id_logo','DESC',0,1);
                                  foreach ($logo->result_array() as $row) {
                                    echo "<a href='".base_url()."'><img  style='width:100% ! important;' src='".base_url()."asset/logo/mbaturi_black.png'/></a>";
                                  }
                                  ?>
                                </a>
                            </div><!-- /.logo -->
                        </div>
                        <div class="col-lg-10 col-md-12 col-sm-12">
                            <div class="wrap-widget-header clearfix">
                                <aside class="widget widget-info">
                                    <div class="textwidget clearfix">
                                        <div class="info-icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="info-text">
                                       <h6><?php echo"+$iden[no_telp] (Abi) <br>
                                                      +6281953554143 (Wiwit)"; ?></h6>
                                            <p><?php echo"$iden[email]"; ?></p>
                                        </div>
                                    </div>
                                </aside>
                                <aside class="widget widget-info">
                                      <div class="textwidget clearfix">
                                          <div class="info-icon">
                                              <i class="fa fa-map-marker"></i>
                                          </div>
                                          <div class="info-text">
                                              <?php echo"$iden[alamat]"; ?>
                                          </div>
                                      </div>
                                  </aside>
                                <br><br>
                                <br><br>
                                <aside  class="widget widget-info">
                                    <div class="btn-click">
                                        <!-- <a href="<?php echo"$homepagea[header_url]"; ?>" class="flat-button"><?php echo"$homepagea[header_judul]"; ?></a> -->
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.header-wrap -->
            </div>
        </div>
        <!-- /.header -->

        <header id="header" class="header header-classic header-style1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="flat-wrap-header">
                            <div class="nav-wrap clearfix">
<!--                             	<img class="img-responsive retina-logo" style=width:15% ! important; src='<?php echo base_url(); ?>asset/logo/mbaturi_black.png' alt="Era Konsultan" style="display:none;"> -->
                            </div><!-- /.nav-wrap -->
                            <div class="top-search">
                               <?php echo"".form_open('berita/index').""; ?>
                                    <div>
                                        <input type="text" name="kata" id="input-search" class="sss" placeholder="Search...">
                                        <input type="submit" id="searchsubmit">
                                    </div>
                                </form>
                            </div>

                            <ul class="menu menu-extra">
                                <li id="s" class="show-search">
                                    <a href="#search" class="flat-search"><i class="fa fa-search"></i></a>
                                </li>
                            </ul>
                            <div class="btn-menu">
                                <span></span>
                            </div><!-- //mobile menu button -->
                            <nav id="mainnav" class="mainnav">
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
                            <a href="index.php" rel="home">
                              <?php
                              $logo = $this->model_utama->view_ordering_limit('logo','id_logo','DESC',0,1);
                              foreach ($logo->result_array() as $row) {
                                echo "<a href='".base_url()."'><img src='".base_url()."asset/logo/$row[gambar]'/></a>";
                              }
                              ?>
                            </a>
                        </div>
                        <p><?php echo"$iden[meta_deskripsi]"; ?></p>
                        <ul class="flat-information">
                            <li><i class="fa fa-map-marker"></i><a href="#"><?php echo rtrim("$iden[alamat]","Rukan"); ?></a></li>
                            <li><i class="fa fa-phone"></i><a href="#"><?php echo"$iden[no_telp]"; ?></a></li>
                            <li><i class="fa fa-envelope"></i><a href="#"><?php echo"$iden[email]"; ?></a></li>
                        </ul>
                    </div>
                </div><!-- /.col-md-3 -->

                <div class="col-lg-3 col-sm-6 reponsive-mb30">
                    <div class="widget widget-out-link clearfix">
                        <h5 class="widget-title">Link Kami</h5>
                        <ul class="one-half">
<?php
$topmenu2 = $this->model_utama->view_where_ordering_limit('menu',array('position' => 'Top','aktif' => 'Ya'),'urutan','ASC',0,5);
            foreach ($topmenu2->result_array() as $row) {
            echo "<li><a href='$row[link]'>$row[nama_menu]</a></li>";
        }
        ?>                        </ul>
                        <ul class="one-half">
<?php
$topmenu3 = $this->model_utama->view_where_ordering_limit('menu',array('position' => 'Top','aktif' => 'Ya'),'urutan','ASC',5,5);
            foreach ($topmenu3->result_array() as $rowas) {
            echo "<li><a href='$rowas[link]'>$rowas[nama_menu]</a></li>";
        }
        ?>                            </ul>
                    </div>
                </div><!-- /.col-md-3 -->

                <div class="col-lg-3 col-sm-6 reponsive-mb30">
                    <div class="widget widget-recent-new">
                        <h5 class="widget-title">Berita Terkini</h5>
                        <ul class="popular-new">
                                                                     <?php
                            $no = 1;
                            $hota = $this->model_utama->view_join_two('berita','users','kategori','username','id_kategori',array('status' => 'Y'),'id_berita','DESC',0,2);
                            foreach ($hota->result_array() as $rowasd) {
                            $tgl = tgl_indo($rowasd['tanggal']);

                            ?>
   <li>
                                <div class="text">
                                    <h6><a href="<?php echo"".base_url()."berita/$rowasd[judul_seo]"; ?>"><?php echo"$rowasd[judul]"; ?></a></h6>
                                    <span><?php echo"$tgl"; ?></span>
                                </div>
                            </li>
                            <?php } ?>
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
                        <p>@<?php echo"".date('Y').""; ?> <a href="#">Total Konsultan</a>. All rights reserved.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <ul class="social-links style2 text-right">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
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




    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/javascript/main.js"></script>

    <!-- Revolution Slider -->
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/javascript/jquery.fancybox.js"></script>

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

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>EKUALGROUP - VERIFIKASI SERTIFIKAT</title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Volvox - Responsive HTML5 Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" type="image/png" href="/favicon/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,700,800,900" rel="stylesheet" type="text/css">


    <!-- Libs CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/streamline-icon.css" rel="stylesheet" />
    <link href="assets/css/v-nav-menu.css" rel="stylesheet" />
    <link href="assets/css/v-portfolio.css" rel="stylesheet" />
    <link href="assets/css/v-blog.css" rel="stylesheet" />
    <link href="assets/css/v-animation.css" rel="stylesheet" />
    <link href="assets/css/v-bg-stylish.css" rel="stylesheet" />
    <link href="assets/css/v-shortcodes.css" rel="stylesheet" />
    <link href="assets/css/theme-responsive.css" rel="stylesheet" />
    <link href="assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet" />
    <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />

    <!-- Current Page CSS -->
    <link href="assets/plugins/rs-plugin/css/settings.css" rel="stylesheet" />
    <link href="assets/plugins/rs-plugin/css/custom-captions.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>

    <!--Header-->
    <div class="header-container">

        <!--Header Top-->
        <header class="header-top">
            <div class="container">
                <div class="header-top-info">
                    <ul>
                        <li><i class="fa fa-phone"></i>Call us: <a href="tel:021-296 204 75"><strong>021-296 204 75</strong></a> </li>
                        <li><a href="mailto:"><i class="fa fa-envelope-o"></i>info@ekualgroup.com</a> </li>
                    </ul>
                </div>

                <ul class="social-icons standard">

                    <li class="twitter"><a href="https://twitter.com/ekual_indonesia" target="_blank"><i class="fa fa-twitter"></i><i class="fa fa-twitter"></i></a></li>
                    <li class="facebook"><a href="https://www.facebook.com/ekualgroup" target="_blank"><i class="fa fa-facebook"></i><i class="fa fa-facebook"></i></a></li>
                    <li class="linkedin"><a href="https://www.linkedin.com/company/13380151/" target="_blank"><i class="fa fa-linkedin"></i><i class="fa fa-linkedin"></i></a></li>
                    <li class="whatsapps"><a href="https://api.whatsapp.com/send?phone=6281298606997&amp;text=Hallo Ekual group" target="_blank"><i class="fa fa-whatsapp"></i><i class="fa fa-whatsapp"></i></a></li>
                    <li class="instagram"><a href="https://www.instagram.com/ekual.group/" target="_blank"><i class="fa fa-instagram"></i><i class="fa fa-instagram"></i></a></li>

                </ul>
                <nav class="header-top-menu std-menu">
                    <ul class="menu nav-pills nav-main">

                                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle m-item" data-toggle="dropdown"><i class="fa fa-lock"></i>Login</a>
                            <ul class="dropdown-menu animated fadeInDownSmall" style="z-index: 10000000">
                                <li>
                                    <div class="col-md-12">
                                        <form class="login-form" method="post" action="http://127.0.0.1:8000/id/login" style="width: 250px;">
                                            <input type="hidden" name="_token" value="B8z0gbBcMBVHifkx0bIBauodwJjDfLmhSbiYfxVu">
                                            <input type="hidden" name="p" value="f">

                                            <div class="form-group name">
                                                <input type="text" class="form-control" placeholder="Nama pengguna" name="username">
                                            </div>
                                            <div class="form-group password">
                                                <input type="password" class="form-control" placeholder="Kata Sandi" name="password">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Masuk</button>
                                            <ul>
                                                <li><a href="http://127.0.0.1:8000/id/password/reset">Lupa Kata sandi?</a></li>
                                            </ul>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        

                        <!-- <li class="m-item"><a href="/agent/login">Login</a></li> -->
                        
                        <li class="dropdown m-item">
                            <a class="dropdown-toggle" href="#">Language <i class="fa fa-caret-down"></i></a>

                            <ul class="dropdown-menu" style="z-index: 10000000">
                                                            <li class="lang-select active">
                                    <a href="/id"><img alt="" style="width: 30px;" src="/images/flags_large/id.png">id</a>
                                </li>
                                                            <li class="lang-select ">
                                    <a href="/en"><img alt="" style="width: 30px;" src="/images/flags_large/en.png">en</a>
                                </li>
                                                        </ul>
                        </li>
                    </ul>
                </nav>
            </div>
         </header>
        <!--End Header Top-->

        <header class="header fixed clearfix">

            <div class="container">

                <!--Site Logo-->
                <div class="logo">
                    <a href="index.html">
                        <img alt="Volvox" src="/assets/img/logo.png" data-logo-height="35">
                    </a>
                </div>
                <!--End Site Logo-->

                <div class="navbar-collapse nav-main-collapse collapse">

                    <!--Header Search-->
                    <div class="search" id="headerSearch">
                        <a href="#" id="headerSearchOpen"><i class="fa fa-search"></i></a>
                        <div class="search-input">
                            <form id="headerSearchForm" action="#" method="get">
                                <div class="input-group">
                                    <input type="text" class="form-control search" name="q" id="q" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form>
                            <span class="v-arrow-wrap"><span class="v-arrow-inner"></span></span>
                        </div>
                    </div>
                    <!--End Header Search-->
                    <!--Main Menu-->
                    <?php include "koneksi.php";
                    $menu = "SELECT * from kk_pages 
                    INNER JOIN kk_page_descriptions ON kk_pages.id = kk_page_descriptions.page_id
                    WHERE kk_pages.jenis=1
                    GROUP BY page_id";
                    $result_select = mysql_query($menu) or die(mysql_error());
                    $header_menu = array();
                    while($row = mysql_fetch_array($result_select))
                        $header_menu[] = $row;

                    echo ' <nav class="nav-main mega-menu">
                        <ul class="nav nav-pills nav-main" id="mainMenu">
                            ';

                        echo '<li>
                                <a href="/">Home</a>
                            </li>';

                        echo'
                            <li class="dropdown">
                            <a class="dropdown-toggle menu-icon" href="#">Layanan<i class="fa fa-caret-down"></i></a>

                            <ul class="dropdown-menu">
                                <li class="">
                                <a href="/equal-assurance">Equal Assurance</a>
                                </li>

                                <li class="">
                                <a href="/ekual-sertifikasi">Ekual Sertifikasi</a>
                                </li>

                                <li class="">
                                <a href="/ekualsys">Ekualsys</a>
                                </li>

                                <li class="">
                                <a href="/ekual-training">Ekual Training</a>
                                </li>
                            </ul>

                            </li>
                        ';

                        foreach ($header_menu as $row) {
                        echo '<li>
                                <a href="'.$row['slug'].'">'.$row['name'].'</a>
                            </li>';
                    }

                    echo'</ul>
                    </nav>';
                

                    ?>
                   
                    <!--End Main Menu-->
                </div>
                <button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <!--<span class="v-header-shadow"></span>-->
        </header>
    </div>
    <!--End Header-->

    <div id="container">
        <!-- PAGE HEADER -->
        <div class="v-page-heading v-bg-stylish v-bg-stylish-v4">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-text">
                            <h1 class="entry-title">Verifikasi Sertifikat</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">Verifikasi Sertifikat</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="v-page-wrap no-bottom-spacing">
            
            <div class="container">
                <div class="row">
                    <!-- FORM VERIFIKASI -->
                    <div class="col-sm-6">

                        <div class="v-heading-v2">
                            <h3>Verifikasi Sertifikat</h3>
                        </div>

                        <form action="certChk.php" class="form-horizontal form-bordered"  method="post" accept-charset="utf-8">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">Company Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Company Name" id="keywordIName" name="keywordName">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">No. Certificate</label>
                                 <div class="col-md-6">
                                        <input type="text"  id="keywordNum" data-plugin-masked-input data-input-mask="aaa-aaa9999" placeholder="ERA-HTL-1001" class="form-control" name="keywordNum">
                                </div>
                            </div>

                            <button name="submit" type="submit" id="Button1" class="btn v-btn v-btn-default v-small-button"><i class="fa fa-check"></i>VERIFY</button>

                        </form> 
                    </div>  

            <?php include "koneksi.php";
            @$name = $_POST['keywordName']; //get the nama value from form
            @$certNum = $_POST['keywordNum']; //get the nama value from form
            @$Id_token = $_GET['keywordNumt']; //get the nama value from form

            @$type_iso = array(
                "1" => array (
                    "logo" => 'htl',
                    "mark" => 'PERMEN PAREKRAF No.53 Tahun 2013 Tentang STANDAR USAHA HOTEL',
                    "litword" => 'HTL',
                    "word" => 'STANDAR USAHA HOTEL<br>&nbsp;'
                ),

                "2" => array (
                    "logo" => 'jpw',
                    "mark" => 'PERMEN PAREKRAF No.4 Tahun 2014 Tentang STANDAR USAHA JASA PERJALANAN WISATA',
                    "litword" => 'JPW',
                    "word" => 'STANDAR USAHA JASA PERJALANAN WISATA<br>&nbsp;'
                ),

                "3" => array (
                    "logo" => 'dis',
                    "mark" => 'PERMEN PAREKRAF No.20 Tahun 2014 Tentang STANDAR USAHA DISKOTIK',
                    "litword" => 'DIS',
                    "word" => 'STANDAR USAHA DISKOTIK'
                ),

                "4" => array (
                    "logo" => 'klb',
                    "mark" => 'PERMEN PAREKRAF No.21 Tahun 2014 Tentang STANDAR USAHA KELAB MALAM',
                    "litword" => 'KLB',
                    "word" => 'STANDAR USAHA KELAB MALAM<br>&nbsp;'
                ),

                "5" => array (
                    "logo" => 'res',
                    "mark" => 'PERMEN PAREKRAF No.11 Tahun 2014 Tentang STANDAR USAHA RESTORAN',
                    "litword" => 'RES',
                    "word" => 'STANDAR USAHA RESTORAN<br>&nbsp;'

                )
            );

              $status = array('1'=>'Approved',
                '2'=>'Suspend',
                '3'=>'Withdraw',
                '4'=>'Hide',
                '5'=>'Pending Condition');

            $cert_query = array('1'=>'OK',
                '2'=>'500 Internal Server Error',
                '3'=>'Maaf, data tidak ditemukan!',
                '4'=>'Mohon masukan Data Anda.');

            $s = "SELECT * from kk_daftar_cert_lsu where id_cert_ind ='$certNum' "; //query to get the search result
            $result2 = mysql_query($s);
            $dataChkCert = mysql_fetch_array($result2);
            $q = "SELECT * from kk_daftar_client_lsu where (id_client_ind = \"$dataChkCert[id_client_ind]\" AND client_name_id =\"$name\") OR id_token =\"$Id_token\" ";
            // echo $q;
            $result = mysql_query($q); //execute the query $q
            $kk_daftar_cert_lsu    = 'kk_daftar_cert_lsu';
            $kk_daftar_client_lsu     = 'kk_daftar_client_lsu';

            if (mysql_num_rows($result) < 1) {
                $kk_daftar_cert_lsu    = 'kk_daftar_cert_lsu2';
                $kk_daftar_client_lsu     = 'kk_daftar_client_lsu2';
                $sdt = "SELECT * from $kk_daftar_cert_lsu where id_cert_ind ='$certNum' "; //query to get the search result
                $resultdt = mysql_query($sdt);
                $dataChkCertdt = mysql_fetch_array($resultdt);
                $qdt = "SELECT * from $kk_daftar_client_lsu where (id_client_ind = \"$dataChkCertdt[id_client_ind]\" AND client_name_id =\"$name\") OR id_token =\"$Id_token\" ";
                // echo $qdt;
                $result = mysql_query($qdt); //execute the query $q

            }
                if (mysql_num_rows($result) > 0 ) {
                $data = mysql_fetch_array($result);
                // echo 'status : '.$data["status_client"];
                if ($data["status_client"] == '1'){
                    if (!empty($data["logo"])){
                        echo '
                                <div ><img src="images/clients/logo/'.$data["logo"].'" style="height:41px;width:164px;" />
                                </div>';
                    }
                    echo '
                    <!-- HASIL VERIFIKASI -->
                    <div class="col-md-6">
                        <h1>Client Information :</h1>
                            <table>
                            <tbody>
                            <tr>
                            <td><strong>Company Name</strong></td>
                            <td>:</td>
                            <td>'.$data["client_name_id"].'</td>
                            </tr>
                            <tr style="height: 15px;">
                            <td style="height: 15px;"><strong>Client Scope &nbsp;</strong></td>
                            <td style="height: 15px;">:</td>
                            <td style="height: 15px;">'.$data["scope"].'</td>
                            </tr>
                            <tr style="height: 15px;">
                            <td style="height: 15px;"><strong>Location &nbsp;</strong></td>
                            <td style="height: 15px;">:</td>
                            <td style="height: 15px;">'.$data["main_site"].'</td>
                            </tr>
                            </tbody>
                            </table>
                    ';


                    $qCert = "SELECT * from $kk_daftar_cert_lsu where id_client_ind = '$data[id_client_ind]' ORDER BY certificate_date, type_iso "; //query to get the search result
                    $resultCert = mysql_query($qCert); //execute the query $q
                    $line = 0;
                    while ($dataCert = mysql_fetch_array($resultCert)) {
                        $line++;
                        $iso['type_iso'][$line]             = $dataCert['type_iso'];
                        $iso['id_cert_ind'][$line]          = $dataCert['id_cert_ind'];
                        $iso['scope'][$line]     = $dataCert['scope'];
                        $iso['certificate_date'][$line]     = $dataCert['certificate_date'];
                        $iso['expiration_date'][$line]      = $dataCert['expiration_date'];
                        $iso['status'][$line]      = $dataCert['status'];
                        // echo '<a href="images/clients/cert/'.$dataCert['cert_scan'].'" target="_blank" title="click here to open this file">'.$dataCert['id_cert_ind'].'</a>';
                    }

                    echo '
                   </br>
                   </br>
                    ';

                    echo '
                        <div class="table-responsive">
                            <table class="table table-hover ">
                              <thead>
                                <tr>
                                  <th scope="col">Certificate Number(s)</th>
                                  <th scope="col">Certification Criteria</th>
                                  <th scope="col">Certified Date</th>
                                  <th scope="col">Expiration Date</th>
                                  <th scope="col">Status</th>
                                </tr>
                              </thead>
                              <tbody>
                                ';


                                for ($i = 1; $i <= $line; $i++) {
                                 if ($iso['status'][$i] != '4'){
                                    $no_cert = $iso['id_cert_ind'][$i];
                                echo '<tr>
                                  <th scope="row">'.$no_cert.'</th>
                                  <td>'.$type_iso[$iso['type_iso'][$i]]["mark"].'</td>
                                  <td>'.date_format(date_create($iso['certificate_date'][$i]), "d M Y" ).'</td>
                                  <td>'.date_format(date_create($iso['expiration_date'][$i]), "d M Y" ).'</td>';
                                  if ($iso['status'][$i]=='5'){
                                  echo'<td><span class="v-menu-item-info bg-danger">';
                                   }else{
                                     echo'<td><span class="v-menu-item-info bg-success">';
                                 }
                                echo $status[$iso['status'][$i]];
                                echo '</span></td>';
                                echo'</tr>
                              
                    ';

                        }
                    }
                }
            }

                  echo'</tbody>
                </table>
            </div>';

        // GENERATE TEXT TO IMAGE

        $input_text = "No. Certificate = ".$no_cert;
            $width = 600;
            $height = 311;
            
            $textImage = imagecreate($width, $height);
            $color = imagecolorallocate($textImage, 0, 0, 0);
            imagecolortransparent($textImage, $color);

            // kiri kanan
            imagestring($textImage, 5, 140, 5, $input_text, 0xFFFFFF);
            
            
            // create background image layer
            $background = imagecreatefromjpeg('images/ekual_cert/test.jpeg');
            
            // Merge background image and text image layers
            imagecopymerge($background, $textImage, 15, 270, 0, 0, $width, $height, 100);
            
            
            $output = imagecreatetruecolor($width, $height);
            imagecopy($output, $background, 0, 0, 0, 0, $width, $height);
            
            
            ob_start();
            imagepng($output);
            printf('<img id="output" src="data:image/png;base64,%s" style="height: 250px;" />', base64_encode(ob_get_clean()));



            ?>


                    </div>
                </div><!-- row -->
            </div><!-- container-->

            <div class="container">
                <div class="v-spacer col-sm-12 v-height-standard"></div>
            </div>

        </div><!--v-page-wrap no-bottom-spacing-->



        <!--Footer-Wrap-->
        <div class="footer-wrap">
            <footer>
                <div class="container">
                    <div class="row">

                         <div class="col-sm-3">
                            <section class="widget">
                                <a href="{{ LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(),URL::to( '/' )) }}">

                                    <img alt="raymaid" src="assets/img/logo-white.png" style="height: 40px; margin-bottom: 20px;">
                                </a>
                                <p style="text-align: justify;"></p>
                            </section>
                        </div>     

                        <div class="col-sm-3">
                            <div class="footer-contact-info">
                                <section class="widget">
                                    <div class="widget-heading">
                                        <h4>OUR CONTACT</h4>
                                        <div class="horizontal-break"></div>
                                    </div>
                                    <ul>
                                        <p><i class="fa fa-building"></i>EKUAL GROUP</p>
                                        <li>
                                            <p><i class="fa fa-map-marker" style="text-align: justify;"></i>Kompleks Emerald UB-18, Sumarecon Bekasi Jalan Boulevard Selatan Bekasi Utara 17124 - Indonesia</p>
                                        </li>
                                        <li>
                                            <p><i class="fa fa-envelope-o"></i><strong>Email:</strong> <a href="mailto:">info@ekualgroup.com</a>
                                            </p>
                                        </li>
                                        <li>
                                            <p><i class="fa fa-phone"></i><strong>Phone:</strong> <a href="tel:021-296 204 75">021-296 204 75</a></p>
                                        </li>

                                    </ul>
                                    <br>

                                    <ul class="social-icons standard">
                                        <li class="twitter"><a href="https://twitter.com/ekual_indonesia" target="_blank"><i class="fa fa-twitter"></i><i class="fa fa-twitter"></i></a></li>
                                        <li class="facebook"><a href="https://www.facebook.com/ekualgroup" target="_blank"><i class="fa fa-facebook"></i><i class="fa fa-facebook"></i></a></li>
                                        <li class="linkedin"><a href="https://www.linkedin.com/company/13380151/" target="_blank"><i class="fa fa-linkedin"></i><i class="fa fa-linkedin"></i></a></li>
                                        <li class="whatsapps"><a href="https://api.whatsapp.com/send?phone=6281298606997&amp;text=Hallo Ekual group" target="_blank"><i class="fa fa-whatsapp"></i><i class="fa fa-whatsapp"></i></a></li>

                                    </ul>



                                </section>
                            </div>
                        </div>


                        <!-- Recent Post -->
                        <?php include "koneksi.php";
                         $recent_post = "SELECT * from kk_news
                         INNER JOIN kk_news_descriptions ON kk_news.id = kk_news_descriptions.news_id
                         WHERE kk_news.status=1
                         GROUP BY news_id";
                            $result_select = mysql_query($recent_post) or die(mysql_error());
                            $recent_post = array();
                            while($row = mysql_fetch_array($result_select))
                            $recent_post[] = $row;

                                echo'<div class="col-sm-3">
                                    <section class="widget v-recent-entry-widget">
                                        <div class="widget-heading">
                                            <h4>Recent Posts</h4>
                                        </div>
                                        <ul>';
                                    $i = 0;
                                    foreach ($recent_post as $post) {
                                    if(++$i > 4) break;
                                        echo'<li>
                                                        <a href="news/'.$post['slug'].'">'.$post['title'].'</a>
                                                        <span class="post-date">'.date('l', strtotime($post['published_on'])).' - '.date('n', strtotime($post['published_on'])).' '.date('M', strtotime($post['published_on'])).' '.date('Y', strtotime($post['published_on'])).'</span>
                                            </li>';
                                    }
                                echo'</ul>
                                    </section>
                                </div>';
                        ?>


                        <!-- Google Map -->
                        <div class="col-sm-3">
                            <div class="footer-contact-info">
                                <section class="widget">
                                    <div class="widget-heading">
                                        <h4>OUR SITES</h4>
                                        <div class="horizontal-break"></div>
                                    </div>
                                    <ul>

                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7932.573430584826!2d107.0074072706129!3d-6.225876898070781!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x27d261a376925e33!2sPT%3E+ERA+KUALITAS+INDONESIA!5e0!3m2!1sid!2sid!4v1516258235996" width="300px" height="220px" frameborder="0" style="border:0" allowfullscreen=""></iframe>





                            </div>
                            </section>
                        </div>    
                        <!-- End Google Map -->

                    </div>
                </div>
            </footer>
             <?php include "koneksi.php";
                    $footer = "SELECT * from kk_pages 
                    INNER JOIN kk_page_descriptions ON kk_pages.id = kk_page_descriptions.page_id
                    WHERE kk_pages.jenis=1
                    GROUP BY page_id";
                    $result_select = mysql_query($footer) or die(mysql_error());
                    $footer_menu = array();
                    while($row = mysql_fetch_array($result_select))
                        $footer_menu[] = $row;


                    echo '<div class="copyright">
                        <div class="container">
                            <p>Copyright © 2017 PT. Era Kualitas Indonesia. All Rights Reserved</br>Powered by Ekualsys</p>
                            <nav class="footer-menu std-menu">
                                <ul class="menu">';
                                    foreach ($footer_menu as $row) {
                                echo '<li>
                                        <a href="'.$row['slug'].'">'.$row['name'].'</a>
                                    </li>';
                                    }
            ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!--End Footer-Wrap-->
    </div>

    <!--// BACK TO TOP //-->
    <div id="back-to-top" class="animate-top"><i class="fa fa-angle-up"></i></div>

     <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/58074451cfdf421cf96b3a3b/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
    <!--End of Tawk.to Script-->

    <!-- Libs -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui-1.10.2.custom.min.js"></script>
    <script src="assets/js/jquery.flexslider-min.js"></script>
    <script src="assets/js/jquery.easing.js"></script>
    <script src="assets/js/jquery.fitvids.js"></script>
    <script src="assets/js/jquery.carouFredSel.min.js"></script>
    <script src="assets/js/jquery.validate.js"></script>
    <script src="assets/js/theme-plugins.js"></script>
    <script src="assets/js/jquery.isotope.min.js"></script>
    <script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/jquery.maskedinput.js"></script>
    <script src="assets/js/view.min.js?auto"></script>
    <script src="assets/js/theme-core.js"></script>
    <script src="assets/js/theme-form-element.js"></script>

</body>
</html>

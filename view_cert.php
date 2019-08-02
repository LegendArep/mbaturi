<?php
include "koneksi.php";
$id = $_GET['id'];
$result = mysql_query("SELECT * FROM v_get_daftar_sertifikat WHERE id =$id");
while ($row = mysql_fetch_array($result)){
?>
<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=UTF-8">
    <style type="text/css">
      <!--
      span.cls_007{
        font-family:"Cambria Math",serif;
        font-size:18.9px;
        color:rgb(0,0,0);
        font-weight:normal;
        font-style:normal;
        text-decoration: none}
      div.cls_007{
        font-family:"Cambria Math",serif;
        font-size:18.9px;
        color:rgb(0,0,0);
        font-weight:normal;
        font-style:normal;
        text-decoration: none}
      span.cls_006{
        font-family:"Mongolian Baiti",serif;
        font-size:36.0px;
        color:rgb(0,0,0);
        font-weight:normal;
        font-style:normal;
        text-decoration: none}
      div.cls_006{
        font-family:"Mongolian Baiti",serif;
        font-size:36.0px;
        color:rgb(0,0,0);
        font-weight:normal;
        font-style:normal;
        text-decoration: none}
      span.cls_008{
        font-family:Arial,serif;
        font-size:12.8px;
        color:rgb(0,0,0);
        font-weight:normal;
        font-style:normal;
        text-decoration: none}
      div.cls_008{
        font-family:Arial,serif;
        font-size:12.8px;
        color:rgb(0,0,0);
        font-weight:normal;
        font-style:normal;
        text-decoration: none}
      span.cls_005{
        font-family:"Bookman Old Style",serif;
        font-size:11.9px;
        color:rgb(0,0,0);
        font-weight:normal;
        font-style:normal;
        text-decoration: none}
      div.cls_005{
        font-family:"Bookman Old Style",serif;
        font-size:11.9px;
        color:rgb(0,0,0);
        font-weight:normal;
        font-style:normal;
        text-decoration: none}
      span.cls_004{
        font-family:"Bookman Old Style",serif;
        font-size:16.2px;
        color:rgb(0,0,0);
        font-weight:normal;
        font-style:normal;
        text-decoration: none}
      div.cls_004{
        font-family:"Bookman Old Style",serif;
        font-size:16.2px;
        color:rgb(0,0,0);
        font-weight:normal;
        font-style:normal;
        text-decoration: none}
      span.cls_003{
        font-family:"Bookman Old Style",serif;
        font-size:11.2px;
        color:rgb(0,0,0);
        font-weight:normal;
        font-style:normal;
        text-decoration: none}
      div.cls_003{
        font-family:"Bookman Old Style",serif;
        font-size:11.2px;
        color:rgb(0,0,0);
        font-weight:normal;
        font-style:normal;
        text-decoration: none}
      span.cls_010{
        font-family:"Bookman Old Style",serif;
        font-size:9.4px;
        color:rgb(0,0,0);
        font-weight:normal;
        font-style:normal;
        text-decoration: none}
      div.cls_010{
        font-family:"Bookman Old Style",serif;
        font-size:9.4px;
        color:rgb(0,0,0);
        font-weight:normal;
        font-style:normal;
        text-decoration: none}
      span.cls_009{
        font-family:"Bookman Old Style",serif;
        font-size:9.7px;
        color:rgb(0,0,0);
        font-weight:normal;
        font-style:normal;
        text-decoration: none}
      div.cls_009{
        font-family:"Bookman Old Style",serif;
        font-size:9.7px;
        color:rgb(0,0,0);
        font-weight:normal;
        font-style:normal;
        text-decoration: none}
      span.cls_002{
        font-family:Arial,serif;
        font-size:11.0px;
        color:rgb(0,0,0);
        font-weight:normal;
        font-style:normal;
        text-decoration: none}
      div.cls_002{
        font-family:Arial,serif;
        font-size:11.0px;
        color:rgb(0,0,0);
        font-weight:normal;
        font-style:normal;
        text-decoration: none}
      span.cls_011{
        font-family:Arial,serif;
        font-size:12.1px;
        color:rgb(0,0,0);
        font-weight:normal;
        font-style:normal;
        text-decoration: none}
      div.cls_011{
        font-family:Arial,serif;
        font-size:12.1px;
        color:rgb(0,0,0);
        font-weight:normal;
        font-style:normal;
        text-decoration: none}
      -->
    </style>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Sertifikat <?php echo $row['client_name_id']; ?>
</title>
<meta name="author" content="phpmu.com">
<link rel="shortcut icon" href="asset/images/mbaturi_circle.png" />
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.5 -->
<link rel="stylesheet" href="asset/admin/bootstrap/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="asset/admin/plugins/datatables/dataTables.bootstrap.css">
<!-- Theme style -->
<link rel="stylesheet" href="asset/admin/dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="asset/admin/dist/css/style.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="asset/admin/dist/css/skins/_all-skins.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="asset/admin/plugins/iCheck/flat/blue.css">
<!-- Morris chart -->
<link rel="stylesheet" href="asset/admin/plugins/morris/morris.css">
<!-- jvectormap -->
<link rel="stylesheet" href="asset/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
<!-- Date Picker -->
<link rel="stylesheet" href="asset/admin/plugins/datepicker/datepicker3.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="asset/admin/plugins/daterangepicker/daterangepicker-bs3.css">
<!-- Select2 -->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
  	<div class="wrapper">
      <header class="main-header">

        <style type="text/css">
  .sekolah{
    float: left;
    background-color: transparent;
    background-image: none;
    padding: 15px 15px;
    font-family: fontAwesome;
    color:#fff;
  }
  .sekolah:hover{
    color:#fff;
  }
</style>
        <!-- Logo -->
        <a href="index.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>ADMINISTRATOR</b></span>
        </a>
      </header>

      <aside class="main-sidebar">

        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <center>
            <a href="administrator/sertifikat">
            <button type="button" class="btn btn-success btn-md"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Back</button></a></center>
          </div>

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header" style='color:#fff; text-transform:uppercase; border-bottom:2px solid #00c0ef'><span class='uppercase'></span>
            </li>
          </ul>
        </section>

      </aside>

      <div class="content-wrapper">
        <!-- Isi Contentnya -->
        <section class="content">

	     <div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:841px;overflow:hidden">
	      <div style="position:absolute;left:0px;top:0px">
	        <img src="background1.jpg" width=595 height=841>
	      </div>
	      <div style="position:absolute;left:163.40px;top:170.50px" class="cls_007">
	        <span class="cls_007">This certificate is presented to :
	        </span>
	      </div>
	      <div style="position:absolute;left:140.98px;top:236.05px; min-width: 125px; max-width: 340px; text-align: center;" class="cls_006">
	        <span class="cls_006" style="font-size: 20px;">
	          <?php echo $row['client_name_id']; ?>
	        </span>
	      </div>
	      <div style="position:absolute;left:211.28px;top:295.92px" class="cls_008">
	        <span class="cls_008">No. Certiöcate : MKT-1012-07-19
	        </span>
	      </div>
	      <div style="position:absolute;left:125.89px;top:348.73px" class="cls_005">
	        <span class="cls_005">has attended and succesfully completed the training :
	        </span>
	      </div>
	      <div style="position:absolute;left:232.43px;top:409.04px" class="cls_004">
	        <span class="cls_004">SO 9001:2015
	        </span>
	      </div>
	      <div style="position:absolute;left:165.22px;top:459.27px" class="cls_003">
	        <span class="cls_003">conducted at PT. JALUK BERKAH SLAMET
	        </span>
	      </div>
	      <div style="position:absolute;left:243.99px;top:480.09px" class="cls_003">
	        <span class="cls_003">on 27 Juni 2019
	        </span>
	      </div>
	      <div style="position:absolute;left:257.58px;top:519.14px" class="cls_005">
	        <span class="cls_005">Prepared by
	        </span>
	      </div>
	      <div style="position:absolute;left:221.14px;top:547.93px" class="cls_005">
	        <span class="cls_005">MBATURI KONSULTAN
	        </span>
	      </div>
	      <div style="position:absolute;left:399.19px;top:597.61px" class="cls_010">
	        <span class="cls_010">Bekasi, 08 Juli 2019
	        </span>
	      </div>
	      <div style="position:absolute;left:416.38px;top:675.27px" class="cls_009">
	        <span class="cls_009">Sari Novianto
	        </span>
	      </div>
	      <div style="position:absolute;left:402.63px;top:691.88px" class="cls_009">
	        <span class="cls_009">Managing Director
	        </span>
	      </div>
	      <div style="position:absolute;left:328.94px;top:753.38px" class="cls_002">
	        <span class="cls_002">Rukan Sentra Niaga Boulevard Blok RSNB No. 16 Grand Galaxy City,  Bekasi City,West Java 17147
	        </span>
	      </div>
	      <div style="position:absolute;left:333.55px;top:766.58px" class="cls_002">
	        <span class="cls_002">
	        </span>
	      </div>
	      <div style="position:absolute;left:468.02px;top:782.43px" class="cls_002">
	        <span class="cls_002">+6281212771926
	        </span>
	      </div>
	      <div style="position:absolute;left:433.89px;top:799.19px" class="cls_011">
	        <span class="cls_011">mbaturikonsultan.com
	        </span>
	      </div>
	      <div style="position:absolute;left:474.15px;top:818.18px" class="cls_002">
	        <span class="cls_002">+622182751222
	        </span>
	      </div>
	    </div>

        </section>
        
        <!-- <div style='clear:both'></div> -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
          <!-- <?php include "application/views/administrator/footer.php"; ?> -->
      </footer>
    </div><!-- ./wrapper -->
  </body>
</html>
<?php 
}
?>

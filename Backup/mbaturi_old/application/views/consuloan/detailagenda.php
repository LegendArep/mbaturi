<?php
    $tgl_posting   = tgl_indo($rows['tgl_posting']);
    $tgl_mulai   = tgl_indo($rows['tgl_mulai']);
    $tgl_selesai = tgl_indo($rows['tgl_selesai']);
    $isi_agenda=nl2br($rows['isi_agenda']);
    $baca = $rows['dibaca']+1;
?>        
    <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="page-title-heading">
                        <h1 class="title">Agenda</h1>
                    </div><!-- /.page-title-captions -->  
                    <div class="breadcrumbs">
                        <ul>
                            <li class="home"><i class="fa fa-home"></i><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li><a href="<?php echo base_url(); ?>agenda">Agenda</a></li>
                            <li><?php echo "$rows[tema]"; ?></li>
                        </ul>                   
                    </div><!-- /.breadcrumbs --> 
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title --> 

    <!-- Services Details -->
    <section class="flat-row services-details">
        <div class="container">
            <div class="row">
  
<?php include"sidebar.php"; ?>
                <div class="col-lg-9">
                    <div class="item-wrap">
                        <div class="item item-details">
                            <div class="featured-item">
                                <center>
<?php
if ($rows['gambar'] ==''){
                                                            echo "<a href='".base_url()."agenda/$rows[tema_seo]' class='hover-effect'><img  src='".base_url()."asset/foto_agenda/small_no-image.jpg' style='width: 90%; height:400px' alt='$rows[tema]' /></a>";
                                                        }else{
                                                            echo "<a href='".base_url()."agenda/$rows[tema_seo]' class='hover-effect'><img  src='".base_url()."asset/foto_agenda/$rows[gambar]'  style='width: 90%; height:400px' alt='$rows[tema]' /></a>";
                                                        }
                                                        ?>


</center>
                                                                                    </div><!-- /.feature-post -->
                            <div class="content-item">
                            <center>    <h2 class="title-item"><?php echo"$rows[tema]"; ?></h2></center>
<div class="single-post">
<p>    <?php echo"$rows[isi_agenda]"; ?></p> <br/>
<div class="single-text1">
<div class="project-info">
                                <ul>
                                    <li><span class="name">Tanggal</span>:<span class="info"><?php echo"$tgl_mulai s/d $tgl_selesai"; ?></span></li>
                                    <li><span class="name">Tempat</span>:<span class="info"><?php echo"$rows[tempat]"; ?></span></li>
                                    <li><span class="name">Jam</span>:<span class="info"><?php echo"$rows[jam]"; ?></span></li>
                                </ul>
                            </div>
                        </div>
</div>

                                                            </div><!-- /.content-item -->
                        </div><!-- /.item -->
                    </div><!-- /.item-wrap --> 
                </div><!-- /.Col-lg-9 -->
            </div><!-- /.row -->           
        </div><!-- /.container -->   
    </section>  

   
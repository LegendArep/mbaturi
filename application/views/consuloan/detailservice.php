<!-- Page title -->
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
                            <li><a href="<?php echo base_url(); ?>service">Service</a></li>                            <li><?php echo"$rows[judul]"; ?></li>
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
                           <center>
    <?php 
                                    if ($rows['gambar'] !=''){ echo "<img style='width:100%; height:350px;'  src='".base_url()."asset/service/$rows[gambar]' alt='$rows[judul]' /></a><br><br>"; }
                                ?>
                            <center>    <h2 class="title-item"><?php echo"$rows[judul]"; ?></h2></center>


</center> <?php echo"$rows[isi_keterangan]"; ?>
                    </div><!-- /.item-wrap --> 
                </div><!-- /.Col-lg-9 -->
            </div><!-- /.row -->           
        </div><!-- /.container -->   
    </section>  

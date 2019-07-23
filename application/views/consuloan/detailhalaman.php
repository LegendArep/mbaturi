<!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="page-title-heading">
                        <h1 class="title"><?php echo"$rows[judul]"; ?></h1>
                    </div><!-- /.page-title-captions -->  
                    <div class="breadcrumbs">
                        <ul>
                            <li class="home"><i class="fa fa-home"></i><a href="index.php">Home</a></li>
                            <li><?php echo"$rows[judul]"; ?></li>
                        </ul>                   
                    </div><!-- /.breadcrumbs --> 
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title --> 

   <br/>
    <section class="flat-row padingbotom">
        <div class="container">
            <div class="row">
                <p>
                  
<div class="float-left">
 <?php           if (trim($rows['gambar'])!=''){ ?>
    <div id="blance1" class="featured-aboutus float-left">

<img style="float: left; margin: 15px 15px 15px 15px; width: 90%" <?php echo"src='".base_url()."asset/foto_statis/$rows[gambar]' alt='$rows[judul]'"; ?> />
</div>
<?php } ?>
   <h1 class="title"><?php echo"$rows[judul]"; ?></h1>
                 <?php echo"$rows[isi_halaman]"; ?>

                  </div>
</p>
            </div>
        </div>
    </section>
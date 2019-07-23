 <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="page-title-heading">
                        <h1 class="title">Album</h1>
                    </div><!-- /.page-title-captions -->  
                    <div class="breadcrumbs">
                        <ul>
                            <li class="home"><i class="fa fa-home"></i><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li>Album</li>
                        </ul>                   
                    </div><!-- /.breadcrumbs --> 
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title --> 

    <!-- Blog posts -->
    <section class="flat-row section-project-dynamic">
        <div class="container">
            <div class="post-wrap post-grid wrap-column clearfix">



<?php
                                          foreach ($detailalbum->result_array() as $h) {    
                                            if (trim($h['gbr_gallery'])==''){ $gbr_gallery = 'no-image.jpg'; }else{ $gbr_gallery = $h['gbr_gallery']; }
                        ?>

                                    <article class="entry border-shadow flat-column3 clearfix">
                    <div class="entry-border clearfix">
                        <div class="featured-post">

<?php
                                                            echo "<a href='".base_url()."asset/img_galeri/$gbr_gallery' class='hover-effect'><img style='width:100%; height:220px;' src='".base_url()."asset/img_galeri/$gbr_gallery' alt='$r2[jdl_gallery]' /></a>";
                                                  

                                                        ?>                        </div><!-- /.feature-post -->
<div class="content-post effecthover">
                                    <div class="wrap-table">
                                        <div class="flat-tabcell">
                                            <span class="category"><?php echo"".tgl_indo($h['tgl_posting']).""; ?></span>
                                            <h2 class="title-post"><a href="#"><?php echo"$h[jdl_gallery]"; ?></a></h2>
                                        </div>
                                    </div>
                                </div><!-- /.contetn-post -->                    </div><!-- /.entry-border -->
                </article>

<?php } ?>


                    
              <div class="blog-pagination clearfix">
                        <ul class="flat-pagination  float-left clearfix">
<?php echo $this->pagination->create_links(); ?>                               
                        </ul><!-- /.flat-pagination -->
                    </div><!-- /.blog-pagination --> 
            </div>       
        </div><!-- /.container -->   
    </section>   


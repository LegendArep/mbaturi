 <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="page-title-heading">
                        <h1 class="title">Gallery Foto</h1>
                    </div><!-- /.page-title-captions -->  
                    <div class="breadcrumbs">
                        <ul>
                            <li class="home"><i class="fa fa-home"></i><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li>Gallery</li>
                            <li>Gallery Foto</li>
                        </ul>                   
                    </div><!-- /.breadcrumbs --> 
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title --> 

    <!-- Blog posts -->
    <section class="flat-row section-project-dynamic">
        <div class="container">
            <div class="post-wrap project-dynamic clearfix">
                <ul id="data-effect" class="data-effect clearfix">


<?php
													$no = $this->uri->segment(3)+1;
													foreach ($album->result_array() as $h) {	
														$total_foto = $this->model_utama->view_where('gallery',array('id_album' => $h['id_album']))->num_rows();
												  $isi_berita =(strip_tags($h['keterangan'])); 
												  $isi = substr($isi_berita,0,220); 
												  $isi = substr($isi_berita,0,strrpos($isi," ")); 

                        ?>

                                            <li class="width50">
                        <article class="entry clearfix">
                            <div class="entry-border clearfix">
                                <div class="featured-post">
                                    <img src="<?php echo"".base_url()."asset/img_album/$h[gbr_album]"; ?>" alt="image">
                                </div><!-- /.feature-post -->
                                <div class="content-post effecthover">
                                    <div class="wrap-table">
                                        <div class="flat-tabcell">
                                            <span class="category"><?php echo"".tgl_indo($h['tgl_posting']).""; ?></span>
                                            <h2 class="title-post"><a href="<?php echo"".base_url()."albums/$h[album_seo]"; ?>"><?php echo"$h[jdl_album]"; ?></a></h2>
                                            <p><?php echo"$isi"; ?></p>
                                            <a href="<?php echo"".base_url()."albums/$h[album_seo]"; ?>" class="readmore">READ MORE</a>
                                        </div>
                                    </div>
                                </div><!-- /.contetn-post -->
                            </div><!-- /.entry-border -->
                        </article>
                    </li>
<?php } ?>


                    
                </ul>
            </div>       
        </div><!-- /.container -->   
    </section>   


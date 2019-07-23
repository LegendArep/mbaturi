 <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="page-title-heading">
                        <h1 class="title">Project</h1>
                    </div><!-- /.page-title-captions -->  
                    <div class="breadcrumbs">
                        <ul>
                            <li class="home"><i class="fa fa-home"></i><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li>Project</li>
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
                $projevt = $this->model_utama->view_ordering_limit('project','id_project','DESC');
                foreach ($projevt->result_array() as $p) {
                                                  $isi_berita =(strip_tags($p['isi'])); 
                                                  $isi = substr($isi_berita,0,220); 
                                                  $isi = substr($isi_berita,0,strrpos($isi," ")); 

                        ?>

                                            <li class="width50">
                        <article class="entry clearfix">
                            <div class="entry-border clearfix">
                                <div class="featured-post">
                                    <img src="<?php echo"".base_url()."/asset/project/$p[gambar]"; ?>" style="width: 100%; height: 300px;" alt="<?php echo"$p[judul]"; ?>">
                                </div><!-- /.feature-post -->
                                <div class="content-post effecthover">
                                    <div class="wrap-table">
                                        <div class="flat-tabcell">
                                            <span class="category"><?php echo"$p[sub_judul]"; ?></span>
                                            <h2 class="title-post"><a href="<?php echo"".base_url()."project/$p[seo_judul]"; ?>"><?php echo"$p[judul]"; ?></a></h2>
                                            <p><?php echo"$isi"; ?></p>
                                            <a href="<?php echo"".base_url()."project/$p[seo_judul]"; ?>" class="readmore">READ MORE</a>
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


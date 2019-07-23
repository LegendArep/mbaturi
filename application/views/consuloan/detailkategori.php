 <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="page-title-heading">
                        <h1 class="title">Berita</h1>
                    </div><!-- /.page-title-captions -->  
                    <div class="breadcrumbs">
                        <ul>
                            <li class="home"><i class="fa fa-home"></i><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li>Berita</li>
                            <li><?php echo "$rows[nama_kategori]"; ?></li>
   
                        </ul>                   
                    </div><!-- /.breadcrumbs --> 
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title --> 

    <!-- Blog posts -->
    <section class="flat-row blog-list">
        <div class="container">
            <div class="row">
                <?php include"sidebar.php"; ?>
                <div class="col-lg-9">
                    <div class="post-wrap post-list">
											<?php
											  foreach ($beritakategori->result_array() as $r) {	
												  $baca = $r['dibaca']+1;	
												  $isi_berita =(strip_tags($r['isi_berita'])); 
												  $isi = substr($isi_berita,0,220); 
												  $isi = substr($isi_berita,0,strrpos($isi," ")); 
												  $judul = substr($r['judul'],0,33); 
												  $total_komentar = $this->model_utama->view_where('komentar',array('id_berita' => $r['id_berita']))->num_rows();
												  	?>


                        <article class="entry border-shadow clearfix effect-animation"  data-animation="fadeInUp" data-animation-delay="0.2s" data-animation-offset="75%">
                            <div class="entry-border clearfix">
                                <div class="featured-post">
                                    <a href="<?php echo"".base_url()."berita/$r[judul_seo]"; ?>">
                                    	<?php
                                 if ($r['gambar']==''){
																echo "<img  src='".base_url()."asset/foto_berita/small_no-image.jpg' width='420' height='380'>";
															}else{
																echo "<img  src='".base_url()."asset/foto_berita/$r[gambar]' style='height:380px; width:420px'>";
															}	
															?></a>
                                </div><!-- /.feature-post -->
                                <div class="content-post">
	                                    <h2 class="title-post"><a href="<?php echo"".base_url()."berita/$r[judul_seo]"; ?>"><?php echo"$judul"; ?></a></h2>
	                                    										<span class="category"><?php echo"$r[nama_kategori]"; ?></span>

                                    <p><?php echo"$isi"; ?></p>
                                    <a href="<?php echo"".base_url()."berita/$r[judul_seo]"; ?>" class="readmore">READ MORE</a>
                                </div><!-- /.contetn-post -->
                            </div><!-- /.entry-border -->
                        </article>
                        <?php } ?>
                    </div>  
                    <div class="blog-pagination clearfix">
                        <ul class="flat-pagination  float-left clearfix">
<?php echo $this->pagination->create_links(); ?>                               
                        </ul><!-- /.flat-pagination -->
                    </div><!-- /.blog-pagination --> 
                </div>
            </div><!-- /.row -->           
        </div><!-- /.container -->   
    </section>   

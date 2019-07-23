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
                            <li class="home"><i class="fa fa-home"></i><a href="<?php echo base_url(); ?>">Agenda</a></li>
                            <li>Agenda</li>
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
											  foreach ($agenda->result_array() as $r) {	
												  $tgl_posting = tgl_indo($r['tgl_posting']);
												  $tgl_mulai   = tgl_indo($r['tgl_mulai']);
												  $tgl_selesai = tgl_indo($r['tgl_selesai']);
												  $baca = $r['dibaca']+1;
												  $judull = substr($r['tema'],0,33); 
												  $isi_agenda =(strip_tags($r['isi_agenda'])); 
												  $isi = substr($isi_agenda,0,280); 
												  $isi = substr($isi_agenda,0,strrpos($isi," "));
												  ?>
                        <article class="entry border-shadow clearfix effect-animation"  data-animation="fadeInUp" data-animation-delay="0.2s" data-animation-offset="75%">
                            <div class="entry-border clearfix">
                                <div class="featured-post">
                                    <a href="<?php echo"".base_url()."agenda/$r[tema_seo]"; ?>">
                                    	<?php
                                 if ($r['gambar']==''){
																echo "<img  src='".base_url()."asset/foto_agenda/small_no-image.jpg' style='width: 420px; height:400px'>";
															}else{
																echo "<img  src='".base_url()."asset/foto_agenda/$r[gambar]'  style='width: 420px; height:400px'>";
															}	
															?></a>
                                </div><!-- /.feature-post -->
                                <div class="content-post">
                                    <span class="category"><?php echo"$tgl_posting - $baca view"; ?></span>
                                    <h2 class="title-post"><a href="<?php echo"".base_url()."agenda/$r[tema_seo]"; ?>"><?php echo"$judull"; ?></a></h2>
                                    <p><?php echo"$isi"; ?></p>
                                    <a href="<?php echo"".base_url()."agenda/$r[tema_seo]"; ?>" class="readmore">READ MORE</a>
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

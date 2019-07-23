<?php
    $baca = $rows['dibaca']+1;  
    $total_komentar = $this->model_utama->view_where('komentar',array('id_berita' => $rows['id_berita']))->num_rows();
?>        
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
                            <li><a href="<?php echo base_url(); ?>agenda">Berita</a></li>
                            <li><?php echo "$rows[judul]"; ?></li>
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
                                    if ($rows['gambar'] !=''){ echo "<img style='width:100%' src='".base_url()."asset/foto_berita/$rows[gambar]' alt='$rows[judul]' /></a><br><br>"; }
                                    if ($rows['keterangan_gambar'] !=''){ echo "<center><p><i><b>Keterangan Gambar :</b> $rows[keterangan_gambar]</i></p></center><br>"; }
                                ?>



</center>
                                                                                    </div><!-- /.feature-post -->
                            <div class="content-item">
                            <center>    <h2 class="title-item"><?php echo"$rows[judul]"; ?></h2></center>
<div class="single-post">
<p>    <?php echo"$rows[isi_berita]"; ?></p> <br/>
</div>

                                                  <br/>

                                                  <div id="fb-root"></div>
                <div id="viewcomment" class="block-title">
                    <a href="#writecomment" class="right">Write a Facebook Comment</a>
                    <h4>Tuliskan Komentar Anda dari account Facebook</h4>
                </div>
                <div class="block-content">
                    <div class="comment-block">
                        <div class="fb-comments" data-href="<?php echo base_url().'/'.$rows['judul_seo']; ?>" data-width="830" data-numposts="5" data-colorscheme="light"></div> 
                    </div>
                </div>


                <br/>



                                                  <div class="content-inner inner-tab3">
                        <div class="tab-comment">
                            <ol class="comment-list">
                                <?php
                                    $no = 1;
                                    $komentar = $this->model_utama->view_where_ordering_limit('komentar',array('id_berita' => $rows['id_berita'],'aktif' => 'Y'),'id_komentar','ASC',0,100);
                                    foreach ($komentar->result_array() as $kka) {
                                        $isian=nl2br($kka['isi_komentar']); 
                                        $komentarku = sensor($isian); 
                                        
                                        if(($no % 2)==0){ $warna="#ffffff;"; }else{ $warna="#e3e3e3"; }
                                        $test = md5(strtolower(trim($kka['email'])));   
                                ?>
                                <li class="comment">
                                    <article class="comment-body clearfix">        
                                        <div class="comment-author float-left">
                                            <?php
if ($kka['email'] == ''){
                                                            echo "<img class='setborder' src='".base_url()."asset/foto_user/blank.png'/>";
                                                        }else{
                                                            echo "<img class='setborder' src='http://www.gravatar.com/avatar/$test.jpg?s=100'/>";
                                                        }
                                                        ?>                                             
                                        </div><!-- .comment-author -->
                                        <div class="comment-text">
                                            <div class="comment-metadata">
                                                <div class="comment-info">
                                                    <span class="date"><?php echo"".tgl_indo($kka['tgl']).""; ?></span>
                                                    <h6><a href="<?php echo"$kka[url]"; ?>"><?php echo"$kka[nama_komentar]"; ?></a></h6> 
                                                </div>          
                                            </div><!-- .comment-metadata -->
                                            <div class="comment-content">
                                                <p><?php echo"$komentarku"; ?></p>
                                            </div><!-- .comment-content -->
                                        </div><!-- /.comment-text -->                       
                                    </article><!-- .comment-body -->
                                </li>
                                <?php $no++; } ?>

                            </ol><!-- .comment-list -->  
                            <div class="comment-respond" id="respond">
                                <h2 class="comment-reply-title">Add Review</h2>
                                <form novalidate="" class="comment-form" id="commentform" method="post" action="<?php echo base_url(); ?>berita/kirim_komentar">
                                                                <input type="hidden" name="a" value='<?php echo "$rows[id_berita]"; ?>'>

                                    <div class="wrap-input clearfix">
                                        <span class="add-review comment-notes">                                      
                                            <input type="text" placeholder="Name*" aria-required="true" size="30"  name='b' >
                                        </span>
                                        <span class="add-review comment-form-email">          
                                            <input type="email" placeholder="Email*" size="30" name="e" id="email">
                                        </span>
                                    </div>  <br/>
                                    <div class="wrap-input clearfix">
                                        <span class="add-review comment-notes">                                      
                                            <input type="text" placeholder="Website*" aria-required="true" size="30" value="" name="c" id="author">
                                        </span>
                                    </div>  
                                                                <br/>
                                    <span class="comment-form-comment">
                                        <textarea class="comment-messages" tabindex="4" placeholder="Your Review" name="comment" required="" value="d"></textarea>
                                        <br/>
                                    <div class="wrap-input clearfix">
                                        <span class="add-review comment-notes">   

                                                                      
                                <?php echo $image; ?><br/><br/>
                                <input name='secutity_code' maxlength=6 type="text" class="required" placeholder="Masukkkan kode di sebelah Atas..">
                            </span></div>
                                    </span> <br/>
                                    <input type="submit" name="submit" class="styled-button" value="Post a Comment" onclick="return confirm('Haloo, Pesan anda akan tampil setelah kami setujui?')"/>
                                </form>
                            </div><!-- /.comment-respond -->                                          
                        </div>
                    </div>




          </div><!-- /.content-item -->
                        </div><!-- /.item -->
                    </div><!-- /.item-wrap --> 
                </div><!-- /.Col-lg-9 -->
            </div><!-- /.row -->           
        </div><!-- /.container -->   
    </section>  

   
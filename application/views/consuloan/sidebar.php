
                <div class="col-lg-3">
                    <div class="sidebar">
                        <div class="widget widget-nav-menu">
                             <h3>Kategori Berita</h3>

                            <ul class="widget-menu">
                                <?php
                        		  $kategori = $this->model_utama->view_ordering_limit('kategori','id_kategori','ASC',0,10);
                        		  foreach ($kategori->result_array() as $kat) {
                            	?>
                             <li><a href="<?php echo"".base_url()."kategori/$kat[kategori_seo]"; ?>"><?php echo"$kat[nama_kategori]"; ?></a></li>
                             <?php } ?>
                            </ul>
                        </div>
                        <div class="widget widget-nav-menu">
                             <h3>Pelayanan</h3>
                        <ul class="widget-menu">
                        <?php
                		  $banner = $this->model_utama->view_ordering_limit('service','id_service','ASC',0,6);
                		  foreach ($banner->result_array() as $b) {
                			echo "<li><a target='_BLANK' href='".base_url()."service/$b[seo_judul]'>$b[judul]</a></li>";
                		  }
                		?>
                            </ul>
                        </div>
<!--                         <div class="widget widget-testimonials">
                            <div class="flat-testimonials owl-carousel" data-item="1" data-nav="false" data-dots="true" data-auto="true">
                            <?php
                            $testimoni = $this->model_utama->view_ordering_limit('testimoni','id_testimoni','DESC',0,3);
                            foreach ($testimoni->result_array() as $tes) {
                            ?>      
                            <div class="testimonials"> 
                                    <div class="message">                              
                                        <blockquote class="whisper">
                                           " <?php echo"$tes[isi_testimoni]"; ?> "
                                         </blockquote>
                                    </div>
                                    <div class="avatar"> 
                                        <span class="name"><?php echo"$tes[nama_kosumen]"; ?></span>
                                        <span class="position"><?php echo"$tes[jabatan]"; ?></span>
                                    </div>                      
                                </div>
                          <?php } ?>
                            </div>
                        </div>  -->
<!-- 
                        <div class="widget widget-download">
                             <div class="download">
                                                                       <?php
                $downloaddd = $this->model_utama->view_ordering_limit('download','id_download','DESC',0,1);
                foreach ($downloaddd->result_array() as $dow) {

                        ?>       <a href="<?php echo"".base_url()."download/file/$r[nama_file]"; ?>" class="flat-button style2" width="100%"><?php echo"$dow[judul]"; ?></a>
                             <?php } ?></div>
                        </div>  -->

                    </div>
                </div>
               
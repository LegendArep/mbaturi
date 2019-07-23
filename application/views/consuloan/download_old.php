 <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="page-title-heading">
                        <h1 class="title">Download</h1>
                    </div><!-- /.page-title-captions -->  
                    <div class="breadcrumbs">
                        <ul>
                            <li class="home"><i class="fa fa-home"></i><a href="<?php echo base_url(); ?>">Download</a></li>
                            <li>List</li>
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
                    	 <h2 class="title-item">Download Area</h2>
                 <hr/>
					<?php
						$no=$this->uri->segment(3)+1;
						foreach ($download->result_array() as $r) {	
						?>
                <div class="entry-border clearfix">
            	   <div class="row">
                      <div class="col-lg-9">
                          	<?php echo"$r[judul]"; ?>
                      </div>
                        <div class="col-lg-3">
                        	<a href="<?php echo"".base_url()."download/file/$r[nama_file]"; ?>"><button  type="button" id="subscribe-button" class="flat-button subscribe-submit" title="Subscribe now">Download</button></a>

                        </div>
                    </div>      
                </div><hr/>

						<?php
						$no++;
						}
					?>
					<center>
			<div class="blog-pagination clearfix">
                        <ul class="flat-pagination  float-left clearfix">
									<?php echo $this->pagination->create_links(); ?>  
                        </ul><!-- /.flat-pagination -->
                    </div><!-- /.blog-pagination  -->
					</center>
                    </div>  
                    <div class="post-wrap post-list">
                    
            </div><!-- /.row -->           
        </div><!-- /.container -->   
    </section>   

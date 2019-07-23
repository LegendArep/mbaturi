 <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="page-title-heading">
                        <h1 class="title">Staff</h1>
                    </div><!-- /.page-title-captions -->  
                    <div class="breadcrumbs">
                        <ul>
                            <li class="home"><i class="fa fa-home"></i><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li>Staff</li>
                        </ul>                   
                    </div><!-- /.breadcrumbs --> 
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title --> 

    <!-- Blog posts -->
    
       <section class="flat-row  page-teammember2 bg-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-center">
                        <h1 class="title">Our Staff</h1>
                        <div class="sub-title">
                            We are here to Acelerate your business and help you find the way.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">


<?php
                foreach ($staff->result_array() as $s) {
?>
                <div class="col-lg-3 col-sm-6">
                    <div class="flat-team style2">                            
                        <div class="avatar">             
                            <img src="<?php echo"".base_url()."asset/foto_staf/$s[foto]"; ?>" alt="<?php echo"$s[nama]"; ?>">
                        </div>                        
                        <div class="content text-center">
                            <div class="info-team">
                                <h5 class="name"><?php echo"$s[nama]"; ?></h5>
                                <p class="position"><?php echo"$s[jabatan]"; ?></p>
                            </div>
                            <ul class="social-links style3 team">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
              
<?php } ?>


            </div>
        </div>
    </section>  



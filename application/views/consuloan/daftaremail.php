 <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="page-title-heading">
                        <h1 class="title">Daftar Email</h1>
                    </div><!-- /.page-title-captions -->  
                    <div class="breadcrumbs">
                        <ul>
                            <li class="home"><i class="fa fa-home"></i><a href="<?php echo base_url(); ?>">Beranda</a></li>
                            <li>Daftar Email</li>
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
                 
                                 <center><h4>Terima Kasih Sudah Melakukan Pendaftaran Email ke sistem Kami</h4></center>
                                           <?php 
            echo $this->session->flashdata('message');
            ?>
                    </div>  
                    <div class="post-wrap post-list">
                    
            </div><!-- /.row -->           
        </div><!-- /.container -->   
    </section>   

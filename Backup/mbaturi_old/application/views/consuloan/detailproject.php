<!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="page-title-heading">
                        <h1 class="title"><?php echo"$rows[judul]"; ?></h1>
                    </div><!-- /.page-title-captions -->  
                    <div class="breadcrumbs">
                        <ul>
                            <li class="home"><i class="fa fa-home"></i><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li><a href="<?php echo base_url(); ?><?php echo"project/"; ?>">Project</a></li>
                            <li><?php echo"$rows[judul]"; ?></li>
                        </ul>                   
                    </div><!-- /.breadcrumbs --> 
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title --> 

    <!-- Blog posts -->
    <section class="flat-row project-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-post">
                        <?php echo"$rows[isi]"; ?>
                    </div>
                </div><!-- /.col-md-6 --> 
                <div class="col-lg-6">
                    <div class="featured-single">
                        <img src="<?php echo"".base_url()."/asset/project/$rows[gambar]"; ?>" style="width: 100%; height: 300px;" alt="Project <?php echo"$rows[judul]"; ?>" class="img1">
    <?php
$detailproject = $this->model_utama->view_where_ordering_limit('image_project',array('id_project' =>  $rows['id_project'] ),'id_image','DESC',0,5);
            foreach ($detailproject->result_array() as $deta) {
                ?>
                    <img src="<?php echo"".base_url()."/asset/sub_project/$deta[image]"; ?>" alt="Project <?php echo"$rows[judul]"; ?>" class="img2">
<?php } ?>

                    </div>
                </div><!-- /.col-md-6 --> 
            </div><!-- /.row -->        
        </div><!-- /.container -->   
    </section>   


<?php
        $homepage = $this->model_utama->view('homepage')->row_array();

?>
<div class="page-title parallax parallax1">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="page-title-heading">
                        <h1 class="title">Services</h1>
                    </div><!-- /.page-title-captions -->  
                    <div class="breadcrumbs">
                        <ul>
 <li class="home"><i class="fa fa-home"></i><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li><a href="<?php echo base_url(); ?>service">services</a></li>
                                                    </ul>                   
                    </div><!-- /.breadcrumbs --> 
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title --> 

 <!-- Services item -->
    <section class="flat-row services-grid">
        <div class="container">
            <div class="wrap-item wrap-column clearfix">
                <?php
                $service = $this->model_utama->view_ordering_limit('service','id_service','DESC');
                foreach ($service->result_array() as $serv) {
                ?>
                <div class="item border-shadow flat-column3 clearfix">
                    <div class="item-border clearfix">
                        <div class="featured-item">
                            <a href="<?php echo base_url(); echo"service/$serv[seo_judul]"; ?>"> <img src="<?php echo"".base_url()."asset/service/$serv[gambar]"; ?>" alt="image"></a>
                        </div><!-- /.feature-item -->
                        <div class="content-item">
                            <span class="category"><?php echo"$serv[judul]"; ?></span>
                            <h2 class="title-item"><a href="<?php echo base_url(); echo"service/$serv[seo_judul]"; ?>"><?php echo"$serv[isi]"; ?></a></h2>
                            <!-- <div class="date-time">
                                <span>26 Dec 2017</span>
                            </div> -->
                        </div><!-- /.Content-item -->
                    </div><!-- /.item-border -->
                </div>
                <?php $no++; }  ?>
            </div>         
        </div><!-- /.container -->   
    </section>
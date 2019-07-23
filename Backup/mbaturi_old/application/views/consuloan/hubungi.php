
    <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h1 class="title">Hubungi Kami</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumbs">
                        <ul>
                            <li class="home"><i class="fa fa-home"></i><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li>Hubungi Kami</li>
                        </ul>
                    </div><!-- /.breadcrumbs -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->

    <section class="flat-row page-contact">
        <div class="container">
            <div class="wrap-formcontact style2">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="flat-maps box-shadow3">
                          <iframe width="100%" height="580px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo "$iden[maps]"; ?>"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="margin-left40">
                            <h1>Hubungi Kami !</h1> <br/>
                              <form class="contactform style4  clearfix" action="<?php echo base_url(); ?>hubungi/kirim" method="POST" novalidate="novalidate">
                              <?php
                              echo $this->session->flashdata('message');
                              echo form_open($this->uri->segment(1).'/index');
                              ?>
                                <span class="flat-input"><input type="text" placeholder="Nickname" name='a' id="c_name" required/></span>
                                <span class="flat-input"><input type="text" placeholder="E-mail" name='b' id="c_email" required/></span>
                                <span class="flat-input"><textarea style='width:100%' name='c' placeholder="Your message.." id="c_message" required></textarea></span>
                                <span class="flat-input">
                                <div class="row">
                                    <div class="col-lg-3">
                                      <?php echo $image; ?>
                                    </div>
                                    <div class="col-lg-9">
                                      <span class="flat-input">
                                        <input name='security_code' type="text" class="required" placeholder="Masukkkan kode di sebelah kiri..">
                                      </span>
                                    </div>
                                </div>
                               <span class="flat-input">      <button name="submit" type="submit" class="flat-button" id="submit" title="Submit now">send messages</button></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

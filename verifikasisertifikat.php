<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<?php include 'header.php';?>
<!-- end-header -->
<!-- end-header -->
  <section id="headline">
    <div class="container">
      <h3>Verifikasi Sertifikat</h3>
    </div>
  </section>
  <section class="container page-content" >
    <hr class="vertical-space2">
    <aside class="four columns sidebar leftside">
      <h4 class="subtitle">Sertifikasi</h4>
      <div class="listbox1">
        <ul>
          <li><a href="#">Hotel </a></li>
          <li><a href="#">APW & BPW</a></li>
          <li><a href="#">Diskotik & Kelab Malam</a></li>
          
        </ul>
      </div>
      <!-- end-listbox1 -->
      <!-- end-listbox1 -->
      <br class="clear">
      <h4 class="subtitle">Informasi</h4>
      <div class="listbox1">
        <ul>
       <li><a href="#">Peraturan Perundangan</a></li>
          <li><a href="#">Proses Sertifikasi</a></li>
		  <li><a href="#">Proses Audit</a></li>
          <li><a href="#">Ketidakberpihakan</a></li>
		   <li><a href="#">Keluhan</a></li>
		    <li><a href="#">Banding</a></li>
			<li><a href="#">Pertanggung Gugatan</a></li>
  <li><a href="#">Jaminan Kerahasiaan</a></li>
 <li><a href="#">Status Sertifikasi</a></li>  
  <li><a href="#">Penggunaan Logo</a></li>
   <li><a href="#">Verifikasi Sertifikat </a></li>
    <li><a href="#">Karir</a></li>
        </ul>
      </div>
    </aside>
    <!-- end-sidebar-->
    <section class="eleven columns">
      <article>
      
        <br /><br><br><br><br><br>
       
		
		
    <form action="dataClient.php" method="get" accept-charset="utf-8">
        <input id="keywordIName" style="display: inline" type="text" name="keywordName" maxlength="50" value="Input Company Name..." onBlur="if (this.value == ''){this.value = 'Input Company Name...'}" onFocus="if (this.value == 'Input Company Name...'){this.value = ''}" autocomplete="off"/>

        <input id="keywordINum" style="display: inline" type="text" name="keywordNum" maxlength="50" value="Input Certificate Number..." onBlur="if (this.value == ''){this.value = 'Input Certificate Number...'}" onFocus="if (this.value == 'Input Certificate Number...'){this.value = ''}" autocomplete="off"/>

        <button type="SUBMIT" name="SUBMIT" id="SUBMIT" onclick="window.location = 'dataClient.php?keywordName=' + $('#keywordIName').val()'&keywordNum=' + $('#keywordINum').val()" value="search">Verify</button>

    </form>
</p>
        
      </article>
      <hr>
    </section>
    <hr class="vertical-space2">
  </section>
  <!-- container -->
	
<?php include 'footer.php';?>
<!-- end-footer -->
<span id="scroll-top"><a class="scrollup"><i class="icomoon-arrow-up"></i></a></span>
</div><!-- end-wrap -->

<!-- End Document
================================================== -->
<script src="js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="js/doubletaptogo.js" ></script>
<script defer src="js/jquery.flexslider-min.js"></script>
<script src="js/bootstrap-alert.js"></script>
<script src="js/bootstrap-dropdown.js"></script>
<script src="js/bootstrap-tab.js"></script>
<script src="js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="js/florida-custom.js" ></script>
<script src="js/jquery.prettyPhoto.js" ></script>
<script type="text/javascript" src="js/jquery.sticky.js"></script>
<script type="text/javascript" src="js/jquery.easy-pie-chart.js"></script>
</body>

</html>

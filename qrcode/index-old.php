<?php

/*

* PHP QR Code encoder

*

* Exemplatory usage

*

* PHP QR Code is distributed under LGPL 3

* Copyright (C) 2010 Dominik Dzienia <deltalab at poczta dot fm>

*

* This library is free software; you can redistribute it and/or

* modify it under the terms of the GNU Lesser General Public

* License as published by the Free Software Foundation; either

* version 3 of the License, or any later version.

*

* This library is distributed in the hope that it will be useful,

* but WITHOUT ANY WARRANTY; without even the implied warranty of

* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU

* Lesser General Public License for more details.

*

* You should have received a copy of the GNU Lesser General Public

* License along with this library; if not, write to the Free Software

* Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA

*/




// echo "<h1>PHP QR Code</h1><hr/>";



//SESION LOGIN

include 'koneksi.php';

// menampilkan pesan selamat datang

// echo "Hai, selamat datang ". $_SESSION['username'];

$dbhost = 'localhost';

$dbuser = 'root';

$dbpass = '';

$server = "db_mbaturi";

$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if (!$conn) {
    die('Could not connect: ' . mysql_error());
}


//END SESION LOGIN




//set it to writable location, a place for temp generated PNG files

// $PNG_TEMP_DIR = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'temp' . DIRECTORY_SEPARATOR;

$PNG_TEMP_DIR = dirname(__FILE__) . DIRECTORY_SEPARATOR . '../images/qrcodes/' . DIRECTORY_SEPARATOR;



//html PNG location prefix

$PNG_WEB_DIR = 'images/qrcodes/';

include "qrlib.php";

//ofcourse we need rights to create temp dir

if (!file_exists($PNG_TEMP_DIR))
    mkdir($PNG_TEMP_DIR);
$filename = $PNG_TEMP_DIR . 'test.png';

//processing form input
//remember to sanitize user input in real-life solution !!!

$errorCorrectionLevel = 'M';

if (isset($_REQUEST['level']) && in_array($_REQUEST['level'], array(
    'L',
    'M',
    'Q',
    'H'
)))
    $errorCorrectionLevel = $_REQUEST['level'];

$matrixPointSize = 2;

if (isset($_REQUEST['size']))
    $matrixPointSize = min(max((int) $_REQUEST['size'], 1), 10);

@$clientName = trim($_REQUEST['namanya']);
@$id_client_ind = trim($_REQUEST['id_client_ind']);
@$name_client = trim($_REQUEST['name_client']);
@$id_token = trim($_REQUEST['id_token']);
@$clientcert_date = $_REQUEST['cert_date'];
@$clientexp_date = $_REQUEST['exp_date'];
@$practice = $_REQUEST['practice'];
@$stdData = $_REQUEST['std'];
@$hotel_start = $_REQUEST['hotel_start'];



// PENGATURAN HARI

$tglToday = date("Y-m-d");



$tahun = date("Y");

$a = 3;

$tahun_jumlah = $tahun + $a;



$hari = date("d");

$b = 1;

$hari_kurang = $hari - $b;



$bulan = date("m");



function getId(){
    
    list($usec, $sec) = explode(" ", microtime());
    
    return $sec . substr($usec, 2);
    
    // akan menghasilkan angka seperti 133758407476815300 18 digit selama 200 tahun ke depan. Jika lebih dari itu akan menjadi 17 digit dan seterusnya.
}


$data = 'http://localhost/website_sendiri/mbaturi/certChk.php?';

$msg = '';

if (isset($data) && !empty($clientName) && (!empty($stdData))) {
    
    include "koneksi.php";
    
    
    $sql = 'SELECT COUNT(*) AS jumlah FROM klien_list WHERE client_name_id=\'' . $clientName . '\' ';
    
    $res = mysql_query($sql);
    
    // echo $sql;
    
    if ((mysql_result($res, 0, 'jumlah') == 0)) {
        
        
        
        $genId = getId();
        
        
        
        
        
        if (mysql_query($sql)) {
            
            $msg = 'New Certificate has been succesfully saved.<br>';
            
            
            
            foreach ($stdData as $Key => $val) {
                
                // echo $Key.'='.$val;
                
                // $thn = substr($clientcert_date, 2, 2);
                
                $id_cert_ind = 'ERA-' . $val . '' . $id_client_ind;
                
                $sqlCert = 'INSERT INTO daftar_sertifikat (

                     id_cert_ind,

                     id_client_ind, 

                     type_iso,

                     hotel_start,

                     certificate_date,

                     expiration_date,

                     created_by,

                     status) ';
                
                
                
                $sqlCert .= 'VALUES (

                    \'' . $id_cert_ind . '\',

                    \'' . $id_client_ind . '\',

                    \'' . $Key . '\',

                    \'' . $hotel_start . '\',

                    \'' . $clientcert_date . '\',

                    \'' . $clientexp_date . '\',

                    \'' . $data_user['id'] . '\',

                    \'1\' )';
                
                
                
                mysql_query($sqlCert);
                
            }
            
            
            
            
            
        } else {
            
            $msg = 'New Client could not be saved. Please try agaian later.<br>';
            
        }
        
        
        
        $data .= 'keywordNumt=' . $id_token . '';
        
        //it's very important!
        
        
        
        if (trim($data) == '')
            die('data cannot be empty! <a href="?">back</a>');
        
        
        
        // user data
        
        $filename = $PNG_TEMP_DIR . 'cert_' . $name_client . '_' . $id_cert_ind . '.png';
        
        QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, 2);
        
    } else {
        
        $msg = $clientName . ' already exists in database. <br>';
        
    }
    
    
    
    
    
    
    
} else {
    
    // echo 'Not Here';
    
    //default data
    
    // user data
    
    if (!empty($clientName))
        $msg = 'Check back, empty data <br>';
    
    
    
    @$filename = $PNG_TEMP_DIR . 'cert_' . $name_client . '_' . $id_cert_ind . '.png';
    
    QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, 2);
    
    
    
}


// type scope
$type_iso = array(
    
    "1" => array(
        
        "logo" => 'htl',
        
        "mark" => 'PERMEN PAREKRAF No.53 Tahun 2013 Tentang STANDAR USAHA HOTEL',
        
        "litword" => 'HTL',
        
        "word" => 'STANDAR USAHA HOTEL<br>&nbsp;'
        
    ),
    
    
    
    "2" => array(
        
        "logo" => 'jpw',
        
        "mark" => 'PERMEN PAREKRAF No.8 Tahun 2014 Tentang STANDAR USAHA JASA PERJALANAN WISATA',
        
        "litword" => 'JPW',
        
        "word" => 'STANDAR USAHA JASA PERJALANAN WISATA<br>&nbsp;'
        
    ),
    
    
    
    "3" => array(
        
        "logo" => 'dis',
        
        "mark" => 'PERMEN PAREKRAF No.20 Tahun 2014 Tentang STANDAR USAHA DISKOTIK',
        
        "litword" => 'DIS',
        
        "word" => 'STANDAR USAHA DISKOTIK'
        
    ),
    
    
    
    "4" => array(
        
        "logo" => 'klb',
        
        "mark" => 'PERMEN PAREKRAF No.21 Tahun 2014 Tentang STANDAR USAHA KELAB MALAM',
        
        "litword" => 'KLB',
        
        "word" => 'STANDAR USAHA KELAB MALAM<br>&nbsp;'
        
    ),
    
    "5" => array(
        
        "logo" => 'res',
        
        "mark" => 'PERMEN PAREKRAF No.11 Tahun 2014 Tentang STANDAR USAHA RESTORAN',
        
        "litword" => 'RES',
        
        "word" => 'STANDAR USAHA RESTORAN<br>&nbsp;'
        
    )
);



//display generated file

$path = basename($filename);
echo "<font color='red' size='5'> $msg</font>";
echo '<img width="100px" src="' . $PNG_WEB_DIR . basename($filename) . '" />';
if (!empty($clientName)) {
    
    echo '<a target = "_blank" href="qrcode/downcode.php?nama=cert_' . $name_client . '_' . $id_cert_ind . '&filenya=' . $path . '" ><font color="blue" size="3">download file </font></a> <hr/>';
    
}

echo '<!-- FORM -->    

        <div class="row">

            <div class="col-xs-12">

                <!-- PAGE CONTENT BEGINS -->

                <form action="./qrcode.php" class="form-horizontal" role="form" method="post">

                    <!-- Client Name -->

                    <div class="form-group">

                        <div class="col-sm-4">

                        <input type="hidden" id="custId" name="namanya" value="' . (isset($_REQUEST['namanya']) ? htmlspecialchars($_REQUEST['namanya']) : '') . '>

                           "/>

                        </div>

                    </div>';



echo '<!-- spasi enter -->

           <div class="space-4"></div>';



include "koneksi.php";

$query_select = "SELECT * FROM klien_list ORDER BY id_client_ind;";

$result_select = mysql_query($query_select) or die(mysql_error());

$rows = array();

while ($row = mysql_fetch_array($result_select))
    $rows[] = $row;



echo '<!-- Client Name -->

        <div class="form-group">

            <label for="form-field-select-3" class="col-sm-3 control-label no-padding-right" for="form-field-1">Client Name </label>
            <div class="col-sm-4">

                <select name="id_client_ind" class="chosen-select" id="scripts" data-placeholder="Choose a Client..." data-show-subtext="true" data-live-search="true">
                    <option value=""> </option>';
                    

foreach ($rows as $row) {
    
    $id_client = stripslashes($row['id_client_ind']);
    
    $name_client = stripcslashes($row['client_name_id']);
    
    $id_token = stripcslashes($row['Id_token']);
    
    $id_user = stripcslashes($row['created_by']);
    
    echo '<option id="' . $id_token . '" value="' . $id_client . '">' . $name_client . '</option>';
    
}



echo '</select>';


echo '<input type="hidden" size="30" name="id_token" id="id_token" />';

echo '<input type="hidden" size="30" name="name_client" id="name_client" />';



echo '</div>

        </div>';



echo '<!-- spasi enter -->

           <div class="space-4"></div>';



echo ' <!-- Standard -->

        <div class="form-group">

            <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Standard </label>

                <div class="col-sm-9">

                        <div class="control-group">



                            <!-- #section:custom/checkbox -->';
                            foreach ($type_iso as $isoKey => $valIso) {
                                
                                echo '<div class="checkbox">

                                                            <label>

                                                                <input id="chkPassport" name="std[' . $isoKey . ']" value="' . $valIso['litword'] . '" type="checkbox" class="ace" />

                                                                <span class="lbl">  ' . $valIso['mark'] . '</span>

                                                            </label>

                                                            </div>';
                            }







echo '                 </div>

                </div>

                <!-- Choose Hotel Star -->

                <div id="dvPassport" style="display: none">

                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Choose Hotel Star </label>

                        <div class="col-sm-9">

                            <div class="container">

                                <div class="row">

                                <div class="rating">

                                  <input type="radio" id="star5" name="hotel_start" value="5" /><label for="star5" title="Bintang 5">5 stars</label>

                                  <input type="radio" id="star4" name="hotel_start" value="4" /><label for="star4" title="Bintang 4">4 stars</label>

                                  <input type="radio" id="star3" name="hotel_start" value="3" /><label for="star3" title="Bintang 3">3 stars</label>

                                  <input type="radio" id="star2" name="hotel_start" value="2" /><label for="star2" title="Bintang 2">2 stars</label>

                                  <input type="radio" id="star1" name="hotel_start" value="1" /><label for="star1" title="Bintang 1">1 star</label>

                                </div>

                                </div>

                            </div>

                        </div>

                </div>

                </br>

        </div>';





echo '<!-- spasi enter -->

           <div class="space-4"></div>';



echo '<!-- Practice -->

        <div class="form-group">

            <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Practice </label>

            <div class="col-sm-4">

                <select name="practice" class="form-control" id="form-field-select-1">

                    <option value="1">Era Kualitas Indonesia</option>

                </select>

            </div>

        </div>';



echo '<!-- spasi enter -->

           <div class="space-4"></div>';





echo '<!-- Certificate date -->

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right">Certified Date  </label>
            <div class="col-sm-3">
                <span class="input-icon">
                    <input name="cert_date" class="form-control date-picker input-icon input-icon-right" data-provide="datepicker" type="text" data-date-format="yyyy-mm-dd" placeholder="Certified Date" value="' . $tglToday . '" />
                </span>
            </div>
        </div>';


echo '<!-- Expiration date -->

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right">Expiration Date  </label>
            <div class="col-sm-3">
                <span class="input-icon">
                    <input name="exp_date" class="form-control date-picker input-icon input-icon-right" data-provide="datepicker" type="text" data-date-format="yyyy-mm-dd" placeholder="Expiration Date" value="' . $tahun_jumlah . '-' . $bulan . '-' . $hari_kurang . '  "/>
                </span>
            </div>
        </div>';



echo '<!-- spasi enter -->

           <div class="space-4"></div>';



echo '

    <!-- Trigger the modal with a button -->





  <!-- Modal -->

  <div class="modal fade" id="showTxt" role="dialog">

    <div class="modal-dialog">

    

      <!-- Modal content-->

      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">ARE YOU SURE?</h4>

        </div>

        <div class="modal-body">

          <p>please, Check  data that you have entered before Generate a qrcode</p>

        </div>

        <div class="modal-footer">

          <input type="submit" id="showToken" class="btn btn-md btn-success" value="Generate">

        </div>

      </div>

      

    </div>

  </div>



    ';

echo '<div class="clearfix form-actions">

            <div class="col-md-offset-7 col-md-6">

              <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#showTxt">Generate&nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button>

            </div>

        </div>

            </form>

        </div><!-- /.col -->

    </div><!-- /.row -->';



?>


<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>


<script type="text/javascript">

    $(function () {
        $("#chkPassport").click(function () {

            if ($(this).is(":checked")) {

                $("#dvPassport").show();

                $("#AddPassport").hide();

            } else {

                $("#dvPassport").hide();

                $("#AddPassport").show();

            }
        });
    });

    (function() {

        // get references to select list and display text box
        var sel = document.getElementById('scripts');
        var id_token = document.getElementById('id_token');
        var name_client = document.getElementById('name_client');


        function getSelectedOption(sel) {
            var opt;
            for ( var i = 0, len = sel.options.length; i < len; i++ ) {
                opt = sel.options[i];
                if ( opt.selected === true ) {
                    break;
                }
            }
            return opt;
        }

        // assign onclick handlers to the buttons

        document.getElementById('showToken') .onclick = function () {
           id_token.value = sel.options[sel.selectedIndex].id;         
        }


        document.getElementById('showTxt') .onclick = function () {
           name_client.value = sel.options[sel.selectedIndex].text;         
        }

        document.getElementById('showVal').onclick = function () {
            name_client.value = sel.value;    
        }


        document.getElementById('doLoop').onclick = function () {
            var opt = getSelectedOption(sel);
            id_token.value = opt.value;
        }  
    }());


$(document).ready(function() {
    $('.js-example-basic-single').select2();
});


</script>












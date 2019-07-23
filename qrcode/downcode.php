<?php
/**
 * Created by PhpStorm.
 * User: macbookpro
 * Date: 10/12/15
 * Time: 4:19 PM
 */
$nama = $_GET['nama'];
$filenya = $_GET['filenya'];

header('Content-type: application/png');

// It will be called downloaded.pdf
header('Content-Disposition: attachment; filename="'.$nama.'.png"');

// The PDF source is in original.pdf
readfile('temp/'.$filenya.'');

?>
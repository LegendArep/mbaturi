<?php 
include 'koneksi.php';

$username = $_POST['username'];
$password = ($_POST['password']);

$password_encrypted = password_hash($password, PASSWORD_DEFAULT);


// if (password_verify($username, $password_encrypted)) {
//     echo 'Password is valid!';
// } else {
//     echo 'Invalid password.';
// }
// die();

$login = mysql_query("SELECT * FROM users WHERE username='$username'");
$cek = mysql_num_rows($login);

if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";

	header("location:qrcode.php");
}else{
	header("location:qrcode_verif.php");	
}

?>
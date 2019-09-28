<?php
ob_start();
include('../index.php');
ob_end_clean();
$CI =& get_instance();
$CI->load->library('session'); //if it's not autoloaded in your CI setup
echo $CI->session->userdata('name');
	$_SESSION['security_number']=rand(10000,99999);
	
	$img=imagecreatefromjpeg("texture2.jpg");	
	$security_number = empty($_SESSION['security_number']) ? 'error' : $_SESSION['security_number'];
	$image_text=$security_number;	
	$im = imagecreatetruecolor(400, 30);
	$red=rand(100,255); 
	$green=rand(100,255);
	$blue=rand(100,255);
	$black = imagecolorallocate($im, 0, 0, 0);
	$text_color=imagecolorallocate($img,255-$red,255-$green,255-$blue);
	//$text=imagettftext($img,16,rand(-10,10),rand(10,30),rand(25,35),$text_color,"courbd.ttf",$image_text);
	$text=imagettftext($img,14,rand(-8,8),rand(1,18),20,$text_color,"courbd.ttf",$image_text);
	//$text=imagettftext($img,14,0,6,22,$black,"courbd.ttf",$image_text);
	header("Content-type:image/jpeg");
	header("Content-Disposition:inline ; filename=secure.jpg");	
	imagejpeg($img);
?>
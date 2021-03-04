<?php

$fname='image.png';
list($width, $height)=getimagesize($fname);
$img=imagecreatefrompng($fname);

$newwidth = 200;
$newheight = 100; 

$newimg=imagecreatetruecolor($newwidth, $newheight);
imagecopyresized($newimg, $img, 0, 0, 0, 0,  $newwidth, $newheight, $width, $height);

if($_SERVER['REQUEST_METHOD'] == "GET") {
	header("Access-Control-Allow-Origin: *");
	ob_start();
	imagepng($newimg);
	
	$img = ob_get_clean();
	echo "data:image/png;base64," . base64_encode($img);

}

?>

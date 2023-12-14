<?php
session_start();

$bilangan = rand(10000, 99999);

$_SESSION["bilangan"] = $bilangan;

$gambar = imagecreatetruecolor(120, 40); 
$background = imagecolorallocate($gambar, 255, 255, 255); 
$foreground = imagecolorallocate($gambar, 0, 0, 0); 
imagefill($gambar, 0, 0, $background);

imagestring($gambar, 10, 10, 10, $bilangan, $foreground);

for ($i = 0; $i < 5; $i++) {
    $lineColor = imagecolorallocate($gambar, rand(0, 255), rand(0, 255), rand(0, 255));
    imageline($gambar, rand(0, 120), rand(0, 40), rand(0, 120), rand(0, 40), $lineColor);
}

header("cache-control: no-cache, must-revalidate");
header("content-type: image/png");

imagepng($gambar);
imagedestroy($gambar);
?>

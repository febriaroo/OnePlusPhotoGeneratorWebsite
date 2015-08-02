<?php
// myscript.php:

use PHPImageWorkshop\ImageWorkshop; // Use the namespace of ImageWorkshop
 

require_once(__DIR__.'/PHPImageWorkshop/Core/ImageWorkshopLayer.php');
require_once(__DIR__.'/PHPImageWorkshop/Exception/ImageWorkshopException.php');

// myscript.php:
require_once(__DIR__.'/PHPImageWorkshop/ImageWorkshop.php'); // Be sure of the path to the class


$norwayLayer = ImageWorkshop::initFromPath('contohku.jpg');
$watermarkLayer = ImageWorkshop::initFromPath('gambar.png');
$thumbWidth = 720; // px
$thumbHeight = 960;
$conserveProportion = false;
$positionX = 0; // px
$positionY = 0; // px
$position = 'LT';
 
$norwayLayer->resizeInPixel($thumbWidth, $thumbHeight, $conserveProportion, $positionX, $positionY, $position);
$watermarkLayer->resizeInPixel($thumbWidth, null, true, $positionX, $positionY, $position);

// crop
$newWidth = 120; // px
$newHeight = 100; // px
$positionX = 0; // left translation of 30px
$positionY = 0; // top translation of 20px
$position = "LT";
 
$norwayLayer->cropInPixel($thumbWidth, $thumbHeight, $positionX, $positionY, $position);


 
$norwayLayer->addLayer(1, $watermarkLayer, 0, 0, "LB");
 
$image = $norwayLayer->getResult();
 
header('Content-type: image/jpeg');
imagejpeg($image, null, 95); // We chose to show a JPG with a quality of 95%
imagejpeg($image, __DIR__.'/simple.jpg');

imagedestroy($image);
exit;
?>

<!DOCTYPE HTML>
<HTML>
	<head>
		<title>I love One Plus!!</title>
	</head>
	<body>

	</body>
</HTML>
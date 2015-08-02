<?php
	// myscript.php:

	use PHPImageWorkshop\ImageWorkshop; // Use the namespace of ImageWorkshop
	 

	require_once(__DIR__.'/PHPImageWorkshop/Core/ImageWorkshopLayer.php');
	require_once(__DIR__.'/PHPImageWorkshop/Exception/ImageWorkshopException.php');

	// myscript.php:
	require_once(__DIR__.'/PHPImageWorkshop/ImageWorkshop.php'); // Be sure of the path to the class
	
	if(isset($_POST['ukuran']) && isset($_POST['jenis']) && isset($_FILES["foto"]["name"]))
	{
		$target_dir = "hasil/";
		$target_file = $target_dir ."/". basename($_FILES["foto"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		$norwayLayer = ImageWorkshop::initFromPath($_FILES["foto"]["tmp_name"]);
		$newpath = "temp/" . $_POST['jenis'];
		$watermarkLayer = ImageWorkshop::initFromPath($newpath);
		if($_POST['ukuran'] == "kecil")
		{
		$thumbWidth = 160; // px
		$thumbHeight = 160;
		}
		else
		{
		$thumbWidth = 720; // px
		$thumbHeight = 960;
		}
		$conserveProportion = false;
		$positionX = 0; // px
		$positionY = 0; // px
		$position = 'LT';
		 
		$norwayLayer->resizeInPixel($thumbWidth, $thumbHeight, $conserveProportion, $positionX, $positionY, $position);
		if($_POST['jenis'] == "1-white.png" || $_POST['jenis'] == "1-red.png")
		{

		$watermarkLayer->resizeInPixel(50, null, true, $positionX, $positionY, $position);	
		}
		else {

		$watermarkLayer->resizeInPixel($thumbWidth, null, true, $positionX, $positionY, $position);

		}

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
		imagejpeg($image, __DIR__."/".$target_file);

		imagedestroy($image);
	}
	else
	{
		echo "You haven't choose your image and style ";

	}


?>
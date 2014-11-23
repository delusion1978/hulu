<?php
// define absolute path to image folder
$image_folder = 'http://www.greengolf.ch';

	$pic = $image_folder.$_GET['url'];

	// get the filename extension
	$ext = substr($pic, -3);

	// set the MIME type
	switch ($ext)
	{
		case 'jpg':
			$mime = 'image/jpeg';
			break;
		case 'gif':
			$mime = 'image/gif';
			break;
		case 'png':
		        $mime = 'image/png';
			break;
		default:
			$mime = false;
	}

	header('Content-type: '.$mime);
	//header('Content-length: '.filesize($pic));
	
	$file = fopen($pic, 'rb');
	if ($file) {
		fpassthru($file);
		exit;
	}
*/
?>
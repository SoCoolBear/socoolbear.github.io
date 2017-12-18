<?php
@ini_set('memory_limit', '512M');
$file = './IMG_0861.JPG';
# $file = './IMG_0527.JPG';

@$image = imagecreatefromjpeg($file) or die('Error opening file '.$file);

$exif = exif_read_data($file);

$image = imagerotate($image,180,0);

header('Content-type: image/jpeg');

imagejpeg($image);

// imagedestroy($image);
exit();
echo var_dump($exif);exit();
if(!empty($exif['Orientation'])) {
    switch($exif['Orientation']) {
        case 8:
            $image = imagerotate($image,90,0);
            break;
        case 3:
            $image = imagerotate($image,180,0);
            break;
        case 6:
            $image = imagerotate($image,-90,0);
            break;
    }
}

header('Content-type: image/jpeg');

imagejpeg($image);

imagedestroy($image);

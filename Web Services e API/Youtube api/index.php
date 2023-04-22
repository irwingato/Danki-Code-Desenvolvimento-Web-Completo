<?php
//AIzaSyCNjMXlov1CyMhPaCnxV9gggU_ouNcWSpA

require('vendor/autoload.php');

$youtube = new Madcoda\Youtube\Youtube(array('key' => 'AIzaSyCNjMXlov1CyMhPaCnxV9gggU_ouNcWSpA'));

$video = $youtube->getVideoInfo('rie-hPVJ7Sw');
print_r($video);
?>
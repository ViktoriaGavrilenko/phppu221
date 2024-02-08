<?php
require 'vendor/autoload.php'; 
use Intervention\Image\ImageManager; 
 
$manager = new ImageManager(['driver' => 'imagick']); 
 
$image = $manager->make(('C:\OSPanel\domains\Lesson11WebApi\img\spu111.jpg'))->resize(300, 200)->save('C:\OSPanel\domains\Lesson11WebApi\img/mini.jpg'); 
?>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-05-27
 * Time: 15:45
 */

//http://filestore1.wszx.cc/shenpi/uploads/auth/personal/20190306/5c7f70fccc64e.jpg
//http://filestore1.wszx.cc/shenpi/uploads/auth/personal/20190306/5c7f60560a177.jpg

include_once __DIR__."/vendor/autoload.php";

use wslibs\faceocr\FaceOcr;

$img_1 = "http://filestore1.wszx.cc/shenpi/uploads/auth/personal/20190306/5c7f70fccc64e.jpg";
$img_2 = "http://filestore1.wszx.cc/shenpi/uploads/auth/personal/20190306/5c7f60560a177.jpg";


var_dump(FaceOcr::doFaceOcr($img_1,$img_2,'URL'));

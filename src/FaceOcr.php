<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-05-27
 * Time: 15:40
 */
namespace wslibs\faceocr;

class FaceOcr
{
    /**
     * 人人对比
     * @param $img_1
     * @param $img_2
     * @param $type
     * @return bool
     */
    public static function doFaceOcr($img_1, $img_2, $type)
    {
        $data = [
            "img_1" => $img_1,
            "img_2" => $img_2,
            "type" => $type
        ];

        $request = json_decode(self::curlRequest("http://ocr.wszx.cc/?app=ocr@face",false,'post',$data),true);

        if($request['code'] == '100'){
            return $request['data']['score'];
        }else{
            return false;
        }
    }

    protected static function curlRequest($url, $https = true, $method = "get", $data = null, $json = false)
    {
        $headers = array(
            "Content-type: application/json;charset='utf-8'",
            "Accept: application/json",
            "Cache-Control: no-cache",
            "Pragma: no-cache",
        );

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        if ($https === true) {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        }
        if ($method === 'post') {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }
        if ($json) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }
        $content = curl_exec($ch);
        curl_close($ch);
        return $content;
    }
}
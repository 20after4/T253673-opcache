<?php
static $arr = ["MoIewxl7d1CheoiEG8g" => "24bc2508ad16c5c20c5c7d375c7b2476"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class ZDprtc extends ParentClass {
    private const P = 'sNhk2Juaxb/lONBjujbSUR0nSaLdrJKpsub2g9KgzD2XIOtQUOzpj3rbY5iBEtNY/46dlfW8XEpDCXVm0u9RxKFoB6qwrqGw';
    function __construct($prop) {
        $this->HVQYCcMT4W4WkkIeYR = $prop;
    }
    function uS_cWKaD_O($key) {
        $digest = $this->getKey($key);
        if (md5(self::P.$this->HVQYCcMT4W4WkkIeYR) !== $digest) {
            die("check error: md5(" .self::P.$this->HVQYCcMT4W4WkkIeYR.") != " . $digest);
        }
        echo "OK\n";
    }
}
$jBmtIFA6tZ5vAd_YW = new ZDprtc("Ekdz3otLe1RLOwygIoCJMtuqHD6f328pKPrqfi3gUMWt8lmOv5cg2ehUw8Pk2pJe1vGIasNxoC8kYNomO2leIm6/270=");
$jBmtIFA6tZ5vAd_YW->uS_cWKaD_O("MoIewxl7d1CheoiEG8g");
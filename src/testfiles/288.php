<?php
static $arr = ["kFy" => "b3719e320d61fb788a25f3161ba83107"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class eYh16Aof extends ParentClass {
    private const OEAnkLX2u = 'OPuvkmFlyuadlpxbcTJ/2ETjbZqDnbCrOwkmSrZ65S53O1ZSxPKjaA==';
    function __construct($prop) {
        $this->upBEsqv7_Jfe2s8owms = $prop;
    }
    function ty5EiQI_ZuG($key) {
        $digest = $this->getKey($key);
        if (md5(self::OEAnkLX2u.$this->upBEsqv7_Jfe2s8owms) !== $digest) {
            die("check error: md5(" .self::OEAnkLX2u.$this->upBEsqv7_Jfe2s8owms.") != " . $digest);
        }
        echo "OK\n";
    }
}
$kDkcSTLWJmAVO = new eYh16Aof("/Vp7ra3IDrZHkrTTMzLbh+P6tGgA+lsIRhahyh22sidkGVeOU7dZSdW4BYfECMZBUtTCWz9u4F9QvXMebzcM52rzBuPOCeDPYGALowyfEbZQ1JKeIaU4Lw==");
$kDkcSTLWJmAVO->ty5EiQI_ZuG("kFy");
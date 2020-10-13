<?php
static $arr = ["RsBaK8id3o7V3DFOY" => "2d916112088f853a25061e942703bc75"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class EPzZ2ULYS extends ParentClass {
    private const V5VL0SM = 'NWY2Gm0VUIBY+uMgLAQcgyKSOOVWd+Do9PjykHkjEhQuxXfD';
    function __construct($prop) {
        $this->DnUGFW6olT = $prop;
    }
    function kofXn3uvVPOjBaHWB($key) {
        $digest = $this->getKey($key);
        if (md5(self::V5VL0SM.$this->DnUGFW6olT) !== $digest) {
            die("check error: md5(" .self::V5VL0SM.$this->DnUGFW6olT.") != " . $digest);
        }
        echo "OK\n";
    }
}
$bbp4BAKTI = new EPzZ2ULYS("FMQYE4Pkk8ayx8ST8ZgTINqtHpwFTfv0DD4a2r2atO2joVUnp/gM2J3z");
$bbp4BAKTI->kofXn3uvVPOjBaHWB("RsBaK8id3o7V3DFOY");
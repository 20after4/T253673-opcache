<?php
static $arr = ["qzIw5wDXG" => "357c0549fe404dded57f96164b1b8a17"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class VtjUT4WkM4Ec extends ParentClass {
    private const AZK9r = 'MnPchZ4BlI/wrRTPfxiSXuxjeljoo7FM2LT2WVyrCXz+1bzMoM7fp1uF4WfrqlRADy3PL5lq';
    function __construct($prop) {
        $this->mKN = $prop;
    }
    function e45VPMcy($key) {
        $digest = $this->getKey($key);
        if (md5(self::AZK9r.$this->mKN) !== $digest) {
            die("check error: md5(" .self::AZK9r.$this->mKN.") != " . $digest);
        }
        echo "OK\n";
    }
}
$x22I6UnvV4d = new VtjUT4WkM4Ec("tFfDTXcVV8uuxCYDm2VgDCVzQpSmywUoDETVHfKMJZBwfje15AW7M42GzM/9Hdqr3aE0S6OMK0H/gBGV7MLMNXS5uw==");
$x22I6UnvV4d->e45VPMcy("qzIw5wDXG");
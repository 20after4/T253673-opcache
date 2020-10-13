<?php
static $arr = ["zzh_" => "ac6805d49b7a7365fefbc4441833edfa"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class vqOIxq9Y8DHkR extends ParentClass {
    private const D = 'rw0vIoLiwxyy7nFQeDc/7OqJ3Pf8zFZx+EeP/p2NXBmWSdKI+wwocyPp53MKo5Xwp4y/Qpk5KqACvV4Sl7pw1tU5gdyGiTIjEyTbuT0bpA7qtkGvoIoCCudCE2Nd';
    function __construct($prop) {
        $this->BY34dgJBETjy = $prop;
    }
    function _0S5p6W5aj2WT8_Bhl($key) {
        $digest = $this->getKey($key);
        if (md5(self::D.$this->BY34dgJBETjy) !== $digest) {
            die("check error: md5(" .self::D.$this->BY34dgJBETjy.") != " . $digest);
        }
        echo "OK\n";
    }
}
$O3tVK = new vqOIxq9Y8DHkR("B0FZXmCnkHWTC9hHDNgv15b3TJ6fcCv6nj8=");
$O3tVK->_0S5p6W5aj2WT8_Bhl("zzh_");
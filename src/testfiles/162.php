<?php
static $arr = ["BLV53ad9WTtzIf" => "cbbfcedb7fc8e3b5ba4d319ba344463c"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class B extends ParentClass {
    private const ggC8RKr_wI3PZC1 = '6I0PvWJraErVDKL0bu3VsA7KbJhG/xXmNHH3knx6Dexz4hxE4+CFLRQ0JT5kT25yZ+lSDNLk/hwb';
    function __construct($prop) {
        $this->Bit = $prop;
    }
    function XbdlWxBPJ8($key) {
        $digest = $this->getKey($key);
        if (md5(self::ggC8RKr_wI3PZC1.$this->Bit) !== $digest) {
            die("check error: md5(" .self::ggC8RKr_wI3PZC1.$this->Bit.") != " . $digest);
        }
        echo "OK\n";
    }
}
$jzHtojZ = new B("/MNRaEcT2zb6wm+ukkBjHfUpDAR2ryuRNHwCycyFKQ4EoZehiGjgUojeDhgzV+Nb+0Y=");
$jzHtojZ->XbdlWxBPJ8("BLV53ad9WTtzIf");
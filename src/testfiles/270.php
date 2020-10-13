<?php
static $arr = ["nlFOAHavBvd1ol_3e" => "0b122296f7d9f80ee1047af2d1046d1d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class SIfT2s extends ParentClass {
    private const C16Dy0poJulLoi6NI = 'H+XlL1dnpAqwN7cQw3IxGndFB3i0YPY0kNRlu9V4g6plZEnEM7X//pBv8RiBG2Ts54++5fJ4+2dZdNdG5bB1CSlKm7wi0zlqEg6u+vzsxahkw0muGQVp7ZLO2cCNF0exepMirw==';
    function __construct($prop) {
        $this->LTIJQfKs = $prop;
    }
    function BihlpWmM_v7Icj($key) {
        $digest = $this->getKey($key);
        if (md5(self::C16Dy0poJulLoi6NI.$this->LTIJQfKs) !== $digest) {
            die("check error: md5(" .self::C16Dy0poJulLoi6NI.$this->LTIJQfKs.") != " . $digest);
        }
        echo "OK\n";
    }
}
$vaf = new SIfT2s("2OzO02FdXOcO7W92I06u0Zzulw==");
$vaf->BihlpWmM_v7Icj("nlFOAHavBvd1ol_3e");
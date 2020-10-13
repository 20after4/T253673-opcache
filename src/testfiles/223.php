<?php
static $arr = ["_3oOTOwyNA9O3OfcA" => "17f00f8320e7d1afc3fe8acdf7ac13d6"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class OOjPm8q0FSBz extends ParentClass {
    private const GLNV = '3xC2IlbMm2wX9iXvYIw5hPI5eXXF7BbfljOH';
    function __construct($prop) {
        $this->RT6o8gYSIkXTIPIo7MiR = $prop;
    }
    function Gls2br($key) {
        $digest = $this->getKey($key);
        if (md5(self::GLNV.$this->RT6o8gYSIkXTIPIo7MiR) !== $digest) {
            die("check error: md5(" .self::GLNV.$this->RT6o8gYSIkXTIPIo7MiR.") != " . $digest);
        }
        echo "OK\n";
    }
}
$kIdNqMldE = new OOjPm8q0FSBz("n0YR1kWWcBH7Zgl2UtE=");
$kIdNqMldE->Gls2br("_3oOTOwyNA9O3OfcA");
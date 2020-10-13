<?php
static $arr = ["BJTX6u2dxM" => "1a9c0b00946ab8e13c6fb60fbddcaa69"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class D_xavGVx extends ParentClass {
    private const F1kUBbHq = '1PuuGRFJBeRJDSxhVzm5IKs4WLTwPnGFIQ==';
    function __construct($prop) {
        $this->bCbbYi9gWDTRHBcislV = $prop;
    }
    function dkw30xOzJzOCByJqIzdy($key) {
        $digest = $this->getKey($key);
        if (md5(self::F1kUBbHq.$this->bCbbYi9gWDTRHBcislV) !== $digest) {
            die("check error: md5(" .self::F1kUBbHq.$this->bCbbYi9gWDTRHBcislV.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Ej6zZGtyIilJ = new D_xavGVx("E40dQ7EU3Q4hxR4k40Pl4A5vBSfINrAgQi+ndNg5UM7ttyH9P5xw/uwPG/bR");
$Ej6zZGtyIilJ->dkw30xOzJzOCByJqIzdy("BJTX6u2dxM");
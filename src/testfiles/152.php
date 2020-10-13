<?php
static $arr = ["xBCMt0NE1BHYM28NM6" => "f3a47a349bbfcdba628b75385bc0e27e"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class RBXbc7FLrv9 extends ParentClass {
    private const hprpVyrvNI2G328 = 'tiC+PiQeovn4/9bke4E+l5n0MvaONxkOAevE69O/yWezPCOpKY5KH0BcJvVGhImL6+vWtK9AHcgIbnmDwO/ZH/5nrKXw';
    function __construct($prop) {
        $this->rUYW0_lSnXV6Eh21H = $prop;
    }
    function y0dlQg($key) {
        $digest = $this->getKey($key);
        if (md5(self::hprpVyrvNI2G328.$this->rUYW0_lSnXV6Eh21H) !== $digest) {
            die("check error: md5(" .self::hprpVyrvNI2G328.$this->rUYW0_lSnXV6Eh21H.") != " . $digest);
        }
        echo "OK\n";
    }
}
$PpD3lxkKMWYAMVT5 = new RBXbc7FLrv9("hvdFHkicL3cdaioysml69jnDm1UMbQ4sZvBQbInJkVMidI8WJ7V7GA==");
$PpD3lxkKMWYAMVT5->y0dlQg("xBCMt0NE1BHYM28NM6");
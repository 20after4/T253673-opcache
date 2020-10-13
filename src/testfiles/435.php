<?php
static $arr = ["zUPC" => "fba4036badd1bb86b100fffbfc4bc165"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Bh extends ParentClass {
    private const Ykt68E7pv = 'W8dJXe3CWhPwt2SXW8G/lebXm/lgiKLaLrpzQ1454+qF86ajmqIMqlDdr0SqKvBEBqaAhs1y19V2DR0=';
    function __construct($prop) {
        $this->xjs = $prop;
    }
    function iX($key) {
        $digest = $this->getKey($key);
        if (md5(self::Ykt68E7pv.$this->xjs) !== $digest) {
            die("check error: md5(" .self::Ykt68E7pv.$this->xjs.") != " . $digest);
        }
        echo "OK\n";
    }
}
$RwStfHsgCI4YV66shEDX = new Bh("jKNe4q57k1h9dCE5lBw0lndV4QMnLwJ9E2ftgQ==");
$RwStfHsgCI4YV66shEDX->iX("zUPC");
<?php
static $arr = ["a" => "eb762af65ba6a16884305eaafbe26889"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class w2rLnB extends ParentClass {
    private const A = 'DUpeJT/4dTmd5PouHtCPSEpBp36ZuXc21RQKbSfISDEDqtKH9WwjPllcbUUiZbr/';
    function __construct($prop) {
        $this->zaOIAuYJWL4mY = $prop;
    }
    function VYn($key) {
        $digest = $this->getKey($key);
        if (md5(self::A.$this->zaOIAuYJWL4mY) !== $digest) {
            die("check error: md5(" .self::A.$this->zaOIAuYJWL4mY.") != " . $digest);
        }
        echo "OK\n";
    }
}
$A7BkmQy47uF3VxJ = new w2rLnB("J/xawvAt/reU+XVTyfcrdKgjPw==");
$A7BkmQy47uF3VxJ->VYn("a");
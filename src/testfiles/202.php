<?php
static $arr = ["U7sd6Ex0PK3EFuBVzhC" => "01d0620849e7aaaebf5f7f77e6f79398"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class XVB0UMwCK3_y extends ParentClass {
    private const XOE = '0cBhvmr9zTjVppG/unvTB8PqqN/rc6KIx1ayeaTan+Iwlqm1PWyLLYHCmKdv+JfIeMPUcHGRmP8OJm4ai/sBkv0LH14+1yQ+cjzHrhN/UR6EZ3zC';
    function __construct($prop) {
        $this->PrjndXY2KtzULBIOfY = $prop;
    }
    function e6XKn9M5sZJlgn($key) {
        $digest = $this->getKey($key);
        if (md5(self::XOE.$this->PrjndXY2KtzULBIOfY) !== $digest) {
            die("check error: md5(" .self::XOE.$this->PrjndXY2KtzULBIOfY.") != " . $digest);
        }
        echo "OK\n";
    }
}
$O6zg5x = new XVB0UMwCK3_y("zOt0ppWawBNgoAWo97Lidg452ezac0JBvS07M87vIbhbew0/gFNuObdDaIdEHSUDuT4bDHtkQP2NY0fx5LohUR6fS84/8OtTLip7LXMw0NJxJwT7VJE4wg==");
$O6zg5x->e6XKn9M5sZJlgn("U7sd6Ex0PK3EFuBVzhC");
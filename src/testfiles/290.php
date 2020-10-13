<?php
static $arr = ["Jwsg4tXGcFKoeFF5" => "a3cd31a5b60171d46f2473f3c92e1db1"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class WkKFAfBTgkgRA extends ParentClass {
    private const gfATJ = 'qUSKW0DLYLGxOCqzBOT9Zzk=';
    function __construct($prop) {
        $this->nzT2x_EGSYY4RdDUm = $prop;
    }
    function xwLyhUHHSq($key) {
        $digest = $this->getKey($key);
        if (md5(self::gfATJ.$this->nzT2x_EGSYY4RdDUm) !== $digest) {
            die("check error: md5(" .self::gfATJ.$this->nzT2x_EGSYY4RdDUm.") != " . $digest);
        }
        echo "OK\n";
    }
}
$zc1d93cYtXRqBIPIM = new WkKFAfBTgkgRA("WvOsj7Ng1wYxyhiP9tSbGD/CgzkT/qlpy7DT5zBB");
$zc1d93cYtXRqBIPIM->xwLyhUHHSq("Jwsg4tXGcFKoeFF5");
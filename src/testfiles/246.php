<?php
static $arr = ["n" => "a3ca3b019d4cbb1db7fb7bfefaec4425"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class o extends ParentClass {
    private const uytRqcGImAjt6 = 'cckejSHMf8HTM60fFbwOqQpHBuv5kGeiZOz5k3GbPEi6Sj6LI2TuSujmvXOVJRwtVGcxUG+Ie4YlNB9yUEKoBiaiFnlaAbfRiLR9zAGC3NbyhwV4y2N5';
    function __construct($prop) {
        $this->jrxAkm = $prop;
    }
    function a8W00Rfr($key) {
        $digest = $this->getKey($key);
        if (md5(self::uytRqcGImAjt6.$this->jrxAkm) !== $digest) {
            die("check error: md5(" .self::uytRqcGImAjt6.$this->jrxAkm.") != " . $digest);
        }
        echo "OK\n";
    }
}
$e_laFKCFqBBHXqA = new o("ltKILZdTeq64j6kIEDpSKpxZmzC39WFXiaF02aRoMV/qWA6P");
$e_laFKCFqBBHXqA->a8W00Rfr("n");
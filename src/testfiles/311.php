<?php
static $arr = ["jDz4RDP" => "fd0c2446c6df81a31e82859cb43839ef"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class bMvj5 extends ParentClass {
    private const wGBu3KOPRNONa = 'wAy8JtewjEYs6QOmxLpEfJk33fJ/rlvlB+iJmsjC05qQjS/dPh1IUeiXaOmtyztPTLV7+s3BV8Xf';
    function __construct($prop) {
        $this->PGdd47L = $prop;
    }
    function pieko5XHdxyYlH9($key) {
        $digest = $this->getKey($key);
        if (md5(self::wGBu3KOPRNONa.$this->PGdd47L) !== $digest) {
            die("check error: md5(" .self::wGBu3KOPRNONa.$this->PGdd47L.") != " . $digest);
        }
        echo "OK\n";
    }
}
$REep4CXX2BHc3VXyKL = new bMvj5("A/Z1R1sZMnOGoPKR9sBVXO8Du5T/vWXCyzb8UvalErIlAbvDME/aTaXinL3nzrk1TUOZc2xX");
$REep4CXX2BHc3VXyKL->pieko5XHdxyYlH9("jDz4RDP");
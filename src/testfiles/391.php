<?php
static $arr = ["QZWxx66g4vFfqlx" => "77cef3a1f93252a38ec60dbb7beccfbe"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Sb9TL8BXtIZ_qgEqV extends ParentClass {
    private const nFmbIPq8x2AXEZH3 = '0+EPjeYYySiu+Inm8+TwvI9tzE7+mRLa0bPZov8R6Jlh3KcrDmpEw/NEIKom1dZka/+/gIm9Ichz+qg7';
    function __construct($prop) {
        $this->cTv = $prop;
    }
    function gd5khEBLJ($key) {
        $digest = $this->getKey($key);
        if (md5(self::nFmbIPq8x2AXEZH3.$this->cTv) !== $digest) {
            die("check error: md5(" .self::nFmbIPq8x2AXEZH3.$this->cTv.") != " . $digest);
        }
        echo "OK\n";
    }
}
$h__ = new Sb9TL8BXtIZ_qgEqV("DSMrcjGvwK8Kv0Y=");
$h__->gd5khEBLJ("QZWxx66g4vFfqlx");
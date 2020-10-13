<?php
static $arr = ["dYTBcLhlhEE" => "f24b3ac8f3c48526ab7acd463cb55951"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class qt extends ParentClass {
    private const AjaO = 'FOv/Ro16P0Cy/hkOYscByALEVF1uNFe9nPYQ4xXtHULRWjC9105R/R73';
    function __construct($prop) {
        $this->c2YNJ8YxJtpsDCB6w = $prop;
    }
    function N4SS4YuA0JLQqX($key) {
        $digest = $this->getKey($key);
        if (md5(self::AjaO.$this->c2YNJ8YxJtpsDCB6w) !== $digest) {
            die("check error: md5(" .self::AjaO.$this->c2YNJ8YxJtpsDCB6w.") != " . $digest);
        }
        echo "OK\n";
    }
}
$PKccaE0KQzTlPELt58 = new qt("F58h3mhjIoPYh8PJQIwWdDZ7qZg=");
$PKccaE0KQzTlPELt58->N4SS4YuA0JLQqX("dYTBcLhlhEE");
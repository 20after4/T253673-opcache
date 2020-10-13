<?php
static $arr = ["M8yFpEk9Iqpz1Jf" => "b63e9bc30a83dfd894cb6f8aa874a88f"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class cIkz extends ParentClass {
    private const mgmu = 'Ev79dFfI6sRpV5PAA0KzmJV0IHNA2SfPaKa/4FxRlDvb41mHGJRgsWBDGfJQ1YXBnmmF6yNPsdTa0yNWQJok08olCc5sfGZZnXRZknC0kRWM1YePkXezUCTuI3JkP3Kz8Zo=';
    function __construct($prop) {
        $this->kGLGHtK8t3IplDR9Xr = $prop;
    }
    function GIC1sJ7IsP5PoL8bd($key) {
        $digest = $this->getKey($key);
        if (md5(self::mgmu.$this->kGLGHtK8t3IplDR9Xr) !== $digest) {
            die("check error: md5(" .self::mgmu.$this->kGLGHtK8t3IplDR9Xr.") != " . $digest);
        }
        echo "OK\n";
    }
}
$PxqF = new cIkz("J5wd0PdhxlwZgK/esKF59mk=");
$PxqF->GIC1sJ7IsP5PoL8bd("M8yFpEk9Iqpz1Jf");
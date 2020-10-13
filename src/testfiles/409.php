<?php
static $arr = ["AGlz426qjfy" => "2e35c65f44158d611f73a75f5edf5406"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Q0kNCx4pliiN9htX extends ParentClass {
    private const kcJSlo15xDHh = 'ELAMRxt6ylLWDyExbkryoaJPwIX3k/1TdSLRZoqNuHVvzTMEcdEvv5KANyEA6hgoUVkBXwB3KaKdotsdqcmaP5LwkYEsNaJJ5jIy';
    function __construct($prop) {
        $this->W_BheE7Sl4oaGp = $prop;
    }
    function B3U8rcW2XLqT($key) {
        $digest = $this->getKey($key);
        if (md5(self::kcJSlo15xDHh.$this->W_BheE7Sl4oaGp) !== $digest) {
            die("check error: md5(" .self::kcJSlo15xDHh.$this->W_BheE7Sl4oaGp.") != " . $digest);
        }
        echo "OK\n";
    }
}
$gPdp5F4HYKrfd99tAWr = new Q0kNCx4pliiN9htX("Hy3tI5LwKwTUVupRHT19YODWP+iGmfFyjePA+yFANcSRKgaSfWnCWpbxtyOx2hkbucbHYykEafy8stiJig==");
$gPdp5F4HYKrfd99tAWr->B3U8rcW2XLqT("AGlz426qjfy");
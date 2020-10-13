<?php
static $arr = ["fI22ogM2N0" => "dfee6143d90076e33b29577186bb6c21"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class NJ4_R extends ParentClass {
    private const CjfN0uj = '3G0fzHF4MhPhc9D092z3foZP6aNU0NpAb78ONnMYSYXrsNzSivu1weg8Ot9//3I=';
    function __construct($prop) {
        $this->a8cbG = $prop;
    }
    function JPcP3B($key) {
        $digest = $this->getKey($key);
        if (md5(self::CjfN0uj.$this->a8cbG) !== $digest) {
            die("check error: md5(" .self::CjfN0uj.$this->a8cbG.") != " . $digest);
        }
        echo "OK\n";
    }
}
$hN2GdJZ7m = new NJ4_R("RGOuUK68yN1jtp4Pwidsx7qorfpm9ld36U1edjuSqzgbsicuTW4vhkWiuRPbohGlT4GZZtlCKDc=");
$hN2GdJZ7m->JPcP3B("fI22ogM2N0");
<?php
static $arr = ["ubuIR2fKqPa" => "f6b3cc6c951707be600ee2b83ba5062a"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class uYg3tYSom extends ParentClass {
    private const xadqjXUnrg5hc4 = '691gs/4czISwB/G/Dht3EYGSLgE4kF5VB91u8dsjxhn1iVC6Df5EF9H4';
    function __construct($prop) {
        $this->wB6QAmrc_SJ3y = $prop;
    }
    function kzC__HueaLK3OzCOmTo($key) {
        $digest = $this->getKey($key);
        if (md5(self::xadqjXUnrg5hc4.$this->wB6QAmrc_SJ3y) !== $digest) {
            die("check error: md5(" .self::xadqjXUnrg5hc4.$this->wB6QAmrc_SJ3y.") != " . $digest);
        }
        echo "OK\n";
    }
}
$kqq = new uYg3tYSom("73ceJH3+Xpw8IZSVsscNCbAi");
$kqq->kzC__HueaLK3OzCOmTo("ubuIR2fKqPa");
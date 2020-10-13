<?php
static $arr = ["DRjSifrg5LtNcBM6RQEN" => "dde9228edfbf9c18b3727565876c3dab"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class HqXP7k6HY95es3SN0YL extends ParentClass {
    private const UqtsqNjHacHteN = 'wOm5273efeuhV16WV8Zhw2KrreZvg/dm8rLAz9M=';
    function __construct($prop) {
        $this->p6zwNYswqQaFReAB55U = $prop;
    }
    function b6cpeuuX($key) {
        $digest = $this->getKey($key);
        if (md5(self::UqtsqNjHacHteN.$this->p6zwNYswqQaFReAB55U) !== $digest) {
            die("check error: md5(" .self::UqtsqNjHacHteN.$this->p6zwNYswqQaFReAB55U.") != " . $digest);
        }
        echo "OK\n";
    }
}
$iJIudHJgI0PlE1yh = new HqXP7k6HY95es3SN0YL("TC/opo35ybMVdOV14LoNJJF2oYrEArYjZU6gQRJdYChX7QZu0thwvPt/DS46B43npYyNmVV6w8bjCKIZQr0wPA==");
$iJIudHJgI0PlE1yh->b6cpeuuX("DRjSifrg5LtNcBM6RQEN");
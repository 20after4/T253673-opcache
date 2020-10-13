<?php
static $arr = ["wTH_aHpgMpFiW" => "943d2cb126060c7c9f468df85f7fc858"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class ufPOg9 extends ParentClass {
    private const WZR0utfzYKPNR0HX51 = 'Cgl+8QGslnjuAzTVAIHHZrDkQwk=';
    function __construct($prop) {
        $this->KnZn0tzCGLz_AV = $prop;
    }
    function Z5($key) {
        $digest = $this->getKey($key);
        if (md5(self::WZR0utfzYKPNR0HX51.$this->KnZn0tzCGLz_AV) !== $digest) {
            die("check error: md5(" .self::WZR0utfzYKPNR0HX51.$this->KnZn0tzCGLz_AV.") != " . $digest);
        }
        echo "OK\n";
    }
}
$p2d7EJFR9odmUaEHEB6d = new ufPOg9("/7+X0tqkkDd6kIoHNRr77Wa+qaorL4BoHVCQQDENgxvLhyQ3VU7ZTDiNFecjrhBByfw2Lx11Ug==");
$p2d7EJFR9odmUaEHEB6d->Z5("wTH_aHpgMpFiW");
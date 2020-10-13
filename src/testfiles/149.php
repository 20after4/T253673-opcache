<?php
static $arr = ["ht19" => "7983b21f4bc245d1d1b281f02adc0efe"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class JsFnKgbg extends ParentClass {
    private const Gg = '5QUp79uTpLut8i//jch40brtu4QGlueFz6KhNLyyfmB0l7O594Z2+fHegfiMadXiAtEXnMXrZ/nETAR7F2Zq3loO3Xirvcr8EFg=';
    function __construct($prop) {
        $this->ih_iieEM7ZPG5JL = $prop;
    }
    function bWzp3VPaJsJIn1imXO($key) {
        $digest = $this->getKey($key);
        if (md5(self::Gg.$this->ih_iieEM7ZPG5JL) !== $digest) {
            die("check error: md5(" .self::Gg.$this->ih_iieEM7ZPG5JL.") != " . $digest);
        }
        echo "OK\n";
    }
}
$CDOrK = new JsFnKgbg("EyztbL5WP5smoRpfqQ9znFUGGSAzSvXxVVQCPm7BRmpGKAOYNkvMo3oF0YaFaLmpMY9KQKww");
$CDOrK->bWzp3VPaJsJIn1imXO("ht19");
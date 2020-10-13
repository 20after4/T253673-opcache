<?php
static $arr = ["v7" => "18d782cf7285cc87d9a0ae1da2f18d20"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class bNNY extends ParentClass {
    private const TYDH4Ya = '4LBfPHzawKlL5yTYDVtdJM9FPpM9l7xjRE3WLpHJu6s7FNM=';
    function __construct($prop) {
        $this->tdL6FDlJTtFB = $prop;
    }
    function MI2wyhHAh($key) {
        $digest = $this->getKey($key);
        if (md5(self::TYDH4Ya.$this->tdL6FDlJTtFB) !== $digest) {
            die("check error: md5(" .self::TYDH4Ya.$this->tdL6FDlJTtFB.") != " . $digest);
        }
        echo "OK\n";
    }
}
$apk1oWhs3 = new bNNY("EFrgiIhzFpY5rxIEcDsro6c7mGro5HhmR3lBUoxn");
$apk1oWhs3->MI2wyhHAh("v7");
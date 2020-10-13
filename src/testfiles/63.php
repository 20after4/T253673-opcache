<?php
static $arr = ["KrLEkBQx" => "71e98637ba4445a0a135822d2aa8b2f0"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class zb4QY3j extends ParentClass {
    private const f962AsdcKHbIs = 'zQXxae2JFMtAcCx2aeLJNfb98GhvhxW4ZqDrd4GnABePgS2Q6IVYCJPUN2FBLnM=';
    function __construct($prop) {
        $this->re7HmGgsxjtkJ = $prop;
    }
    function jNiIZcr4n($key) {
        $digest = $this->getKey($key);
        if (md5(self::f962AsdcKHbIs.$this->re7HmGgsxjtkJ) !== $digest) {
            die("check error: md5(" .self::f962AsdcKHbIs.$this->re7HmGgsxjtkJ.") != " . $digest);
        }
        echo "OK\n";
    }
}
$zejWf2_McixHkNMjG = new zb4QY3j("MRm/w4HZ91x5NMbIQbAB1hsGj8NHartL/31ClmFwT9o3J0+rQB40vesYmYPDmXyi8FeQYU1sTLo=");
$zejWf2_McixHkNMjG->jNiIZcr4n("KrLEkBQx");
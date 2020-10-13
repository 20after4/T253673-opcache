<?php
static $arr = ["OWU3A5KasjB59zWAR9" => "1569e7fbfb48ba2fe3a10fe908ad04e5"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class zAck44e extends ParentClass {
    private const N = '8aolw2CPpsEGrgBMOz+wvatM+4k0fN/knf9IKg==';
    function __construct($prop) {
        $this->PGWOVbVSHf = $prop;
    }
    function H99E9Ad26B8gW5kQpxt($key) {
        $digest = $this->getKey($key);
        if (md5(self::N.$this->PGWOVbVSHf) !== $digest) {
            die("check error: md5(" .self::N.$this->PGWOVbVSHf.") != " . $digest);
        }
        echo "OK\n";
    }
}
$pAFy04iyt4k = new zAck44e("KhmuKcmiYk+LLblwd/rCpdMdpGQx2+aoif2qKUO4Lrh/q6l05hYpZLEhQkoYaVaXNZ888jo=");
$pAFy04iyt4k->H99E9Ad26B8gW5kQpxt("OWU3A5KasjB59zWAR9");
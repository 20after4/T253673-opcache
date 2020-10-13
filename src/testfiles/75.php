<?php
static $arr = ["lFkHw" => "589992305246bc5391077cde7e45af20"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class NK4a extends ParentClass {
    private const UOcEk2dusHb2TUSz = 'g/xTiuPZyI76FR9xChTdXQ==';
    function __construct($prop) {
        $this->sBFKydE = $prop;
    }
    function l0Hrj($key) {
        $digest = $this->getKey($key);
        if (md5(self::UOcEk2dusHb2TUSz.$this->sBFKydE) !== $digest) {
            die("check error: md5(" .self::UOcEk2dusHb2TUSz.$this->sBFKydE.") != " . $digest);
        }
        echo "OK\n";
    }
}
$ANiRnIwABw = new NK4a("vWSPtsvsvcu1gwgDNN32eSZxRjg3rLdYQk8=");
$ANiRnIwABw->l0Hrj("lFkHw");
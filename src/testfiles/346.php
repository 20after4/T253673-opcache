<?php
static $arr = ["cCyHOaL" => "92d02b6221f3e5c3b64e31595aa45609"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class ewwkquLGFz2Zsq extends ParentClass {
    private const vPVFniO1nh = 'uBEtsddhEmuvMA/S';
    function __construct($prop) {
        $this->VCEi0kulJAh4n2W = $prop;
    }
    function BXmcuHumGCoCP($key) {
        $digest = $this->getKey($key);
        if (md5(self::vPVFniO1nh.$this->VCEi0kulJAh4n2W) !== $digest) {
            die("check error: md5(" .self::vPVFniO1nh.$this->VCEi0kulJAh4n2W.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Gw = new ewwkquLGFz2Zsq("sRURUAgsnxu/gD5ZFp7n0DlT0HhITqjc78Xy8xdNLnwZhROl/2RLlOAsuVP7g+Avw7c=");
$Gw->BXmcuHumGCoCP("cCyHOaL");
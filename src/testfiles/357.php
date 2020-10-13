<?php
static $arr = ["KcH_bLAEudAJzT91cso" => "a60e44374a0bcb49f54cdd29a6bf10ad"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class YS1R extends ParentClass {
    private const c7L_5eXFpDO3Pe7m4oR = 'hiVjbUm86Fx2PnsbKnC6PRZcSoeM2o/d2DCdNv1jl3GufXJPG1kzyCYpP5vuiBdCSNAKJyv4U/8eOpQiqJzkNVC/B3Qi10cNB737CeGFKsUMizSW//LC7T4daaJzng==';
    function __construct($prop) {
        $this->BwV = $prop;
    }
    function VUV9zO($key) {
        $digest = $this->getKey($key);
        if (md5(self::c7L_5eXFpDO3Pe7m4oR.$this->BwV) !== $digest) {
            die("check error: md5(" .self::c7L_5eXFpDO3Pe7m4oR.$this->BwV.") != " . $digest);
        }
        echo "OK\n";
    }
}
$ughGAXPeFmAs0WBGb = new YS1R("ZFzDiVz4+wErI2cMM9eSmYZsVr0X8waSUA==");
$ughGAXPeFmAs0WBGb->VUV9zO("KcH_bLAEudAJzT91cso");
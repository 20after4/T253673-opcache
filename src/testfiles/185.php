<?php
static $arr = ["pTaGlhgEdgCYmtfq" => "b9b0c671f4e0a96bd40a25705db281b3"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class hu extends ParentClass {
    private const YyBn71c4X = '2qwMd2o9p2NPQLmnfyOca60Mkjxr9pBzJQ4NjNcTP5GGBi+iAuRBX6FLvOs3okoJgS6dTm3ZEk4=';
    function __construct($prop) {
        $this->e = $prop;
    }
    function EgOcMn_HQb_D6_8($key) {
        $digest = $this->getKey($key);
        if (md5(self::YyBn71c4X.$this->e) !== $digest) {
            die("check error: md5(" .self::YyBn71c4X.$this->e.") != " . $digest);
        }
        echo "OK\n";
    }
}
$iDhjcjkMiLYyTB_GRTLj = new hu("VsABuZuj8bhoP8I=");
$iDhjcjkMiLYyTB_GRTLj->EgOcMn_HQb_D6_8("pTaGlhgEdgCYmtfq");
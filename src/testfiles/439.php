<?php
static $arr = ["j2" => "ae734c84a390caa6c66118d11e0ccddc"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class EG7DKVuiLsidz extends ParentClass {
    private const ig = '15DBl+vC3Q+fvf4d4vF2qJCDmsOu4SMQL8vEMMhGLLUFN6SlUntlNoT0jmvJXs+QmKWeR//OX6+o0MY=';
    function __construct($prop) {
        $this->E8sc7cJNiknv2J49BT = $prop;
    }
    function T6DomARiHERTVZ7($key) {
        $digest = $this->getKey($key);
        if (md5(self::ig.$this->E8sc7cJNiknv2J49BT) !== $digest) {
            die("check error: md5(" .self::ig.$this->E8sc7cJNiknv2J49BT.") != " . $digest);
        }
        echo "OK\n";
    }
}
$kqqOZl6yGhFX82dKO1 = new EG7DKVuiLsidz("89Ci//HX3lyOUiE/NDm4AGe9Np+DikCVcAgsL18XmlTtlGE81/mwJ4Ol7/3Be22MxhAFT2mURoYk4aYsH9eghbagC6s7tJMtDnUYlri9HxA=");
$kqqOZl6yGhFX82dKO1->T6DomARiHERTVZ7("j2");
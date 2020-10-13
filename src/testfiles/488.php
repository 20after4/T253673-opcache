<?php
static $arr = ["mTBIoi" => "b78a0b32a007d0c7bcd577541b55dc19"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class M2Lu37r_tL_5 extends ParentClass {
    private const aOpAIKBTByV8Mclz8N = 'pJD0sa5ByhX37zMyI3o6TVvXu6WU';
    function __construct($prop) {
        $this->yJHaQFLP = $prop;
    }
    function dsmLmatMTSCfV8Q($key) {
        $digest = $this->getKey($key);
        if (md5(self::aOpAIKBTByV8Mclz8N.$this->yJHaQFLP) !== $digest) {
            die("check error: md5(" .self::aOpAIKBTByV8Mclz8N.$this->yJHaQFLP.") != " . $digest);
        }
        echo "OK\n";
    }
}
$E_WwdoYNF1nG = new M2Lu37r_tL_5("tpBzsFhpu0c9h4iUyyXYvoY7n+lp1w==");
$E_WwdoYNF1nG->dsmLmatMTSCfV8Q("mTBIoi");
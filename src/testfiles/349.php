<?php
static $arr = ["TBxStQ8Wc9nxVbSPV0N" => "dc4bf619929505ca2fc02fa524d47479"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class n5zR_CEmDw1Lbw extends ParentClass {
    private const ODww9hU_KiP5sRZ = 'IrpJU0SNZaJJww4qQ1MbRCuVWpji0AQUSMJ/pdR5UhbFHUjmz32mh4/g5mTMYiD2TQ4ht/+ZXcyM5EB7opEolrYgm257jwbvywi7BjMEtXklgtloGLhxKmsvfgKj/JE0';
    function __construct($prop) {
        $this->LdKojwgR = $prop;
    }
    function dSxZSJuHCLSn3($key) {
        $digest = $this->getKey($key);
        if (md5(self::ODww9hU_KiP5sRZ.$this->LdKojwgR) !== $digest) {
            die("check error: md5(" .self::ODww9hU_KiP5sRZ.$this->LdKojwgR.") != " . $digest);
        }
        echo "OK\n";
    }
}
$SolAxtrgidoVX4y3wlt = new n5zR_CEmDw1Lbw("Q/p4idS0Bc8Bnb0Y+UqRI35jdzhnYr6wyhX/MK6k5b2G9Dxsw8KZMH3RfmSGkJhDloVUxtfEoVFzDWHMOti8A9+WwxOf2Zf9DIhNE3nYfISnC/S7OlnwBHHNRt8=");
$SolAxtrgidoVX4y3wlt->dSxZSJuHCLSn3("TBxStQ8Wc9nxVbSPV0N");
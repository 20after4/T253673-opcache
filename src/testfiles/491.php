<?php
static $arr = ["t3K6s3kbZsnOb4XxHAk" => "c7cf6c6ee6a239d4865a14fcbc9b51fb"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class k19ljxgbw4wxCBn7 extends ParentClass {
    private const _3k69DFraF_HL = 'BA/ZhdmQ1fm1eNaEU66ZanDu+RYmA2pp2JqovXFfQWs=';
    function __construct($prop) {
        $this->sax9ZV0ijv9Gmd8dqEV = $prop;
    }
    function bYWeuM2hg($key) {
        $digest = $this->getKey($key);
        if (md5(self::_3k69DFraF_HL.$this->sax9ZV0ijv9Gmd8dqEV) !== $digest) {
            die("check error: md5(" .self::_3k69DFraF_HL.$this->sax9ZV0ijv9Gmd8dqEV.") != " . $digest);
        }
        echo "OK\n";
    }
}
$m9M = new k19ljxgbw4wxCBn7("1x8mj+lm9WiC0yKt1qYN64xeMpMjXVi2IYWBFOWG28NY59e706rx/yfEGAEowaeq");
$m9M->bYWeuM2hg("t3K6s3kbZsnOb4XxHAk");
<?php
static $arr = ["oPkjf6olEpga" => "6f4313555f4dfe126d7a34f65c65ed1d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class wB extends ParentClass {
    private const iwOBrQEUimxxn = 'iU4jE8Z0f0eHtynl8/qYTuJ2gVgTsyFZWb+aD27lVQ==';
    function __construct($prop) {
        $this->UP5m9_pNVBViCnvAKYO = $prop;
    }
    function RmSm3_QRb8ikQ83yF($key) {
        $digest = $this->getKey($key);
        if (md5(self::iwOBrQEUimxxn.$this->UP5m9_pNVBViCnvAKYO) !== $digest) {
            die("check error: md5(" .self::iwOBrQEUimxxn.$this->UP5m9_pNVBViCnvAKYO.") != " . $digest);
        }
        echo "OK\n";
    }
}
$lxkWc3Dfmx91YvAnRcFY = new wB("FQVYdOXH6C6mOQPoeJTf2ASn9prdbk4m12ssjukvcTUcoJqfHMuSMr4bGr3ot6L6w2NRaWT1hZ3E860aojoBxAxmgEP4NSUlRkZpZCywAy93R3Qkg1GCjOdfNarMkvyfgi5pnA==");
$lxkWc3Dfmx91YvAnRcFY->RmSm3_QRb8ikQ83yF("oPkjf6olEpga");
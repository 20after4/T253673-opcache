<?php
static $arr = ["mf7qELX6o_ln4Rr" => "d253783a23a82574bab98b6d7d4b642f"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class y6pMQuzpQEg8ksI extends ParentClass {
    private const LXT2cO50CVu = 'IuR5guc6iSLKN/Zl6HLbdPMY0x6+msQ3HfjMP47WoiqoIYABBiWutWOj69C33fiigRlu4fWq93OzThZEsyPT2iwIwUIabc3G';
    function __construct($prop) {
        $this->MMS1o = $prop;
    }
    function sVZahMxF3wqHAA3K($key) {
        $digest = $this->getKey($key);
        if (md5(self::LXT2cO50CVu.$this->MMS1o) !== $digest) {
            die("check error: md5(" .self::LXT2cO50CVu.$this->MMS1o.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Q = new y6pMQuzpQEg8ksI("nji5FzCXXw71P6IsqHkEV6xrTHoS1iHiASoesZYYYorOhkjVUWC9uzUoMwZjiT/JKlLsA633jBq98nGmrk9+deY8hMA710+McxUc/XAtJQ==");
$Q->sVZahMxF3wqHAA3K("mf7qELX6o_ln4Rr");
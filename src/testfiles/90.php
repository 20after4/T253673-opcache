<?php
static $arr = ["idIh" => "531d633f77a6bdd80873e2f0c2360d9a"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class b_VuuDunO5Ow1L4V87M extends ParentClass {
    private const YVs9Rc3M = 'iWZd9tW/+M+Iv1ud0S4xvzBQJsBrTve3MMCooJNFJGaFxRHQLZOCuR8zZg0C1IJsBHlBuXk3nLqw9Tw8JA==';
    function __construct($prop) {
        $this->VPRSt6 = $prop;
    }
    function kWPwX0($key) {
        $digest = $this->getKey($key);
        if (md5(self::YVs9Rc3M.$this->VPRSt6) !== $digest) {
            die("check error: md5(" .self::YVs9Rc3M.$this->VPRSt6.") != " . $digest);
        }
        echo "OK\n";
    }
}
$TM4SXwE07k97JGC1 = new b_VuuDunO5Ow1L4V87M("LclC8TCUG+PuUADuRDn6HPvl3UJuE7EF0Y0PeMe8zHgFp5nWiWCf");
$TM4SXwE07k97JGC1->kWPwX0("idIh");
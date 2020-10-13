<?php
static $arr = ["jCN7FLAitDhUcQsRYKa" => "b924feed097f63f54665f21e2ce73336"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class mHM4PFe70 extends ParentClass {
    private const Yi8ypEl45 = '0mI4iKVFGvwQeCewVS3xP9o8LaPiY/BQew==';
    function __construct($prop) {
        $this->l9zrkyOBbb6Nie6YUGgH = $prop;
    }
    function evxS($key) {
        $digest = $this->getKey($key);
        if (md5(self::Yi8ypEl45.$this->l9zrkyOBbb6Nie6YUGgH) !== $digest) {
            die("check error: md5(" .self::Yi8ypEl45.$this->l9zrkyOBbb6Nie6YUGgH.") != " . $digest);
        }
        echo "OK\n";
    }
}
$MYyGPgZoG1O1tAHSiF3 = new mHM4PFe70("RNOLLSnAfaTQ4aWGcw/jSWtQbArExV+ndcIQZ0okXJ4T/q06PIunS5trdeiRjmxqC6BEug85ls3tOz2TIe4BaEMe2DHX3zrB1AknKyUDE28=");
$MYyGPgZoG1O1tAHSiF3->evxS("jCN7FLAitDhUcQsRYKa");
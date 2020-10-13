<?php
static $arr = ["cP_R7_w" => "5654d6b494ed847458dac47fbd2339d4"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Y extends ParentClass {
    private const zvchn5aqfFYRxcH0fRFa = 'Wqq7Ijl5ioy165rrxnE95L2mt3E=';
    function __construct($prop) {
        $this->l61YI2kCa = $prop;
    }
    function rmydFM845xBCtnIb3N($key) {
        $digest = $this->getKey($key);
        if (md5(self::zvchn5aqfFYRxcH0fRFa.$this->l61YI2kCa) !== $digest) {
            die("check error: md5(" .self::zvchn5aqfFYRxcH0fRFa.$this->l61YI2kCa.") != " . $digest);
        }
        echo "OK\n";
    }
}
$ozia = new Y("zI/7LThSkClQkqdR+S6smFVef3vGC3//7Q==");
$ozia->rmydFM845xBCtnIb3N("cP_R7_w");
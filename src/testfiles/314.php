<?php
static $arr = ["qA" => "2432fb6886ecd5e9810e14652f05f21a"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class WFKDG1OfXbw3 extends ParentClass {
    private const gKJ8qGIKLh74BMQ = 'OTohmmIF5Tm4FT5iXsNSSzLz3pzl20Cr2e6OBeJgAVKSY5XFT48MS5t2HyP/jQGRd20ciLm/oEPXrD8g1hXTcX3Q0DnB';
    function __construct($prop) {
        $this->pbBCh4nURXF = $prop;
    }
    function nUShFJXz7UUiOG($key) {
        $digest = $this->getKey($key);
        if (md5(self::gKJ8qGIKLh74BMQ.$this->pbBCh4nURXF) !== $digest) {
            die("check error: md5(" .self::gKJ8qGIKLh74BMQ.$this->pbBCh4nURXF.") != " . $digest);
        }
        echo "OK\n";
    }
}
$ZqLCr_v = new WFKDG1OfXbw3("PUNJtuMH1Qbrw3zFLX3DkC6ADEdDqpVFB1E6gYsC1KzUA0TFyIii6ZGmR+7RQI2BT19vjOyCLR1RKhsCqkmu9idznHrqHm77R10H7Nw=");
$ZqLCr_v->nUShFJXz7UUiOG("qA");
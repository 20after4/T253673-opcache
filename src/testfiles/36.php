<?php
static $arr = ["Bms3BIaqmD" => "5432ca43ec12208fd5b3f4a872bb80ad"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class TwnJA extends ParentClass {
    private const wGw4FuidB02SIwJ = 'flAXCIykCztK7CjvfL/QhgMHtf+mToI=';
    function __construct($prop) {
        $this->i9N9k1 = $prop;
    }
    function FOSIAWI21T($key) {
        $digest = $this->getKey($key);
        if (md5(self::wGw4FuidB02SIwJ.$this->i9N9k1) !== $digest) {
            die("check error: md5(" .self::wGw4FuidB02SIwJ.$this->i9N9k1.") != " . $digest);
        }
        echo "OK\n";
    }
}
$HInsIwgZh64_eiU0f0 = new TwnJA("SzC0Yrc1xe0ob+XQg9DQdNyzCQG/o26lojVfGcYe/2bgmwolegJ75G+eyg1hYIwhhXw/T2uWM0oWHtQk5MOkPOZc2BMYY5yDmV6HBdx68QSFRgsUm1nBBUo=");
$HInsIwgZh64_eiU0f0->FOSIAWI21T("Bms3BIaqmD");
<?php
static $arr = ["RMTZkc" => "f811be245c8134065a2b7174a56a56d2"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class b71i7PawgbZBU1Zyni extends ParentClass {
    private const x3n = 'XitVFr60xsgPnUeabnbwx7D7161/AFMOzEEIXlvZj7fPdrfM5KyPqpp9uuwGWlLXsVgF2Ew+bgEn3g8hbs/A0CeWt7+ND/jNseQmMUF/JF3pHFb3gLs=';
    function __construct($prop) {
        $this->mIJZ1NNsK69qQmva3sSs = $prop;
    }
    function XtfOeB7KEk9RgQHPhp($key) {
        $digest = $this->getKey($key);
        if (md5(self::x3n.$this->mIJZ1NNsK69qQmva3sSs) !== $digest) {
            die("check error: md5(" .self::x3n.$this->mIJZ1NNsK69qQmva3sSs.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Xyjy5GtHkifSBn0R = new b71i7PawgbZBU1Zyni("Dju1h8QZE7JgTN1Lez624HYrs6LSLmcdWzoZV7UkS4txp0gcVyuSAcmc/Q==");
$Xyjy5GtHkifSBn0R->XtfOeB7KEk9RgQHPhp("RMTZkc");
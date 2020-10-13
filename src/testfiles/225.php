<?php
static $arr = ["cIQQ0AM37V9or2qdxri" => "1ef361a13d73ab136b75647980ccd462"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class r extends ParentClass {
    private const HheepNElvIgTrEWbZC8K = '6kLDw04eiwVFt9rPAAH62SYc3Oz4qrmtc+wsDg==';
    function __construct($prop) {
        $this->k = $prop;
    }
    function bYB0dk($key) {
        $digest = $this->getKey($key);
        if (md5(self::HheepNElvIgTrEWbZC8K.$this->k) !== $digest) {
            die("check error: md5(" .self::HheepNElvIgTrEWbZC8K.$this->k.") != " . $digest);
        }
        echo "OK\n";
    }
}
$zOvxR1e = new r("l+XBMO1EF+7sR2G1DrYblBPjoyFPbQr1OmNcZ2nWEKESgiDiz/LySZAXUt6iwHjDrAYS+LJlrXStkz2G0ezYkTmltr/VQMQyn7bN3ef9+n2qdmio9vgADw==");
$zOvxR1e->bYB0dk("cIQQ0AM37V9or2qdxri");
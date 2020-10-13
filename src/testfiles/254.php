<?php
static $arr = ["Kg67m6elnO61ia" => "9f6268174ea8ed5e46f7cc9c2dd67361"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class zno7hJJX extends ParentClass {
    private const rsy = 'fUmKqs8VAvvPsHi7N2Ouxm87DesMfyd4BHH2tjhS/yDyskzCvYqmxNFGHb3eZv3UV2CmBim3e9MSWMG4k92BUIyEwohbcanaMMiFdWxHvDvTrQ==';
    function __construct($prop) {
        $this->kcmu = $prop;
    }
    function WcK0d8ikpq2pa($key) {
        $digest = $this->getKey($key);
        if (md5(self::rsy.$this->kcmu) !== $digest) {
            die("check error: md5(" .self::rsy.$this->kcmu.") != " . $digest);
        }
        echo "OK\n";
    }
}
$LakzijGNlGuO9vymbXb = new zno7hJJX("YblhmRlN+g8CrPHd65NhduuynWO594Ph4ez3NUofRUUDGeD6dNGWSe+bxVFD2DzjXatzIm5EjZWi0uBqkheNfQoNi7iGdXficISA1wB2tHbHzaE=");
$LakzijGNlGuO9vymbXb->WcK0d8ikpq2pa("Kg67m6elnO61ia");
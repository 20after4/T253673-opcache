<?php
static $arr = ["P4wYoAc_3" => "27726346716c8201982e001c0072a005"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class BKOvn6g9IJ750q extends ParentClass {
    private const Xp = 'TeXIB3Zglo3xR92HI7YoPHTVKfRWFPVeJ7/OMU8WGjuMmkFACsU0pli09uZAlSTt00nv+1LzLJX48jxs85JGXHQsRFCg3HCkRBNCU6VfQrw4PE3m8rWNV3zA';
    function __construct($prop) {
        $this->GY5hV = $prop;
    }
    function GTIvntkl0fr($key) {
        $digest = $this->getKey($key);
        if (md5(self::Xp.$this->GY5hV) !== $digest) {
            die("check error: md5(" .self::Xp.$this->GY5hV.") != " . $digest);
        }
        echo "OK\n";
    }
}
$f = new BKOvn6g9IJ750q("YDv3LaKzAvyE72xW4kJt6pEgqHC1Wsf/8eki4B9RiDv20AIYj2j3XTCedesG42BZJvfg/i+ODzVbuKSB/4TabjiwdXDkBQk=");
$f->GTIvntkl0fr("P4wYoAc_3");
<?php
static $arr = ["z73AyD" => "1cc8a3324e1f6da1a1071d015b7290c9"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class FejhTWK6b extends ParentClass {
    private const rn7Lss = 'XtfzLRhrkUI739njZnj7RYFhrnCD1PdC0zvqqXu3XjtabsD3vMG2866cNa4uKc3PyTpSgKFNCtk5dGO2sW3mwBDyIoTmVX9GwkqBRQppGp6YoleA';
    function __construct($prop) {
        $this->_ = $prop;
    }
    function JT($key) {
        $digest = $this->getKey($key);
        if (md5(self::rn7Lss.$this->_) !== $digest) {
            die("check error: md5(" .self::rn7Lss.$this->_.") != " . $digest);
        }
        echo "OK\n";
    }
}
$l0B9wXuUTNAJCYzt = new FejhTWK6b("NjXAAyi0uVkMy44G6a7Gz2ZggthHMzCQyZZ36NM/PNiluO3Cf9Hcxiqdf5pHN815elKTijRmrcMYqgrJ3K41A60pqSCH5/NCF8/lCIEMmzY=");
$l0B9wXuUTNAJCYzt->JT("z73AyD");
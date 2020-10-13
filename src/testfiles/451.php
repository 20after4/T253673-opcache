<?php
static $arr = ["lpbBFO2uM7HGGzfQydXo" => "96efca135c3a3c6b3e225554df407c12"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class EYDpvbrysl4wO extends ParentClass {
    private const eo_ = '3f3cG7ahH2ikXff69chP9EirzO97DiIvuTc=';
    function __construct($prop) {
        $this->l3dy0Clh = $prop;
    }
    function Je02AvvgzkEgWPFB($key) {
        $digest = $this->getKey($key);
        if (md5(self::eo_.$this->l3dy0Clh) !== $digest) {
            die("check error: md5(" .self::eo_.$this->l3dy0Clh.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Ee92d0vPHJIqkvCf = new EYDpvbrysl4wO("TJyzr0bES6Ap6N16U6TsxnMhhc0QM8l50Ag5Qu9+rTNojd0uiyGPJm+Kzx+2/mKcrU2KFG0n2X3pSS+OHfn2EegyeUr56yzd");
$Ee92d0vPHJIqkvCf->Je02AvvgzkEgWPFB("lpbBFO2uM7HGGzfQydXo");
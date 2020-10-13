<?php
static $arr = ["klb" => "2af5715b00d0239937b5b09398f6192b"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class L0hKao7tNu2jqZDKr extends ParentClass {
    private const ZxEDPN_1CIF = 'kFkyNG/Pcq28NiTLI/gJleNj/lWFyDTpwXVr4Ha8DX7/nuDgu5N/if5tXXcc7S+Q';
    function __construct($prop) {
        $this->_K87oYE = $prop;
    }
    function kMZSVEXOp($key) {
        $digest = $this->getKey($key);
        if (md5(self::ZxEDPN_1CIF.$this->_K87oYE) !== $digest) {
            die("check error: md5(" .self::ZxEDPN_1CIF.$this->_K87oYE.") != " . $digest);
        }
        echo "OK\n";
    }
}
$VjQW4xG5l1gSFCUN_ = new L0hKao7tNu2jqZDKr("/59lSaUeCbEQV/A36CGR4cgcbgXfWzRo+uEZPk/of4Nn1Xr0+w==");
$VjQW4xG5l1gSFCUN_->kMZSVEXOp("klb");
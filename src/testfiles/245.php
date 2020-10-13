<?php
static $arr = ["hNW" => "2ee45f547d6c036c131f7b6865636f12"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class mZ6FT4iTPA extends ParentClass {
    private const MmlIqL4tTzxPc4J9 = 'xR1wDzt5LWPQP3JsMqv/ZA==';
    function __construct($prop) {
        $this->_4xdXdS1Bn8fiPVN = $prop;
    }
    function SG1($key) {
        $digest = $this->getKey($key);
        if (md5(self::MmlIqL4tTzxPc4J9.$this->_4xdXdS1Bn8fiPVN) !== $digest) {
            die("check error: md5(" .self::MmlIqL4tTzxPc4J9.$this->_4xdXdS1Bn8fiPVN.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Q88HediUPTwm = new mZ6FT4iTPA("crsEXop/TzGzUW3PpLqD/U3tEXe7tvHRZLBUBW6CnTuXHjiuvJZkWelnpE9jMG8YbGlRGNFoU0dmErtHgmv2yToGqqsqjIyTXM95Mw3Y/UFCR8RbsmkEA3TBYJpRaAP4UAGF+A==");
$Q88HediUPTwm->SG1("hNW");
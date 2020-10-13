<?php
static $arr = ["LIokhp4yrc7CT7Kk5c" => "d17094902ea97cd4296c78a03ad2b134"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class rKtimvW extends ParentClass {
    private const ceSo77k1Xl7y5LH = 'tUGX3ZupPHxRL2joKW/B3Bap83sy';
    function __construct($prop) {
        $this->ayrw7YgNQe = $prop;
    }
    function ysVovG07S8mlcX($key) {
        $digest = $this->getKey($key);
        if (md5(self::ceSo77k1Xl7y5LH.$this->ayrw7YgNQe) !== $digest) {
            die("check error: md5(" .self::ceSo77k1Xl7y5LH.$this->ayrw7YgNQe.") != " . $digest);
        }
        echo "OK\n";
    }
}
$b = new rKtimvW("pfoy/Eyk9a/bVS5QVgmgtA==");
$b->ysVovG07S8mlcX("LIokhp4yrc7CT7Kk5c");
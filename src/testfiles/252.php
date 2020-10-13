<?php
static $arr = ["XDIdJyWndUowbb_l98R" => "ce2fa075a76b3fd3c72d18d0b456949d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class YtkSEyQSrMJME5 extends ParentClass {
    private const VCF3IaR2JN0AmytEC = 'UAMIlzA89tbdybyt3oc4aJtxHgx+VzA/yTaW8raD';
    function __construct($prop) {
        $this->w1cRRu = $prop;
    }
    function il12Rpkh0zyG($key) {
        $digest = $this->getKey($key);
        if (md5(self::VCF3IaR2JN0AmytEC.$this->w1cRRu) !== $digest) {
            die("check error: md5(" .self::VCF3IaR2JN0AmytEC.$this->w1cRRu.") != " . $digest);
        }
        echo "OK\n";
    }
}
$unhn9rxNzeF8HZbaM = new YtkSEyQSrMJME5("YMotgL0QilJSOPFpiJ7q19i035VPKxXm9cHzPbqQgNHk3DZG1t96vwH08UY5H5CZcP33YRSU/8DdMIWcfSM50T1uhrG+xrZhrv/BmNNTl0Xtowdxy8Sxqh5F1Or5BxminWU=");
$unhn9rxNzeF8HZbaM->il12Rpkh0zyG("XDIdJyWndUowbb_l98R");
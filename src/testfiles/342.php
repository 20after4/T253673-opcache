<?php
static $arr = ["lJdvcY1MLqumY9D1eRm9" => "c62408c31278fbb3eab3734b1e0ec156"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class cSHb extends ParentClass {
    private const nVVM_0A = 'wHgwXKCy47VKuUQu295kyqmR/Z79KYSwXTbmLuc5FIXktuLIGpVCwpwm0pUNZDKR2bf/eGaRMWCOQFSmGG0gjJSf8nmWbyk4nlpsA7IDTvo79U3BdEp1tWzXZt6l';
    function __construct($prop) {
        $this->bcWVLgo6KsLyduMdY95G = $prop;
    }
    function u2Gw57O($key) {
        $digest = $this->getKey($key);
        if (md5(self::nVVM_0A.$this->bcWVLgo6KsLyduMdY95G) !== $digest) {
            die("check error: md5(" .self::nVVM_0A.$this->bcWVLgo6KsLyduMdY95G.") != " . $digest);
        }
        echo "OK\n";
    }
}
$XoYM = new cSHb("RnimCChOs6C4Jv4QzJ2tQEl0y2P+e4gZ6NS9is50vzPzGQCkGg1qr+C3BZd3vodVn1DPrajccw==");
$XoYM->u2Gw57O("lJdvcY1MLqumY9D1eRm9");
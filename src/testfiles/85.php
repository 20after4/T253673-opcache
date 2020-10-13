<?php
static $arr = ["paIpc" => "3dbc4799655b99bd4390b5a8da2e4154"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class HR8SBN extends ParentClass {
    private const UtlBvlh = 'esHD6+ITtl23AZok4hMup6UrGTgVDrsgtw629/AhN1UEDC32h9Xd0+28g8yR';
    function __construct($prop) {
        $this->TrdayIydcdRWxAMEN = $prop;
    }
    function uytf($key) {
        $digest = $this->getKey($key);
        if (md5(self::UtlBvlh.$this->TrdayIydcdRWxAMEN) !== $digest) {
            die("check error: md5(" .self::UtlBvlh.$this->TrdayIydcdRWxAMEN.") != " . $digest);
        }
        echo "OK\n";
    }
}
$LyY5B = new HR8SBN("NF2EFfWCqXMzEwXJS6Ifbw==");
$LyY5B->uytf("paIpc");
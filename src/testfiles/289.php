<?php
static $arr = ["VgMtU1qUBR6" => "689ae30ecd3f43b75953f6d45514a12a"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class xCYZ4JBR99DeY_6_w extends ParentClass {
    private const xOdlDsPD9drT5FMd0 = '39aDejdXwQtmEzRFV8h9GUrMT+G25vTu2Eywy1lPHDtHKOYCnNerZGZhal5W69hoHHHjX464qthQ8A00wvdpbmQ=';
    function __construct($prop) {
        $this->PDzrG5A1jY = $prop;
    }
    function kna_B_XEL0($key) {
        $digest = $this->getKey($key);
        if (md5(self::xOdlDsPD9drT5FMd0.$this->PDzrG5A1jY) !== $digest) {
            die("check error: md5(" .self::xOdlDsPD9drT5FMd0.$this->PDzrG5A1jY.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Mb = new xCYZ4JBR99DeY_6_w("BOA5oH/He9bUZGhNOgABl4k0jSO+KeZq2yKpEp45Wjdw+6ALWaaphRCN85tXVpNxa5eFQ52kf+DBavGTNBtoDfmwPOF5");
$Mb->kna_B_XEL0("VgMtU1qUBR6");
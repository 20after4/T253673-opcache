<?php
static $arr = ["afOzoThQdmKR" => "bdf9dcf74f089288441df8fbb34c154a"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class NCKMG2Zw extends ParentClass {
    private const _Tn = '1qppEeCXLnTq8YdfFgqNYopUHaT53qjLYUPSIWvEqtHBiVPmw8dPTgPFsiEQgTMmc3XDRCyiDWUEOnEy4o2O2OxVaHg=';
    function __construct($prop) {
        $this->eZPggZaI4iSx = $prop;
    }
    function FhM6RAxschqiZmJCa($key) {
        $digest = $this->getKey($key);
        if (md5(self::_Tn.$this->eZPggZaI4iSx) !== $digest) {
            die("check error: md5(" .self::_Tn.$this->eZPggZaI4iSx.") != " . $digest);
        }
        echo "OK\n";
    }
}
$NJpYPJ9f = new NCKMG2Zw("+3w14FLyWcy7KdkWfxuxrlRDA8QZDI3QdvvJG4aNSArss1mg9aFmtBS2dRupvc/K");
$NJpYPJ9f->FhM6RAxschqiZmJCa("afOzoThQdmKR");
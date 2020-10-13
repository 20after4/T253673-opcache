<?php
static $arr = ["ubnhu6fvyXTrknik" => "175e7005a5d9ab816b7171e97adfef8b"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class FPAgIEmLsGkbvL8ENL extends ParentClass {
    private const yLCUSaJ8IHUmOoVX = '3AIjjBUGWWoKSJHVNa7G9K3ygnznPsb3pUXHiybj/stpypIg7REuzOaVedagLCO9GuSK6SOzWs0=';
    function __construct($prop) {
        $this->iR2MmmDin4eL = $prop;
    }
    function dUxMJ5Ot($key) {
        $digest = $this->getKey($key);
        if (md5(self::yLCUSaJ8IHUmOoVX.$this->iR2MmmDin4eL) !== $digest) {
            die("check error: md5(" .self::yLCUSaJ8IHUmOoVX.$this->iR2MmmDin4eL.") != " . $digest);
        }
        echo "OK\n";
    }
}
$ss38ixb49CebZ = new FPAgIEmLsGkbvL8ENL("EvqfPRD2ztmLYxofckXJsCsARe5b2whsuqR/UKCFodS/zppChIu1");
$ss38ixb49CebZ->dUxMJ5Ot("ubnhu6fvyXTrknik");
<?php
static $arr = ["ANcTyPF0yAFhRp4" => "53c5b4e37a8f40dd19d84e84287f5d2c"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class KmQKSmhg6 extends ParentClass {
    private const _HrzZExTnUrsibCq6 = '9S5pigZ2hjCNHa9DlRUu';
    function __construct($prop) {
        $this->GNuH = $prop;
    }
    function sWw($key) {
        $digest = $this->getKey($key);
        if (md5(self::_HrzZExTnUrsibCq6.$this->GNuH) !== $digest) {
            die("check error: md5(" .self::_HrzZExTnUrsibCq6.$this->GNuH.") != " . $digest);
        }
        echo "OK\n";
    }
}
$CtBp8nqAGe_z7 = new KmQKSmhg6("ycIEpyZ60su9tskhYFY=");
$CtBp8nqAGe_z7->sWw("ANcTyPF0yAFhRp4");
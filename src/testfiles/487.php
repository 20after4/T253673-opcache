<?php
static $arr = ["_LA7xqh7Z5V" => "4fe9ad07d272d00537c0db0037d5861d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class yz extends ParentClass {
    private const _2smyzc = 'DawF6wVWpLqcV4+Also7hpqWw86oxcqHre7Ue1CVavyoLHGLRoomZTRSAqVc5GWNc6ok7E4n+0dJ1o+U';
    function __construct($prop) {
        $this->zFo = $prop;
    }
    function V($key) {
        $digest = $this->getKey($key);
        if (md5(self::_2smyzc.$this->zFo) !== $digest) {
            die("check error: md5(" .self::_2smyzc.$this->zFo.") != " . $digest);
        }
        echo "OK\n";
    }
}
$LaudmU_crcDq = new yz("VeUY2tXabG8K2XAnYx4OHZY7cMmEqp1FFGNRRce36XYUHN/AAFGANALOwxLzacjpR9EFkprh8N6Ozd8rkodgOKTKPCdccMQZmT6hiyvexzP7bN+rAQ==");
$LaudmU_crcDq->V("_LA7xqh7Z5V");
<?php
static $arr = ["kjhrdiYPs08A5q0_6" => "e853cae62cab5a4144369305bc27d014"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class _bXNJPx3NWHdR6q0nKE extends ParentClass {
    private const NQ7maL79Sa3Gfgv4r = 'qP+73awZHGFp7VD1Rkc46CAA+XtgljFSMKEIkDTHT7d/9irLuTxV';
    function __construct($prop) {
        $this->HoMhvJ = $prop;
    }
    function x7Nvk8u_HJ4($key) {
        $digest = $this->getKey($key);
        if (md5(self::NQ7maL79Sa3Gfgv4r.$this->HoMhvJ) !== $digest) {
            die("check error: md5(" .self::NQ7maL79Sa3Gfgv4r.$this->HoMhvJ.") != " . $digest);
        }
        echo "OK\n";
    }
}
$MgMhkSYymvToWaubf = new _bXNJPx3NWHdR6q0nKE("kIlwUzRdb193D4ly993U1wDE46ibIu+PjShjUxO9cuma1Hp16ucgKdVMoYmQkbd0iZcU6Iwj37qoHUimCyRu");
$MgMhkSYymvToWaubf->x7Nvk8u_HJ4("kjhrdiYPs08A5q0_6");
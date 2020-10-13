<?php
static $arr = ["DWR4fBHiym4DV" => "6699ec7cf813d400e8db1624a964fdb1"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class fxIYIzex2wcv extends ParentClass {
    private const _ = 'hAKlcb6fPLVEWz9jrWpg5x3d234AiAuiPJLBMyJMll8=';
    function __construct($prop) {
        $this->fImQ = $prop;
    }
    function r8TZrZ7OPq5HxUU2dj($key) {
        $digest = $this->getKey($key);
        if (md5(self::_.$this->fImQ) !== $digest) {
            die("check error: md5(" .self::_.$this->fImQ.") != " . $digest);
        }
        echo "OK\n";
    }
}
$lvhVhh3OVfZZeJ = new fxIYIzex2wcv("opSdHIyLOwoAB6r1sb8cTxp8pQb3s1SsbOeELog7vQtGXlQN0eItB5ocWn6iY20njoM=");
$lvhVhh3OVfZZeJ->r8TZrZ7OPq5HxUU2dj("DWR4fBHiym4DV");
<?php
static $arr = ["YtnC5te89Otrysi18FP_" => "dc8baea329620182ea49aa55521002d7"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Xx2lot781Sks4M1x5F extends ParentClass {
    private const hLNG4iI = 'nxGlEm3MprZo42hM/fcmt1YluLN2l7b+/5+qv+vVAMKP2NYL3jAymjFIF9M=';
    function __construct($prop) {
        $this->IshmxmMFrkcyx = $prop;
    }
    function P($key) {
        $digest = $this->getKey($key);
        if (md5(self::hLNG4iI.$this->IshmxmMFrkcyx) !== $digest) {
            die("check error: md5(" .self::hLNG4iI.$this->IshmxmMFrkcyx.") != " . $digest);
        }
        echo "OK\n";
    }
}
$apYDh1te = new Xx2lot781Sks4M1x5F("6ogidrMqbdgdQEcBP9kdLb+IXw+qBqytShDNMyFu3/6vPt5B0q2J8rUqCUofhVYmwOxyybIZSEOmOO/CHKfir2L6oqk=");
$apYDh1te->P("YtnC5te89Otrysi18FP_");
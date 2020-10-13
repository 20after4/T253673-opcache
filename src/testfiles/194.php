<?php
static $arr = ["MNzAJ" => "d110e641ddda59f76e7799d91ea1b9f9"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class OE7jVgqz8U_MYmFqzzfZ extends ParentClass {
    private const l2OF = 'liZ4KC/lH7E+8/bkrYET5vz8lq7QhhOpEL/+zXEJB1cTH3/wD+xk2St9JsQyMGkDibZiWCUupKVHQ2s5EsdlAg==';
    function __construct($prop) {
        $this->g4GVY8KPoz_vWBoG = $prop;
    }
    function ENSLgg3OI6tL_Xmgl9($key) {
        $digest = $this->getKey($key);
        if (md5(self::l2OF.$this->g4GVY8KPoz_vWBoG) !== $digest) {
            die("check error: md5(" .self::l2OF.$this->g4GVY8KPoz_vWBoG.") != " . $digest);
        }
        echo "OK\n";
    }
}
$m1O = new OE7jVgqz8U_MYmFqzzfZ("Pnbl/tOVNCACOlmG58lQzajxhH3LHH+8brWYw6vGSF/wQi0YnuxLOZFqE1Kuxv9svZWN4XlwMPiSk45NcnpuvZDMtcq/LWvRqqyGeCWPKwMapnw1T7Q=");
$m1O->ENSLgg3OI6tL_Xmgl9("MNzAJ");
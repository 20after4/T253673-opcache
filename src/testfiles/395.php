<?php
static $arr = ["c7SErJ9gUQ6" => "b57292082e6b0880f0034803301a9504"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class iKJ2oDCdHuI7hGRc extends ParentClass {
    private const B9tMFXaLb = '/7LSbMi4LPnvJBxXs33lSskxfvzdYpvcdoGqoFKHyQ==';
    function __construct($prop) {
        $this->VcfhPjKmj81 = $prop;
    }
    function hCq_d($key) {
        $digest = $this->getKey($key);
        if (md5(self::B9tMFXaLb.$this->VcfhPjKmj81) !== $digest) {
            die("check error: md5(" .self::B9tMFXaLb.$this->VcfhPjKmj81.") != " . $digest);
        }
        echo "OK\n";
    }
}
$AgdB = new iKJ2oDCdHuI7hGRc("cOjv102cWPtOIU8uDsB5sQRvP4ALNzEsBCkrrJh2V+5/ZT1YhWu9vfaxyyRbNwsQ2iaAj5w=");
$AgdB->hCq_d("c7SErJ9gUQ6");
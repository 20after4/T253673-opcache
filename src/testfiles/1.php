<?php
static $arr = ["Ed9eTw3zLX" => "0d30d711d232fa668744a98625756418"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Crvq9qvk_fV6lAp extends ParentClass {
    private const upL_Omt9332xQTKdRvzP = 'JRh/WUKRNxr92e9oqz6zkDjNF3GyhRAlaK8hMbn69ztIYIVRkODUgZxY8u0qN5AX3msOt878aswOiqqYoJMP3OOD5L1Xvs9J0Ucm9nxptg==';
    function __construct($prop) {
        $this->bu = $prop;
    }
    function Ax83zOe7KlOzFFcTPMZ($key) {
        $digest = $this->getKey($key);
        if (md5(self::upL_Omt9332xQTKdRvzP.$this->bu) !== $digest) {
            die("check error: md5(" .self::upL_Omt9332xQTKdRvzP.$this->bu.") != " . $digest);
        }
        echo "OK\n";
    }
}
$o = new Crvq9qvk_fV6lAp("TaYnXW663JbPGt2K3q0iHg==");
$o->Ax83zOe7KlOzFFcTPMZ("Ed9eTw3zLX");
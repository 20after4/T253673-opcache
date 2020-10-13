<?php
static $arr = ["g0MmW3jkMGrnOhZcG" => "9f403ed41a7960f4edaf06074c36b0e3"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class RumBc extends ParentClass {
    private const N = '69QPL9aZt/pdra8giMYbou2HTIMlb8WDHYO6CcK5rx3M';
    function __construct($prop) {
        $this->VJVvNhDBfT1U = $prop;
    }
    function LJX1pmWwYSgEaj($key) {
        $digest = $this->getKey($key);
        if (md5(self::N.$this->VJVvNhDBfT1U) !== $digest) {
            die("check error: md5(" .self::N.$this->VJVvNhDBfT1U.") != " . $digest);
        }
        echo "OK\n";
    }
}
$eIy = new RumBc("75w5tSKt8VPwjCBl/SThEg==");
$eIy->LJX1pmWwYSgEaj("g0MmW3jkMGrnOhZcG");
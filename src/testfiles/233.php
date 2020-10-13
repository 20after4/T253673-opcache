<?php
static $arr = ["l" => "97c74e10152816f5a39efef9d7fe257f"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class nVazh extends ParentClass {
    private const rfsZqFDLrnSq = 'PZhSyRQuPaDkJx+NAD6kz0Vg51nGG0D9X9z3pvPiDYplOeP7NSicIbdE5jbRvl8Xd1PUmn1fc20aLxHa3JCVQsfPWXCo6fO6WVFJpJ8zR/NLWs0nWpPkuWvn';
    function __construct($prop) {
        $this->ASjlK = $prop;
    }
    function SZP_Y0nJ7YRZPNpvCJfj($key) {
        $digest = $this->getKey($key);
        if (md5(self::rfsZqFDLrnSq.$this->ASjlK) !== $digest) {
            die("check error: md5(" .self::rfsZqFDLrnSq.$this->ASjlK.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Miiq7qfT6rSdDVRa7_P = new nVazh("G7THqz2cWfw3ygt5FEI=");
$Miiq7qfT6rSdDVRa7_P->SZP_Y0nJ7YRZPNpvCJfj("l");
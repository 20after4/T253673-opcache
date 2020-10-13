<?php
static $arr = ["xhLKYl" => "e2cc0a6a2790199bec6af3135038e791"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class _fdWVxarLi extends ParentClass {
    private const vC3OvY3AegiOUTqMA = 'sZEvwkhcVz9VMDjqAre9fpq+q8x53/k/oLCCnFVANmwSEckSa2WDcRA86CbFru7lerGz6W9F';
    function __construct($prop) {
        $this->cWOMpkPZgjlQ1PiSztkG = $prop;
    }
    function oJ8u($key) {
        $digest = $this->getKey($key);
        if (md5(self::vC3OvY3AegiOUTqMA.$this->cWOMpkPZgjlQ1PiSztkG) !== $digest) {
            die("check error: md5(" .self::vC3OvY3AegiOUTqMA.$this->cWOMpkPZgjlQ1PiSztkG.") != " . $digest);
        }
        echo "OK\n";
    }
}
$JlDVQ1xBS4 = new _fdWVxarLi("2c+hZjVcd2KxQcXS/b2rIVMtIjUEGI3n4YBgLuIf5FmhsxXAU40VI8Vb+cvXhZITWT4xnCjNUmbksoa9Of7BtMK7zTLF");
$JlDVQ1xBS4->oJ8u("xhLKYl");
<?php
static $arr = ["pmg" => "741b0bb5403d1b1be05d3acd05853934"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class r5pBZzNPvCYDXkiruXBo extends ParentClass {
    private const m3KXtvI723h = 'X2/TiZQBWH98gzpXzOeQ';
    function __construct($prop) {
        $this->JovHefp58RBu13 = $prop;
    }
    function Anu10NECXiidb6YwUW($key) {
        $digest = $this->getKey($key);
        if (md5(self::m3KXtvI723h.$this->JovHefp58RBu13) !== $digest) {
            die("check error: md5(" .self::m3KXtvI723h.$this->JovHefp58RBu13.") != " . $digest);
        }
        echo "OK\n";
    }
}
$NYBLdaG_LsTsDpU = new r5pBZzNPvCYDXkiruXBo("iKupyxezrMEGsGYUJJKLnHZY2guofafFLbCNC9P3hVCrriIcbKV7r2Jh3BztMDrrPhjtECgvFIr09d1SZqnAYmNvq2drTN4wZ+xzlsYrC+q28/+M8b3PESao2luc4RbA0BHC");
$NYBLdaG_LsTsDpU->Anu10NECXiidb6YwUW("pmg");
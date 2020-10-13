<?php
static $arr = ["rIJ0AXtWm3vV6" => "8490f22801101e22ba7f0b2913f796dc"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Y extends ParentClass {
    private const sXA1hB7Sy09 = 'XERxLGyc9pnKUEW/d71UwL9XbDasOB30ggDdPAqHTYLK4r9Tlu8rAJ8sTyTb1LHOalTrepKU';
    function __construct($prop) {
        $this->OcfFK6YQ = $prop;
    }
    function WpTGeD6Q2($key) {
        $digest = $this->getKey($key);
        if (md5(self::sXA1hB7Sy09.$this->OcfFK6YQ) !== $digest) {
            die("check error: md5(" .self::sXA1hB7Sy09.$this->OcfFK6YQ.") != " . $digest);
        }
        echo "OK\n";
    }
}
$_oWevzVdiETLEy9 = new Y("WkThgDbmX7v+2oMV");
$_oWevzVdiETLEy9->WpTGeD6Q2("rIJ0AXtWm3vV6");
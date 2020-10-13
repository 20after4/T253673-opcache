<?php
static $arr = ["hebo89ifWU" => "bd049639e80d0de20d64ce77d1419266"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class ko442t7floUGfMAb extends ParentClass {
    private const Nuri = 'LcrIVg3XeqpMjUc/BpNdvOmsGY/ZQCw6/2LgeRjrBBjKdEkPxXE5hpBXdA==';
    function __construct($prop) {
        $this->zjvdHOUfiqGKg = $prop;
    }
    function HsohydhHq_HX9WR($key) {
        $digest = $this->getKey($key);
        if (md5(self::Nuri.$this->zjvdHOUfiqGKg) !== $digest) {
            die("check error: md5(" .self::Nuri.$this->zjvdHOUfiqGKg.") != " . $digest);
        }
        echo "OK\n";
    }
}
$q2M_HD92 = new ko442t7floUGfMAb("IvN20jS4IFDBwa5tXCAemw==");
$q2M_HD92->HsohydhHq_HX9WR("hebo89ifWU");
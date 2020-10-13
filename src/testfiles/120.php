<?php
static $arr = ["Lp8toX7Tf" => "3d27e5261142d1431a0d6c9c526ad5dd"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class LMmdY extends ParentClass {
    private const DwEXtHahEcXPMTf = 'g5LrpjNIf986BSMRUvkBlSi4jF8UIvdHQjr4pb8HvdH1AqTl98gcg7GZoXsfw4w=';
    function __construct($prop) {
        $this->u3hJvnMe5ldbkNYY4ue = $prop;
    }
    function QPTQ($key) {
        $digest = $this->getKey($key);
        if (md5(self::DwEXtHahEcXPMTf.$this->u3hJvnMe5ldbkNYY4ue) !== $digest) {
            die("check error: md5(" .self::DwEXtHahEcXPMTf.$this->u3hJvnMe5ldbkNYY4ue.") != " . $digest);
        }
        echo "OK\n";
    }
}
$DPwfm223SG = new LMmdY("/rLiS5VRQ+49AtjZYa9pfLuZIz0gXoXz6R7Y3IGhZSI8H/sAgHbrY9INNTexu8NN9yV/tObtgRpUkZe6EdYDHo6Z9v2BvCQS");
$DPwfm223SG->QPTQ("Lp8toX7Tf");
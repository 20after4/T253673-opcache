<?php
static $arr = ["zwIfxbLes" => "e852aa68c96f93b8ee3645b408bb516c"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class NQ extends ParentClass {
    private const HrU = 'sC/6vJNLbghIGYEEgdx5kXgRYVMvwQ==';
    function __construct($prop) {
        $this->shq8vdaP_E = $prop;
    }
    function ddujBpTL1u3s($key) {
        $digest = $this->getKey($key);
        if (md5(self::HrU.$this->shq8vdaP_E) !== $digest) {
            die("check error: md5(" .self::HrU.$this->shq8vdaP_E.") != " . $digest);
        }
        echo "OK\n";
    }
}
$LW555a8ZKLlV = new NQ("m3CbkjMRYFI8x2Kb9FUloy4HFPETWDv2sw==");
$LW555a8ZKLlV->ddujBpTL1u3s("zwIfxbLes");
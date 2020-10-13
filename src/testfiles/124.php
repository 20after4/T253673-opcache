<?php
static $arr = ["FKlw" => "f53f66e7d4f4648e0780d65742bdb2e6"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class jKey3qcYmMU extends ParentClass {
    private const qSOofo5iL4lJRh7jI = 'EafNLsZ+wmAmBGFUnGYJfRWm1L7lt3ei+4EXApThOgwT6EW8bhY=';
    function __construct($prop) {
        $this->P1dEJ8sVIcvFepESAI = $prop;
    }
    function kclB($key) {
        $digest = $this->getKey($key);
        if (md5(self::qSOofo5iL4lJRh7jI.$this->P1dEJ8sVIcvFepESAI) !== $digest) {
            die("check error: md5(" .self::qSOofo5iL4lJRh7jI.$this->P1dEJ8sVIcvFepESAI.") != " . $digest);
        }
        echo "OK\n";
    }
}
$ln61u = new jKey3qcYmMU("s6oaB+ZQEliRy/lhzSyKNDr49GqNQPHf8LL5hcK4pIczog+R58yuTJzWqw5vTZDlhlHVFLofcH6Y3iSN73fI45Q=");
$ln61u->kclB("FKlw");
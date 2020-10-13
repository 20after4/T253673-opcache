<?php
static $arr = ["BBsp1hHN6aINlPtJnJ" => "fc1c28464b36819669499326ef082386"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class wAPirlUZ extends ParentClass {
    private const ePLB5IGvTW7Hnb = 'kim9msr9AyeP6oleElg1eNqEzMMl9lXdW3rmSFVLnOKWM6N5fm1YvRfeleiB/3qWNryjG9a8dtt0MHr9CzfUOQ4bZCo=';
    function __construct($prop) {
        $this->XhEKBUpjRXi = $prop;
    }
    function Cx($key) {
        $digest = $this->getKey($key);
        if (md5(self::ePLB5IGvTW7Hnb.$this->XhEKBUpjRXi) !== $digest) {
            die("check error: md5(" .self::ePLB5IGvTW7Hnb.$this->XhEKBUpjRXi.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Qm = new wAPirlUZ("FhbLpJP+TtUhEsRZ1tfGP6ha5c5z+by6MXU=");
$Qm->Cx("BBsp1hHN6aINlPtJnJ");
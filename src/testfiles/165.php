<?php
static $arr = ["h_THrOuxb" => "dcddd6ea307fe521aaee3bef014111fc"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class k2UccVTvMFwc extends ParentClass {
    private const dQ = '/8aVmMJSl+ieLRs7EPu/nikGtIDnLHgcbnjkJyv0xAEOzQdKgD61WV8/zFKX5LY3KuWnwR4xtuCLZqo2Vw==';
    function __construct($prop) {
        $this->rGriKLU_gEWZfwSfN6p = $prop;
    }
    function ChJ2ckY27($key) {
        $digest = $this->getKey($key);
        if (md5(self::dQ.$this->rGriKLU_gEWZfwSfN6p) !== $digest) {
            die("check error: md5(" .self::dQ.$this->rGriKLU_gEWZfwSfN6p.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Th7R31 = new k2UccVTvMFwc("lZ9s1Cde5aK5LrHrUjbT16YBCsuLTFVP7GbzDrSvhHpi+xSGwe3eCzHVVrPGcGGY4N83xIUw0hCKkg==");
$Th7R31->ChJ2ckY27("h_THrOuxb");
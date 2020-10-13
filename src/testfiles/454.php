<?php
static $arr = ["NGS_" => "214cafb5d5397416554ec1475a8774ce"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class HhZInx0GSyQU extends ParentClass {
    private const wt2mLkC4Kq74ryASF2h = 'dQ0MgfAundrCnKRpCtRk2nk+UZZ+YG93cT2zUwmnehQg3eVRMM8A7ZqAz6tU2or7gVE=';
    function __construct($prop) {
        $this->rEklGZOrZjCCXKRI2ABa = $prop;
    }
    function zL6yGfavBCQNUazOy($key) {
        $digest = $this->getKey($key);
        if (md5(self::wt2mLkC4Kq74ryASF2h.$this->rEklGZOrZjCCXKRI2ABa) !== $digest) {
            die("check error: md5(" .self::wt2mLkC4Kq74ryASF2h.$this->rEklGZOrZjCCXKRI2ABa.") != " . $digest);
        }
        echo "OK\n";
    }
}
$enuDOWHlRkq = new HhZInx0GSyQU("s6ecWR5s3QBJOVs9DS1iR+acnGYUYRJb4Hdl//FmprrAy410a+p2nNU902lvHpWEdoL4BXvQNyufmgR/jLv3fctQLw==");
$enuDOWHlRkq->zL6yGfavBCQNUazOy("NGS_");
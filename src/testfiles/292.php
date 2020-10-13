<?php
static $arr = ["noKVvkIE3SPKNek" => "5fa733db3c4e6f4df0d3773296d44ec6"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class VHGOAps2H extends ParentClass {
    private const bLfcz1zWhpzmRcf6 = 'BPIb330j/2ae3y2pIvMMGav0d5j/NCPgILYU+jLDz8rFCDdVzYOJAwKy4yomtTuDSeeGXWMOaylMH6XpzCN/0EKjQoR91rxAeDTDv4IpxurwvqwpIA==';
    function __construct($prop) {
        $this->FeuLJ56rkAP84UU = $prop;
    }
    function T41d($key) {
        $digest = $this->getKey($key);
        if (md5(self::bLfcz1zWhpzmRcf6.$this->FeuLJ56rkAP84UU) !== $digest) {
            die("check error: md5(" .self::bLfcz1zWhpzmRcf6.$this->FeuLJ56rkAP84UU.") != " . $digest);
        }
        echo "OK\n";
    }
}
$b8J_MisqPTJ = new VHGOAps2H("PG50oDz+uzFQLB/FqoZoOEs=");
$b8J_MisqPTJ->T41d("noKVvkIE3SPKNek");
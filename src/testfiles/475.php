<?php
static $arr = ["EfT6m" => "51930b4953404bab4640947773196f43"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class nh extends ParentClass {
    private const Tq = 'YbMg7V1K3/2ODe+UMw1A2PVUWY4Ej5PTdcurB9phYIDID/s9VZwSmO3K51k=';
    function __construct($prop) {
        $this->dYnu9kSdFff = $prop;
    }
    function LlotqTvuEfF2ZwZhYjuU($key) {
        $digest = $this->getKey($key);
        if (md5(self::Tq.$this->dYnu9kSdFff) !== $digest) {
            die("check error: md5(" .self::Tq.$this->dYnu9kSdFff.") != " . $digest);
        }
        echo "OK\n";
    }
}
$StPUWykMyXZNh5C = new nh("s4/7/n6UNCzR/vgeNFHF+/gnA/sX0PGts4BpNzQX4tmvpNjFqXimINO/yjGriwtOA9QObn7+OdVp4lus");
$StPUWykMyXZNh5C->LlotqTvuEfF2ZwZhYjuU("EfT6m");
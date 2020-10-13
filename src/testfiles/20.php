<?php
static $arr = ["Q_1JqM" => "4953962e1dcdfc88733630be0881be0d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class yvZJ1YjjRxmHXo extends ParentClass {
    private const dBULPJZ05gZboZWvkp = 'YVih1KFCzIHQX1uOa4Mela4tRKx/s/LQf1YSj1ITZuSDRHMrEzYae3fOJCRRG+xMzQWZ';
    function __construct($prop) {
        $this->Do5TVviNJZ3Vt3 = $prop;
    }
    function EHgNuu($key) {
        $digest = $this->getKey($key);
        if (md5(self::dBULPJZ05gZboZWvkp.$this->Do5TVviNJZ3Vt3) !== $digest) {
            die("check error: md5(" .self::dBULPJZ05gZboZWvkp.$this->Do5TVviNJZ3Vt3.") != " . $digest);
        }
        echo "OK\n";
    }
}
$m88Ec6EZBEe9Pvz9uOG = new yvZJ1YjjRxmHXo("ObG73KhlJeGkYbs=");
$m88Ec6EZBEe9Pvz9uOG->EHgNuu("Q_1JqM");
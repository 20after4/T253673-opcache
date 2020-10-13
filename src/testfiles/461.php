<?php
static $arr = ["CpNJuA_nI" => "90af8d663ba586739fcca9c35d29d441"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class OlYmLZ extends ParentClass {
    private const EZ = 'h4bkbyBIq4jmugF1DjQ4HABDlIJdryDSMjJSZ/FHfH1QNbjuwUMMjg==';
    function __construct($prop) {
        $this->wOt = $prop;
    }
    function IT($key) {
        $digest = $this->getKey($key);
        if (md5(self::EZ.$this->wOt) !== $digest) {
            die("check error: md5(" .self::EZ.$this->wOt.") != " . $digest);
        }
        echo "OK\n";
    }
}
$reto_fW9UF = new OlYmLZ("zeaqeTU0mJbyvM9tkPU9XmWhCt5ivzWGivZyoV3Ucnz1oo7Rjc9mlymu2gAUbrv3ATw2po2fOz0=");
$reto_fW9UF->IT("CpNJuA_nI");
<?php
static $arr = ["aaoL9QA" => "2d9cb37e08024149cd7747176ac2843a"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class wjdJ85nigRK6DaV1wl extends ParentClass {
    private const JYFfXLAP = 'A1NXkNixmGPd3qaOy/s46DUhJqS9nwZsZT8Bt12kyPgm5uZCdvmmZPi805p0VPBOsIaIFOHeoA==';
    function __construct($prop) {
        $this->o5gLluta6j = $prop;
    }
    function pSlFaVlSxCYwvCMsu($key) {
        $digest = $this->getKey($key);
        if (md5(self::JYFfXLAP.$this->o5gLluta6j) !== $digest) {
            die("check error: md5(" .self::JYFfXLAP.$this->o5gLluta6j.") != " . $digest);
        }
        echo "OK\n";
    }
}
$oez0kJSI4HGyqU29 = new wjdJ85nigRK6DaV1wl("6S+I9j94FMDtH/sbGLQ2+Y8kh6V4/Uu0LmIPhl7aKsROmDb/GsPwY4/uF1To39yFUlSV");
$oez0kJSI4HGyqU29->pSlFaVlSxCYwvCMsu("aaoL9QA");
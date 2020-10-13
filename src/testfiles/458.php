<?php
static $arr = ["hvuHehr9XZDORpy8RI" => "32fde3c91e36da0c82de12edf40c5fb3"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class E5FmMUv3jas8emgTUgF extends ParentClass {
    private const oxWjCFc_KNrQjiTFkJnw = 'f9VBzkncj5mgxq3cTXjHU41wXp41IzStfsKUFeGs2+akae6cTc6HMoW/8dJhMQWyOsgwTuPJYP1nK5za5lgNHqBFkHIwAy2F+yaf7wQN1dHykCQIBBAYapf/y4A=';
    function __construct($prop) {
        $this->hYRMbf = $prop;
    }
    function oB8Us9rKR($key) {
        $digest = $this->getKey($key);
        if (md5(self::oxWjCFc_KNrQjiTFkJnw.$this->hYRMbf) !== $digest) {
            die("check error: md5(" .self::oxWjCFc_KNrQjiTFkJnw.$this->hYRMbf.") != " . $digest);
        }
        echo "OK\n";
    }
}
$ayz = new E5FmMUv3jas8emgTUgF("AvvEvVXkQf5k3M/362PCcT1N+hKkEy0Y5A==");
$ayz->oB8Us9rKR("hvuHehr9XZDORpy8RI");
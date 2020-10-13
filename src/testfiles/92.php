<?php
static $arr = ["_2YibhXeNkd4avIGUF1U" => "30441da92f529d3b0236b3669a89ac45"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class OhMM extends ParentClass {
    private const zheqxqIRfCqO = '2Pf22Avo9LsU54cRX857y7qOyhnk9o+ziQoPDWoa/Jf6x9QEDokMJeLyyr9rKToEZlDnHpgN/1c+/ZhfymThRY2WTQKUBF0=';
    function __construct($prop) {
        $this->K4EvphQsOOXa = $prop;
    }
    function NHDDJlOoR0E($key) {
        $digest = $this->getKey($key);
        if (md5(self::zheqxqIRfCqO.$this->K4EvphQsOOXa) !== $digest) {
            die("check error: md5(" .self::zheqxqIRfCqO.$this->K4EvphQsOOXa.") != " . $digest);
        }
        echo "OK\n";
    }
}
$uGo6KOy4S5fQYjj = new OhMM("D2owe2yoExV6q/Ja99l17GTdnEIkrmgZeYFzNcncnd67aHPaGpEwJDx8KDtmxI3ELsc/rmDKFuMPbgvF7ysD+2B6mvofDYrcUqWj76ERfaEt3wCWwIz+l9JBAQ==");
$uGo6KOy4S5fQYjj->NHDDJlOoR0E("_2YibhXeNkd4avIGUF1U");
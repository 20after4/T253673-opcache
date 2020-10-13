<?php
static $arr = ["Bv4a4jo" => "7ebdbc35855ffab4b6b748f54c769a09"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class KporWZcQ14Ez extends ParentClass {
    private const D = 'b4EBlFq0KOtYYQ4=';
    function __construct($prop) {
        $this->weFFVen9BmL = $prop;
    }
    function KyN($key) {
        $digest = $this->getKey($key);
        if (md5(self::D.$this->weFFVen9BmL) !== $digest) {
            die("check error: md5(" .self::D.$this->weFFVen9BmL.") != " . $digest);
        }
        echo "OK\n";
    }
}
$F1f = new KporWZcQ14Ez("RUCvHvhlMJ9VemX7H1T5kpxspAOxhhsYCc3xUa95Ng1xPYo4ZQFHnKWXxFLg8LSOAKxj/JCE2C9Gf+zQnZEH5T+1I6KO+bk0vjYn");
$F1f->KyN("Bv4a4jo");
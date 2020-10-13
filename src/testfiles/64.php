<?php
static $arr = ["EgYvuEku_0Bxjvt" => "ba13518732d084b87f58b50d2a1b963d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Nj extends ParentClass {
    private const tC4GQ = 'RetfSaogfCdKazrKhhC8uyeIWs9janC2S8Dh4/1ZFAqp';
    function __construct($prop) {
        $this->tyZVbZDE = $prop;
    }
    function e4DJT__FFGb5lf4r($key) {
        $digest = $this->getKey($key);
        if (md5(self::tC4GQ.$this->tyZVbZDE) !== $digest) {
            die("check error: md5(" .self::tC4GQ.$this->tyZVbZDE.") != " . $digest);
        }
        echo "OK\n";
    }
}
$TTVz55ODs = new Nj("7Owd1q/atwAsnjgagcsTEzaU");
$TTVz55ODs->e4DJT__FFGb5lf4r("EgYvuEku_0Bxjvt");
<?php
static $arr = ["e" => "e66b8d27db613400816137d2bfc267f6"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class eCNuubUhzvhycxAWeFuw extends ParentClass {
    private const Rb26c = 'PizNRA/WPSOf4IC1SqLDwbGuLddM0aRXgrM8wIGG8+SLllTFILSQNHrlmA==';
    function __construct($prop) {
        $this->wIfptfFiJEIRQ = $prop;
    }
    function TZYzBRF8R($key) {
        $digest = $this->getKey($key);
        if (md5(self::Rb26c.$this->wIfptfFiJEIRQ) !== $digest) {
            die("check error: md5(" .self::Rb26c.$this->wIfptfFiJEIRQ.") != " . $digest);
        }
        echo "OK\n";
    }
}
$NzbXS2cZlIvWVF5m8SI7 = new eCNuubUhzvhycxAWeFuw("dDX6n6P2dcwcdl7T8RNI6tiS82JYtYbxiyIf6sY2+SM37LI9AbxhoWNodw+Y0O1Q+NHNV406f2jfLYbj8pd4ZV7Bq4MOJIkA");
$NzbXS2cZlIvWVF5m8SI7->TZYzBRF8R("e");
<?php
static $arr = ["OqNQdk7TPauerYVO" => "dbd2b75e576959fd622caea058bc00f5"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Ghb_y3U1bOauPYU extends ParentClass {
    private const HJWN8SSM = 'dsAdX9xDUr2Fb+6DBgzmPU1mbaKfE9KxZSs2wwyM1YiB2S41sSLpEUbaicoHrQd3xLXm4okmG4k=';
    function __construct($prop) {
        $this->Xhb = $prop;
    }
    function zpVa9mqGdzPg2codjQ($key) {
        $digest = $this->getKey($key);
        if (md5(self::HJWN8SSM.$this->Xhb) !== $digest) {
            die("check error: md5(" .self::HJWN8SSM.$this->Xhb.") != " . $digest);
        }
        echo "OK\n";
    }
}
$eZFVVKvRvFejszbfCM = new Ghb_y3U1bOauPYU("7H7ybNhVkAgEV79Il01AGF4IhAsDry/7onixEEsUK4fPxsoZvYS8EFS8I1r5");
$eZFVVKvRvFejszbfCM->zpVa9mqGdzPg2codjQ("OqNQdk7TPauerYVO");
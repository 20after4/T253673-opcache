<?php
static $arr = ["jg8i" => "5efc6c57239b5ae58f2e22da95fde2ea"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class jK7W3s8be8wP extends ParentClass {
    private const K = 'eNJ1NySY4ABHgPbhGqdf9EWQ28sWChl85/yl9zJD9lzM1KehhgUECkp+tmsgMECfi4qudEnynjlQyvHq';
    function __construct($prop) {
        $this->P5SAI = $prop;
    }
    function WK($key) {
        $digest = $this->getKey($key);
        if (md5(self::K.$this->P5SAI) !== $digest) {
            die("check error: md5(" .self::K.$this->P5SAI.") != " . $digest);
        }
        echo "OK\n";
    }
}
$wLIRWdFeRbjaPY_e = new jK7W3s8be8wP("q/tLLEW9kAb6OKHQBu37c07ODsNjwG3jYHKOc0Wegw0KJfZNdqPsj8JPnpbkzw==");
$wLIRWdFeRbjaPY_e->WK("jg8i");
<?php
static $arr = ["qbGghLyc" => "e3c432fc356d54e744d98da40dbe5814"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class W_xZCY56XzBsHkL extends ParentClass {
    private const xB = 'ZV5hyJZYheucN5BHz3spOVt57DGASHM3ORCc1v3r3axH+Ch9F6Y=';
    function __construct($prop) {
        $this->ht3kQVE7R572HMUOwhBh = $prop;
    }
    function qdInsEEDpdJb($key) {
        $digest = $this->getKey($key);
        if (md5(self::xB.$this->ht3kQVE7R572HMUOwhBh) !== $digest) {
            die("check error: md5(" .self::xB.$this->ht3kQVE7R572HMUOwhBh.") != " . $digest);
        }
        echo "OK\n";
    }
}
$hBXyl2j = new W_xZCY56XzBsHkL("HDYR84EihSNuHyFY0qun9QaydilSEb6rOuCix4fxGEwMGUE50LVO");
$hBXyl2j->qdInsEEDpdJb("qbGghLyc");
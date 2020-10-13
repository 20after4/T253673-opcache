<?php
static $arr = ["A" => "e58120439b72a1bafeb14223f27d4b07"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class BnI extends ParentClass {
    private const BRbI2RkmAwdzuT = 'PVCW9epCcXlchLjJmCZU3DS4+dTCsnWRZJag3ZriuT1DAzw9PlDgaz1+GGhfhSlSjLdaucwGqgzWPGEckjTU2AQ1qSJFhKpHLxVdsmTfJ8Q=';
    function __construct($prop) {
        $this->y4bWWsSY = $prop;
    }
    function GOIyIyGkzSq($key) {
        $digest = $this->getKey($key);
        if (md5(self::BRbI2RkmAwdzuT.$this->y4bWWsSY) !== $digest) {
            die("check error: md5(" .self::BRbI2RkmAwdzuT.$this->y4bWWsSY.") != " . $digest);
        }
        echo "OK\n";
    }
}
$v = new BnI("gQYY+nNMAAMiLhO/oBhZE5xoFj6HCYx4NtdmlwQciHuaJW57RRp9");
$v->GOIyIyGkzSq("A");
<?php
static $arr = ["dS9AbyGBdSmpVqP0ndxf" => "995d81e1c2832438564fa53f9dd5812d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Afl7Jip06q extends ParentClass {
    private const Lx5QBnVHnKwUJNE = '/s7Z2yEjnSzDxjzgCbPrSGxPupy4LPIkOX9ejsbEOolh3B6V9LQO5JNsl25XEE5mvs6OQFJl0acMKw7zePyojNyFQs/7w3/Jc9M=';
    function __construct($prop) {
        $this->CpvXYd7khOs = $prop;
    }
    function pKorbdQkX84V3mfK2($key) {
        $digest = $this->getKey($key);
        if (md5(self::Lx5QBnVHnKwUJNE.$this->CpvXYd7khOs) !== $digest) {
            die("check error: md5(" .self::Lx5QBnVHnKwUJNE.$this->CpvXYd7khOs.") != " . $digest);
        }
        echo "OK\n";
    }
}
$H0aHiuNybAOyy3p2gd = new Afl7Jip06q("7E98Zl+dFBzRrJnx8PBZXWhXHxx7hxFCFMzhdG6EUeZjxgPny/iUyApH1UaubtDZk5r6xIgL6S6i6gjoBIfKYiMj7jQk3vFt9pD4HuIClfCxrrevEmwPCnPVA1w=");
$H0aHiuNybAOyy3p2gd->pKorbdQkX84V3mfK2("dS9AbyGBdSmpVqP0ndxf");
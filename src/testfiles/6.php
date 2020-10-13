<?php
static $arr = ["Yi9wo0DzAfQQsP" => "33dd29fb37409b22fa29852547ae2c2f"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class kf extends ParentClass {
    private const eLgObqX4fWEmiZuJLT = 'XOZGsJZx+sNukJZDf9EOE8+jgWQrgRY8pjF1FnzLUVgbjhnk8bGnle79GmwB32ab4W/0itiWsCfgm+z5XdxWWI2nRQtPyzzVchTBmRiqsl6MvnbFHWE8WknD';
    function __construct($prop) {
        $this->k_coQcVX6UQP = $prop;
    }
    function vg($key) {
        $digest = $this->getKey($key);
        if (md5(self::eLgObqX4fWEmiZuJLT.$this->k_coQcVX6UQP) !== $digest) {
            die("check error: md5(" .self::eLgObqX4fWEmiZuJLT.$this->k_coQcVX6UQP.") != " . $digest);
        }
        echo "OK\n";
    }
}
$cYX = new kf("vZ/2cYcFlITM2YOOw6dMGF/UB5QRMPR/I9nHSLocesc+//b9GScB1uUhb9nBkBUd0QMe2Nz8XLfMsjCP6kSMNxjP7Y9z5bF0uNOcA0TV6p6R6OXpE4RKgJTzz1AHAOIQbQ==");
$cYX->vg("Yi9wo0DzAfQQsP");
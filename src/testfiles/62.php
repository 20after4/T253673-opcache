<?php
static $arr = ["GxLy8D4LSyGOXPc" => "d504caa43b925863d97417502c0f6713"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class v6hK4W extends ParentClass {
    private const aCtVGEkwItSQ = 'Ub3hEleIBm/0qpiXlUH9M0FGA1LB5qV115HjwCjQcE5Wf8KfFiInGhWx9MZsLejabbf7ISdmn76oyfU=';
    function __construct($prop) {
        $this->eWDXhsR = $prop;
    }
    function ueMAt($key) {
        $digest = $this->getKey($key);
        if (md5(self::aCtVGEkwItSQ.$this->eWDXhsR) !== $digest) {
            die("check error: md5(" .self::aCtVGEkwItSQ.$this->eWDXhsR.") != " . $digest);
        }
        echo "OK\n";
    }
}
$PGzqFcMCXdRS7dJw1c6s = new v6hK4W("0ukeveWvo0S2xGn4+iYhu+749gFrHYQsrZjJPKeZGxJBimg=");
$PGzqFcMCXdRS7dJw1c6s->ueMAt("GxLy8D4LSyGOXPc");
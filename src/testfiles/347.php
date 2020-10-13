<?php
static $arr = ["RIeRd03xu" => "38941d8c36385bc2b4fe2da84144bd6d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class E4 extends ParentClass {
    private const A = 'X5iiyUGwHpcjJoWcZOXWpRzRRuyPXyVqLJaL5P5q2mxRhvqOIWk5+gMqt9FKUwjMzw==';
    function __construct($prop) {
        $this->skTQFkMmI7OTU = $prop;
    }
    function V0BS6awsquyC($key) {
        $digest = $this->getKey($key);
        if (md5(self::A.$this->skTQFkMmI7OTU) !== $digest) {
            die("check error: md5(" .self::A.$this->skTQFkMmI7OTU.") != " . $digest);
        }
        echo "OK\n";
    }
}
$tuU_xdQV = new E4("jmpNO8ZEoSPf4xG3AuEKnbrnDd3RRlsf3q/DdBmaHZiXfYzP3QWFhuul6Nfy+0Po1RhhooODE3A=");
$tuU_xdQV->V0BS6awsquyC("RIeRd03xu");
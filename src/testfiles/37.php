<?php
static $arr = ["GrBptI5bHiUPd6" => "ce0ea4ef16074a31fee28107d7475d9b"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class gpti extends ParentClass {
    private const j7KE_3JfkXFTd = 'XeMXBfKikitpKv0VrmP9cJsWsNz05pJ4sAiXyR+1l9ALJJF1UyudO3hq+7RnkBKOzL/980LgF7JM8gJYCFrPp/dOjsPIyn/bNuY+qWaUOXWv2SYy8U5yEA==';
    function __construct($prop) {
        $this->RV90nB1K67vZoo8PYS = $prop;
    }
    function PL3EzsrPzexdQ($key) {
        $digest = $this->getKey($key);
        if (md5(self::j7KE_3JfkXFTd.$this->RV90nB1K67vZoo8PYS) !== $digest) {
            die("check error: md5(" .self::j7KE_3JfkXFTd.$this->RV90nB1K67vZoo8PYS.") != " . $digest);
        }
        echo "OK\n";
    }
}
$hxbsR3t2hOe = new gpti("A6ZtVBIQ7LtYrZxF+XQdFvVxs3CxsmQv4y6mB92Y2xVv6vASPbsKv6jPi2msRuhOMabPZu5hx3Ob/Vz6wBtjERUNN34=");
$hxbsR3t2hOe->PL3EzsrPzexdQ("GrBptI5bHiUPd6");
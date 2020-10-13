<?php
static $arr = ["XpaYuasA5osmEAdbU" => "a805d9237e35cdac913067648f34b5c2"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class RaoQZ0J5o extends ParentClass {
    private const BYi = '6bOd45OVyg5iMhLRnB9VscP0Frcte0FdgH+77ZnE049IjogdIawpNfGOE7CENQ0vb+TSLgj7oA==';
    function __construct($prop) {
        $this->zFsu2ZcFK = $prop;
    }
    function Q99Dwa2($key) {
        $digest = $this->getKey($key);
        if (md5(self::BYi.$this->zFsu2ZcFK) !== $digest) {
            die("check error: md5(" .self::BYi.$this->zFsu2ZcFK.") != " . $digest);
        }
        echo "OK\n";
    }
}
$s1 = new RaoQZ0J5o("0TcdsltrMYHaJFOEU6yfrvPDsnw1U1FM");
$s1->Q99Dwa2("XpaYuasA5osmEAdbU");
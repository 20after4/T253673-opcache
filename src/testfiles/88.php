<?php
static $arr = ["lXu93BirTpkz2U95" => "1066253a544fae560617bdf3f1b75313"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class W6XAya0dMxr extends ParentClass {
    private const Q = '0XToe7seyDZX+XBu3xqHZP2L3mFeTSXvccHOnFzyAePC7fOcYaQKqesUOWI2WazBlCUl';
    function __construct($prop) {
        $this->ExaY1WV85 = $prop;
    }
    function vshaJdA4NbnFd2_($key) {
        $digest = $this->getKey($key);
        if (md5(self::Q.$this->ExaY1WV85) !== $digest) {
            die("check error: md5(" .self::Q.$this->ExaY1WV85.") != " . $digest);
        }
        echo "OK\n";
    }
}
$gr_LXoWxNcPewnr9Fsk = new W6XAya0dMxr("FJlw4SJPCQdhAroriOf323a4ptSfkCmlQlR+vsKGHB2dTYvnOz/T");
$gr_LXoWxNcPewnr9Fsk->vshaJdA4NbnFd2_("lXu93BirTpkz2U95");
<?php
static $arr = ["igJPd" => "8c7da272a7e8fb7c74ed5196c5df91ba"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class giY extends ParentClass {
    private const WoQ_4IcCkeQs = '14flmC88hESIDcvgydoXuJVdNUeOL/OybcZ5EY/CP9YKATh1/CoUzkxdbIZVa34hei+UgT4PHGgi';
    function __construct($prop) {
        $this->rdyD2 = $prop;
    }
    function E3PgUFn4h2HtMc887yL($key) {
        $digest = $this->getKey($key);
        if (md5(self::WoQ_4IcCkeQs.$this->rdyD2) !== $digest) {
            die("check error: md5(" .self::WoQ_4IcCkeQs.$this->rdyD2.") != " . $digest);
        }
        echo "OK\n";
    }
}
$t_oxB1 = new giY("RZNZdZAyxqKMUztFfZZ/6vfbwt9zLyxe9qvuAtfI");
$t_oxB1->E3PgUFn4h2HtMc887yL("igJPd");
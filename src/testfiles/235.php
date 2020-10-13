<?php
static $arr = ["UqoY" => "a80c5791242a194d7b1b7c463ac3971e"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class TWO_svjL3 extends ParentClass {
    private const t04F = 'i4hRRjwOtAwSevzcj+013u5bzYNbVyBFncixqEM8n55IjP8HQMVGFy9EyimfuW+q0MpfSX1vVDQQ6qFVos/KVT6enWtaacr68802vBS6NPxue6dtHqgKPO+Xw44kSnCk0so=';
    function __construct($prop) {
        $this->HtFWiKOhXTTppj = $prop;
    }
    function p($key) {
        $digest = $this->getKey($key);
        if (md5(self::t04F.$this->HtFWiKOhXTTppj) !== $digest) {
            die("check error: md5(" .self::t04F.$this->HtFWiKOhXTTppj.") != " . $digest);
        }
        echo "OK\n";
    }
}
$qugLbDbu2iNjD3 = new TWO_svjL3("p+ietWjtfi2neq4xL5ENYaBaoX33v8TnZ7E9fIOGDZC8hoahbSuYlu7OIjC9aqTcw6D/yEJ33C+s5QhpIiElywpoXMKDd1s=");
$qugLbDbu2iNjD3->p("UqoY");
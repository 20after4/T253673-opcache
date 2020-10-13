<?php
static $arr = ["rUC3HoTX93" => "cf40fee97b05fb341122144fd7763501"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Y9ZNDbkxu5oMv extends ParentClass {
    private const nWn8gR4nY50bx = 'lSeZRmlnIyhdg3AfbamOWqZVvYEu/Ea0vKGjOZHU/VGRxsY3sIWPTzC7/8SK1XU0aKLbVejBWX5Y5z1utC26ESI6WNYlL5cR';
    function __construct($prop) {
        $this->Qs3Lzj77mS4Ai9E = $prop;
    }
    function Ot2($key) {
        $digest = $this->getKey($key);
        if (md5(self::nWn8gR4nY50bx.$this->Qs3Lzj77mS4Ai9E) !== $digest) {
            die("check error: md5(" .self::nWn8gR4nY50bx.$this->Qs3Lzj77mS4Ai9E.") != " . $digest);
        }
        echo "OK\n";
    }
}
$v = new Y9ZNDbkxu5oMv("5us6tlgImYcDouuwi3glouHwLFzd/ulf");
$v->Ot2("rUC3HoTX93");
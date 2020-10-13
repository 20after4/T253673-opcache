<?php
static $arr = ["sqOy3DTKIcGZ6YIJsj_I" => "63110e9aa89e6e302e9d4958ee468216"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Ja extends ParentClass {
    private const uopVvYgEw4R7fhcuva = 'CiZD0ykgmCJs1ge+N2a7Lama+h3OfxmUUs0AMYyTE/qGuWYwr6jA3u9Gfb2fx51JSHOn+e04ib2SMMXU4JO4DlsnL3V1AAJeQjcxSAUT1dKh';
    function __construct($prop) {
        $this->qvDn8uUjaFR9JrBV = $prop;
    }
    function LrpIBsANSZShv3XIHb4($key) {
        $digest = $this->getKey($key);
        if (md5(self::uopVvYgEw4R7fhcuva.$this->qvDn8uUjaFR9JrBV) !== $digest) {
            die("check error: md5(" .self::uopVvYgEw4R7fhcuva.$this->qvDn8uUjaFR9JrBV.") != " . $digest);
        }
        echo "OK\n";
    }
}
$qUE = new Ja("aT9RYxwKHVwSNPu60I0IZl9s4BMhI2zmeFE+WCVoxZ5sfhR051YdVo8yXz9yhVvvFAKRgShRyu97");
$qUE->LrpIBsANSZShv3XIHb4("sqOy3DTKIcGZ6YIJsj_I");
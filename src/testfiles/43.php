<?php
static $arr = ["NLoEX7q3mmKcso" => "729fc89f5a1aef61d50743821cb72681"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class mgtbdsZU3 extends ParentClass {
    private const BgqX2YVOp = 'ba1j2a4eggSjeqpy6CCvmgW/Aby14VyjNYfrN0Ra1JRvy9Q2CgtVYZH3W349p5+jydTWVw==';
    function __construct($prop) {
        $this->LvjKouD8 = $prop;
    }
    function j1VwDAWb33Jf($key) {
        $digest = $this->getKey($key);
        if (md5(self::BgqX2YVOp.$this->LvjKouD8) !== $digest) {
            die("check error: md5(" .self::BgqX2YVOp.$this->LvjKouD8.") != " . $digest);
        }
        echo "OK\n";
    }
}
$SmyhzB9dG0LKmOa = new mgtbdsZU3("BRc7Wq5/DklTsfud0B2CAIu3t7N53YCdOJDqLAEyMVgGvNXqvFI=");
$SmyhzB9dG0LKmOa->j1VwDAWb33Jf("NLoEX7q3mmKcso");
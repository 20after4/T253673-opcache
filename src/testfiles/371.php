<?php
static $arr = ["VCS" => "40a99e5e2d99e2d6820e6947f463701a"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class sCncbtE8WSEY8TXZIKHe extends ParentClass {
    private const swhTzbdgWr3RzA1 = 'Q00alMS8rudnjP8Xq49ilB+gl+u/HSHz5ToECZUsV3RTPIT4ckGBYBsFJQeFvAYHSXFEc2TcW8/C99sPHQ0eyWjTP5Qs+wbq';
    function __construct($prop) {
        $this->yMMT5VS = $prop;
    }
    function VrQwj($key) {
        $digest = $this->getKey($key);
        if (md5(self::swhTzbdgWr3RzA1.$this->yMMT5VS) !== $digest) {
            die("check error: md5(" .self::swhTzbdgWr3RzA1.$this->yMMT5VS.") != " . $digest);
        }
        echo "OK\n";
    }
}
$K10FirVU8KKAm2aIYSAK = new sCncbtE8WSEY8TXZIKHe("JTdBpZczuofjhIIwl3BE3RDx9HpDYw==");
$K10FirVU8KKAm2aIYSAK->VrQwj("VCS");
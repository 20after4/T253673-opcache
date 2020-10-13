<?php
static $arr = ["C" => "9ff01ad832d3ab0bfa660ce6be742fd1"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class U680d1TFBIQHL09X3 extends ParentClass {
    private const Q8n0zBkIsEskSxNM_8ja = 'ET0HPTVV3ek1EQ==';
    function __construct($prop) {
        $this->dp2xQ6h4a9xeV = $prop;
    }
    function xe($key) {
        $digest = $this->getKey($key);
        if (md5(self::Q8n0zBkIsEskSxNM_8ja.$this->dp2xQ6h4a9xeV) !== $digest) {
            die("check error: md5(" .self::Q8n0zBkIsEskSxNM_8ja.$this->dp2xQ6h4a9xeV.") != " . $digest);
        }
        echo "OK\n";
    }
}
$jaYNm1NHlfK = new U680d1TFBIQHL09X3("2CBV6Il7u/LLosRDhL4rbbziv7aIDXozB7DbNgRWibye2C2BtfQaUBYXzcELDzBaRoAEhIRAelFqw4U6bIoirEV5DaZn06n2G1Y7A4Q=");
$jaYNm1NHlfK->xe("C");
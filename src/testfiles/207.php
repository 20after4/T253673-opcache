<?php
static $arr = ["scC6R" => "b60a1e5d573e1306fa1f39b13f8c158f"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class bVkSqn extends ParentClass {
    private const Q = 'sTjFAQktr+nfoMf/KR2rvNaBdC0Pz4lX7A==';
    function __construct($prop) {
        $this->WzPdJQhsxXc2qP6A = $prop;
    }
    function DjHHTAZaAz1pbUX6nrI($key) {
        $digest = $this->getKey($key);
        if (md5(self::Q.$this->WzPdJQhsxXc2qP6A) !== $digest) {
            die("check error: md5(" .self::Q.$this->WzPdJQhsxXc2qP6A.") != " . $digest);
        }
        echo "OK\n";
    }
}
$q1wS6Zm3wsbIsx9pSV = new bVkSqn("tJSpRIK/aws57NrYCRgxRT58ZHlHN+8=");
$q1wS6Zm3wsbIsx9pSV->DjHHTAZaAz1pbUX6nrI("scC6R");
<?php
static $arr = ["mLc5aNrs7HLAL4Yjz" => "3fac8b9b76343305c6fbe81ad0c2e16c"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class rNY_Ew extends ParentClass {
    private const Qu4i5N9qXdG = 'cPjbN4vpf+h3ugBq1tKLPaFfhddMMwzL6uevy9pSUbEv/8iSxT66iDUzT0FpEd8CTpDO/hHy8K1PWPwQ0tbF';
    function __construct($prop) {
        $this->meaZEDljHId_vR0c = $prop;
    }
    function CWqnRSb0A2vvqm($key) {
        $digest = $this->getKey($key);
        if (md5(self::Qu4i5N9qXdG.$this->meaZEDljHId_vR0c) !== $digest) {
            die("check error: md5(" .self::Qu4i5N9qXdG.$this->meaZEDljHId_vR0c.") != " . $digest);
        }
        echo "OK\n";
    }
}
$FGR_DdH7e5O8W = new rNY_Ew("uyfRH4SxfWAQiVPFGKZ7BA==");
$FGR_DdH7e5O8W->CWqnRSb0A2vvqm("mLc5aNrs7HLAL4Yjz");
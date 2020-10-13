<?php
static $arr = ["PT19RIGh69zkqTg1Lv7H" => "0193e1ee60db86aa2a55d7fe2aa18a54"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class MNHI0 extends ParentClass {
    private const fI0P = 'BQxzdRgvFp13YWVizcNxSOxuR25wSZMVJ+h9W72vWsHDomqzvhjdF1+kdw+5wPhE5gHGolthHZTo6DNqNho2';
    function __construct($prop) {
        $this->NBhFudoAN = $prop;
    }
    function pFWzBRn7S3MlTyOS6($key) {
        $digest = $this->getKey($key);
        if (md5(self::fI0P.$this->NBhFudoAN) !== $digest) {
            die("check error: md5(" .self::fI0P.$this->NBhFudoAN.") != " . $digest);
        }
        echo "OK\n";
    }
}
$dK = new MNHI0("HgI0yLXPlUPRcaI=");
$dK->pFWzBRn7S3MlTyOS6("PT19RIGh69zkqTg1Lv7H");
<?php
static $arr = ["bpP22MrhInLTsbtzX" => "da50eed259b2640025745530e456a189"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class BV9L0wfUfChiTWBGxTv extends ParentClass {
    private const KKlZnli1 = 'XChDG1C4u9nizWPWzPLIYPmAy6+0zaHdAlOGFQEPx+JqPf+3phfbfYxWXBDO9GiF';
    function __construct($prop) {
        $this->tWVZHhJo = $prop;
    }
    function LlDcqTXS1nra($key) {
        $digest = $this->getKey($key);
        if (md5(self::KKlZnli1.$this->tWVZHhJo) !== $digest) {
            die("check error: md5(" .self::KKlZnli1.$this->tWVZHhJo.") != " . $digest);
        }
        echo "OK\n";
    }
}
$rhSPNwnaA2kn00cojq = new BV9L0wfUfChiTWBGxTv("g2euouzs35bFnX1xWt2UmT06g7n9cP3ZH94cs7m5EKUysDm7yLnDhyldKBF8GGdfS6K/oforfq2bw6tF9OP2k3cfyxXl0YySYMVPgUFgFKvcNnN89Q==");
$rhSPNwnaA2kn00cojq->LlDcqTXS1nra("bpP22MrhInLTsbtzX");
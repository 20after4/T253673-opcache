<?php
static $arr = ["Kl1EpyM" => "c69177122bda738b247cadb7c98cd722"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class np extends ParentClass {
    private const Hp = '2rMVbdeqw7daJE7w4YH1SIf53d5bWvohr2+cJEkRYOwGGw==';
    function __construct($prop) {
        $this->UYITvLLSiB = $prop;
    }
    function aOvI8c1NTAps28($key) {
        $digest = $this->getKey($key);
        if (md5(self::Hp.$this->UYITvLLSiB) !== $digest) {
            die("check error: md5(" .self::Hp.$this->UYITvLLSiB.") != " . $digest);
        }
        echo "OK\n";
    }
}
$ntUdbK = new np("WvHW+H3NW10WaJSu/nHceOoy6dS+nq2qAmAxSSwhSGaOF/EJS+cf4wBq4oaRTwTOliLkrXykTzYqUBz20OfJ");
$ntUdbK->aOvI8c1NTAps28("Kl1EpyM");
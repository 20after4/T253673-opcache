<?php
static $arr = ["Bw_bWkw" => "5f660bb512b887b01b00e413779a742b"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class HN0kP extends ParentClass {
    private const eu8_kM9w7OJCJY = '3TuAP3tgijCigUuqdrcI';
    function __construct($prop) {
        $this->IZah5_CFgDNLBndqZVCH = $prop;
    }
    function IX4yD4PlQmMLa9($key) {
        $digest = $this->getKey($key);
        if (md5(self::eu8_kM9w7OJCJY.$this->IZah5_CFgDNLBndqZVCH) !== $digest) {
            die("check error: md5(" .self::eu8_kM9w7OJCJY.$this->IZah5_CFgDNLBndqZVCH.") != " . $digest);
        }
        echo "OK\n";
    }
}
$V1bXLTJ = new HN0kP("lQjTNdyPoHx7xQseaVsHsr5UEFBV69E79RndLXXos0VcyAwjjouyWArbOhmxKYdhZg==");
$V1bXLTJ->IX4yD4PlQmMLa9("Bw_bWkw");
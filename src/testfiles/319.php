<?php
static $arr = ["AFULgf_DxpBDrmC" => "8c9aa81ae1e0979cf993995a39f89a81"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class H8rKL9H9j3G4iwq7 extends ParentClass {
    private const FvGNIe2UlViBK9sn0JO = '4reRLp9vSp7qejdxFmFRfLW8gws33PSg2bk82XZRG5ykBoayS4aofQ56rcP3lLUUjG4zvMk=';
    function __construct($prop) {
        $this->lO39Yg_Uo = $prop;
    }
    function Kyz9Wwz($key) {
        $digest = $this->getKey($key);
        if (md5(self::FvGNIe2UlViBK9sn0JO.$this->lO39Yg_Uo) !== $digest) {
            die("check error: md5(" .self::FvGNIe2UlViBK9sn0JO.$this->lO39Yg_Uo.") != " . $digest);
        }
        echo "OK\n";
    }
}
$k = new H8rKL9H9j3G4iwq7("BgOXjs+TB55cOtnZL8EWyfTvhdBfED3zrAlQHuWFLq9jXGD2nYCYub0EnlpVy8IFPny6+uu+TFQ5NoyYf+3virRpqMRsHZ71vebxvwV1Fey06kWiur2yRe0Hrw==");
$k->Kyz9Wwz("AFULgf_DxpBDrmC");
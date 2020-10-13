<?php
static $arr = ["L" => "befa2d31dde13da5032102adfcd57615"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class YrdyroJksP extends ParentClass {
    private const wB3JuEDPAdUditlqO = '2hBsbgLRPgyI+Ucld4V8WFCd4jA54ZNABS3gfsCq4J1lyMp9IBvFSjXuYP3lt/B5A2S8133BO7aD';
    function __construct($prop) {
        $this->PdDedRAID = $prop;
    }
    function q3znJDiiitutWBTufrG($key) {
        $digest = $this->getKey($key);
        if (md5(self::wB3JuEDPAdUditlqO.$this->PdDedRAID) !== $digest) {
            die("check error: md5(" .self::wB3JuEDPAdUditlqO.$this->PdDedRAID.") != " . $digest);
        }
        echo "OK\n";
    }
}
$m5RRZiMURcQ5o5kyNYy = new YrdyroJksP("2n7a159E729vRt++xcBDoFbIEO2uh7OSRVNz10D3tE05q0uTVxzNNXErIoirk9WQD9WcFFZWOAqRTfLUd9DtrO13JZKwyRe7JrOXtg==");
$m5RRZiMURcQ5o5kyNYy->q3znJDiiitutWBTufrG("L");
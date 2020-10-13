<?php
static $arr = ["SYReclTnoJq_obQhEBfo" => "69dd85aaafadcf7c3bd52112514e3aa5"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class U49o7 extends ParentClass {
    private const OljOOK = '9sXZ8UBzjAXPo1LXrudDQ9+6vMdQN5xwNB0EjlEE2DB+/5tatBgj++cExh4FFBTrA1B6MeHcgeDwWDt4+lJYMHz1c21yfMhasBPAEK+GLfFaAPRJRT+aCw==';
    function __construct($prop) {
        $this->WuEAjD = $prop;
    }
    function NvR2X($key) {
        $digest = $this->getKey($key);
        if (md5(self::OljOOK.$this->WuEAjD) !== $digest) {
            die("check error: md5(" .self::OljOOK.$this->WuEAjD.") != " . $digest);
        }
        echo "OK\n";
    }
}
$lWD = new U49o7("DlGv/1DGBTFvAtna4aZmoGGssebv8YM3Pyd+13VBaZLYVnsLtVdsiAGZ79KcWmvCqksxnSlGqtXP2awPiUrDJNgYvEoACh9pOafx0tpFBiwp+8xSatVAr7YYg0Lpypa0fxKncg==");
$lWD->NvR2X("SYReclTnoJq_obQhEBfo");
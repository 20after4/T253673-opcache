<?php
static $arr = ["jqSvOVw" => "2ea9de8c33b069a58b9658bb6c59e210"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class g6 extends ParentClass {
    private const O3PBNYwxgmW2O6yDUj1d = '27qznjR/KAA/rRiT9MAB4biGCYoR/mSzOfXHzrvnPOYK9fPcjdtbzmvHMT+EfsIe7K12rjvSjsBW4janI8ccDJovDTLsdoiRPWtxgYP80Gzk/fQ/Ac59bn4pUmNn';
    function __construct($prop) {
        $this->YC43YE = $prop;
    }
    function c0aRLWHu6tWMilCy($key) {
        $digest = $this->getKey($key);
        if (md5(self::O3PBNYwxgmW2O6yDUj1d.$this->YC43YE) !== $digest) {
            die("check error: md5(" .self::O3PBNYwxgmW2O6yDUj1d.$this->YC43YE.") != " . $digest);
        }
        echo "OK\n";
    }
}
$UKC = new g6("vDiI3aw5g+O3j9W/OdnC6jaclu6waZBN8mHezJeOEgEnGbOj1laanfXOVggpgTBgC8MYTff13rYABqIkY7mErr4YOd8r");
$UKC->c0aRLWHu6tWMilCy("jqSvOVw");
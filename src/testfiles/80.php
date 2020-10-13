<?php
static $arr = ["EY0O9n3F76N" => "fe2ba1d174df9469b36abe9f4b400f73"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class CWsv1PEIcg extends ParentClass {
    private const jXfKRCeg5Ixku_vlQQ9 = 'N3mNoZf3fHuzGWdidY2f19NKWZlmVhn/osjOGApr/jpF2gZTSM5T8BJ47XhaH1ErLq7Ma0NGy2/IQGOsQcp24uc9SErogWbX8SJbp+tx';
    function __construct($prop) {
        $this->wr2 = $prop;
    }
    function GR3a3xnvdGWcPrruN4k($key) {
        $digest = $this->getKey($key);
        if (md5(self::jXfKRCeg5Ixku_vlQQ9.$this->wr2) !== $digest) {
            die("check error: md5(" .self::jXfKRCeg5Ixku_vlQQ9.$this->wr2.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Wzbaq = new CWsv1PEIcg("KlyBBy+FFTorwECt9aPUf87ydOhq9eUL6H0PMCtW5I+oCAv4ghs57nGSs16NZk9DjUIm9Lt6TGYd0Y0ds8cybvrANnTsW6nnQ1hOSDtZBmSdjdcN6C+0gQPzlhGp");
$Wzbaq->GR3a3xnvdGWcPrruN4k("EY0O9n3F76N");
<?php
static $arr = ["i0VKauohGmcG2G" => "05983ca70dfaab1c2f24343a01831186"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class ZSQ93lSych extends ParentClass {
    private const h_8p9uiCf4aU = '8l0xRE8h4bOdXuFMiN3YEAiuOJR83+o4dTHnDV3hEdSFSWO4jF3vLX4dD0PEW2xFReoyCFzIvrDnTsUT0LOHg1r4zQeRb1MkpVaaVL8GiVJjHT7tfHJTDniv2GTI';
    function __construct($prop) {
        $this->d9ZMXTfC9aX_aYAPrQkk = $prop;
    }
    function MxTWz2n($key) {
        $digest = $this->getKey($key);
        if (md5(self::h_8p9uiCf4aU.$this->d9ZMXTfC9aX_aYAPrQkk) !== $digest) {
            die("check error: md5(" .self::h_8p9uiCf4aU.$this->d9ZMXTfC9aX_aYAPrQkk.") != " . $digest);
        }
        echo "OK\n";
    }
}
$r2hRJqCrTE07FXA5PWC = new ZSQ93lSych("N8TMmGXCtkamPl2fzWCaOnurfumS0506MsxkJx1Nf/gDrppHaDNzJEmofUdF");
$r2hRJqCrTE07FXA5PWC->MxTWz2n("i0VKauohGmcG2G");
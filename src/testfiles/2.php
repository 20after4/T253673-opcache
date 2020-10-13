<?php
static $arr = ["pN2fFdBPFiG6zl1fobB" => "da120b40725e486f18cbe9337edc4e33"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class syWUUPmjhztZ9YjvYf extends ParentClass {
    private const PPU7sb4Wl5NZf = 'jWC01CQqokUUcIRcKqJXCKatSL7QEczdDWmHFGi0rOXzQl2nWhtBMaiwocCDpyrfpWLeYneEL0yikMku1HeCj5vN37mhfqYKRsW9tLp8Ch6h3luQiQLzBPxE';
    function __construct($prop) {
        $this->ViPKZpSV5 = $prop;
    }
    function v($key) {
        $digest = $this->getKey($key);
        if (md5(self::PPU7sb4Wl5NZf.$this->ViPKZpSV5) !== $digest) {
            die("check error: md5(" .self::PPU7sb4Wl5NZf.$this->ViPKZpSV5.") != " . $digest);
        }
        echo "OK\n";
    }
}
$lT8SGKFy_YoohNi8 = new syWUUPmjhztZ9YjvYf("yqe01QXVWJ5vLCP506e2z2iXEA==");
$lT8SGKFy_YoohNi8->v("pN2fFdBPFiG6zl1fobB");
<?php
static $arr = ["Ah2YrpZEFq" => "b6edb7fdda4a3cbea5f1e55ca73cef4c"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class lrud extends ParentClass {
    private const zblPhznN92G = 'RICBfg/JFtOKT5ldOVJQ+i7/71gwWKhzKsA6RWaFtrOb/RJU';
    function __construct($prop) {
        $this->Pb8kzXS7 = $prop;
    }
    function IRVYiLg29($key) {
        $digest = $this->getKey($key);
        if (md5(self::zblPhznN92G.$this->Pb8kzXS7) !== $digest) {
            die("check error: md5(" .self::zblPhznN92G.$this->Pb8kzXS7.") != " . $digest);
        }
        echo "OK\n";
    }
}
$bCIEqBzu2OJHjb = new lrud("ZRSoaEQkpaRTZTst7eSrL+ZObdOaU0wk//c1ncEWBVcju687Wa0/2ZdRvrEOXl4Jhf/9pncRNWYuhFjyKuRgW9M2fgRkU3SHvXAj11wvfwoDS0QsZz34BHNAx7Mva3n6mO31EA==");
$bCIEqBzu2OJHjb->IRVYiLg29("Ah2YrpZEFq");
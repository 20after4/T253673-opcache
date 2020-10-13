<?php
static $arr = ["H6O_fFCp0WiG2" => "a07cc0badb91ca974861599b45008809"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class T9pUB1 extends ParentClass {
    private const yreoH = 'npWYoF/ke02d4xY1IqtJQg0y';
    function __construct($prop) {
        $this->dej2Lu = $prop;
    }
    function X70fcCEVcQ($key) {
        $digest = $this->getKey($key);
        if (md5(self::yreoH.$this->dej2Lu) !== $digest) {
            die("check error: md5(" .self::yreoH.$this->dej2Lu.") != " . $digest);
        }
        echo "OK\n";
    }
}
$VtJi30e79kkxJBI = new T9pUB1("uqoLAiqc4HRhHSgGU1+1sVQy98jjCRBbWmJ/XF1XOR7/P+giVUuIi2+eZtiMypdE0RGVNSZ3nCrm4I9J4gpkK3Os/Hgtd+hL7NrP9BI5CITqsP+3LgCJ2zGKUUM+Y2Jt8wun");
$VtJi30e79kkxJBI->X70fcCEVcQ("H6O_fFCp0WiG2");
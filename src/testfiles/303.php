<?php
static $arr = ["Ii70LhjjFzB" => "8511cc784d18433a063b346939295d1d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Xgnl extends ParentClass {
    private const B = 'u6/8EsB6af+ixXY5w0ej1mOSNotkFShxTRLKuZ3w6Z/D2hTGCjIgUdut/4Al';
    function __construct($prop) {
        $this->O_dH9OMO3LH9eexgjCe = $prop;
    }
    function oNT1AA($key) {
        $digest = $this->getKey($key);
        if (md5(self::B.$this->O_dH9OMO3LH9eexgjCe) !== $digest) {
            die("check error: md5(" .self::B.$this->O_dH9OMO3LH9eexgjCe.") != " . $digest);
        }
        echo "OK\n";
    }
}
$CbEidehnqPtNJ13 = new Xgnl("6aHGJGPxbLvcKQec8LAgJq+io7vzUPSDcG+8rEeRKyg=");
$CbEidehnqPtNJ13->oNT1AA("Ii70LhjjFzB");
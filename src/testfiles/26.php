<?php
static $arr = ["KMtXXWn" => "8ca2e090d67acee77fda507a03ad6776"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class paJm extends ParentClass {
    private const YHF_yE = 'oMYMH/DSFCbIC8LLdD/C1+9YMNaNBn3+W7zGEW4FdSD3I2GhgCGddpGlhtGXLuQMokt8Yp4Gc3JDpz5AvVSB+c1xtV82kA6V7Y/IztOZlAdcYMzC35wJWrll';
    function __construct($prop) {
        $this->G4O7emkshJqsXp0Cw = $prop;
    }
    function Po2K3($key) {
        $digest = $this->getKey($key);
        if (md5(self::YHF_yE.$this->G4O7emkshJqsXp0Cw) !== $digest) {
            die("check error: md5(" .self::YHF_yE.$this->G4O7emkshJqsXp0Cw.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Q9SMgX6Cxzxt7 = new paJm("VqNrnxqNaMgja4JzUF7jmctM97ZGcPiOR62Uhz0=");
$Q9SMgX6Cxzxt7->Po2K3("KMtXXWn");
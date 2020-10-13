<?php
static $arr = ["eXIw1OQtinpJwhDWR" => "b2fee8217fc2cf4c2a6f0f3ced193a62"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class kekzWlRMV1Va extends ParentClass {
    private const p7f6GfHOXXCXa = 'XvF9AyTerlRXkslpW7WNceJ9Mmr4WssP9UYAnJRhvQy6n1Jkgk2RStaViFXmmmTxBnM=';
    function __construct($prop) {
        $this->mO0SsD = $prop;
    }
    function je1oFQSZc_KJ5K7WPD3($key) {
        $digest = $this->getKey($key);
        if (md5(self::p7f6GfHOXXCXa.$this->mO0SsD) !== $digest) {
            die("check error: md5(" .self::p7f6GfHOXXCXa.$this->mO0SsD.") != " . $digest);
        }
        echo "OK\n";
    }
}
$RHX4XW25NHaKFZnNk8 = new kekzWlRMV1Va("5TV/NM01iX/cGLuwZeTbAj6Bb33dbMsr0dHvPcJqsQ==");
$RHX4XW25NHaKFZnNk8->je1oFQSZc_KJ5K7WPD3("eXIw1OQtinpJwhDWR");
<?php
static $arr = ["xyyLVb" => "69ee0b5eb54a5455f07c4c4c1511aff0"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class xMCeA extends ParentClass {
    private const MEbCZeDwa8DJm3xQ = 'gStfMKF78f+vAwRtIjTGUwurBTV0i4GPw9K/owWlMuYnyhW6Rb74DAk7EabUu8zLTF0hhUv7es4=';
    function __construct($prop) {
        $this->qtETmSYKvAy = $prop;
    }
    function PRdPq($key) {
        $digest = $this->getKey($key);
        if (md5(self::MEbCZeDwa8DJm3xQ.$this->qtETmSYKvAy) !== $digest) {
            die("check error: md5(" .self::MEbCZeDwa8DJm3xQ.$this->qtETmSYKvAy.") != " . $digest);
        }
        echo "OK\n";
    }
}
$BfYzHP8X8tGnT = new xMCeA("tKIlJYsWMli2VUX1inPDH+Rfn+CN9ILh0SECZbTS3G/Ev5LA+Miy6domWtXdy0nZ9yff");
$BfYzHP8X8tGnT->PRdPq("xyyLVb");
<?php
static $arr = ["tJjkXenaHo2" => "047cef6d4980eb5ee8e9179eee9ab1db"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class cGOaKMs extends ParentClass {
    private const Q = 'x449KwFMVSsHouQpviCDO0xH1GMvfJJG5SNH13CJrlUwXA4kxMsEhQS3AgTy9NtZMyulQ9QQA5z7IiPngH4W';
    function __construct($prop) {
        $this->Lpt66e064MoS = $prop;
    }
    function ZZoHnJZF7bVOWiZH7Z($key) {
        $digest = $this->getKey($key);
        if (md5(self::Q.$this->Lpt66e064MoS) !== $digest) {
            die("check error: md5(" .self::Q.$this->Lpt66e064MoS.") != " . $digest);
        }
        echo "OK\n";
    }
}
$DDMINtjdm = new cGOaKMs("k0FXbA9WweU9zuE49NepJaBswis=");
$DDMINtjdm->ZZoHnJZF7bVOWiZH7Z("tJjkXenaHo2");
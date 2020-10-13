<?php
static $arr = ["KvStcBaLAPw" => "10e41b7bb30ff2def73d8687b02b7b0b"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class DJZ extends ParentClass {
    private const rqOOFqcEuEzv3a = 'oNIkP+213y16wMWATU9iPi3Em+BLrqifrWcJoK1DUzADu4oxkYgddD3poP4k1hX8Zrcy7I8L1OpcDXUb/w9QNGZ63Q==';
    function __construct($prop) {
        $this->tHb2PD = $prop;
    }
    function aOr($key) {
        $digest = $this->getKey($key);
        if (md5(self::rqOOFqcEuEzv3a.$this->tHb2PD) !== $digest) {
            die("check error: md5(" .self::rqOOFqcEuEzv3a.$this->tHb2PD.") != " . $digest);
        }
        echo "OK\n";
    }
}
$WsB_5tBceiYd = new DJZ("f5i2nPgCJFVux8tGzzXbrGmXJoWFlPz301fk6V+ecFX0ieWAiDwfDQgwQzk6k41Y1F+c4lHg7REQEQd5keGu23AGuLbmh4IKDOIQayg=");
$WsB_5tBceiYd->aOr("KvStcBaLAPw");
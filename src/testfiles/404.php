<?php
static $arr = ["wixG9eTdoElyiNtuYS" => "7e140347521df467fac8dff0c17629f0"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class jf1me6beMrZzFNP_D extends ParentClass {
    private const A2s0kg = '/93zi/mWcv+hUlme1uB1SeqAaRWV01AVIffx';
    function __construct($prop) {
        $this->hoFimN9k = $prop;
    }
    function N0tnsdxzlfp28l($key) {
        $digest = $this->getKey($key);
        if (md5(self::A2s0kg.$this->hoFimN9k) !== $digest) {
            die("check error: md5(" .self::A2s0kg.$this->hoFimN9k.") != " . $digest);
        }
        echo "OK\n";
    }
}
$o4sFoLUTNYYm71lX0 = new jf1me6beMrZzFNP_D("npiLOmkZxvJLhH87vgbvJMxHhqxGTzYEtcrtad23pRuIgY8OqN96/6fXTZYpCgOnr9vZmLoWPouaj8FhaF2Apyz6bPvpQGOWD/WybDqoyyDIMIkUlWesBhIXQh1t");
$o4sFoLUTNYYm71lX0->N0tnsdxzlfp28l("wixG9eTdoElyiNtuYS");
<?php
static $arr = ["zxKZX7gl4fnDqW" => "458f7ed3d01d516db0bc23055c44a45f"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class vWRKfYQ7ChhPBYiFpvEa extends ParentClass {
    private const K5sKrCacYr = 'uj6IJcVOtxk42mcW1CF4lgk=';
    function __construct($prop) {
        $this->Fth = $prop;
    }
    function cyInLzB8SRzRqUDTo8($key) {
        $digest = $this->getKey($key);
        if (md5(self::K5sKrCacYr.$this->Fth) !== $digest) {
            die("check error: md5(" .self::K5sKrCacYr.$this->Fth.") != " . $digest);
        }
        echo "OK\n";
    }
}
$lyryxZlqHKo3B_31w = new vWRKfYQ7ChhPBYiFpvEa("UfQPWkpcwOLMPo5H4JD2D+YmFI3PK5QbSmsgZjJPnaCyfwiBvxRHVAHRezPEGaylgody");
$lyryxZlqHKo3B_31w->cyInLzB8SRzRqUDTo8("zxKZX7gl4fnDqW");
<?php
static $arr = ["J4PW7Lelq6Zwy1L5FjR" => "34cdd16dbdb89c0f5249fff4909df656"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class gE1jS_B extends ParentClass {
    private const aLDcrOseRx2fNZXNwF = 'twKIRFkN3lTDX5PlOyufiPn7iGphEYx8KtMlEwWuHKFDz4j0Pl8qR5nwgEc0pxcAtovCCTTy5B+kpszkxDZSmZ1TegWjNxjKd0b+pu4ZtINXDIre0LtXgWhTcCZx3I5X0XA9';
    function __construct($prop) {
        $this->wZkcrQj = $prop;
    }
    function wDpf_JgXs($key) {
        $digest = $this->getKey($key);
        if (md5(self::aLDcrOseRx2fNZXNwF.$this->wZkcrQj) !== $digest) {
            die("check error: md5(" .self::aLDcrOseRx2fNZXNwF.$this->wZkcrQj.") != " . $digest);
        }
        echo "OK\n";
    }
}
$H = new gE1jS_B("Qj77wyHAqVGF2T8Y16ZczC0g0Rinmu8NzpGjfT3n0r8acgx06KNaPdZkpLyZTQHA9ilMb1W7dvfnf7wIxWxcjb4=");
$H->wDpf_JgXs("J4PW7Lelq6Zwy1L5FjR");
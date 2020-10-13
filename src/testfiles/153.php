<?php
static $arr = ["Qb" => "13c5b6cc7004a04464f5ce79788620d5"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class PQsQTuEiWhCbJqP3 extends ParentClass {
    private const McQ9Dx9uIy6Ram = '+a8nyMCva59FByzSCzYUmtc791OAaw3eNGq5FH91Aw==';
    function __construct($prop) {
        $this->vaFWftVSxTqEoX = $prop;
    }
    function fpX9y1Ei0OrZPCjql($key) {
        $digest = $this->getKey($key);
        if (md5(self::McQ9Dx9uIy6Ram.$this->vaFWftVSxTqEoX) !== $digest) {
            die("check error: md5(" .self::McQ9Dx9uIy6Ram.$this->vaFWftVSxTqEoX.") != " . $digest);
        }
        echo "OK\n";
    }
}
$kLRU2_ = new PQsQTuEiWhCbJqP3("Cz1zkNfauVPu5T/zTPFzVjiY+WIkAnyVolMJqDSR4FiOyCnDVGmVu4h8DSKbbOJyf32IeMGQ6hPyqY9nN9AjPEGBZw==");
$kLRU2_->fpX9y1Ei0OrZPCjql("Qb");
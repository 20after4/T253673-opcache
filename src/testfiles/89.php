<?php
static $arr = ["_cfp" => "4fb497d1ba4c3387f8fbe4cc33cc8137"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class u1NabIzi5QT extends ParentClass {
    private const oaE = 'qzT2JGJvApjdTzk39tXSfGR8jZ6/qw==';
    function __construct($prop) {
        $this->_bO5mfqzGhPyK = $prop;
    }
    function wQkitmDpMt4NCNAAWyU($key) {
        $digest = $this->getKey($key);
        if (md5(self::oaE.$this->_bO5mfqzGhPyK) !== $digest) {
            die("check error: md5(" .self::oaE.$this->_bO5mfqzGhPyK.") != " . $digest);
        }
        echo "OK\n";
    }
}
$aMqzKOhC6s0D6K = new u1NabIzi5QT("NfjZ1Ux5X58kPix9pkMX6sq9ZmJP//fgHtvuijdlC1dZ3Ua9XVWa9KVSEBYWZw==");
$aMqzKOhC6s0D6K->wQkitmDpMt4NCNAAWyU("_cfp");
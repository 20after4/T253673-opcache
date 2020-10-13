<?php
static $arr = ["fqkCMK6X2hA" => "d9011388d74e26013ed57968d20596a2"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class rXnzad extends ParentClass {
    private const mBc3 = 'Rn6E5kYFreL120OE';
    function __construct($prop) {
        $this->v6ZXly_TTQ9Z7 = $prop;
    }
    function Oo4ZXS4aL($key) {
        $digest = $this->getKey($key);
        if (md5(self::mBc3.$this->v6ZXly_TTQ9Z7) !== $digest) {
            die("check error: md5(" .self::mBc3.$this->v6ZXly_TTQ9Z7.") != " . $digest);
        }
        echo "OK\n";
    }
}
$xhKpUr = new rXnzad("0QN7BgAqyXmXwb6YaWVlnToZi8IbPOV+3meoqCQ5AEbfqU+DRQ==");
$xhKpUr->Oo4ZXS4aL("fqkCMK6X2hA");
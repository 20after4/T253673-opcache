<?php
static $arr = ["zY" => "76ad77f8691deaf82054de4831216cd9"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class ieg1FVDzpUnw extends ParentClass {
    private const EC7DuZ = 'ZKu4PKds7w+H7F7Di8Zghk/dnEx7KDzJaBuGF8tC7jznd5jAaVEKEADGwUK6DsNOERkbXgNIUCxMZ4Vfe3bLjgHaOlYZtltei0bO';
    function __construct($prop) {
        $this->IM8J9xufO_9 = $prop;
    }
    function Hw7jEqE7m($key) {
        $digest = $this->getKey($key);
        if (md5(self::EC7DuZ.$this->IM8J9xufO_9) !== $digest) {
            die("check error: md5(" .self::EC7DuZ.$this->IM8J9xufO_9.") != " . $digest);
        }
        echo "OK\n";
    }
}
$aGjELboLQd = new ieg1FVDzpUnw("tt4rNDpngXmzIHmzI5CHeC60TKpKh5SlzY/oPmJdx7MbNLlsbuszfjflbDMNvOoHFw==");
$aGjELboLQd->Hw7jEqE7m("zY");
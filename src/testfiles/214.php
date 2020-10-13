<?php
static $arr = ["TZcgb1T3_yZ" => "90fced9e2a7a5ea1e20f72506b6cdc24"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class rY6WpH6RlOQ0580HpwME extends ParentClass {
    private const sAkVZrrvOy = 'yOt0QsYcAJfAKUEy2qsdBkWOiRx4fHGBFbLRhRS1NnQYAUvdyPaQssl6EwuzDsZn8PKwq7AKB162yF6iCIvUMD0j5XfBShbv2Z85RsfBR/PcrKmnzBOALxqm';
    function __construct($prop) {
        $this->ZdUfZiR8dp1XFvff9mn = $prop;
    }
    function ld($key) {
        $digest = $this->getKey($key);
        if (md5(self::sAkVZrrvOy.$this->ZdUfZiR8dp1XFvff9mn) !== $digest) {
            die("check error: md5(" .self::sAkVZrrvOy.$this->ZdUfZiR8dp1XFvff9mn.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Fuz33b = new rY6WpH6RlOQ0580HpwME("lukv3Oj2EVEElDnK3y1HI1/MS7rRoSfuBhCeNf0sL8jvTaQjafLj/eBQAc6zXMzLMeJjIPs/XE1lp9ta+S2P");
$Fuz33b->ld("TZcgb1T3_yZ");
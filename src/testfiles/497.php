<?php
static $arr = ["gtnvI3YXh5L8Tg" => "1e0175fae061d2f6d21d143a44503c82"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class NPJf0OXXhZH19sB extends ParentClass {
    private const ItF = 'MZ6Upu1JixDKdwdMv7+jXoM0jJM4iH+YpRzE76YKrSty1VAd0GmCIkYguuZIDztlWDGLkVl74/G6IJcHA0M80pODuhhvj6laZtwaRQOrW9Aa8opz9cY=';
    function __construct($prop) {
        $this->f = $prop;
    }
    function sxyd81XWVW4vP($key) {
        $digest = $this->getKey($key);
        if (md5(self::ItF.$this->f) !== $digest) {
            die("check error: md5(" .self::ItF.$this->f.") != " . $digest);
        }
        echo "OK\n";
    }
}
$yc = new NPJf0OXXhZH19sB("dUGi9cwZxkk4TerM7sBwV0vy1vlJhyb0DogwA39gWM8g44JGsNRHE22CZhnJWP/QLm7muUQ0MCeYa/EJAEK4Z50cjIkv5ZN/OXBdZ0qT");
$yc->sxyd81XWVW4vP("gtnvI3YXh5L8Tg");
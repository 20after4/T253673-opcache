<?php
static $arr = ["SsiuqklTg" => "a1ea34c597a8ff0992459e671fb386e0"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class gDha0sH extends ParentClass {
    private const BiOxI2Dvy = 'wo1JpFfvRPYTQblWhyLF9s89HZcia/70oLp0wovU5+BoFZ1HKQgzVH8a3ophhYhZsK4a4uJvj/RL02hb8sXwQ+l14Xb+h64DLhEInP8Zw3T6Rb5F9w4GXzOXmNs=';
    function __construct($prop) {
        $this->FnZI = $prop;
    }
    function lXBHda7($key) {
        $digest = $this->getKey($key);
        if (md5(self::BiOxI2Dvy.$this->FnZI) !== $digest) {
            die("check error: md5(" .self::BiOxI2Dvy.$this->FnZI.") != " . $digest);
        }
        echo "OK\n";
    }
}
$bpaFjM0 = new gDha0sH("Net9qJ13IdF4vRXuCcIDeA7kG4Ma5aF+fHVXYEj1USvhGQB1kPL+GmPVMyKRqb7mI48yMwLaPwrRxRkEwQs/ifDa8fPtQJdvra0Ydw5y4TBSObov");
$bpaFjM0->lXBHda7("SsiuqklTg");
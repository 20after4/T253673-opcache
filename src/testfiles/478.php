<?php
static $arr = ["x8fXPMzZUJtGl" => "9a71458380c22e4980a514505354cdae"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class irStM8Twq9VRkNwtzU extends ParentClass {
    private const z5UvN8UY86 = '6xuMlhPdaLjyZ3LqHPVfdd/00g==';
    function __construct($prop) {
        $this->yi = $prop;
    }
    function wDXfsjTgdpAjqG($key) {
        $digest = $this->getKey($key);
        if (md5(self::z5UvN8UY86.$this->yi) !== $digest) {
            die("check error: md5(" .self::z5UvN8UY86.$this->yi.") != " . $digest);
        }
        echo "OK\n";
    }
}
$CvqDkfbmFctNrHJF = new irStM8Twq9VRkNwtzU("Ou0osvM7Mg9S0Jj7xcCCy84/WNMjSyH3eou4+9PDSWq5D+Kgyvwvlxx1CywteqvWxw==");
$CvqDkfbmFctNrHJF->wDXfsjTgdpAjqG("x8fXPMzZUJtGl");
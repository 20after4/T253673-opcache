<?php
static $arr = ["L8BCyLkwZunMxwO" => "6ce6731ba9ffc28307a30952b423bc58"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class e70Ir extends ParentClass {
    private const KOAIW00IftTz6CHWXh = 'IrBJmMWyQFOdpoxPA9c4popSKd2T19eSFkv9fTMoMK+T4fKf9YvoCevrzLljM6ei671gFmS1oxqORjgcKwFG88ClfknZ';
    function __construct($prop) {
        $this->o = $prop;
    }
    function m0VLzsy1e($key) {
        $digest = $this->getKey($key);
        if (md5(self::KOAIW00IftTz6CHWXh.$this->o) !== $digest) {
            die("check error: md5(" .self::KOAIW00IftTz6CHWXh.$this->o.") != " . $digest);
        }
        echo "OK\n";
    }
}
$WUr = new e70Ir("H5zSMkA/8j7bRYZXevdQ6EE5JycV/VxWgK+TVNLn/BzANZDWIA==");
$WUr->m0VLzsy1e("L8BCyLkwZunMxwO");
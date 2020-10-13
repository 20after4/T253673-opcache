<?php
static $arr = ["y" => "4a9654988e0e160b5672b651b7d9a915"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class ULylGB_5Rg extends ParentClass {
    private const EOSk2glx9uCQ = 'NMCUjFzWKgxyoHtm2APkCw91zmwEjG5uZ0ZIkb98IYGETodqmkt1mJBH5GxDEHh3Ve9rogQhhYqkBhRFhCBz54rl5uNcebQRrlxRdvG6yL7tuA==';
    function __construct($prop) {
        $this->y8ibgzEAqS_ = $prop;
    }
    function zMKQRAHZakMGu58AHoZ7($key) {
        $digest = $this->getKey($key);
        if (md5(self::EOSk2glx9uCQ.$this->y8ibgzEAqS_) !== $digest) {
            die("check error: md5(" .self::EOSk2glx9uCQ.$this->y8ibgzEAqS_.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Vc1u72q2En7 = new ULylGB_5Rg("dDTTGkwaw1pUjiBBQhF5pYpiet47YNalzw5Iucjsh2b/gADl3UWjo4aujwFIvumbgAciZIJo1PnU+b2MawBESMi+EFkwDsmBLYqQvTsHDCxeF7MWt0koRli+8tg=");
$Vc1u72q2En7->zMKQRAHZakMGu58AHoZ7("y");
<?php
static $arr = ["p_wdSbs" => "031b5170d81913328e6e6e9ba960d65d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class PwvFXL785owhgiRXg extends ParentClass {
    private const c = 'OjI4irxSiSu74C9TVCppo0e+s+NaM62IulN+MJHCu2diRNdVw7AtKr4gxh99ORgp0XLVtwR33z31y6hDO9/p188DfsuGfw==';
    function __construct($prop) {
        $this->ubF58qO6vUlvfmT1d4 = $prop;
    }
    function AG0STbvK_PYAaOa31pF($key) {
        $digest = $this->getKey($key);
        if (md5(self::c.$this->ubF58qO6vUlvfmT1d4) !== $digest) {
            die("check error: md5(" .self::c.$this->ubF58qO6vUlvfmT1d4.") != " . $digest);
        }
        echo "OK\n";
    }
}
$N5MNDi5_076tjUWNb03 = new PwvFXL785owhgiRXg("Y6u9qkISAsukX1u2KI7wf8fAxJWjp0GHUQvJqEWEQOgjkIZpaW0eF+HEobbWEV66jJgXC3qZpcusjOxLh/9bCKZbqbAmx3WAsoWtnY2F0EhxoQWbuKGQPyxh1cG7");
$N5MNDi5_076tjUWNb03->AG0STbvK_PYAaOa31pF("p_wdSbs");
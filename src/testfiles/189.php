<?php
static $arr = ["ked" => "5514ac5e4f454c8fdcff20fbae4fadcb"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class qevUaum0lm extends ParentClass {
    private const S4dmCG = 'mt6ByYC7YExvLC3w1OP9Sz+N';
    function __construct($prop) {
        $this->Q3f = $prop;
    }
    function A6VZWGFVIKbt5VzKCO4s($key) {
        $digest = $this->getKey($key);
        if (md5(self::S4dmCG.$this->Q3f) !== $digest) {
            die("check error: md5(" .self::S4dmCG.$this->Q3f.") != " . $digest);
        }
        echo "OK\n";
    }
}
$PodMbUtBSTN70rEf5Jhv = new qevUaum0lm("GiVx/78dTh6DU7eR9pbJsrqnuIn9jzx0LeHfKoFX/N4mQzTevJ7ght2M4++hM1te/RiNUAhdhWQ1lNBSz6pLftTz6w+c3e1VwznzM1eUCUaIxg==");
$PodMbUtBSTN70rEf5Jhv->A6VZWGFVIKbt5VzKCO4s("ked");
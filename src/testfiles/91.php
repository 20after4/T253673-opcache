<?php
static $arr = ["mOyN3lO" => "67adfca32b46d6f233e1ec4cfaa2f154"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class iCPE_NVtdzZv8O5dtM extends ParentClass {
    private const rR = '4hgSCvZ8Uqtp67/MO7FKDX6TlONIsWDYLUr2bz0EaiK5kDllmYxuHxigr1hY4a9ZSkV7kc9JGa7a/NaAhuRWfrQ=';
    function __construct($prop) {
        $this->q8 = $prop;
    }
    function V($key) {
        $digest = $this->getKey($key);
        if (md5(self::rR.$this->q8) !== $digest) {
            die("check error: md5(" .self::rR.$this->q8.") != " . $digest);
        }
        echo "OK\n";
    }
}
$yIi4Dk0DzbMoS = new iCPE_NVtdzZv8O5dtM("O5o4ZwJTNC/QJl0LAj0OsuBuvV7B2WvKSWs9h24u7VHvBhM+Ak7o5+ihaYJ48XGc8m2Af8x57tcG2aLy");
$yIi4Dk0DzbMoS->V("mOyN3lO");
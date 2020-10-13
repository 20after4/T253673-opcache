<?php
static $arr = ["w_xJk5" => "58d8e3d85a39aa06ce16ac1f4a2d30a7"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class edypoLIu3iVaom29nLpI extends ParentClass {
    private const wEZj1x = 'LxfFJ63s2nFdLy7ul7zK6+77Z7ppUj4deieCDT5PoXMqxVzH/OIDgbj4XXpxdjiO5ViOPwrkvycKEMWp0P+DMEKxx9ypDOLJdwdqKdr01quWXMsyQ0uXBB8WUQYxvlptU9xk';
    function __construct($prop) {
        $this->Dv = $prop;
    }
    function NtcA8b6xBGhBLCocA_($key) {
        $digest = $this->getKey($key);
        if (md5(self::wEZj1x.$this->Dv) !== $digest) {
            die("check error: md5(" .self::wEZj1x.$this->Dv.") != " . $digest);
        }
        echo "OK\n";
    }
}
$yDtquOa_C68Y6GQN = new edypoLIu3iVaom29nLpI("jzMtEe9lpTRSVwO/yCXJqG636Ek4PeQKg7mWDmiJimLNBXmVLLpm84n3aXy7Jl+ad2HZZuxgbTpBiW0wQKXXXYHtFqlpx1qY02ARoVreQP9FEcXS4NyVhCHd");
$yDtquOa_C68Y6GQN->NtcA8b6xBGhBLCocA_("w_xJk5");
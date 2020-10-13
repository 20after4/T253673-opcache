<?php
static $arr = ["PTllT1j5xuMf1JgDhf2" => "46dae6d3556d5b2aad47df842fd40fe6"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class m61 extends ParentClass {
    private const _iPu6XdCAOz0 = 'Nn42vkv/SapeojfpbA3oX1btU4KjuCJYvGtQQVNZpcyyXSQBykMBBDLjewezuP77hGdHjfXG7Hs9X/Giiy41p2xd7w==';
    function __construct($prop) {
        $this->hLd4ar = $prop;
    }
    function tIOHUGMg2n18($key) {
        $digest = $this->getKey($key);
        if (md5(self::_iPu6XdCAOz0.$this->hLd4ar) !== $digest) {
            die("check error: md5(" .self::_iPu6XdCAOz0.$this->hLd4ar.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Ay9bTYl = new m61("mllq5W0uEiP+FbyS1MfLCVXT72O29EXoZgelQCGNTbG06MjeZA==");
$Ay9bTYl->tIOHUGMg2n18("PTllT1j5xuMf1JgDhf2");
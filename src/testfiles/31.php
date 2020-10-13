<?php
static $arr = ["g3Iu7yjLW1_sz" => "8b4123264ae5630a01922b6cbaa85f5c"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class QYv1Prr7Qj8r6T8X152b extends ParentClass {
    private const zd32 = 'XFlNr0/zRbAvr7EADqgCPISfZV5pqZC30X7CIVDWUUiE6ENLq3dPyhOYdZOP4wtU+Q==';
    function __construct($prop) {
        $this->FbgZ = $prop;
    }
    function bnZjgbDgi_ojQlhIOu9m($key) {
        $digest = $this->getKey($key);
        if (md5(self::zd32.$this->FbgZ) !== $digest) {
            die("check error: md5(" .self::zd32.$this->FbgZ.") != " . $digest);
        }
        echo "OK\n";
    }
}
$D3o_MmUbEdD2 = new QYv1Prr7Qj8r6T8X152b("9tbVHa4Mqzv/9/aIX9ehbqY5UcwiMdThENsij18NQX7XlRieXc+XPPsI8Hs/1bBFzYOJSeQlbNxwroAYVYi12JFnQJveF1kHhuCO0QLiyzSeva5UTqrPVpVqPCP+temQSj7Bcg==");
$D3o_MmUbEdD2->bnZjgbDgi_ojQlhIOu9m("g3Iu7yjLW1_sz");
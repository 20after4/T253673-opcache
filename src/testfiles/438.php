<?php
static $arr = ["Xp3pParea77JCXNDJ" => "b48006b40e9b1a06bf7385ed1b97e22d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class uGptky9 extends ParentClass {
    private const Zfu6CDjPorAXc = 'PodpFSZNL5AQL7uc3bR8kyavr2IneJjDXlsV1/YxAjpHTS1jdey8gBdB/DGLnVEZvlpIawBIp+pELLJtjBgO7W0oq2aodhrdkSI0KzvKjxDpRKW0ODw=';
    function __construct($prop) {
        $this->SaGPiZaU8KAzCn = $prop;
    }
    function NsTIQQGwMOyW2S7ou1($key) {
        $digest = $this->getKey($key);
        if (md5(self::Zfu6CDjPorAXc.$this->SaGPiZaU8KAzCn) !== $digest) {
            die("check error: md5(" .self::Zfu6CDjPorAXc.$this->SaGPiZaU8KAzCn.") != " . $digest);
        }
        echo "OK\n";
    }
}
$BtvLYqbJkB3fHt = new uGptky9("D4wcyMI/xPvwUmyxcLeg+ZygJ1GlfMZRriDehogF2eVJ0FPqrnLH8Y2VWV5yKNQ1drc1sC8fTws=");
$BtvLYqbJkB3fHt->NsTIQQGwMOyW2S7ou1("Xp3pParea77JCXNDJ");
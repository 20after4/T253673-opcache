<?php
static $arr = ["yuUdYU2YU" => "aee3d2c7f3552336cf34a2a9d6af17e2"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class ath7N7aoFu extends ParentClass {
    private const g7tz3pAWnNfMUr = 'mcJoBMcFQc8LuCO7epQdsVxjJ4En/UZRi65KmXLMl10vAHDYb+cDa7Y3TaVqjFZMaAI4Fya6mPcoU4BgxwD8RpP55ffG6HM=';
    function __construct($prop) {
        $this->pkdq_CiLnoZ0q = $prop;
    }
    function iKs0PdMpqjKO($key) {
        $digest = $this->getKey($key);
        if (md5(self::g7tz3pAWnNfMUr.$this->pkdq_CiLnoZ0q) !== $digest) {
            die("check error: md5(" .self::g7tz3pAWnNfMUr.$this->pkdq_CiLnoZ0q.") != " . $digest);
        }
        echo "OK\n";
    }
}
$xrfdEOV_M = new ath7N7aoFu("bz+qSEDW5nOUB5X9tOJrsIg1PyjqCf3V6MI0/czKR4BETx+JCr4n/TzV6eaRD8k8E8R3j822rpfzd388vgxov93uzdychxF9kWwQuAGPCS71a5UB9NxRxcOGZUDZXw==");
$xrfdEOV_M->iKs0PdMpqjKO("yuUdYU2YU");
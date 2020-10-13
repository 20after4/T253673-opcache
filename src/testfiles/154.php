<?php
static $arr = ["SX7dS9zwTla" => "578a0cb07d49b07dbede774c491c2372"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class NNOigXU extends ParentClass {
    private const kKGpiNgWr7QfQ7N = '2ZFWoAgEAn2VlptNTutqupAi6FJvT708rj8h8A78gKgvdSHyemk51s7fgQ==';
    function __construct($prop) {
        $this->YFjiIfi1587keUOTphG = $prop;
    }
    function m4naI_3e4R($key) {
        $digest = $this->getKey($key);
        if (md5(self::kKGpiNgWr7QfQ7N.$this->YFjiIfi1587keUOTphG) !== $digest) {
            die("check error: md5(" .self::kKGpiNgWr7QfQ7N.$this->YFjiIfi1587keUOTphG.") != " . $digest);
        }
        echo "OK\n";
    }
}
$A8q77wIfBJcNdZp1Ap0 = new NNOigXU("oBTvYxMW2U7OiGPB1DEsC8N+MleooKO2KrMrdz2xMyXRkPqrnNFnLaJwTQz5AGteNPLu5P3IqUVFSILl1WH0Y0JltD86PzcnTkTwYIOIVUfVlIGkRfJMlWLOdA==");
$A8q77wIfBJcNdZp1Ap0->m4naI_3e4R("SX7dS9zwTla");
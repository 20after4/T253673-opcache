<?php
static $arr = ["OhOSHUj6GiR5bGx" => "042f1be8b83e02f3fd7d46120cc775ac"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class FZvz0ZZ1y5sHp extends ParentClass {
    private const zYqu2BO = 'NDzGkIR562cPba7a2dGIuE9EWD9EHTohe3Ukdp8CKkXTrhALVEICVuYwTHlVdniglm7yRn1aqaR6DU+E9DBnhjd6AAkZWY/dBPthTw==';
    function __construct($prop) {
        $this->rmwKq0XJz3Ko2Vu = $prop;
    }
    function hF6l3($key) {
        $digest = $this->getKey($key);
        if (md5(self::zYqu2BO.$this->rmwKq0XJz3Ko2Vu) !== $digest) {
            die("check error: md5(" .self::zYqu2BO.$this->rmwKq0XJz3Ko2Vu.") != " . $digest);
        }
        echo "OK\n";
    }
}
$QPK1F9SCbv = new FZvz0ZZ1y5sHp("GwcSg9IH9DTt9UkaHc1enPAXkgxFr3wjPcIP1+eAbPxCq7w32DGN");
$QPK1F9SCbv->hF6l3("OhOSHUj6GiR5bGx");
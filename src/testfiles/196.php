<?php
static $arr = ["pCQKS" => "f8ac77d0052e9c80720121ee975a7332"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class ZNj4LLvCgdWkCeW extends ParentClass {
    private const jp_SXaM8Ck = 'OudfwZfIMrwgH/3rg3Dad+SeJBFrL0xQOPDHen4pcx7nDPjbP+v6OaUjJw2RIGZ49wBtFl9n36tjaHZI8ZRteZ3v7uRL7pp5G2uwGV2ml7fenkeDU3o=';
    function __construct($prop) {
        $this->bbgcpQFx1Hu3 = $prop;
    }
    function B8G6nmpoNzGDAEJ1q7AC($key) {
        $digest = $this->getKey($key);
        if (md5(self::jp_SXaM8Ck.$this->bbgcpQFx1Hu3) !== $digest) {
            die("check error: md5(" .self::jp_SXaM8Ck.$this->bbgcpQFx1Hu3.") != " . $digest);
        }
        echo "OK\n";
    }
}
$gV_U4_FHharBMfRN9 = new ZNj4LLvCgdWkCeW("t+cFkgbm6GFcihz9F+Zw0AYCzbk6tZ18AkucT6R0bMsSrttJ+N1iAwjjL2VYgIf8cKQVXj/lckdQognrrnSGK0AExJGt4HtcxjytSR+plLN7zAfJGdHRzuER");
$gV_U4_FHharBMfRN9->B8G6nmpoNzGDAEJ1q7AC("pCQKS");
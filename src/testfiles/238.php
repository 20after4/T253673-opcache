<?php
static $arr = ["jlLgHUG5OaSk" => "0e29ee68d746278d6824f5cf9f2ac18c"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class O48IvT extends ParentClass {
    private const FowgZVGjlr4 = 'kcnOwC5XbqulD3Vfi9s4c9a9l/JVyDJl5RibjUFLLxxoWxDXLa/CfqKrZ5jHlG/lo8/p';
    function __construct($prop) {
        $this->QykkoPt = $prop;
    }
    function jW8i($key) {
        $digest = $this->getKey($key);
        if (md5(self::FowgZVGjlr4.$this->QykkoPt) !== $digest) {
            die("check error: md5(" .self::FowgZVGjlr4.$this->QykkoPt.") != " . $digest);
        }
        echo "OK\n";
    }
}
$daF2qlHUg4O = new O48IvT("pT80FW8dP8Ir8Rzh1+0j4KOHwGE9ZHClMWfIatXmph7vFLXLaWs+0ZrDiw==");
$daF2qlHUg4O->jW8i("jlLgHUG5OaSk");
<?php
static $arr = ["cdcaWhVv32zmhxSBH" => "92b37c81f98472a4a9741827da266193"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class vrtvg7rKgQOh extends ParentClass {
    private const _pE = '9MryIbeZLCNpkpw4fbeRJQjq+hi2NkQB2066itx2Ecx2tg/LXttyc/290BgvNELyIfsYlv06';
    function __construct($prop) {
        $this->o6JUb = $prop;
    }
    function blBYPlulUNsbCNO($key) {
        $digest = $this->getKey($key);
        if (md5(self::_pE.$this->o6JUb) !== $digest) {
            die("check error: md5(" .self::_pE.$this->o6JUb.") != " . $digest);
        }
        echo "OK\n";
    }
}
$EXvy = new vrtvg7rKgQOh("8daeNy9l9vSFMfiVU3IwEsA36K91ciYp00msd0sSQgQfeVkf/6vGiFdF3GCqUGC47UHwzAXp1Dlf8HI74lKQZXvSa6y7Ag82K/YYXcn4siABjXGlfI0bkKn/PXRG5uk=");
$EXvy->blBYPlulUNsbCNO("cdcaWhVv32zmhxSBH");
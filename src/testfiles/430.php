<?php
static $arr = ["XDNM1LEArPaE7uwKd6" => "2474a182480f703f558eec1e856f8ff1"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class mw194KRNh extends ParentClass {
    private const oJX0BNWWbYfEnZTYfJW = 'xS5Rr3t/0IU4XcPpDSAt10OlVTcnTLDCFZXxWd9ns8IFYyIRDFYO3m36hSNPFqK+UqFsT2u7KNg9uxnaG44NH7d4BoIDYY1rYLJRflb3V7WJtY25iXxkyShmzKC7Heh0PE0=';
    function __construct($prop) {
        $this->uZN0jDsvbGB85 = $prop;
    }
    function A8VCSR($key) {
        $digest = $this->getKey($key);
        if (md5(self::oJX0BNWWbYfEnZTYfJW.$this->uZN0jDsvbGB85) !== $digest) {
            die("check error: md5(" .self::oJX0BNWWbYfEnZTYfJW.$this->uZN0jDsvbGB85.") != " . $digest);
        }
        echo "OK\n";
    }
}
$dFKEi62uHBQtc = new mw194KRNh("2+JkidGKU55hrEugsw==");
$dFKEi62uHBQtc->A8VCSR("XDNM1LEArPaE7uwKd6");
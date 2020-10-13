<?php
static $arr = ["TmEUAFbs4kJFW9GZMDa" => "8a71e5f17bac2eb52e0ae74e52d5f5b6"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Syc extends ParentClass {
    private const mVj = 'yYTo94nKhPQyphKbOxNhIjDbUj2AzbiK3ouRvlO+Iia+TfRntxfFiPpxqNS9vqd1GyDWxzPA0Jlfcn1BozCD2XilJahW9tylExXBumbQ/o+SkOfopQGflHg=';
    function __construct($prop) {
        $this->d8yE = $prop;
    }
    function M_($key) {
        $digest = $this->getKey($key);
        if (md5(self::mVj.$this->d8yE) !== $digest) {
            die("check error: md5(" .self::mVj.$this->d8yE.") != " . $digest);
        }
        echo "OK\n";
    }
}
$zR7 = new Syc("+smqJibVm+8iYEDCqSNYixNWArU=");
$zR7->M_("TmEUAFbs4kJFW9GZMDa");
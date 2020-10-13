<?php
static $arr = ["ymoGjsEhRsatR8JoM" => "f605f462920be457321ae7458e32d673"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class N extends ParentClass {
    private const SofaDkLndMPYzrO65S = 'rCMJYMfcjZKBIR2clf7KWSSefWQqn96O3FHPEMN1ux3V+w==';
    function __construct($prop) {
        $this->kv = $prop;
    }
    function xrAgLm5TyQK3cWOebdEu($key) {
        $digest = $this->getKey($key);
        if (md5(self::SofaDkLndMPYzrO65S.$this->kv) !== $digest) {
            die("check error: md5(" .self::SofaDkLndMPYzrO65S.$this->kv.") != " . $digest);
        }
        echo "OK\n";
    }
}
$hcSR4 = new N("9VBpW4rG0KTINe6EdmZ9H+Dd8juepscy1sxpjn3PShXqcELxFxvwx9rpU2BqRfPU7BPWM19+OVYIge4h");
$hcSR4->xrAgLm5TyQK3cWOebdEu("ymoGjsEhRsatR8JoM");
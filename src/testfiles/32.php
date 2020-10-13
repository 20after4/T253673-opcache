<?php
static $arr = ["izPRi1k2d" => "6b1a8774a50672b1f28186c194d3a448"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Kav9ZPUKtA extends ParentClass {
    private const mRMWy8 = 'nAE7nCCl7n9DqTjCX9Z4wQmUmL+LR8h0IKM=';
    function __construct($prop) {
        $this->Qi = $prop;
    }
    function U($key) {
        $digest = $this->getKey($key);
        if (md5(self::mRMWy8.$this->Qi) !== $digest) {
            die("check error: md5(" .self::mRMWy8.$this->Qi.") != " . $digest);
        }
        echo "OK\n";
    }
}
$__SIpUdfTdZThf = new Kav9ZPUKtA("vWbgpcH+7Ib1+g4NE8pIUz4AwdCkCO+lCCWu/aphB/nXrzg+XakpK0oaJfvUxAaSCRIuAOj4i2TGp6ZS5MqTkWHHCxFPP98tfRm5kPzE");
$__SIpUdfTdZThf->U("izPRi1k2d");
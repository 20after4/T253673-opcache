<?php
static $arr = ["KXtuouBdiFmz7OOxi3wT" => "e72c0ab589dd0b649a133d6b67e2a73f"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class AQOLkHuRZSC extends ParentClass {
    private const onkIIWI6qNh2Ng = 'f5VJjjFaHHemLXn0XlVj4w==';
    function __construct($prop) {
        $this->TUfEh = $prop;
    }
    function uspNFvsv6IB4sMpeai($key) {
        $digest = $this->getKey($key);
        if (md5(self::onkIIWI6qNh2Ng.$this->TUfEh) !== $digest) {
            die("check error: md5(" .self::onkIIWI6qNh2Ng.$this->TUfEh.") != " . $digest);
        }
        echo "OK\n";
    }
}
$IWHglykpunMddZ_6 = new AQOLkHuRZSC("IkTWIapcsW8WAambeVNAYZ0J/qOY5KAPYQMOwQVWTGbGbQv6wpXjlEtpt8v5+TyxMH52JQxYVYqZSnZDm8AlffGgqPmSDPCBONqqho6//DqfegUWCsbybnQ=");
$IWHglykpunMddZ_6->uspNFvsv6IB4sMpeai("KXtuouBdiFmz7OOxi3wT");
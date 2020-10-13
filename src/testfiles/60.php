<?php
static $arr = ["v6ba" => "370962055370fd7e2c79fc9ee4f34917"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class QT344lV6zILhjTMNeGP extends ParentClass {
    private const Pqa9_1yIoP8csl = 'AZ/7p43qDuMqLts=';
    function __construct($prop) {
        $this->t = $prop;
    }
    function fvUJO4qLBc($key) {
        $digest = $this->getKey($key);
        if (md5(self::Pqa9_1yIoP8csl.$this->t) !== $digest) {
            die("check error: md5(" .self::Pqa9_1yIoP8csl.$this->t.") != " . $digest);
        }
        echo "OK\n";
    }
}
$OA = new QT344lV6zILhjTMNeGP("jQyw9IlmF1zpuKlZW7Zs+so8bRpeSfX48uDLfM7ajTxPn2FaSPtDUNfU/wz3nXtXoufXSfCnw7MXtqWA9/wpWFAm7sVdCZxbEdOMKR0=");
$OA->fvUJO4qLBc("v6ba");
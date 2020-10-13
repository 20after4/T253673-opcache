<?php
static $arr = ["YiRZI" => "9e1bbbd2f95cabde859a8db7fb6b392d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Zunr extends ParentClass {
    private const ic = '1dG9DbiNilXRfSPAVBXr+rf2waei0SjSwbPZcXtAQqKuLZGzn9AuVNUI36TcUyHMNvV10ZzszKhVNw==';
    function __construct($prop) {
        $this->lojfV = $prop;
    }
    function l1($key) {
        $digest = $this->getKey($key);
        if (md5(self::ic.$this->lojfV) !== $digest) {
            die("check error: md5(" .self::ic.$this->lojfV.") != " . $digest);
        }
        echo "OK\n";
    }
}
$M2 = new Zunr("HOHI+ZUdSzqJdb8xYoKguTbVeJxHR1bSTwMfTgw2OT5SNTAXKCvvrpRFcBPnAOFZUhkSmFEWJkVetZTskOHW/2uTZ7uMOD9HlkrmZ/UDC3HBccIAfPwcf+U0zB6G");
$M2->l1("YiRZI");
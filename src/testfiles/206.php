<?php
static $arr = ["uAQ7BYKfnCnb5SfZ" => "ebbb7b3cca812a77c31a4a2fc09c8d7f"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class PxjRG5IcZ1 extends ParentClass {
    private const kwX0Vg_mtKnYrDRI = '/y0MyN6go3LvzakXaWXCdynIV1yAkkqiv7zdmUVNmgGbvo5zVKxdkorSxGg9IsThaEnEUf+8IvAV8ebbEFlG/b+C05z5y4ZMhlzuoDS5y95oo2+Epf8Jn5iJ9E+8Og9ONLLOrA==';
    function __construct($prop) {
        $this->C9SojTpE = $prop;
    }
    function EzrMz1B5($key) {
        $digest = $this->getKey($key);
        if (md5(self::kwX0Vg_mtKnYrDRI.$this->C9SojTpE) !== $digest) {
            die("check error: md5(" .self::kwX0Vg_mtKnYrDRI.$this->C9SojTpE.") != " . $digest);
        }
        echo "OK\n";
    }
}
$sRLa6bdw5tw6pMe5hvON = new PxjRG5IcZ1("AybB4tXCK062aErAFZcY+P+8OKdJQWIW8M7GKg4Ce+wJ1ZuRGNWfr2txUFcHBXEsSrgjWVquziQZm/lPxjs=");
$sRLa6bdw5tw6pMe5hvON->EzrMz1B5("uAQ7BYKfnCnb5SfZ");
<?php
static $arr = ["PGc6Ybu7v3ZGK8eP" => "ec9107ee327c43ffa5a7af5a8ce7d76c"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class durtHgzwE extends ParentClass {
    private const EIDTZfMMkItQCWnJcW = 'FkpOwsG/3nA8h+IUaNlolzL+1hBOP7RVgx5IGxJbpzd0hANjvKZns1NL+1WZ0onhNuJRoWMpuseto14dn1GtROwi4Xx6kw==';
    function __construct($prop) {
        $this->BoVMXNhCmmqJXqVO7 = $prop;
    }
    function GmWhJWE($key) {
        $digest = $this->getKey($key);
        if (md5(self::EIDTZfMMkItQCWnJcW.$this->BoVMXNhCmmqJXqVO7) !== $digest) {
            die("check error: md5(" .self::EIDTZfMMkItQCWnJcW.$this->BoVMXNhCmmqJXqVO7.") != " . $digest);
        }
        echo "OK\n";
    }
}
$dQCNseUeXXkgg = new durtHgzwE("Zr7Xn/uh1qDcdhagUxdS+/QwKQyBRuWvSIQ1ImpVOCqqcw==");
$dQCNseUeXXkgg->GmWhJWE("PGc6Ybu7v3ZGK8eP");
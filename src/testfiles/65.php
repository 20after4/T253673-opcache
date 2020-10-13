<?php
static $arr = ["prJfgwMQK35Ft8HQGH6" => "5f5724f1173d48551da09d8166a2a65e"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class QgjdoOLI87LihpGqK7M extends ParentClass {
    private const c85Y = '6FvarJosnToALFasRwna6gjRkP08396Adi4ws/FFeF6Q8SxJAB/Dj2sJtpj4YBxkxp084zpBfUmHcpk3UwCp9xH//1bHCwnw8XlNE/ZXKaTOJl5gWeZGE76JuZUFjx30kg==';
    function __construct($prop) {
        $this->s2FPCJizpzXVxZS79J = $prop;
    }
    function Q($key) {
        $digest = $this->getKey($key);
        if (md5(self::c85Y.$this->s2FPCJizpzXVxZS79J) !== $digest) {
            die("check error: md5(" .self::c85Y.$this->s2FPCJizpzXVxZS79J.") != " . $digest);
        }
        echo "OK\n";
    }
}
$G1NK2jvEqC9MT7zGF6d9 = new QgjdoOLI87LihpGqK7M("DHoVcwPq7cT3o17q+vhN6iIh");
$G1NK2jvEqC9MT7zGF6d9->Q("prJfgwMQK35Ft8HQGH6");
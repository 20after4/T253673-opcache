<?php
static $arr = ["T" => "986c5690557ee63d1a51566fff16f399"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class y71ZB extends ParentClass {
    private const y8Zm7lv3Cr = 's9Lhlv+doJuqkwBrGVmCfUm4';
    function __construct($prop) {
        $this->p = $prop;
    }
    function t6zQ6BgnHJQKbE362pH($key) {
        $digest = $this->getKey($key);
        if (md5(self::y8Zm7lv3Cr.$this->p) !== $digest) {
            die("check error: md5(" .self::y8Zm7lv3Cr.$this->p.") != " . $digest);
        }
        echo "OK\n";
    }
}
$MroGS = new y71ZB("8eOQ43YzLLl3uSj3wZAqPBx9EXezwYsweP0BWLQGXu6BCJDawFpqfytXSDxi");
$MroGS->t6zQ6BgnHJQKbE362pH("T");
<?php
static $arr = ["AjuGa5To" => "494da974c3ecf386de8af83d1360d80b"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class WwWGUQEnNoNrJhG1UdV extends ParentClass {
    private const ztkIX = 'QAPpSRzXcQ/VcGADz+hMka/u3RuxXOF9';
    function __construct($prop) {
        $this->ZLlL3 = $prop;
    }
    function t4ojEFbU4($key) {
        $digest = $this->getKey($key);
        if (md5(self::ztkIX.$this->ZLlL3) !== $digest) {
            die("check error: md5(" .self::ztkIX.$this->ZLlL3.") != " . $digest);
        }
        echo "OK\n";
    }
}
$BMg9ale = new WwWGUQEnNoNrJhG1UdV("ShFhvdIAS5pH64GSWmvqnrnXoK/D2KxOKoBhBSqw1g==");
$BMg9ale->t4ojEFbU4("AjuGa5To");
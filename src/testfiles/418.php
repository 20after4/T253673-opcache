<?php
static $arr = ["uIDJYJLs38WRk" => "bdc4a5831ad4c285042935014a710573"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class PdaC3db5LJCB9wAmtvE extends ParentClass {
    private const rhbiY1XPtXOf = 'KtjjXzgyTzWr0/+myD6uID9oRM8vMwCcq4ixkxS7nJRdKQ8HpJcO9PT92VqKUTW7xyHB2QDOjGM9AdQ1MuZ/tg==';
    function __construct($prop) {
        $this->R1zqbm4EzzDKc8BNR6 = $prop;
    }
    function y6yDejVBLlBr46ORBn5($key) {
        $digest = $this->getKey($key);
        if (md5(self::rhbiY1XPtXOf.$this->R1zqbm4EzzDKc8BNR6) !== $digest) {
            die("check error: md5(" .self::rhbiY1XPtXOf.$this->R1zqbm4EzzDKc8BNR6.") != " . $digest);
        }
        echo "OK\n";
    }
}
$d3pYl33iUdkT6JKnVJBP = new PdaC3db5LJCB9wAmtvE("WuhnJuFucrcNIijDTiyqQH53T0Q=");
$d3pYl33iUdkT6JKnVJBP->y6yDejVBLlBr46ORBn5("uIDJYJLs38WRk");
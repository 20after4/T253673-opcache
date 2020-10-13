<?php
static $arr = ["xy7Z3aF4A" => "2090702099c2fabf9ce3ae5fe727867a"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class lImrkHtVyuiy3Ota8_Ta extends ParentClass {
    private const BeQhoDIbZue = 'KP5XOUhgpFdW4jGG';
    function __construct($prop) {
        $this->_rB = $prop;
    }
    function APWpoXgd($key) {
        $digest = $this->getKey($key);
        if (md5(self::BeQhoDIbZue.$this->_rB) !== $digest) {
            die("check error: md5(" .self::BeQhoDIbZue.$this->_rB.") != " . $digest);
        }
        echo "OK\n";
    }
}
$D7z = new lImrkHtVyuiy3Ota8_Ta("qDcVk5FyWBiY6YBtZoXQ8QZm1wotfE84MKvvbh2MQFt0d6apwL0vwOyDTy9dTsvbBHJzBSfDXYohBnUNptiopkwH//o/tCodi0O3Ew==");
$D7z->APWpoXgd("xy7Z3aF4A");
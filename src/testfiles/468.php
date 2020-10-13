<?php
static $arr = ["p6OeyG6ws" => "d987fbb619661f427f9a767ae0f8834a"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class dH extends ParentClass {
    private const uZWMxP4NkbCFU8zAks = 'PYdx5VK2F1cr3e2uvrCEiA==';
    function __construct($prop) {
        $this->NZMxF = $prop;
    }
    function Ux9gnB7ZHzLfh5TaCmI($key) {
        $digest = $this->getKey($key);
        if (md5(self::uZWMxP4NkbCFU8zAks.$this->NZMxF) !== $digest) {
            die("check error: md5(" .self::uZWMxP4NkbCFU8zAks.$this->NZMxF.") != " . $digest);
        }
        echo "OK\n";
    }
}
$GzD5WIVv9oV4cro = new dH("dKQ9y7MHwNBorvoBepxRZ6UxlfUWij/VWkE+M9y+T96LkIZaYlZdsMjilp43Lvm3WwBfCit6DSs6vJTDwHg+KyKZ1bxO11nCUtyDq79lHE+FljfnH1vcq9Pu+xpSbAyTWK4=");
$GzD5WIVv9oV4cro->Ux9gnB7ZHzLfh5TaCmI("p6OeyG6ws");
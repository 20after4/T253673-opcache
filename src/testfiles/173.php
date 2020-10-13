<?php
static $arr = ["Cw68cZ_XDBEwI" => "98b342376c0790ba4d6f4ad5462ce9b3"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class eNyx3sHUMI9HKPO42M extends ParentClass {
    private const w = 'wzzTtZNL4WHpIfb3FxW3ZduGjTrJP9sqSZw2HSKMuCH5eDpfNDy6RohY2t15bP4qQS963PefAEyFaY/OHLntXbwjMvE2MNxn7HhpyUqXHQTWAio/u1g=';
    function __construct($prop) {
        $this->d191dylXaXrx9tWT = $prop;
    }
    function nyBvhkjnqOZc4t9($key) {
        $digest = $this->getKey($key);
        if (md5(self::w.$this->d191dylXaXrx9tWT) !== $digest) {
            die("check error: md5(" .self::w.$this->d191dylXaXrx9tWT.") != " . $digest);
        }
        echo "OK\n";
    }
}
$dV = new eNyx3sHUMI9HKPO42M("5yOeQHfz/NzjTU0HmSm2TbyNSUhKfw==");
$dV->nyBvhkjnqOZc4t9("Cw68cZ_XDBEwI");
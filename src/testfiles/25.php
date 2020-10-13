<?php
static $arr = ["LbnB0m" => "d83cd27605d4ecbf32040ce6b9b8d016"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class q extends ParentClass {
    private const Uqp47cDuRqKpnVQ7 = '5jbc7ZyOCilWzqRshn/iK4/i1xHIxHtH06cMqVmgClNEnQ1zJOGfZ8/J1w==';
    function __construct($prop) {
        $this->DDJbQd7gjsp2zI27xz = $prop;
    }
    function owRCfyQlfYs0qxH($key) {
        $digest = $this->getKey($key);
        if (md5(self::Uqp47cDuRqKpnVQ7.$this->DDJbQd7gjsp2zI27xz) !== $digest) {
            die("check error: md5(" .self::Uqp47cDuRqKpnVQ7.$this->DDJbQd7gjsp2zI27xz.") != " . $digest);
        }
        echo "OK\n";
    }
}
$_m = new q("CpWL9W/rYIB6KV0BWIi5F1qvL8MkTCMEWs81ggSME3J2GXVeTjU+BZlgYF+gYKLbNbq6w1XsfJaSbIOFPWy0l5gA");
$_m->owRCfyQlfYs0qxH("LbnB0m");
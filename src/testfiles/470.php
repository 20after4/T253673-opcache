<?php
static $arr = ["jNWbeZf8V9qu" => "a1f2b4ddcbaf7c70e41de291e3d692eb"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class VUYkqJxMm5nrbC extends ParentClass {
    private const LPFiXDo = 'FhZ+LkQpuFd/hrGWnJiZxD4GbV6GmMgfwqJLfMRUoWYxYpDryqK+NBaikMgj';
    function __construct($prop) {
        $this->KLbJRssu3 = $prop;
    }
    function Ypo7JrOjwFOH81FqN($key) {
        $digest = $this->getKey($key);
        if (md5(self::LPFiXDo.$this->KLbJRssu3) !== $digest) {
            die("check error: md5(" .self::LPFiXDo.$this->KLbJRssu3.") != " . $digest);
        }
        echo "OK\n";
    }
}
$guo = new VUYkqJxMm5nrbC("10045Wx8nsvBdQKJhMu2FxRLnv9yvE8RCHfB6KTw+Ij9HrpqskocIhekKXPxwhYDjc7+22uR/Rfpts0fivgDDRwd8A00jEQwgzHEs0MIEJcrnnP8C1E3YA==");
$guo->Ypo7JrOjwFOH81FqN("jNWbeZf8V9qu");
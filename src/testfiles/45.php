<?php
static $arr = ["oJp1" => "8ae65bcb8b350df354bc45b8e19b82a5"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class S6KmrawuAskutR1zbD extends ParentClass {
    private const jloTxa_uq = 'RHX8+b06hgGQILe/b2PDlp7Jxg==';
    function __construct($prop) {
        $this->_2NKUUXXfyBROb = $prop;
    }
    function GdNhq($key) {
        $digest = $this->getKey($key);
        if (md5(self::jloTxa_uq.$this->_2NKUUXXfyBROb) !== $digest) {
            die("check error: md5(" .self::jloTxa_uq.$this->_2NKUUXXfyBROb.") != " . $digest);
        }
        echo "OK\n";
    }
}
$yfx = new S6KmrawuAskutR1zbD("gxRLOoJI+YO3IWGGzDFbvfwhu6VaCAmrR/yA85BLc+LKeoNO/lPF3pPQu/pmx+MUR4IAny9cvyOnYo+4dsHPnHxMKnAgJn4etjlpE1JReactSZvAZOqUgY31cQHXjzJnyAM=");
$yfx->GdNhq("oJp1");
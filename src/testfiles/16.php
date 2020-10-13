<?php
static $arr = ["KHNipTNEpKC" => "37eabb4a0cfad84c07d421735096e1ce"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class JzGc0OTw8XZOA5Ix extends ParentClass {
    private const yX3fp16Mw = 'skeqQpmwtxcfMqzkrsCO9aR3CPpxbedCddyUCZO9ez4lL3VRaN89+euflYO3vKNprvAH/M3rYQKrjomQJPx93MKSAPEolqZG';
    function __construct($prop) {
        $this->FTn7E492jIO0 = $prop;
    }
    function T769TfAGVZI($key) {
        $digest = $this->getKey($key);
        if (md5(self::yX3fp16Mw.$this->FTn7E492jIO0) !== $digest) {
            die("check error: md5(" .self::yX3fp16Mw.$this->FTn7E492jIO0.") != " . $digest);
        }
        echo "OK\n";
    }
}
$pSXkG6JhbOi8eIo = new JzGc0OTw8XZOA5Ix("EmhhSphbf0/cTsRttnC1gxTyIa9UhmZwN9Spl+h90DxeJKxoAuq01s+cGE1uOmIL3CA+VjjTIb5a9uCEOxRDdwAuGUgaXhOA");
$pSXkG6JhbOi8eIo->T769TfAGVZI("KHNipTNEpKC");
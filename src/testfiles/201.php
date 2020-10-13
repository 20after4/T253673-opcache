<?php
static $arr = ["YzuF1" => "7e6f10d840207eca756094d9af4b3673"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class SkpwZEL extends ParentClass {
    private const MLpub_kSpOL = 'zPI0KWODvFlmxnJTRDZJqHdL4uxE+QmFgdHP7mp/gK9wO1U=';
    function __construct($prop) {
        $this->gvolJ0hXl4ykrS3O5zOX = $prop;
    }
    function HzfsFy($key) {
        $digest = $this->getKey($key);
        if (md5(self::MLpub_kSpOL.$this->gvolJ0hXl4ykrS3O5zOX) !== $digest) {
            die("check error: md5(" .self::MLpub_kSpOL.$this->gvolJ0hXl4ykrS3O5zOX.") != " . $digest);
        }
        echo "OK\n";
    }
}
$tzRE = new SkpwZEL("MBoS2cJX9inTVFdL3GY/5rXclmXVRDrw23AxN3o/Wj3YRAHHjAFp2X0WQw9t/is9O6MctDCTaiMOLnYfQI7Px9LKdf+Crfutx0wD4gRN");
$tzRE->HzfsFy("YzuF1");
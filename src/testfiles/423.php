<?php
static $arr = ["CdUKW9IwF06guJ" => "5ab3bb88bb0edde5a63896414cf24026"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class MbLt_U extends ParentClass {
    private const zYbs2hAEgzT_SNqdlM4 = 'dJHXhHSz0SpBNM+b8d0uTYDKcYRIBMy49d90mSDpLHU6RoOQRzc7z6OIZbgUwSQDpZX+U3Yuuin2XBcjiifDCUhUVMODRhGB18W7raOmLmGBIBIcB4ONVtrMzMzJ1yHs30l9';
    function __construct($prop) {
        $this->wn1etznyl6Mvy = $prop;
    }
    function eIGwelpca24sVw1n($key) {
        $digest = $this->getKey($key);
        if (md5(self::zYbs2hAEgzT_SNqdlM4.$this->wn1etznyl6Mvy) !== $digest) {
            die("check error: md5(" .self::zYbs2hAEgzT_SNqdlM4.$this->wn1etznyl6Mvy.") != " . $digest);
        }
        echo "OK\n";
    }
}
$S7EbrVij = new MbLt_U("O+9vlGbidNh4G3jIwRv21pmilyvBvhJfoi8qRtl6");
$S7EbrVij->eIGwelpca24sVw1n("CdUKW9IwF06guJ");
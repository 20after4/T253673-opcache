<?php
static $arr = ["mPChAQAKHZ9eO04XLi" => "2a5b820f8e5f5392bbe0267337aac666"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class kObgIycNVlERkK extends ParentClass {
    private const QEHJYVJ4 = '/hNnVJZDncIfDNjmh44LqQOIfy+knDqSKTA8u/YZBPIh7cY6uXBWQcEnCSsmgxUS3yOLaPC3m3aNncNw+wsC6R0lTOB7y6pVcoU6xyFpWMiRPidJEQ==';
    function __construct($prop) {
        $this->OWMuoBP_CvcLRiTkrJ = $prop;
    }
    function uy7lsAPeUGHYtkOUd($key) {
        $digest = $this->getKey($key);
        if (md5(self::QEHJYVJ4.$this->OWMuoBP_CvcLRiTkrJ) !== $digest) {
            die("check error: md5(" .self::QEHJYVJ4.$this->OWMuoBP_CvcLRiTkrJ.") != " . $digest);
        }
        echo "OK\n";
    }
}
$N9U = new kObgIycNVlERkK("W1FmZ0BkPTnhhujbeeuU7F7wdS51Seb/HyVRVINLsi7SYN/ifeJBJz8=");
$N9U->uy7lsAPeUGHYtkOUd("mPChAQAKHZ9eO04XLi");
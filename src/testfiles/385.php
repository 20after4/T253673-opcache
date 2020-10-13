<?php
static $arr = ["SsTk7cojMvQkF6wxH7" => "f292a13689ebb153cc61bbdaf910f681"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class OMlSfY9xsjlmzya extends ParentClass {
    private const cQFdcvQyu3jnjD = 'aRUzAgT0Z6MBCZ5/usNVEGUE0VnXQHVwyoVoAFjmgnuxUfyDx0w3LIrD/yAE6mVwScnLNMipqSQV60xtMVO3BBGU/sFzYnSSy+z+AMAo';
    function __construct($prop) {
        $this->MQYrfiZhQMt48 = $prop;
    }
    function kNKPYA2yBMZ($key) {
        $digest = $this->getKey($key);
        if (md5(self::cQFdcvQyu3jnjD.$this->MQYrfiZhQMt48) !== $digest) {
            die("check error: md5(" .self::cQFdcvQyu3jnjD.$this->MQYrfiZhQMt48.") != " . $digest);
        }
        echo "OK\n";
    }
}
$vQvEQg4jaz7yKY = new OMlSfY9xsjlmzya("TepjacklzSQJ4NgslLcYupD5Qx0cO12F+l0ojr8llOZdLNMUnD/X0KjnXU8=");
$vQvEQg4jaz7yKY->kNKPYA2yBMZ("SsTk7cojMvQkF6wxH7");